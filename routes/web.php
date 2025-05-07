<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/product', function () {
    return view('pages.product');
});
Route::get('/product-detail', function () {
    return view('pages.product-detail');
});
