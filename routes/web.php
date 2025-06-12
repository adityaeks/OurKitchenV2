<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MealBoxController;

Route::get('/', function () {
    return view('home');
});
Route::get('/product1', function () {
    return view('pages.tumpeng-nasi-liwet');
});
Route::get('/product2', [ProductController::class, 'dailyCatering']);
Route::get('/product3', function () {
    return view('pages.prasmanan-buffet');
});
Route::get('/product4', function () {
    return view('pages.meal-box');
});
Route::get('/daily-home-catering', [ProductController::class, 'dailyCatering'])->name('daily-home-catering');
Route::get('/meal-box', [ProductController::class, 'mealBox'])->name('meal-box');
Route::get('/tumpeng-nasi-liwet', [ProductController::class, 'tumpengNasiLiwet'])->name('tumpeng-nasi-liwet');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/cart', function () {
    return view('pages.cart');
});
