<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lotes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_producto')->unsigned();
            $table->foreign('id_producto')->references('id')->on('productos')->onDelete('restrict');
            $table->integer('id_bodega')->unsigned();
            $table->foreign('id_bodega')->references('id')->on('bodegas')->onDelete('restrict');
            $table->integer('id_clasificacion')->unsigned();
            $table->foreign('id_clasificacion')->references('id')->on('clasificaciones')->onDelete('restrict');
            $table->integer('id_ubicacion')->unsigned();
            $table->foreign('id_ubicacion')->references('id')->on('ubicaciones')->onDelete('restrict');
            $table->date('fecha_corte');
            $table->date('fecha_registro');    
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
        Schema::dropIfExists('lotes');
    }
}
