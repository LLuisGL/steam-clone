<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Juegos;

class ImagenesController extends Controller
{
    public function subir(Request $request)
    {
        $request->validate([
            'imagen' => 'required|image|max:2048'
        ]);

        $maxId = Juegos::max('id');

        $imagen = $request->file('imagen');
        $carpeta = 'imagenes/' . $maxId;
        $ruta = $imagen->store($carpeta, 'public');
        $url = Storage::url($ruta);

        return response()->json([
            'path' => $ruta,
            'url' => $url
        ]);
    }
}
