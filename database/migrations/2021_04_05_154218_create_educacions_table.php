<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educacions', function (Blueprint $table) {
            $table->id();
            $table->string('estado')->default('deshabilitado');
            $table->string('titulo');
            $table->text('descripcion');
            $table->string('tema');
            $table->string('premio');
            $table->string('estado_proceso')->default('No realizado');
            $table->string('link')->nullable();
            $table->string('imagen')->nullable();
            $table->string('user')->default('base_de_datos');
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
        Schema::dropIfExists('educacions');
    }
}
