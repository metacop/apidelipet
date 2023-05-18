<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ItinerarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itinerario', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('dispensador_id');
            $table->date('fecha');
            $table->time('hora');
            $table->timestamps();

            $table->foreign('dispensador_id')->references('id')->on('dispensador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itinerario');
    }
}
