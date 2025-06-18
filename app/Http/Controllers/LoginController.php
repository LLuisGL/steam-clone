<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        if(Auth::check()){
            return redirect('/');
        }
        return view('Auth.login');
    }

    public function login(LoginRequest $request){

        $credentials = $request->getCredential();
       
        if(!Auth::validate($credentials)){

            return back()->withErrors([
                'login_error' => 'Las credenciales estan incorrectas',
            ])->withInput();
        } 
                
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);

        return $this->autenticated($request,$user);
    }

    public function autenticated(Request $request,$user){
        $esAdmin= $user->isAdmin();
        session(['es_admin'=> $esAdmin]);
        return redirect('/');
    }
}
