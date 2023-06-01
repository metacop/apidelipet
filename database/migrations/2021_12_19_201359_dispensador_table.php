<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DispensadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispensador', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',25);
            $table->string('IP');
            $table->string('MacAddress');
            $table->integer('nivel_fuente_agua');
            $table->integer('nivel_fuente_comida');
            $table->integer('nivel_dep_agua');
            $table->integer('nivel_dep_comida');
            $table->integer('estado');
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
        Schema::dropIfExists('dispendador');
    }
}
