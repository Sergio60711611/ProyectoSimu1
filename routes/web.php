<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimulacionesController;
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
//Frontend - Vistas
Route::get('/login',"App\Http\Controllers\loginController@create");
Route::get('/inicio',"App\Http\Controllers\inicioController@create");
Route::get('/cliente/{id}',"App\Http\Controllers\loginController@createCliente");

//Backend
Route::post('/clientecreado',"App\Http\Controllers\ClientesController@store"); //crear un registro
Route::post('/inicioSesion',"App\Http\Controllers\loginController@inicioSesion");//Login


Route::post('/iniciarSimulacion',"App\Http\Controllers\SimulacionesController@storeSimulacion"); //crear un registro
//Route::get('/cliente/{id}/home',"App\Http\Controllers\homeController@createCliente");