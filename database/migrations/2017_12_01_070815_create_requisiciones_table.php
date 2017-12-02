<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequisicionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisiciones', function (Blueprint $table) {
            $table->increments('folio');
            $table->integer('id_cliente')->unsigned();
            $table->integer('id_cliente')->references('id')->on('clientes')->onDelete('restrict');
            $table->integer('id_empleado')->default(0);
            $table->date('fecha');
            $table->smallInteger('prioridad');
            $table->smallInteger('status');
            $table->string('pais', 50);
            $table->string('estado', 50);
            $table->string('municipio', 50);
            $table->string('colonia', 50);
            $table->string('codigo_postal', 10);
            $table->string('calle', 50);
            $table->string('numero', 10);    
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
        Schema::dropIfExists('requisiciones');
    }
}
