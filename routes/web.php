<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('layout/master');
})->name('welcome');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'processLogin'])->name('process_login');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registering'])->name('registering');

Route::get('logout',[AuthController::class,'logout'])->name('logout');

Route::get('/auth/redirect/{provider}', function ($provider) {
    return Socialite::driver($provider)->redirect();
})->name('auth.redirect');

Route::get('/auth/callback/{provider}', [AuthController::class, 'callback'])->name('auth.callback');
 
Route::resource('admins', AdminController::class)->except(['show', 'destroy']);
Route::resource('lecturers', LecturerController::class)->except(['show', 'destroy']);
Route::resource('students', StudentController::class)->except(['show', 'destroy']);

