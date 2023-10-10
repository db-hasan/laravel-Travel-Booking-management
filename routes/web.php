<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


// Backend Route

Route::view('/', 'backend/dashboard') -> name('dashboard');
Route::get('/users',[UserController::class,'users'])-> name('users');


// --------------------------------------------------------------

// Frontend Route
Route::view('/home', 'frontend/home')-> name('home');



