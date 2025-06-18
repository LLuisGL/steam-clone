<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plataformas;

class PlataformasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plataformas::create([
            'url_imagen' => 'icon_platform_mac.png'
        ]);

        Plataformas::create([
            'url_imagen' => 'icon_platform_win.png '
        ]);

        Plataformas::create([
            'url_imagen' => 'icon_platform_linux.png'
        ]);
    }
}
