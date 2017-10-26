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
    return view('index');
});

Route::get('/ropa_hombre', 'RopaHombreController@index')->name('crear_ruta_hombre');
Route::get('/ropa_hombre/comprar/{id}', 'RopaHombreController@comprar')->name('comprar_ruta_homre');





Route::get('/ropa_mujer', 'RopaMujerController@index')->name('crear_ruta_mujer');
Route::get('/tecnologia', 'TecnologiaController@index')->name('crear_ruta_tecnologia');
