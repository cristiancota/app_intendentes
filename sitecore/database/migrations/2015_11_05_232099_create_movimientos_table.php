<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('dia',['lunes','martes','miercoles','jueves','viernes']);
            $table->boolean('activa')->default(1);

            //LLAVE FORANEA
/*            $table->integer('tarea_id')->unsigned();
            $table->foreign('tarea_id')->references('id')->on('tareas')->onDelete('cascade');
           */
            //LLAVE FORANEA
            $table->integer('intendente_id')->unsigned();
            $table->foreign('intendente_id')->references('id')->on('intendentes')->onDelete('cascade');
            //LLAVE FORANEA
            $table->integer('edificio_id')->unsigned();
            $table->foreign('edificio_id')->references('id')->on('edificios')->onDelete('cascade');
            //LLAVE FORANEA
            $table->integer('planta_id')->unsigned();
            $table->foreign('planta_id')->references('id')->on('plantas')->onDelete('cascade');





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
        Schema::drop('movimientos');
    }
}
