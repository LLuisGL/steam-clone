<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarroItem extends Model
{
    use HasFactory;
    protected $table = 'carro_items';

    protected $fillable = ['id_carro', 'id_juego', 'cantidad', 'precio'];

    public function carro()
    {
        return $this->belongsTo(Carro::class, 'id_carro');
    }

    public function juego()
    {
        return $this->belongsTo(Juegos::class, 'id_juego');
    }
}
