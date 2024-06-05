<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', [ProductController::class, 'home'])->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/help', function () {
    return view('help');
})->name('help');

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/orders', function () {
    return view('orders');
});

Route::get('/gundam', [ProductController::class, 'gundam'])->name('goods.gundam');

Route::get('product', [ProductController::class, 'product'])->name('products.product');
Route::get('management', [ProductController::class, 'management'])->name('products.management');