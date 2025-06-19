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
            'url' => 'imagenes/1/destiny.jpg',
            'tag' => 'priority'
        ]);

        Imagenes::create([
            'id_juego' => 1,
            'url' => 'imagenes/1/img_1.jpg',
            'tag' => 'secondary'
        ]);

        Imagenes::create([
            'id_juego' => 1,
            'url' => 'imagenes/1/img_2.jpg',
            'tag' => 'secondary'
        ]);

        Imagenes::create([
            'id_juego' => 1,
            'url' => 'imagenes/1/img_3.jpg',
            'tag' => 'secondary'
        ]);

        Imagenes::create([
            'id_juego' => 1,
            'url' => 'imagenes/1/img_4.jpg',
            'tag' => 'secondary'
        ]);

        //TEAM FORTRESS 2

        Imagenes::create([
            'id_juego' => 2,
            'url' => 'imagenes/2/tfortress.jpg',
            'tag' => 'priority'
        ]);

        Imagenes::create([
            'id_juego' => 2,
            'url' => 'imagenes/2/img_1.jpg',
            'tag' => 'secondary'
        ]);

        Imagenes::create([
            'id_juego' => 2,
            'url' => 'imagenes/2/img_2.jpg',
            'tag' => 'secondary'
        ]);

        Imagenes::create([
            'id_juego' => 2,
            'url' => 'imagenes/2/img_3.jpg',
            'tag' => 'secondary'
        ]);

        Imagenes::create([
            'id_juego' => 2,
            'url' => 'imagenes/2/img_4.jpg',
            'tag' => 'secondary'
        ]);

        //Balatro

        Imagenes::create([
            'id_juego' => 3,
            'url' => 'imagenes/3/balatro.jpg',
            'tag' => 'priority'
        ]);

        Imagenes::create([
            'id_juego' => 3,
            'url' => 'imagenes/3/img_1.jpg',
            'tag' => 'secondary'
        ]);

        Imagenes::create([
            'id_juego' => 3,
            'url' => 'imagenes/3/img_2.jpg',
            'tag' => 'secondary'
        ]);

        Imagenes::create([
            'id_juego' => 3,
            'url' => 'imagenes/3/img_3.jpg',
            'tag' => 'secondary'
        ]);

        Imagenes::create([
            'id_juego' => 3,
            'url' => 'imagenes/3/img_4.jpg',
            'tag' => 'secondary'
        ]);

        //REsident Evil Village

        Imagenes::create([
            'id_juego' => 4,
            'url' => 'imagenes/4/revil.jpg',
            'tag' => 'priority'
        ]);

        Imagenes::create([
            'id_juego' => 4,
            'url' => 'imagenes/4/img_1.jpg',
            'tag' => 'secondary'
        ]);

        Imagenes::create([
            'id_juego' => 4,
            'url' => 'imagenes/4/img_2.jpg',
            'tag' => 'secondary'
        ]);

        Imagenes::create([
            'id_juego' => 4,
            'url' => 'imagenes/4/img_3.jpg',
            'tag' => 'secondary'
        ]);

        Imagenes::create([
            'id_juego' => 4,
            'url' => 'imagenes/4/img_4.jpg',
            'tag' => 'secondary'
        ]);
    }
}
