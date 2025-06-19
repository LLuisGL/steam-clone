<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    protected $table = 'tags';

    public function juegos()
    {
        return $this->belongsToMany(Juego::class, 'tags__por__juegos', 'id_tag', 'id_juego');
    }
}
