<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Juegos;
use App\Models\Juegos_Por_Usuario;
use Illuminate\Http\Request;

class inventarioController extends Controller
{
    public function show(){
        if(Auth::check()){
            $usuario = auth()->user();
            $juegos = $usuario->juegos;
            return view('/inventario',compact('juegos'));
        }
        return back();
    }

    public function comprar(Request $request)
{
    $user = Auth::user();
    $carro = $user->carro;

    if (!$carro || $carro->items->isEmpty()) {
        return redirect()->back()->with('error', 'El carrito está vacío.');
    }

    foreach ($carro->items as $item) {
        Juegos_Por_Usuario::create([
            'id_usuario' => $user->id,
            'id_juego' => $item->id_juego,
        ]);

        $item->delete();
    }

    return redirect()->route('home')->with('Bien', 'Compra realizada exitosamente.');
}
}
