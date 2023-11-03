<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\frontend\PackController;
use App\Http\Controllers\frontend\BookController;
use App\Http\Controllers\frontend\PaymentController;


use App\Http\Controllers\backend\BookingController;
use App\Http\Controllers\backend\PackageController;
use App\Http\Controllers\backend\PromoController;
use App\Http\Controllers\backend\BundleController;
use App\Http\Controllers\backend\ExpenseController;



// Frontend Route
Route::get('/',[HomeController::class,'index']);

Route::get('/package',[PackController::class,'package']);
Route::post('package/store/step-1',[PackController::class,'store1']);
Route::post('package/store/step-2',[PackController::class,'store2']);


Route::get('/booking',[BookController::class,'booking']);
Route::post('booking/store',[BookController::class,'store']);

Route::get('/payment',[PaymentController::class,'payment']);
Route::post('payment/store',[PaymentController::class,'store']);

// Backend Route

Route::view('/admin', 'backend/dashboard/dashboard') -> name('dashboard');

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

Route::get('admin/bundle',[BundleController::class,'index']);
Route::get('admin/bundle/create',[BundleController::class,'create']);
Route::post('admin/bundle/store',[BundleController::class,'store']);
Route::get('bundle/edit/{bundle_id}',[BundleController::class,'edit']);
Route::post('bundle/update/{bundle_id}',[BundleController::class,'update']);
Route::get('bundle/show/{bundle_id}',[BundleController::class,'show']);
Route::get('bundle/destroy/{bundle_id}',[BundleController::class,'destroy']);

Route::get('admin/expense',[ExpenseController::class,'index']);
Route::get('admin/expense/create',[ExpenseController::class,'create']);
Route::post('admin/expense/store',[ExpenseController::class,'store']);
Route::get('expense/edit/{expense_id}',[ExpenseController::class,'edit']);
Route::post('expense/update/{expense_id}',[ExpenseController::class,'update']);
Route::get('expense/show/{pack_id}',[ExpenseController::class,'show']);
Route::get('expense/destroy/{expense_id}',[ExpenseController::class,'destroy']);


// --------------------------------------------------------------

Route::get('/checkout',[HomeController::class,'checkout']);
Route::get('/invoice',[HomeController::class,'invoice']);
Route::get('/service',[HomeController::class,'service']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/contact',[HomeController::class,'contact']);





