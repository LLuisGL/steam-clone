<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagenes extends Model
{
    use HasFactory;

    protected $table = 'imagenes';
    
    protected $fillable = ['url', 'tag'];

    public function juego()
    {
        return $this->belongsTo(Juego::class, 'id_juego');
    }
}
