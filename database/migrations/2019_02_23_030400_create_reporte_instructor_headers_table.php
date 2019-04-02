<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReporteInstructorHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporte_instructor_headers', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('ficha');
            $table->string('nombrePrograma');
            $table->string('centro');
            $table->string('horasTotalesProgramadas');
            $table->string('horasTotalesEjecutadas');
            $table->string('horasTotalesPendientes');
            $table->string('fechaInicio');
            $table->string('municipio');
            $table->string('fechaFin');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reporte_instructor_headers');
    }
}
