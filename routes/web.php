<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('customer.halamanUtama');


});

Route::get('/pesan1', function (){
    return view ('customer.halamanPesan1');
});

Route::get('/pesan2', function (){
    return view ('customer.halamanPesan2');
});

Route::get('/pesan3', function (){
    return view ('customer.halamanPesan3');
});

Route::get('/pesan4', function (){
    return view ('customer.halamanPesan4');
});

Route::get('/pesan5', function (){
    return view ('customer.halamanPesan5');
});
Route::get('/pesan6', function (){
    return view ('customer.halamanPesan6');
});
Route::get('/pesan7', function (){
    return view ('customer.halamanPesan7');
});
Route::get('/pesan8', function (){
    return view ('customer.halamanPesan8');
});
Route::get('/pesan9', function (){
    return view ('customer.halamanPesan9');
});
Route::get('/pesan10', function (){
    return view ('customer.halamanPesan10');
});
Route::get('/pesan11', function (){
    return view ('customer.halamanPesan11');
});
Route::get('/pesan12', function (){
    return view ('customer.halamanPesan12');
});
Route::get('/pesan13', function (){
    return view ('customer.halamanPesan13');
});
Route::get('/pesan14', function (){
    return view ('customer.halamanPesan14');
});
Route::get('/pesan15', function (){
    return view ('customer.halamanPesan15');
});
Route::get('/pesan16', function (){
    return view ('customer.halamanPesan16');
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

