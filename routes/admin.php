<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('admin.login');
Route::get('logout',[LoginController::class,'logout'])->name('admin.logout');
Route::match(['get', 'post'], '/register', [RegisterController::class, 'register'])->name('admin.register');
Route::middleware('auth:admin')->group(function (){
    Route::get('/home', [HomeController::class, 'index'])->name('dashboard');
});