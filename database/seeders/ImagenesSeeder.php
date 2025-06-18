<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Imagenes;

class ImagenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DESTINY

        Imagenes::create([
            'id_juego' => 1,
            'url' => 'destiny.jpg',
            'tag' => 'priority'
        ]);

        Imagenes::create([
            'id_juego' => 1,
            'url' => 'img_1.jpg',
            'tag' => 'secondary'
        ]);

        Imagenes::create([
            'id_juego' => 1,
            'url' => 'img_2.jpg',
            'tag' => 'secondary'
        ]);

        Imagenes::create([
            'id_juego' => 1,
            'url' => 'img_3.jpg',
            'tag' => 'secondary'
        ]);

        Imagenes::create([
            'id_juego' => 1,
            'url' => 'img_4.jpg',
            'tag' => 'secondary'
        ]);

        //TEAM FORTRESS 2

        Imagenes::create([
            'id_juego' => 2,
            'url' => 'tfortress.jpg',
            'tag' => 'priority'
        ]);

        Imagenes::create([
            'id_juego' => 2,
            'url' => 'img_1.jpg',
            'tag' => 'secondary'
        ]);

        Imagenes::create([
            'id_juego' => 2,
            'url' => 'img_2.jpg',
            'tag' => 'secondary'
        ]);

        Imagenes::create([
            'id_juego' => 2,
            'url' => 'img_3.jpg',
            'tag' => 'secondary'
        ]);

        Imagenes::create([
            'id_juego' => 2,
            'url' => 'img_4.jpg',
            'tag' => 'secondary'
        ]);

        //Balatro

        Imagenes::create([
            'id_juego' => 3,
            'url' => 'balatro.jpg',
            'tag' => 'priority'
        ]);

        Imagenes::create([
            'id_juego' => 3,
            'url' => 'img_1.jpg',
            'tag' => 'secondary'
        ]);

        Imagenes::create([
            'id_juego' => 3,
            'url' => 'img_2.jpg',
            'tag' => 'secondary'
        ]);

        Imagenes::create([
            'id_juego' => 3,
            'url' => 'img_3.jpg',
            'tag' => 'secondary'
        ]);

        Imagenes::create([
            'id_juego' => 3,
            'url' => 'img_4.jpg',
            'tag' => 'secondary'
        ]);

        //REsident Evil Village

        Imagenes::create([
            'id_juego' => 4,
            'url' => 'revil.jpg',
            'tag' => 'priority'
        ]);

        Imagenes::create([
            'id_juego' => 4,
            'url' => 'img_1.jpg',
            'tag' => 'secondary'
        ]);

        Imagenes::create([
            'id_juego' => 4,
            'url' => 'img_2.jpg',
            'tag' => 'secondary'
        ]);

        Imagenes::create([
            'id_juego' => 4,
            'url' => 'img_3.jpg',
            'tag' => 'secondary'
        ]);

        Imagenes::create([
            'id_juego' => 4,
            'url' => 'img_4.jpg',
            'tag' => 'secondary'
        ]);
    }
}
