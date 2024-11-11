<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


//halaman home
Route::get('/home', function () {
    return view('home');
});

//halaman product
Route::get('/product', function () {
    return view('product');
});

//halaman contact
Route::get('/contact', function () {
    return view('contact');
});

//halaman product hotel
Route::get('/product_hotel', function () {
    return view('product_hotel');
});

//halaman product villa
Route::get('/product_villa', function () {
    return view('product_villa');
});

//halaman product pesawat
Route::get('/product_pesawat', function () {
    return view('product_pesawat');
});

