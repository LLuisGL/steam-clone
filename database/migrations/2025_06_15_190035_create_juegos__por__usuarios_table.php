<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuegosPorUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juegos__por__usuarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId("id_usuario")->constrained("users")->onDelete('cascade');;
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
        Schema::dropIfExists('juegos__por__usuarios');
    }
}
