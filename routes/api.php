<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
=======
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\LocalidadController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PrivilegioController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\PrivilegioRolController;
use App\Http\Controllers\UsuarioRolController;
use App\Http\Controllers\ContactoUsuarioController;
>>>>>>> d89c436af6be8f9e4b8f12227a8b5fda3309b1bd

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
<<<<<<< HEAD
=======

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

//PRIVILEGIO
Route::get('/privilegio', [PrivilegioController::class, 'index']); //lista todos los privilegios
Route::get('/privilegio/{id}', [PrivilegioController::class, 'show']); //muestra un privilegio
Route::post('/privilegio', [PrivilegioController::class, 'store']); //nuevo privilegio
Route::put('/privilegio/{id}', [PrivilegioController::class, 'update']); //actualiza un privilegio por su ID
Route::delete('/privilegio/{id}', [PrivilegioController::class, 'destroy']); //elimina un privilegio por su ID

//ROL
Route::get('/rol', [RolController::class, 'index']); //lista todos los roles
Route::get('/rol/{id}', [RolController::class, 'show']); //muestra un rol
Route::post('/rol', [RolController::class, 'store']); //nuevo rol
Route::put('/rol/{id}', [RolController::class, 'update']); //actualiza un rol por su ID
Route::delete('/rol/{id}', [RolController::class, 'destroy']); //elimina un rol por su ID

//PRIVILEGIO_ROL
Route::get('/privilegiorol', [PrivilegioRolController::class, 'index']); //lista todos los privilegiosRoles
Route::get('/privilegiorol/{id}', [PrivilegioRolController::class, 'show']); //muestra un privilegioRol
Route::post('/privilegiorol', [PrivilegioRolController::class, 'store']); //nuevo privilegioRol
Route::put('/privilegiorol/{id}', [PrivilegioRolController::class, 'update']); //actualiza un privilegioRol por su ID
Route::delete('/privilegiorol/{id}', [PrivilegioRolController::class, 'destroy']); //elimina un privilegioRol por su ID

//USUARIO_ROL
Route::get('/usuariorol', [UsuarioRolController::class, 'index']); //lista todos los usuariorol
Route::get('/usuariorol/{id}', [UsuarioRolController::class, 'show']); //muestra un usuariorol
Route::post('/usuariorol', [UsuarioRolController::class, 'store']); //nuevo usuariorol
Route::put('/usuariorol/{id}', [UsuarioRolController::class, 'update']); //actualiza un usuariorol por su ID
Route::delete('/usuariorol/{id}', [UsuarioRolController::class, 'destroy']); //elimina un usuariorol por su ID

//CONTACTO_USUARIO
Route::get('/usuariocontacto', [ContactoUsuarioController::class, 'index']); //lista todos los usuariorol
Route::get('/usuariocontacto/{id}', [ContactoUsuarioController::class, 'show']); //muestra un usuariocontacto por ID
Route::post('/usuariocontacto', [ContactoUsuarioController::class, 'store']); //nuevo usuariocontacto
Route::put('/usuariocontacto/{id}', [ContactoUsuarioController::class, 'update']); //actualiza un usuariocontacto por su ID
Route::delete('/usuariocontacto/{id,id}', [ContactoUsuarioController::class, 'destroy']); //elimina un usuariocontacto por su ID
>>>>>>> d89c436af6be8f9e4b8f12227a8b5fda3309b1bd
