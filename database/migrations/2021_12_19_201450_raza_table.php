<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RazaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raza', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',100);
            $table->string('esp_vida',5);
            $table->integer('peso_f');
            $table->integer('peso_m');
            $table->integer('altura_f');
            $table->integer('altura_m');
            $table->string('origen', 255);
            $table->string('pelaje',255);
            $table->string('Comportamiento',100);
            $table->string('Ejercicio',100);
            $table->date('fecha_nacimiento');
            $table->string('curiosidades',100);
            $table->string('salud',100);
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
        Schema::dropIfExists('raza');
    }
}
