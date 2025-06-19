<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags__por__juegos')->truncate();
        DB::table('plataformas__por__juegos')->truncate();
        DB::table('imagenes')->truncate();
        DB::table('juegos')->truncate();
        DB::table('tags')->truncate();
        DB::table('plataformas')->truncate();

        $this->call([
            TagsSeeder::class,
            PlataformasSeeder::class,
            JuegosSeeder::class,
            ImagenesSeeder::class,
            tagsPorJuegoSeeder::class,
            PlataformasPorJuegoSeeder::class,
        ]);
    }
}
