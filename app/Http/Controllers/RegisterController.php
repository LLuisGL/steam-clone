<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Carro;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //
    public function show(){
        if(Auth::check()){
            return redirect('/');
        }
        return view('Auth.register');
    }

    public function register(RegisterRequest $request){
        
        $validated = $request->getCredential();
        $user = User::create($validated);
        Carro::create([
            'id_usuario' => $user->id
        ]);
        return redirect('/login')->with('Succes','La cuenta ha sido creada exitosamente');
    }
}
