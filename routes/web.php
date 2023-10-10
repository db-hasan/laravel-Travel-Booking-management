<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


// Frontend Route Start
Route::view('/home', 'frontend/home')-> name('home');

// Frontend Route End

// --------------------------------------------------------------

// Backend Route Start

Route::view('/', 'backend/dashboard') -> name('dashboard');
Route::get('/users',[UserController::class,'users'])-> name('newuser');

// Backend Route End


