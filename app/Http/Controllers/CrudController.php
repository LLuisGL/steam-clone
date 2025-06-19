<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Tags;
use App\Models\Plataformas;

class CrudController extends Controller
{
    public function index(){
        $user= Auth::user();
        if(Auth::check() && $user->isAdmin() ){
        
            $plataformas = Plataformas::all();
            $tags = Tags::all();
            return view("crud", ['plataformas'=>$plataformas, 'tags'=>$tags]);   
        }
        return redirect()->back()->with('Error', 'No tienes permiso para ingresar');
    }
}
