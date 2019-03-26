<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReportesInstructores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes_instructores', function (Blueprint $table) {

            $table->increments('id');

            $table->string('NombreInstructor')->nullable();
            $table->string('ApellidoInstructor')->nullable();
            $table->string('EstadoInstructor')->nullable();
            $table->string('Competencia')->nullable();
            $table->longText('FechaInicioProgramacion')->nullable();
            $table->longText('FechaFinProgramacion')->nullable();
            $table->longText('HorasProgramadas')->nullable();
            $table->string('codigoFicha')->nullable();
            $table->integer('reporte_instructor_header_id')->unsigned()->nullable();

            $table->foreign('reporte_instructor_header_id')->references('id')->on('reporte_instructor_headers');


            $table->timestamps();
        });
    }

    public function down()
    {
        //
    }
}
