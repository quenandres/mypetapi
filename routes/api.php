<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['middleware' => 'cors'], function () {
    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });
    
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
    Route::post('/registracompra/{producto_id}/{cantidad}', 'CompraProductoController@store');
    Route::resource('/categorias', 'CategoriaController')->except(['store']);
    Route::get('/ingreso/{user}/{pass}', 'UsuarioController@login');
    Route::resource('/usuarios', 'UsuarioController');

    Route::post('/buscatienda/{nombre}', 'TiendaController@show');
    Route::post('/buscaproducto/{nombre}', 'ProductoController@show');

});



