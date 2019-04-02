<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJuiciosEvaluativosHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juicios_evaluativos_headers', function (Blueprint $table) {
            $table->increments('id');

            $table->string('fechaReporte');
            $table->integer('fichaCaracterizacion');
            $table->integer('codigo');
            $table->integer('version');
            $table->string('denominacion');
            $table->string('estadoFicha');
            $table->string('fechaInicio');
            $table->string('fechaFin');
            $table->string('modalidadFormacion');
            $table->string('regional');
            $table->string('centroFormacion');

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
        Schema::dropIfExists('juicios_evaluativos_headers');
    }
}
