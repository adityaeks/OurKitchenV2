<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/product1', function () {
    return view('pages.tumpeng-nasi-liwet');
});
Route::get('/product2', function () {
    return view('pages.daily-home-catering');
});
Route::get('/product3', function () {
    return view('pages.prasmanan-buffet');
});
Route::get('/product4', function () {
    return view('pages.meal-box');
});
Route::get('/product-detail', function () {
    return view('pages.product-detail');
});
