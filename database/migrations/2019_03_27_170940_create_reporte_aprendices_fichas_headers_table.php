<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReporteAprendicesFichasHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporte_aprendices_fichas_headers', function (Blueprint $table) {
            $table->increments('id');

            $table->text('fichaCaracterizacion',500);
            $table->string('estado');
            $table->string('fechaReporte');

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
        Schema::dropIfExists('reporte_aprendices_fichas_headers');
    }
}