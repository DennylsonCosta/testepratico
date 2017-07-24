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
    return view('inicio');
})->name('home');

Route::get('problema1', 'problema1Controller@index')->name('Problema 1');
Route::post('problema1', 'problema1Controller@recibo');

Route::get('problema2', 'problema2Controller@index')->name('Problema 2');
Route::post('problema2', 'problema2Controller@gerar');

Route::get('problema3', 'problema3Controller@index')->name('Problema 3');
Route::post('problema3', 'problema3Controller@exibir');

Route::get('problema4', 'problema4Controller@index')->name('Problema 4');
Route::post('problema4', 'problema4Controller@imprimir');

Route::get('problema5', 'problema5Controller@index')->name('Problema 5');
Route::post('problema5', 'problema5Controller@verifica');