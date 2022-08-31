<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEgresos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egresos', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('tipo_eg');
            $table->string('nombre_eg', 100);
            $table->decimal('costo_eg', $precision = 8, $scale = 2);
            $table->unsignedBigInteger('id_ingreso');
            $table->foreign('id_ingreso')->references('id')->on('ingresos');
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
        Schema::dropIfExists('egresos');
    }
}
