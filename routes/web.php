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
//pruebas realizadas de la web https://styde.net/rutas-con-laravel/

Route::get('/usuarios', function () {
    return 'Imprime en pantalla la palabra "usuarios"';
});
// usando una función anónima
Route::get('/url', function () {
    return 'Hola mundo';
});
//Rutas con parametros, donde le indicamos que parametro nos muestre.
Route::get('users/{id}', function ($id) {
    return'Usuarios';
});

