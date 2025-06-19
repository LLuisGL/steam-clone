<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlataformasPorJuegosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plataformas__por__juegos', function (Blueprint $table) {
            $table->id();
            $table->foreignId("id_plataforma")->constrained("plataformas")->onDelete('cascade');;
            $table->foreignId("id_juego")->constrained("juegos")->onDelete('cascade');;
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
        Schema::dropIfExists('plataformas__por__juegos');
    }
}
