<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
            /*  General de Auto */

            $table->id();
            $table->string('photo');
            $table->integer('ano')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('dominio')->nullable();
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->string('tipo')->nullable();
            $table->string('chasis')->nullable();
            $table->string('motor')->nullable();

             /*  Datos de Operaciones */

            $table->string('cotizacion_id',5)->nullable();
            $table->string('poliza')->nullable();
            $table->string('archivo_poliza')->nullable();
            $table->string('compañia')->nullable();
            $table->string('cobertura')->nullable();
            $table->string('inspeccion')->nullable();

            /*  Datos del Asegurado */

            $table->string('nombre',);
            $table->bigInteger('dni');
            $table->bigInteger('celular');
            $table->string('email');

            /*  Datos Administrativos */

            $table->decimal('prima',11,2)->nullable();
            $table->decimal('comision',5,5)->nullable();
            $table->string('user')->nullable();
            $table->string('modo_cobro')->nullable();
            $table->string('status_cobro')->nullable();
            $table->string('user_vendedor')->nullable();

           /*  Datos App */

           $table->string('status');
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
        Schema::dropIfExists('autos');
    }
}
