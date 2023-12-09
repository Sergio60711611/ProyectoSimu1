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
Route::get('/cliente/{id}/ayuda',"App\Http\Controllers\ClientesController@createAyuda");
Route::get('/cliente/{id}/pdf',"App\Http\Controllers\ClientesController@createPdf");
Route::get('/cliente/{id}/excel',"App\Http\Controllers\ClientesController@createExcel");
Route::get('/cliente/{id}/simulacion/{idSim}',"App\Http\Controllers\ClientesController@createSimuDetalle");
Route::get('/cliente/{id}/simulacion/{idSim}/pdf',"App\Http\Controllers\ClientesController@pdf");
Route::get('/cliente/{id}/simulacion/{idSim}/excel',"App\Http\Controllers\ClientesController@excel");

//Backend
Route::post('/clientecreado',"App\Http\Controllers\ClientesController@store"); //crear un registro
Route::post('/inicioSesion',"App\Http\Controllers\loginController@inicioSesion");//Login

Route::post('/iniciarSimulacion',"App\Http\Controllers\SimulacionesController@storeSimulacion"); //crear un registro