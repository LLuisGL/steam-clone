<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImagenesController extends Controller
{
    public function subir(Request $request)
    {
        $request->validate([
            'imagen' => 'required|image|max:2048'
        ]);

        $imagen = $request->file('imagen');
        $carpeta = 'imagenes/' . now()->format('Y-m-d') . '-' . Str::random(8);
        $ruta = $imagen->store($carpeta, 'public');
        $url = Storage::url($ruta);

        return response()->json([
            'path' => $ruta,
            'url' => $url
        ]);
    }
}
