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
});
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
       return view('admin.home');
    });
    Route::get('/user/', function () {
       return view('admin.list_user');
    });
    Route::get('/create-user/', function () {
       return view('admin.create_user');
    });
    Route::get('/edit-user/', function () {
       return view('admin.edit_user');
    });
    Route::get('/detail-user/', function () {
       return view('admin.detail_user');
    });
    Route::get('/create-account/', function () {
       return view('admin.create_account');
    });
    Route::get('/edit-account/', function () {
       return view('admin.edit_account');
    });
    Route::get('/account/', function () {
       return view('admin.list_account');
    });
    Route::get('/employee/', function () {
       return view('admin.list_employee');
    });
    Route::get('/create-employee/', function () {
       return view('admin.create_employee');
    });
    Route::get('/edit-employee/', function () {
       return view('admin.edit_employee');
    });
    Route::get('/detail-employee/', function () {
       return view('admin.detail_employee');
    });
    Route::get('/room/', function () {
       return view('admin.list_room');
    });
    Route::get('/create-room/', function () {
       return view('admin.create_room');
    });
    Route::get('/edit-room/', function () {
       return view('admin.edit_room');
    });
    Route::get('/detail-room/', function () {
       return view('admin.detail_room');
    });
    Route::get('/booking/', function () {
       return view('admin.list_booking');
    });
    Route::get('/create-booking/', function () {
       return view('admin.create_booking');
    });
    Route::get('/edit-booking/', function () {
       return view('admin.edit_booking');
    });
    Route::get('/detail-booking/', function () {
       return view('admin.detail_booking');
    });
    Route::get('/confirm-booking/', function () {
       return view('admin.confirm_list_booking');
    });
    Route::get('/billing/', function () {
       return view('admin.list_billing');
    });
    Route::get('/create-billing/', function () {
       return view('admin.create_billing');
    });
    Route::get('/edit-billing/', function () {
       return view('admin.edit_billing');
    });
    Route::get('/detail-billing/', function () {
       return view('admin.detail_billing');
    });
    Route::get('/device/', function () {
       return view('admin.list_device');
    });
    Route::get('/create-device/', function () {
       return view('admin.create_device');
    });
    Route::get('/edit-device/', function () {
       return view('admin.edit_device');
    });
    Route::get('/detail-device/', function () {
       return view('admin.detail_device');
    });
    Route::get('/service/', function () {
       return view('admin.list_service');
    });
    Route::get('/create-service/', function () {
       return view('admin.create_service');
    });
    Route::get('/edit-service/', function () {
       return view('admin.edit_service');
    });
    Route::get('/detail-service/', function () {
       return view('admin.detail_service');
    });
    Route::get('/userofroom/', function () {
       return view('admin.list_user_of_room');
    });
    Route::get('/create-userofroom/', function () {
       return view('admin.create_user_of_room');
    });
    Route::get('/edit-userofroom/', function () {
       return view('admin.edit_user_of_room');
    });
    Route::get('/deviceofroom/', function () {
       return view('admin.list_device_of_room');
    });
    Route::get('/create-deviceofroom/', function () {
       return view('admin.create_device_of_room');
    });
    Route::get('/edit-deviceofroom/', function () {
       return view('admin.edit_device_of_room');
    });
    Route::get('/image/', function () {
       return view('admin.list_image');
    });
    Route::get('/create-image/', function () {
       return view('admin.create_image');
    });
    Route::get('/edit-image/', function () {
       return view('admin.edit_image');
    });
    Route::get('/typeroom/', function () {
       return view('admin.list_type_room');
    });
    Route::get('/create-typeroom/', function () {
       return view('admin.create_type_room');
    });
    Route::get('/edit-typeroom/', function () {
       return view('admin.edit_type_room');
    });

});
