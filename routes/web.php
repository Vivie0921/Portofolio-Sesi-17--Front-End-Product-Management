<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoryController;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class, 'index']);

Route::resource('product', ProductController::class);
Route::resource('product-category', ProductCategoryController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::delete('/product/{id}', [ProductController::class, 'destroy'])
->name('product.destroy');

Route::get('/product/tambah', [ProductController::class, 'create'])
->name('product-tambah');

Route::get('/product/edit/{id}', [ProductCategoryController::class, 'edit'])
->name('product-edit');

Route::delete('/product/hapus/{id}', [ProductCategoryController::class, 'destroy'])
->name('product-hapus');

Route::get('product-tambah', function(){
    return view('product.tambah');
})->name('product-tambah');

Route::get('/product-category-tambah', function (){
    return view('product-category.tambah');
})->name('product-category-tambah');

Route::get('/product-category-edit', function (){
    return view('product-category.edit');
})->name('product-category-edit');

Route::get('/product-category/edit/{id}', [ProductCategoryController::class, 'edit'])
->name('product-category-edit');

Route::delete('/product-category/hapus/{id}', [ProductCategoryController::class, 'destroy'])
->name('product-category-hapus');

Route::post('/product-category', [ProductCategoryController::class, 'store'])
->name('product-category.store');

Route::put('/product-category/{id}', [ProductCategoryController::class, 'update'])
->name('product-category.update');

require __DIR__.'/auth.php';