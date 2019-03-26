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
            $table->string('apellidos')->nullable();
            $table->string('estado')->nullable();
            $table->longText('competencia')->nullable();
            $table->longText('resultadoAprendizaje')->nullable();
            $table->string('juicioEvaluacion')->nullable();
            $table->string('funcionarioRegistroJuicioEvaluativo')->nullable();

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
