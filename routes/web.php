<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('halamanUtama');


});

Route::get('/pesan', function (){
    return view ('halamanPesan');
});

Route::get('/login', function (){
    return view ('login');
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