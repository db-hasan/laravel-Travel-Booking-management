<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;


// Backend Route

Route::view('/', 'backend/dashboard') -> name('dashboard');

Route::get('crud', [CrudController::class, 'index']);
Route::get('crud/add', [CrudController::class, 'add']);
Route::get('crud/edit', [CrudController::class, 'edit']);


Route::get('/users',[UserController::class,'users'])->name('users');
Route::get('/location',[LocationController::class,'location'])->name('location');
Route::get('/package',[PackageController::class,'package'])-> name('package');
Route::get('/booking',[BookingController::class,'booking'])-> name('booking');
Route::get('/payment',[PaymentController::class,'payment'])-> name('payment');


// --------------------------------------------------------------

// Frontend Route
Route::view('/home', 'frontend/home')-> name('home');



