<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Ini adalah route utama';
});

Route::get('/products', function () {
    return 'Ini adalah route products';
});

Route::get('/cart', function () {
    return 'Ini adalah route cart';
});

Route::get('/checkout', function () {
    return 'Ini adalah route checkout';
});

Route::resource('products-resource', ProductController::class);