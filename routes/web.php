<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']
);

Route::get('/cart', [HomeController::class, 'cart']
);

Route::get('/products', function () {
    return 'Ini adalah route products';
});

Route::get('/checkout', function () {
    return 'Ini adalah route checkout';
});

Route::resource('products-resource', ProductController::class);
