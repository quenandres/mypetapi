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
    return view('welcome');
});

Route::get('/saludo', function () {
    return 'Hola';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/productos', 'ProductoController');
Route::resource('/tiendas', 'TiendaController');
Route::resource('/compras', 'CompraController');
Route::resource('/comprasproducto', 'CompraProductoController');
Route::resource('/categorias', 'CategoriaController');
