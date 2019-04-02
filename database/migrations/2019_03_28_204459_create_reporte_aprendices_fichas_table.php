<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReporteAprendicesFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporte_aprendices_fichas', function (Blueprint $table) {
            $table->increments('id');


            $table->string('TipoDocumento')->nullable();
            $table->string('NumeroDocumento')->nullable();
            $table->string('nombres')->nullable();
            $table->string('apellidos')->nullable();
            $table->integer('celular')->nullable();
            $table->string('correo')->nullable();
            $table->string('estado')->nullable();
            $table->string('ficha')->nullable();


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
        Schema::dropIfExists('reporte_aprendices_fichas');
    }
}
