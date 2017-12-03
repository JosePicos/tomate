<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosRequisicionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_requisicion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_requisicion')->unsigned();
            $table->foreign('id_requisicion')->references('id')->on('requisiciones')->onDelete('restrict');
            $table->integer('id_producto')->unsigned();
            $table->foreign('id_producto')->references('id')->on('productos')->onDelete('restrict');
            $table->string('descripcion');
            $table->integer('cantidad');    
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
        Schema::dropIfExists('productos_requisicion');
    }
}
