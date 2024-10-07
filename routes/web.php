<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});


//untuk berhubungan dengan authcontroller 
Route::post('/register', [CustomerController::class, 'register']);
Route::post('/login', [CustomerController::class, 'login'])->name('login');
// Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:customer');
