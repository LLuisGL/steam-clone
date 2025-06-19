<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juegos_Por_Usuario extends Model
{
    use HasFactory;
    protected $table = 'juegos__por__usuarios'; 

    protected $fillable = [
        'id_usuario',
        'id_juego',
    ];
}
