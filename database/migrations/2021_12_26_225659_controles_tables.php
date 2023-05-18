<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ControlesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ficha_clinica_id');
            $table->boolean('estado');
            $table->timestamps();

            $table->foreign('ficha_clinica_id')->references('id')->on('ficha_clinica');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ficha_clinica');
    }
}
