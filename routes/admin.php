<?php

use App\Http\Controllers\Admin\DepartmentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    view()->share('title', "Trang chủ");
    return view('admin.index');
})->name('welcome');

Route::group(
    [
        'as' => 'departments.',
        'prefix' => 'departments',
    ],
    static function () {
        Route::get('/', [DepartmentController::class, 'index'])->name('index');
    }
);
