<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Juegos;
use App\Models\Plataformas;
use App\Models\Tags;

class JuegosController extends Controller
{
    public function show(){
        //HEADER
        $juego = DB::table('juegos as j')
        ->select('j.nombre_juego','j.precio_normal', 'j.precio_oferta', 'j.id')
        ->get();
        $plataformas = DB::table('plataformas__por__juegos as ppj')
        ->join('plataformas as p', 'p.id',"=","ppj.id_plataforma")
        ->where('ppj.id_juego', $juego[0]->id)
        ->select('p.url_imagen')
        ->get();
        $imagen_principal = DB::table('imagenes as i')
        ->where('i.id_juego', $juego[0]->id)
        ->where('i.tag', 'priority')
        ->select('i.url')
        ->get();
        $imagenes_secundarias = DB::table('imagenes as i')
        ->where('i.id_juego', $juego[0]->id)
        ->where('i.tag', '!=', 'priority')
        ->select('i.url')
        ->get();

        //JUEGOS

        $juegos = Juegos::with([
            'plataformas',
            'tags',
            'imagenes' => function ($query) {
                $query->where('tag', 'priority');
            }
        ])->get();



        return view('home',['informacion'=>$juego, 'img_principal'=>$imagen_principal,'imgs_secundarias'=>$imagenes_secundarias, 'plataformas'=>$plataformas, 'juegos'=>$juegos]);
    }

    public function index(){
        $juegos = Juegos::with([
            'plataformas',
            'tags',
            'imagenes' => function ($query) {
                $query->where('tag', 'priority');
            }
        ])->get();
        return view('index', ['juegos'=>$juegos]);
    }

    public function eliminar($id){
        $item = Juegos::find($id);
        $item->delete();
        return redirect()->back()->with('Bien', 'Juego eliminado');
    }

    public function guardar(Request $request)
    {
        $request->validate([
            'nombreJuego' => 'required|string|max:255',
            'descripcionJuego' => 'required|string',
            'precioNormal' => 'required|numeric',
            'precioOferta' => 'required|numeric',
            'tags' => 'array',
            'plataformas' => 'array',
            'rutas_imagenes' => 'required'
        ]);

        $rutas = json_decode($request->input('rutas_imagenes'), true);

        $juego = new Juegos();
        $juego->nombre_juego = $request->input('nombreJuego');
        $juego->descripcion_juego = $request->input('descripcionJuego');
        $juego->precio_oferta = $request->input('precioOferta');
        $juego->precio_normal = $request->input('precioNormal');
        $juego->save();

        foreach ($rutas as $index => $ruta) {
            $juego->imagenes()->create([
                'url' => $ruta,
                'tag' => $index === 0 ? 'priority' : 'secondary'
            ]);
        }

        $tags = $request->input('tags');
        $plataformas = $request->input('plataformas');

        foreach (explode(",",$tags[0]) as $tag) {
            DB::table('tags__por__juegos')->insert([
                'id_juego' => $juego->id,
                'id_tag' => $tag
            ]);
        }

        
        foreach (explode(",",$plataformas[0]) as $plataforma) {
            DB::table('plataformas__por__juegos')->insert([
                'id_juego' => $juego->id,
                'id_plataforma' => $plataforma
            ]);
        }
        
        

        return redirect()->route('home')->with('success', 'Juego creado con éxito');
    }

    public function editar($id){
        $juegoToEdit = Juegos::find($id);
        $plataformas = Plataformas::all();
        $tags = Tags::all();
        return view('edit', ['plataformas'=>$plataformas, 'tags'=>$tags, 'juego' => $juegoToEdit]);
    }

    public function actualizar(Request $request, $id)
    {
        $request->validate([
            'nombreJuego' => 'required|string|max:255',
            'descripcionJuego' => 'nullable|string',
            'precioNormal' => 'required|numeric',
            'precioOferta' => 'nullable|numeric',
            'tags' => 'array',
            'plataformas' => 'array',
        ]);

        $juego = Juegos::find($id);

        $juego->nombre_juego = $request->input('nombreJuego');
        $juego->descripcion_juego = $request->input('descripcionJuego');
        $juego->precio_normal = $request->input('precioNormal');
        $juego->precio_oferta = $request->input('precioOferta');
        $juego->save();

        $tags = $request->input('tags');
        $plataformas = $request->input('plataformas');
        $juego->tags()->sync(explode(",", $tags[0]));
        
        $juego->plataformas()->sync(explode(",", $plataformas[0]));

        return redirect()->route('home')->with('success', 'actualizado con éxito.');
    }
}
