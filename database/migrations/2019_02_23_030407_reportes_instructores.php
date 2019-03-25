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
            $table->string('FechaInicioProgramacion')->nullable();
            $table->string('FechaFinProgramacion')->nullable();
            $table->string('HorasProgramadas')->nullable();
            $table->string('codigoFicha')->nullable();
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
        //
    }
}
