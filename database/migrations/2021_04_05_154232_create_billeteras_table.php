<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBilleterasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billeteras', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('descripcion');
            $table->decimal('monto',12,2);
            $table->string('alianza');
            $table->string('estado')->default('desbloquear');
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
        Schema::dropIfExists('billeteras');
    }
}
