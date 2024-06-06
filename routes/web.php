<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'home']);

Route::get('/home', [ProductController::class, 'home'])->name('home');


// Public routes
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/help', function () {
    return view('help');
})->name('help');

// Authentication routes
Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::get('/booking', function () {
        return view('booking');
    })->name('booking');

    Route::get('/orders', function () {
        return view('orders');
    })->name('orders');

    Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
    Route::post('/checkout', [ProductController::class, 'checkout'])->name('checkout');
    Route::post('/checkout/confirm', [ProductController::class, 'confirmCheckout'])->name('checkout.confirm');


    Route::get('/service/product/gundam', [ProductController::class, 'gundam'])->name('goods.gundam');
    Route::get('product', [ProductController::class, 'product'])->name('products.product');
    Route::get('management', [ProductController::class, 'management'])->name('products.management');
    Route::get('/products/add', [ProductController::class, 'add'])->name('products.add');
    Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/update/{id}', [ProductController::class, 'update'])->name('products.update');
});


require __DIR__.'/auth.php'; // Ensure you have the auth routes included

// Add these if not already present in auth.php
Auth::routes();

Auth::routes();
