<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tags;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tags::create([
            'valor_tag' => 'cooperativo',
            'valor_color' => '#a86e02'
        ]);
        
        Tags::create([
            'valor_tag' => 'survival',
            'valor_color' => '#7f318f'
        ]);
        
        Tags::create([
            'valor_tag' => 'horror',
            'valor_color' => '#9c0c24'
        ]);
        
        Tags::create([
            'valor_tag' => 'en línea',
            'valor_color' => '#189618'
        ]);

        Tags::create([
            'valor_tag' => 'shooter',
            'valor_color' => '#0d5b8c'
        ]);

        Tags::create([
            'valor_tag' => 'mmo',
            'valor_color' => '#709113'
        ]);

        Tags::create([
            'valor_tag' => 'sandbox',
            'valor_color' => '#1a6b1c'
        ]);

        Tags::create([
            'valor_tag' => 'primera persona',
            'valor_color' => '#808505'
        ]);

        Tags::create([
            'valor_tag' => 'acción',
            'valor_color' => '#6b1a5d'
        ]);
    }
}
