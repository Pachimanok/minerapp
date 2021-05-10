<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMineralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minerales', function (Blueprint $table) {
            $table->id();
            $table->string('link_catalogo');
            $table->string('avatar')->default('mineralAvatar.png');
            $table->string('fondo')->default('mineralFondo.png');
            $table->string('link_minar');
            $table->string('subrubro');
            $table->string('desafio')->nullable();
            $table->string('flyer')->nullable();
            $table->string('datos_pedir');
            $table->decimal('comision',2,4);
            $table->string('alianza');

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
        Schema::dropIfExists('minerales');
    }
}
