<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotesRequisicionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lotes_requisicion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_requisicion')->unsigned();
            $table->integer('id_requisicion')->references('id')->on('requisiciones')->onDelete('restrict');
            $table->integer('id_lote')->unsigned();
            $table->integer('id_lote')->references('id')->on('lotes')->onDelete('restrict');
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
        Schema::dropIfExists('lotes_requisicion');
    }
}
