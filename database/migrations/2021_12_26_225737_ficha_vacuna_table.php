<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FichaVacunaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_vacuna', function (Blueprint $table) {
            $table->unsignedInteger('vacuna_id');
            $table->unsignedInteger('ficha_clinica_id');
            $table->timestamps();

            $table->foreign('vacuna_id')->references('id')->on('vacunas');
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
        Schema::dropIfExists('ficha_vacuna');
    }
}
