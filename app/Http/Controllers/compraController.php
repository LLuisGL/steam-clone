<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Juegos;
use App\Models\Carro;
use App\Models\CarroItem;
use Illuminate\Support\Facades\Auth;

class compraController extends Controller
{
    public function show(){
        if(Auth::check()){
            $user = Auth::user();
            $carroUser = Carro::with(['items.juego'])->where('id_usuario', $user->id)->first();

            if($carroUser){

                $total = $carroUser->items->sum(function ($item) {
                    return $item->juego->getValorJuego();
                });
                

                return view('shop.shopCar',[
                    'carro' =>$carroUser,
                    'items'=>$carroUser->items,
                    'total'=>$total
                ]);
            }
            else {
                return view('shop.shopCar', [
                    'carro' => null,
                    'items' => []
                ]);
            }
        }
            return back();
    }

    public function agregar(Request $request){
        $request->validate([
        'id_juego' => 'required|exists:juegos,id',
        ]);

        if (Auth::check()) {
            $usuario = Auth::user();
            $id_juego= $request->input('id_juego');
            
            if($usuario->carro != null){
                $carro = $usuario->carro;
            }else{
                return redirect()->back()->with('Error', 'No se encontró un carro para este usuario.');
            }
        
            $existe = carroItem::where('id_carro', $carro->id)
                        ->where('id_juego', $id_juego)
                        ->exists();

            if($existe){
                return redirect()->back()->with('Error', 'El juego ya está en el carrito.');
            }

            $yaComprado = $usuario->juegos()->where('id_juego', $id_juego)->exists();

            if ($yaComprado) {
            return redirect()->back()->with('Error', 'Ya tienes este juego en tu biblioteca.');
            }

            carroItem::create([
            'id_carro' => $carro->id,
            'id_juego' => $id_juego,
            ]);
            return redirect()->back()->with('Bien', 'Juego agregado al carrito.');
        }

        return redirect()->back()->with('Error', 'No estas autenticado');
    }

    public function destroy($id){
        $item = carroItem::findOrFail($id);
        $item->delete();
        return redirect()->back()->with('Bien', 'Juego eliminado del carrito');
    }
}
