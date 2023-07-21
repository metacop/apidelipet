<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DispensadorController;
use App\Http\Controllers\MascotaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/registro', [AuthController::class, 'registro']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/userinfo', [AuthController::class, 'userinfo'])->middleware('auth:sanctum');
Route::apiResource('/mascota', MascotaController::class)->middleware('auth:sanctum');
Route::apiResource('/dispensador', DispensadorController::class)->middleware('auth:sanctum');
Route::get('/dispensador/{id_dispensador}', 'DispensadorController@show')->where('id_dispensador', '[0-9]+');
Route::get('/dispensadores/{id_usuario}', [DispensadorController::class, 'dispensadoresDelUsuario'])->where('id_usuario', '[0-9]+');
// asdas

//Route::apiResource('/hogar', HogarController::class)->middleware('auth:sanctum');

//Route::apiResource('/habitacion', HabitacionController::class)->middleware('auth:sanctum');

//Route::apiResource('/raza', RazaController::class);







