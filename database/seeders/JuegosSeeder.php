<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Juegos;

class JuegosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Juegos::create([
            'nombre_juego' => 'Destiny',
            'descripcion_juego' => 'Destiny es un MMO de acción en un mundo único en evolución al que tú y tus amigos pueden unirse en cualquier momento y lugar, gratuitamente.',
            'precio_normal' => 0,
            'precio_oferta' => 0,
        ]);

        Juegos::create([
            'nombre_juego' => 'Team Fortress 2',
            'descripcion_juego' => 'Nueve clases distintas ofrecen una amplia variedad de habilidades tácticas y personalidades. Se actualiza constantemente con nuevos modos de juego, mapas, equipo y, lo más importante, ¡sombreros!',
            'precio_normal' => 0,
            'precio_oferta' => 0,
        ]);

        Juegos::create([
            'nombre_juego' => 'Balatro',
            'descripcion_juego' => 'El roguelike de póquer. Balatro es un creador de mazos hipnotizante donde juegas manos de póquer ilegal, descubres comodines que cambian tu juego y activas combinaciones hilarantes y llenas de adrenalina.',
            'precio_normal' => 7.99,
            'precio_oferta' => 0,
        ]);

        Juegos::create([
            'nombre_juego' => 'Resident Evil Village',
            'descripcion_juego' => 'Vive el survival horror como nunca antes en la 8.ª entrega principal de la aclamada serie Resident Evil: Resident Evil Village. El terror más realista e inescapable, con gráficos hiperdetallados, intensa acción en 1.ª persona y una trama magistral.',
            'precio_normal' => 24.99,
            'precio_oferta' => 6.24,
        ]);
    }
}
