<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\RoomController;
use App\Http\Controllers\User\BookingController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['namespace' => 'user'], function() {
    Route::get('/',[HomeController::class, 'index'])->name('users.index');
    Route::get('rooms',[RoomController::class, 'index'])->name('rooms.index');
    Route::get('rooms/create',[RoomController::class, 'create'])->name('rooms.create');
    Route::get('rooms/{id}',[RoomController::class, 'show'])->name('rooms.show');
    Route::get('bookings',[BookingController::class, 'index'])->name('bookings.index');
});


Route::prefix('admin')->group(function () {
    Route::get('/', function () {
       return view('welcome');
    });
});
