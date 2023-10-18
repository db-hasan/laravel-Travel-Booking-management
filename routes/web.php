<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\PackageController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;


// Backend Route

Route::view('/admin', 'backend/dashboard') -> name('dashboard');

Route::get('/package',[PackageController::class,'index']);
Route::get('package/add',[PackageController::class,'add']);
Route::post('package/insert',[PackageController::class,'insert']);
Route::get('package/edit/{id}',[PackageController::class,'edit']);
Route::post('package/update/{id}',[PackageController::class,'update']);
Route::get('package/show/{id}',[PackageController::class,'show']);
Route::get('package/delete/{id}',[PackageController::class,'delete']);


Route::get('',[PackageController::class,'index']);
Route::get('',[PackageController::class,'add']);
Route::post('',[PackageController::class,'insert']);
Route::get('',[PackageController::class,'edit']);
Route::post('',[PackageController::class,'update']);
Route::get('',[PackageController::class,'show']);
Route::get('',[PackageController::class,'delete']);


Route::get('/users',[UserController::class,'users'])->name('users');
Route::get('/booking',[BookingController::class,'booking'])-> name('booking');
Route::get('/payment',[PaymentController::class,'payment'])-> name('payment');


// --------------------------------------------------------------

// Frontend Route
Route::get('/',[HomeController::class,'index']);
Route::get('/packages',[HomeController::class,'package']);
Route::get('/checkout',[HomeController::class,'checkout']);



