<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlianzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alianzas', function (Blueprint $table) {
            $table->id();
            $table->string('user');
            $table->string('nombre_fantasia');
            $table->string('avatar')->default('alianzaAvatar.png');
            $table->string('fondo')->default('alianzaFondo.png');
            $table->string('cuit');
            $table->string('razonSocial');
            $table->string('email');
            $table->string('celular');
            $table->string('shipping');
            $table->string('medios_pago');
            $table->string('link_saber_mas')->nullable();
            $table->string('pagina_web')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('rubro')->nullable();
            $table->string('video')->nullable();

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
        Schema::dropIfExists('alianzas');
    }
}
