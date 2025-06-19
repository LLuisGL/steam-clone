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
                return view('shop\shopCar',[
                    'carro' =>$carroUser,
                    'items'=>$carroUser->items,
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
    public function destroy($id){
        $item = carroItem::findOrFail($id);
        $item->delete();
        return redirect()->back()->with('success', 'Juego eliminado del carrito');
    }



}
