<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_servicios', function (Blueprint $table) {
            $table->id();
            $table->string('servicio');
            $table->timestamps();
        });

        Schema::create('categoria_grupos', function (Blueprint $table) {
            $table->id();
            $table->string('grupo');
            $table->timestamps();
        });

        Schema::create('reservacions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono1');
            $table->string('telefono2')->nullable();
            $table->string('domicilio');
            $table->text('referencias');
            $table->text('colonia');
            $table->text('codigo_postal');
            $table->string('horas');
            $table->string('fecha');
            $table->foreignId('servicios_id')->references('id')->on('categoria_servicios')->comment('Relacion entre reservacion y el servicio');
            $table->foreignId('grupos_id')->references('id')->on('categoria_grupos')->comment('Relacion entre reservacion y el servicio');
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
        Schema::dropIfExists('reservacions');
    }
}
