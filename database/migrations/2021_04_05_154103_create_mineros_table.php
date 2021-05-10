<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMinerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mineros', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('name')->default('[Falta tu Nombre]');
            $table->string('lastName')->nullable();
            $table->string('celular')->nullable();
            $table->string('cbu')->nullable();
            $table->bigInteger('cuit')->nullable();
            $table->string('subtitulo')->nullable();
            $table->string('frase')->nullable();
            $table->text('acerca')->nullable();
            $table->integer('pts')->default(0);
            $table->integer('edad')->nullable();
            $table->string('localizacion')->nullable();
            $table->string('grado')->nullable();
            $table->string('user_amigo')->nullable();
            $table->string('avatar')->default('avatar.png');
            $table->string('fondo')->default('fondo.png');
            $table->string('estado')->default('activo');
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
        Schema::dropIfExists('mineros');
    }
}
