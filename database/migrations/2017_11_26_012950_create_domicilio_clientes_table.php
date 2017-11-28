<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomicilioClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilios_clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cte')->unsigned();
            $table->foreign('id_cte')->references('id')->on('clientes')->onDelete('restrict');
            $table->string('pais', 50);
            $table->string('municipio', 100);
            $table->string('codigo_postal', 10);
            $table->string('calle', 50);
            $table->string('numero', 50);
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
        Schema::dropIfExists('domicilios_clientes');
    }
}
