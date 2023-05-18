<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FarmacologicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmacologico', function (Blueprint $table) {
            $table->unsignedInteger('medicamento_id');
            $table->unsignedInteger('tratamiento_id');
            $table->timestamps();

            $table->foreign('medicamento_id')->references('id')->on('medicamento');
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
        Schema::dropIfExists('farmacologico');
    }
}
