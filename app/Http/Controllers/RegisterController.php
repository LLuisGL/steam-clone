<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
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
        $validated = $request->validated();
        $user = User::create($validated);
        return redirect('/login')->with('Succes','La cuenta ha sido creada exitosamente');
    }
}
