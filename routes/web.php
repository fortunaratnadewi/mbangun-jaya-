<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('halamanUtama');
});

Route::get('/pesan', function (){
    return view ('halamanPesan');
});

Route::get('/login', function (){
    return view ('login');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function (){
    return view ('register');
});  

Route::get('/success', function (){
    return view ('successRegister');
});   
Route::get('/checkout', function (){
    return view ('checkout');
});  

//untuk berhubungan dengan authcontroller 
Route::post('/register', [CustomerController::class, 'register']);
Route::post('/login', [CustomerController::class, 'login'])->name('login');
// Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:customer');
