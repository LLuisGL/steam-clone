<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(Request $request){
        
        $request->validate([
            'name' => 'required|string|max:30|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user= new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);
        return redirect(route('home'));
    }

    public function login(Request $request){
        
         $request->validate([
        'name' => 'required|string|max:255',
        'password' => 'required|string|min:8',
        ]);

        $credentials = $request->only('name', 'password');
        $remember = ($request->has('remember')? true:false);

        if(Auth::attempt($credentials,$remember)){

            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        }
        return back()->withErrors([
            'login_error' => 'El nombre de usuario no existe',
        ])->withInput();
    }

    public function logout(Request $request){
        Auth::logout();
        $request->sesion()->invalidate();
        $request->sesion()->regenerateToken();
        return redirect(route('home'));
    }
}
