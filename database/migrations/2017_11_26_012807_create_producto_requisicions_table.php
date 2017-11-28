<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoRequisicionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_requisiciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_prod')->unsigned();
            $table->foreign('id_prod')->references('id')->on('productos')->onDelete('restrict');
            $table->string('descripcion_prod', 100);
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
        Schema::dropIfExists('productos_requisiciones');
    }
}
