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
        return $this->hasMany(Imagenes::class, 'id_juego');
    }

    public function usuarios()
    {
        return $this->belongsToMany(Users::class, 'juegos__por__usuarios', 'id_juego', 'id_usuario');
    }

    public function tags()
    {
        return $this->belongsToMany(Tags::class, 'tags__por__juegos', 'id_juego', 'id_tag');
    }

    public function plataformas()
    {
        return $this->belongsToMany(Plataformas::class, 'plataformas__por__juegos', 'id_juego', 'id_plataforma');
    }

    public function carroItems()
    {
    return $this->hasMany(CarroItem::class, 'id_juego');
    }

    public function getDescuento(){
        if ($this->precio_normal > 0 && $this-> precio_oferta >0) {
                return round((($this->precio_normal - $this->precio_oferta) / $this->precio_normal) * 100);
        }
        return 0;
    }

    public function getValorJuego(){
        if ($this->precio_oferta > 0 && $this->precio_oferta < $this->precio_normal) {
            return $this->precio_oferta;
        }
        return $this->precio_normal;
    }
}
