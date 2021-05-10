<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('parentezco');
            $table->string('calle');
            $table->string('numeracion');
            $table->string('piso');
            $table->string('dpto');
            $table->string('referencia');
            $table->string('localidad');
            $table->string('celular');
            $table->string('nombre_contacto');
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
        Schema::dropIfExists('minas');
    }
}
