<?php

<<<<<<< HEAD
use Illuminate\Support\Facades\Route;
=======
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

>>>>>>> d89c436af6be8f9e4b8f12227a8b5fda3309b1bd

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

<<<<<<< HEAD
Route::get('/courses', function () {
    return view('courses');
});
=======
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/courses', function () {});

Route::get('/courses', [CursoController::class,'cursos'])->name('cursos');
>>>>>>> d89c436af6be8f9e4b8f12227a8b5fda3309b1bd

Route::get('/team', function () {
    return view('team');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/coursesCategories', function () {
    return view('coursesCategories');
});

Route::get('/myCourses', function () {
    return view('myCourses');
});

Route::get('/detailCourses', function () {
    return view('detailCourses');
});

Route::get('/login', function () {
<<<<<<< HEAD
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
=======
    return view('login.login');
})->name('login');

>>>>>>> d89c436af6be8f9e4b8f12227a8b5fda3309b1bd

Route::get('/categories', function () {
    return view('categories');
});
Route::get('/editprofile', function () {
    return view('editprofile');
});

Route::get('/addCurso', function () {
    return view('addCurso');
});
