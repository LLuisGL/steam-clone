<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsPorJuegosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags__por__juegos', function (Blueprint $table) {
            $table->id();
            $table->foreignId("id_juego")->constrained("juegos");
            $table->foreignId("id_tag")->constrained("tags");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags__por__juegos');
    }
}
