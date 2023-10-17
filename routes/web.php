<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;


// Backend Route

Route::view('/admin', 'backend/dashboard') -> name('dashboard');

Route::get('crud', [CrudController::class, 'all']);

Route::post('crud/insert', [CrudController::class, 'insert']);

Route::get('crud/edit/{id}', [CrudController::class, 'edit']);
Route::post('crud/update/{id}', [CrudController::class, 'update']);

Route::get('crud/show/{id}', [CrudController::class, 'show']);
Route::get('crud/delete/{id}', [CrudController::class, 'delete']);


Route::get('/users',[UserController::class,'users'])->name('users');
Route::get('/package',[PackageController::class,'package'])-> name('package');
Route::get('/booking',[BookingController::class,'booking'])-> name('booking');
Route::get('/payment',[PaymentController::class,'payment'])-> name('payment');


// --------------------------------------------------------------

// Frontend Route
Route::view('/', 'frontend/home')-> name('home');



