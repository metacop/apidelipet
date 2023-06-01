<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MascotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascota', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('users_id');
            $table->string('nombre');
            $table->string('sexo');
            $table->integer('altura');
            $table->integer('peso');
            $table->string('imagen_mascota');
            $table->date('fecha_nacimiento');
            $table->timestamps();

         
            $table->foreign('users_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mascota');
    }
}
