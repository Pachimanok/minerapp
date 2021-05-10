<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casas', function (Blueprint $table) {
             
            /*  General de Casa */

             $table->id();
             $table->string('photo')->nullable();
             $table->integer('mts')->nullable();
             $table->string('zona')->nullable();
             $table->string('ciudad')->nullable();
             $table->string('propietario')->nullable();
 
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
        Schema::dropIfExists('casas');
    }
}
