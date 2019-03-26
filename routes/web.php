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


Route::get('/reporteInstructores', 'ReportesInstructoresController@index')->name('reporteInstructores');
Route::get('/reporteInstructores/create/', 'ReportesInstructoresController@create')->name('crearReporteInstructores');
Route::post('importar', 'ReportesInstructoresController@store')->name('importar');
/**JUICIOS EVALUATIVOS*/
Route::get('/juicios', 'JuiciosEvaluativosController@index')->name('juicios');
Route::get('/importarJuicio/create/', 'ReportesInstructoresController@create')->name('crearimportarJuicio');
Route::post('importarJuicio', 'JuiciosEvaluativosController@importar')->name('importarJuicio');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
