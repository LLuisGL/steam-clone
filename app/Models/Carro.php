<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;
    protected $table = 'carros';
    protected $fillable = ['id_usuario'];
    public $timestamps = false;

    public function items()
    {
        return $this->hasMany(CarroItem::class,'id_carro');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }
}
