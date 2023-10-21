<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\PackageController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;


// Backend Route

Route::view('/admin', 'backend/dashboard') -> name('dashboard');

Route::get('admin/package',[PackageController::class,'index']);
Route::get('admin/package/add',[PackageController::class,'add']);
Route::post('admin/package/insert',[PackageController::class,'insert']);
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
Route::get('admin/booking',[BookingController::class,'booking'])-> name('booking');
Route::get('/payment',[PaymentController::class,'payment'])-> name('payment');


// --------------------------------------------------------------

// Frontend Route
Route::get('/',[HomeController::class,'index']);
Route::get('/package',[HomeController::class,'package']);
Route::get('/booking',[HomeController::class,'booking']);

Route::get('/payment',[HomeController::class,'payment']);
Route::get('/checkout',[HomeController::class,'checkout']);
Route::get('/invoice',[HomeController::class,'invoice']);


Route::get('/service',[HomeController::class,'service']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/contact',[HomeController::class,'contact']);





