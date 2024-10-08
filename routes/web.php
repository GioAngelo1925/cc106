<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminLoginController;



// Public routes
Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/appointment', function () {
    return view('appointment');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/price', function () {
    return view('price');
});

// Login routes for users
Route::get('/login', function () {
    return view('login');
});




