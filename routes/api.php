<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\LocalidadController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\ContactoController;

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

//LOCALIDAD
Route::get('/localidad', [LocalidadController::class, 'index']); //lista todas las ciudades
Route::get('/localidad/{id}', [LocalidadController::class, 'show']); //muestra una ciudad
Route::post('/localidad', [LocalidadController::class, 'store']); //nueva ciudad
Route::put('/localidad/{id}', [LocalidadController::class, 'update']); //actualiza una ciudad por su ID
Route::delete('/localidad/{id}', [LocalidadController::class, 'destroy']); //elimina una ciudad por su ID

//COMENTARIO
Route::get('/comentario', [ComentarioController::class, 'index']); //lista todas las ciudades
Route::get('/comentario/{id}', [ComentarioController::class, 'show']); //muestra una ciudad
Route::post('/comentario', [ComentarioController::class, 'store']); //nueva ciudad
Route::put('/comentario/{id}', [ComentarioController::class, 'update']); //actualiza una ciudad por su ID
Route::delete('/comentario/{id}', [ComentarioController::class, 'destroy']); //elimina una ciudad por su ID

//CONTACTO
Route::get('/contacto', [ContactoController::class, 'index']); //lista todas las ciudades
Route::get('/contacto/{id}', [ContactoController::class, 'show']); //muestra una ciudad
Route::post('/contacto', [ContactoController::class, 'store']); //nueva ciudad
Route::put('/contacto/{id}', [ContactoController::class, 'update']); //actualiza una ciudad por su ID
Route::delete('/contacto/{id}', [ContactoController::class, 'destroy']); //elimina una ciudad por su ID