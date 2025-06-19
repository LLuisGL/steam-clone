<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tags;
use App\Models\Plataformas;

class CrudController extends Controller
{
    public function index(){
        $plataformas = Plataformas::all();
        $tags = Tags::all();
        return view("crud", ['plataformas'=>$plataformas, 'tags'=>$tags]);
    }
}
