<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FichaClinica extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_clinica', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mascota_id');
            $table->timestamps();

            $table->foreign('mascota_id')->references('id')->on('mascota');

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
