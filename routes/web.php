<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
})->name('/')->middleware('guest');

Route::middleware(['auth'])->group(function (){

    Route::get('/', 'ReportesInstructoresController@index')->name('reporteInstructores');

    Route::get('/reporteInstructores', 'ReportesInstructoresController@index')->name('reporteInstructores');
    Route::get('/reporteInstructores/create/', 'ReportesInstructoresController@create')->name('crearReporteInstructores');
    Route::post('importar', 'ReportesInstructoresController@store')->name('importar');

    Route::get("/getdata","ReportesInstructoresController@getdata");

    /**JUICIOS EVALUATIVOS*/
    Route::get('/juiciosEvaluativos', 'JuiciosEvaluativosController@index')->name('juiciosEvaluativos');
    Route::get('/importarJuicio/create/', 'JuiciosEvaluativosController@create')->name('crearimportarJuicio');
    Route::post('importarJuicio', 'JuiciosEvaluativosController@store')->name('importarJuicio');

    Route::get("/getdataJuicio","JuiciosEvaluativosController@getdataJuicio");

    /**REPORTES FICHAS*/
    Route::get('/ReporteAprendicesFicha', 'ReporteAprendicesFicha@index')->name('ReporteAprendicesFicha');
    Route::get('/crearReporteAprendicesFicha/create/', 'ReporteAprendicesFicha@create')->name('crearReporteAprendicesFicha');
    Route::post('importarReporteAprendicesFicha', 'ReporteAprendicesFicha@store')->name('importarReporteAprendicesFicha');
});

Auth::routes();


