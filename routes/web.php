<?php

use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {
    return view('home');
});

// Product listing
Route::get('/products', function () {
    return view('products.index');
})->name('products');

// Product detail (sample id, not dynamic)
Route::get('/products/{id}', function ($id) {
    return view('products.show');
})->name('product.show');

// Cart page
Route::get('/cart', function () {
    return view('cart');
})->name('cart');

// Checkout page
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

// Login page
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Register page
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
