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
    return view('productos');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Requisicion/Nuevo', 'RequisicionesController@index')->name('requisicion');

Route::resource('/Producto', 'ProductosController');
