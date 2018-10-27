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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


/*
//Creamos la ruta del controlador de BikerUser
Route::resource('Users', 'UserController');

//Creamos la ruta del controlador de BikerReport
Route::resource('BikerReports', 'bikerReportController');

//Creamos la ruta del controlador de ReportType
Route::resource('ReportTypes', 'ReportTypeController');

//Creamos la ruta del controlador de SubTypes
Route::resource('Subtypes', 'SubTypesController');
*/
//

Route::resource('users', 'UserController');
//
/*Route::resource('users', 'UserController')->middleware('auth:api');


// Autenticación por token sistema
Route::resource('users', 'UserController')->middleware('client');
*/

Route::get('login', function (){
return ['error' => 'usuario debe atenticarse'];

})->name('login');



Route::post('oauth/token', '\Laravel\Passport\Http\Controllers\AccessTokenController@issueToken');

