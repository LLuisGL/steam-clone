<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plataformas extends Model
{
    use HasFactory;

    protected $table = 'plataformas';

    public function juegos()
    {
        return $this->belongsToMany(Juego::class, 'plataformas_por_juego', 'id_plataforma', 'id_juego');
    }
}
