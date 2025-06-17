<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JuegosController extends Controller
{
    public function index(){
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

        return view('home',['informacion'=>$juego, 'img_principal'=>$imagen_principal,'imgs_secundarias'=>$imagenes_secundarias, 'plataformas'=>$plataformas]);
    }
}
