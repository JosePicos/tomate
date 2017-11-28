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
    return view('presentacion.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Requisicion/Nuevo', 'RequisicionesController@index')->name('requisicion');

Route::get('/quienes', 'WelcomeController@quienes')->name('quienes');

Route::get('/contacto','WelcomeController@contacto')->name('contacto');

Route::resource('/Producto', 'ProductosController');

Route::resource('/Empleado', 'EmpleadosController');

Route::get('/index','WelcomeController@index')->name('index');

Route::get('/about','WelcomeController@about')->name('about');

Route::get('/post','WelcomeController@post')->name('post');

Route::get('/contact','WelcomeController@contact')->name('contact');

Route::get('/Surtido','RequisicionesController@surtido')->name('surtido');
