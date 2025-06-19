<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarroItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carro_items', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('id_carro'); 
            $table->unsignedBigInteger('id_juego'); 
            $table->integer('cantidad')->nullable();
            $table->decimal('precio', 8, 2)->nullable();
            $table->unique(['id_carro', 'id_juego']);
            $table->foreign('id_carro')->references('id')->on('carros')->onDelete('cascade');
            $table->foreign('id_juego')->references('id')->on('juegos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carro_items');
    }
}
