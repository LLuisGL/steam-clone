<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tags_Por_Juego;

class tagsPorJuegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DESTIY

        Tags_Por_Juego::create([
            'id_juego' => 1,
            'id_tag' => 1
        ]);

        Tags_Por_Juego::create([
            'id_juego' => 1,
            'id_tag' => 4
        ]);

        Tags_Por_Juego::create([
            'id_juego' => 1,
            'id_tag' => 6
        ]);

        Tags_Por_Juego::create([
            'id_juego' => 1,
            'id_tag' => 9
        ]);

        //TEAM FORTRESS

        Tags_Por_Juego::create([
            'id_juego' => 2,
            'id_tag' => 1
        ]);
        
        Tags_Por_Juego::create([
            'id_juego' => 2,
            'id_tag' => 4
        ]);
        
        Tags_Por_Juego::create([
            'id_juego' => 2,
            'id_tag' => 8
        ]);
        
        Tags_Por_Juego::create([
            'id_juego' => 2,
            'id_tag' => 9
        ]);

        Tags_Por_Juego::create([
            'id_juego' => 2,
            'id_tag' => 5
        ]);

        //BALATRO

        Tags_Por_Juego::create([
            'id_juego' => 3,
            'id_tag' => 6
        ]);

        //RESIDENT EVIL

        Tags_Por_Juego::create([
            'id_juego' => 4,
            'id_tag' => 2
        ]);

        Tags_Por_Juego::create([
            'id_juego' => 4,
            'id_tag' => 3
        ]);

        Tags_Por_Juego::create([
            'id_juego' => 4,
            'id_tag' => 8
        ]);
        
    }
}
