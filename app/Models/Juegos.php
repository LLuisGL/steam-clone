<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juegos extends Model
{
    use HasFactory;

    protected $table = 'juegos';

    public function imagenes()
    {
        return $this->hasMany(Imagen::class, 'id_juego');
    }

    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class, 'juegos_por_usuario', 'id_juego', 'id_usuario')
                    ->withPivot('favorito');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tags_por_juego', 'id_juego', 'id_tag');
    }

    public function plataformas()
    {
        return $this->belongsToMany(Plataforma::class, 'plataformas_por_juego', 'id_juego', 'id_plataforma');
    }
}
