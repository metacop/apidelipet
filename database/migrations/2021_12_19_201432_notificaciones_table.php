<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NotificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('dispensador_id');
            $table->unsignedInteger('alerta_id');
            $table->dateTime('fecha');
            $table->boolean('estado');
            $table->timestamps();

            $table->foreign('dispensador_id')->references('id')->on('dispensador');
            $table->foreign('alerta_id')->references('id')->on('alerta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notificaciones');
    }
}
