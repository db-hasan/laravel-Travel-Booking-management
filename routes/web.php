<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\backend\BookingController;
use App\Http\Controllers\backend\PackageController;
use App\Http\Controllers\backend\PromoController;



// Backend Route

Route::view('/admin', 'backend/dashboard/dashboard') -> name('dashboard');
Route::view('/dame', 'backend/dame/index');

Route::get('admin/package',[PackageController::class,'index']);
Route::get('admin/package/create',[PackageController::class,'create']);
Route::post('admin/package/store',[PackageController::class,'store']);
Route::get('package/edit/{pack_id}',[PackageController::class,'edit']);
Route::post('package/update/{pack_id}',[PackageController::class,'update']);
Route::get('package/show/{pack_id}',[PackageController::class,'show']);
Route::get('package/destroy/{pack_id}',[PackageController::class,'destroy']);

Route::get('admin/booking',[BookingController::class,'index']);
Route::get('admin/booking/create',[BookingController::class,'create']);
Route::post('admin/booking/store',[BookingController::class,'store']);
Route::get('booking/edit/{book_id}',[BookingController::class,'edit']);
Route::post('booking/update/{book_id}',[BookingController::class,'update']);
Route::get('booking/show/{book_id}',[BookingController::class,'show']);
Route::get('booking/destroy/{book_id}',[BookingController::class,'destroy']);

Route::get('admin/promo',[PromoController::class,'index']);
Route::get('admin/promo/create',[PromoController::class,'create']);
Route::post('admin/promo/store',[PromoController::class,'store']);
Route::get('promo/edit/{promo_id}',[PromoController::class,'edit']);
Route::post('promo/update/{promo_id}',[PromoController::class,'update']);
Route::get('promo/show/{promo_id}',[PromoController::class,'show']);
Route::get('promo/destroy/{promo_id}',[PromoController::class,'destroy']);

Route::get('',[BookingController::class,'index']);
Route::get('',[BookingController::class,'create']);
Route::post('',[BookingController::class,'store']);
Route::get('',[BookingController::class,'edit']);
Route::post('',[BookingController::class,'update']);
Route::get('',[BookingController::class,'show']);
Route::get('',[BookingController::class,'delete']);



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





