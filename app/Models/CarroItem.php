<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarroItem extends Model
{
    use HasFactory;
    protected $table = 'carro_items';
    public $timestamps = false;

    protected $fillable = ['id_carro', 'id_juego'];

    public function carro()
    {
        return $this->belongsTo(Carro::class, 'id_carro');
    }

    public function juego()
    {
        return $this->belongsTo(Juegos::class, 'id_juego');
    }
}
