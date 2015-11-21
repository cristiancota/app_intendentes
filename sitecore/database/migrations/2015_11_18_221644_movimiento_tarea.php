<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MovimientoTarea extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimiento_tarea', function (Blueprint $table) {
            $table->increments('id');
            //llave foranea
            $table->integer('movimiento_id')->unsigned()->index();
            $table->foreign('movimiento_id')->references('id')->on('movimientos')->onDelete('cascade');
            //llave foranea
            $table->integer('tarea_id')->unsigned()->index();
            $table->foreign('tarea_id')->references('id')->on('tareas')->onDelete('cascade');
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
        Schema::drop('movimiento_tarea');
    }
}
