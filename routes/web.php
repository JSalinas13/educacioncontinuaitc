<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\CursoEstudianteController;
use Illuminate\Support\Facades\Route;

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

Route::fallback(function () {
    return view('404');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/courses', [CursoController::class,'cursos'])->name('cursos');

Route::get('/team', function () {
    return view('team');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::post('/coursesCategories', [CursoController::class,'categoriaCurso'])->name('categoryCourse');

Route::get('/myCourses', [CursoEstudianteController::class,'mycourse']);

Route::post('/detailCourses',[CursoController::class,'detail'])->name('detail');

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/categories', function () {
    return view('categories');
});
Route::get('/editprofile', function () {
    return view('editprofile');
});

Route::get('/addCurso', function () {
    return view('addCurso');
});
