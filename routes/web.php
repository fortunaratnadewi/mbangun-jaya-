<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('customer.halamanUtama');


});

Route::get('/pesan', function (){
    return view ('customer.halamanPesan');
});

Route::get('/login', function (){
    return view ('customer.login');
});

Route::get('/register', function (){
    return view ('customer.register');
});  

Route::get('/success', function (){
    return view ('customer.successRegister');
});   

Route::get('/checkout', function (){
    return view ('customer.checkout');
});   
Route::get('/alamat', function (){
    return view ('customer.alamat');
});