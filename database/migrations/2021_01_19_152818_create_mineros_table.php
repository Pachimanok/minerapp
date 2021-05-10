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
            $table->string('user_id');
            $table->string('avatar')->default('avatar.png');;
            $table->string('rango')->nullable();
           
            $table->string('nombre')->nullable();
            $table->bigInteger('dni')->nullable();
            $table->bigInteger('celular')->nullable();
            
            $table->string('cbu')->nullable();
            $table->string('mercado_pago')->nullable();
            
            $table->string('modo_de_pago')->nullable();
            $table->string('boss')->nullable();
            $table->string('status')->nullable();

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
