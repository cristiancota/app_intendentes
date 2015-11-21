<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Intendentes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intendentes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('num_inten');
            $table->char('nombre');
            $table->char('apellido');
            $table->bigInteger('cel');
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
        Schema::drop('intendentes');
    }
}
