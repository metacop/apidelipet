<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NoFarmacologicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('no_farmacologico', function (Blueprint $table) {
            $table->unsignedInteger('tratamiento_id');
            $table->timestamps();

            $table->foreign('tratamiento_id')->references('id')->on('tratamiento');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('no_farmacologico');
    }
}
