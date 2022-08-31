<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\EgresoController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [AuthController::class,'register']);
Route::post('login', [AuthController::class,'login']);

Route::middleware(['auth:sanctum'])->group(function (){
    Route::get('logout', [AuthController::class,'logout']);
    //rutas para ingresos
    Route::resource('ingreso', IngresoController::class);
    Route::put('/ingreso/{id}', 'App\Http\Controllers\IngresoController@update');
    Route::delete('/ingreso/{id}', 'App\Http\Controllers\IngresoController@destroy');
    //rutas para egresos
    Route::resource('egreso', EgresoController::class);
    Route::put('/egreso/{id}', 'App\Http\Controllers\EgresoController@update');
    Route::delete('/egreso/{id}', 'App\Http\Controllers\EgresoController@destroy');
});
