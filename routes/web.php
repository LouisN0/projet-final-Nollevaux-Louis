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
    return view('welcome');
})->name('home');
Route::get('/courses', function () {
    return view('front.pages.courses');
})->name('courses');
Route::get('/events', function () {
    return view('front.pages.events');
})->name('events');
Route::get('/news', function () {
    return view('front.pages.news');
})->name('news');
Route::get('/teacher', function () {
    return view('front.pages.teacher');
})->name('teacher');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
