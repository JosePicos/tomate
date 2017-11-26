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
    return view('presentacion.inicio');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Requisicion/Nuevo', 'RequisicionesController@index')->name('requisicion');


Route::get('/quienes', 'HomeController@quienes')->name('quienes');


Route::get('/contacto','HomeController@contacto')->name('contacto');