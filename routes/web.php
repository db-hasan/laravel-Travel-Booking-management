<?php
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('frontend/home');
});

Route::get('/', function () {
return view('backend/dashboard');
});
