<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            
            /*  Envio */

             $table->id();
             $table->string('asunto');
             $table->text('mensaje');
             $table->string('adjunto_send');
             $table->string('user_send');
             $table->string('user_r');
             $table->Integer('id_autos')->nullable();
             $table->Integer('id_casas')->nullable();
             $table->string('status_send'); /*  Sin Leer - Pendiente - Respondido - Terminado */
 
              /*  Respuesta */

             $table->text('respuesta')->nullable();     /*  Sin Leer - Pendiente - Terminado */
             $table->string('adjunto_respuesta')->nullable();
             $table->string('status_r')->nullable();

             /*  Sistema */
             
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
        Schema::dropIfExists('tareas');
    }
}
