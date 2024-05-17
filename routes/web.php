<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuario\MisCursosController;

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
    return view('index');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/learning', function () {
    return view('learning');
});

Route::get('/learningCourses', function () {
    return view('learningCourses');
});

Route::get('/login', function () {
    return view('login.login');
})->name('login');

Route::group(['prefix' => 'usuario'],function () {
    Route::get('/MisCursos', [MisCursosController::class,'index'])->name('usuario.mis.cursos');
    Route::get('/DetalleCurso/{id}', [MisCursosController::class,'getCurso'])->name('usuario.mis.cursos.detalle');
});
