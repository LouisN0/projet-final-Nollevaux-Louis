<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\CourController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\Banner;
use App\Models\Cour;
use App\Models\Service;
use App\Models\Slide;
use App\Models\Teacher;

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
    $slides = Slide::all();
    $cours = Cour::all();
    $services = Service::all();
    $banners = Banner::all();
    $teachers = Teacher::all();
    return view('welcome', compact('banners' , 'services', 'cours', 'teachers'));
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
    return view('back.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';





// User
Route::get('/back/users', [UserController::class, 'index'])->name('user.index');
Route::get('/back/users/create', [UserController::class, 'create'])->name('user.create');
Route::post('/back/users/store', [UserController::class, 'store'])->name('user.store');
Route::get('/back/users/{id}/read', [UserController::class, 'read'])->name('user.read');
Route::get('/back/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::post('/back/users/{id}/update', [UserController::class, 'update'])->name('user.update');
Route::post('/back/users/{id}/delete', [UserController::class, 'destroy'])->name('user.destroy');
// Role
Route::get('/back/roles', [RoleController::class, 'index'])->name('role.index');
Route::get('/back/roles/create', [RoleController::class, 'create'])->name('role.create');
Route::post('/back/roles/store', [RoleController::class, 'store'])->name('role.store');
Route::get('/back/roles/{id}/edit', [RoleController::class, 'edit'])->name('role.edit');
Route::post('/back/roles/{id}/update', [RoleController::class, 'update'])->name('role.update');
Route::post('/back/roles/{id}/delete', [RoleController::class, 'destroy'])->name('role.destroy');
// Banner
Route::get('/back/banners', [BannerController::class, 'index'])->name('banner.index');
Route::get('/back/banners/create', [BannerController::class, 'create'])->name('banner.create');
Route::post('/back/banners/store', [BannerController::class, 'store'])->name('banner.store');
Route::get('/back/banners/{id}/read', [BannerController::class, 'read'])->name('banner.read');
Route::get('/back/banners/{id}/edit', [BannerController::class, 'edit'])->name('banner.edit');
Route::post('/back/banners/{id}/update', [BannerController::class, 'update'])->name('banner.update');
Route::post('/back/banners/{id}/delete', [BannerController::class, 'destroy'])->name('banner.destroy');
// Service
Route::get('/back/services', [ServiceController::class, 'index'])->name('service.index');
Route::get('/back/services/create', [ServiceController::class, 'create'])->name('service.create');
Route::post('/back/services/store', [ServiceController::class, 'store'])->name('service.store');
Route::get('/back/services/{id}/read', [ServiceController::class, 'read'])->name('service.read');
Route::get('/back/services/{id}/edit', [ServiceController::class, 'edit'])->name('service.edit');
Route::post('/back/services/{id}/update', [ServiceController::class, 'update'])->name('service.update');
Route::post('/back/services/{id}/delete', [ServiceController::class, 'destroy'])->name('service.destroy');
// Cour
Route::get('/back/cours', [CourController::class, 'index'])->name('cour.index');
Route::get('/back/cours/create', [CourController::class, 'create'])->name('cour.create');
Route::post('/back/cours/store', [CourController::class, 'store'])->name('cour.store');
Route::get('/back/cours/{id}/read', [CourController::class, 'read'])->name('cour.read');
Route::get('/back/cours/{id}/edit', [CourController::class, 'edit'])->name('cour.edit');
Route::post('/back/cours/{id}/update', [CourController::class, 'update'])->name('cour.update');
Route::post('/back/cours/{id}/delete', [CourController::class, 'destroy'])->name('cour.destroy');
Route::get('/front/pages/{id}/coursesShow', [CourController::class, 'singleshow'])->name('cour.singleshow');
// Slide
Route::get('/back/slides', [SlideController::class, 'index'])->name('slide.index');
Route::get('/back/slides/create', [SlideController::class, 'create'])->name('slide.create');
Route::post('/back/slides/store', [SlideController::class, 'store'])->name('slide.store');
Route::get('/back/slides/{id}/read', [SlideController::class, 'read'])->name('slide.read');
Route::get('/back/slides/{id}/edit', [SlideController::class, 'edit'])->name('slide.edit');
Route::post('/back/slides/{id}/update', [SlideController::class, 'update'])->name('slide.update');
Route::post('/back/slides/{id}/delete', [SlideController::class, 'destroy'])->name('slide.destroy');
// Teacher
Route::get('/back/teachers', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('/back/teachers/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('/back/teachers/store', [TeacherController::class, 'store'])->name('teacher.store');
Route::get('/back/teachers/{id}/read', [TeacherController::class, 'read'])->name('teacher.read');
Route::get('/back/teachers/{id}/edit', [TeacherController::class, 'edit'])->name('teacher.edit');
Route::post('/back/teachers/{id}/update', [TeacherController::class, 'update'])->name('teacher.update');
Route::post('/back/teachers/{id}/delete', [TeacherController::class, 'destroy'])->name('teacher.destroy');
Route::get('/front/pages/{id}/TeacherShow', [TeacherController::class, 'singleTeacher'])->name('teacher.singleshow');


// Social
Route::get('/back/socials', [SocialController::class, 'index'])->name('social.index');
Route::get('/back/socials/create', [SocialController::class, 'create'])->name('social.create');
Route::post('/back/socials/store', [SocialController::class, 'store'])->name('social.store');
Route::get('/back/socials/{id}/read', [SocialController::class, 'read'])->name('social.read');
Route::get('/back/socials/{id}/edit', [SocialController::class, 'edit'])->name('social.edit');
Route::post('/back/socials/{id}/update', [SocialController::class, 'update'])->name('social.update');
Route::post('/back/socials/{id}/delete', [SocialController::class, 'destroy'])->name('social.destroy');
