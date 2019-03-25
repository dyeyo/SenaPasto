<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJuiciosEvaluativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juicios_evaluativos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TipoDocumento')->nullable();
            $table->string('NumeroDocumento')->nullable();
            $table->string('nombres')->nullable();
            $table->string('apelldios')->nullable();
            $table->string('estado')->nullable();
            $table->string('competencia')->nullable();
            $table->string('resultadoAprendizaje')->nullable();
            $table->string('juicioEvaluacion')->nullable();
            $table->string('funcionarioRegistroJuicioEvaluativo')->nullable();
            $table->string('fechaReporte:')->nullable();
            $table->string('ficha')->nullable();
            $table->string('codigo')->nullable();
            $table->string('version')->nullable();
            $table->string('denominacion')->nullable();
            $table->string('estadoFicha')->nullable();
            $table->string('fechaInicio')->nullable();
            $table->string('fechaFin')->nullable();
            $table->string('modalidadFormación')->nullable();
            $table->string('regional')->nullable();
            $table->string('centroFormacion')->nullable();
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
        Schema::dropIfExists('juicios_evaluativos');
    }
}
