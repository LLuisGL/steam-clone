<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plataformas_Por_Juego;

class PlataformasPorJuegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plataformas_Por_Juego::create([
            'id_plataforma' => 2,
            'id_juego' => 1,
        ]);

        Plataformas_Por_Juego::create([
            'id_plataforma' => 1,
            'id_juego' => 2,
        ]);
        
        Plataformas_Por_Juego::create([
            'id_plataforma' => 2,
            'id_juego' => 2,
        ]);

        Plataformas_Por_Juego::create([
            'id_plataforma' => 3,
            'id_juego' => 2,
        ]);

        Plataformas_Por_Juego::create([
            'id_plataforma' => 1,
            'id_juego' => 3,
        ]);

        Plataformas_Por_Juego::create([
            'id_plataforma' => 2,
            'id_juego' => 3,
        ]);

        Plataformas_Por_Juego::create([
            'id_plataforma' => 2,
            'id_juego' => 4,
        ]);
    }
}
