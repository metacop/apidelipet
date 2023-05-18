<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AntecedentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ficha_clinica_id');
            $table->string('enfermedad1');
            $table->string('enfermedad2');
            $table->string('examenes1');
            $table->string('examenes2');
            $table->timestamps();

            $table->foreign('ficha_clinica_id')->references('id')->on('mascota');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('antecedentes');
    }
}
