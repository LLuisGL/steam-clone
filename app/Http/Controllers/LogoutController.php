<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function Logout(){
        Session::flush(); //libera el flujo de sesiones
        Auth::Logout();

        return redirect()->to('/login');
    }
}
