<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\CiudadController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//ESTADO
Route::get('/estado', [EstadoController::class, 'index']); //lista todos los estados
Route::get('/estado/{id}', [EstadoController::class, 'show']); //muestra un estado
Route::post('/estado', [EstadoController::class, 'store']); //nuevo estado
Route::put('/estado/{id}', [EstadoController::class, 'update']); //actualiza un estado por su ID
Route::delete('/estado/{id}', [EstadoController::class, 'destroy']); //elimina un estado por su ID

//CIUDAD
Route::get('/ciudad', [CiudadController::class, 'index']); //lista todas las ciudades
Route::get('/ciudad/{id}', [CiudadController::class, 'show']); //muestra una ciudad
Route::post('/ciudad', [CiudadController::class, 'store']); //nueva ciudad
Route::put('/ciudad/{id}', [CiudadController::class, 'update']); //actualiza una ciudad por su ID
Route::delete('/ciudad/{id}', [CiudadController::class, 'destroy']); //elimina una ciudad por su ID