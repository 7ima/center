<?php

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
    return view('master');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/courses1', function () {
    return view('courses1');
});
Route::get('/home', function () {
    return view('home');
});
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/teacher', [App\Http\Controllers\teacherController::class, 'teach'])->name('teacher');
Route::get('/courses', [App\Http\Controllers\teacherController::class, 'course'])->name('courses');

//Route::get('/teacher', 'teacherController@teach')->name('teacher');
