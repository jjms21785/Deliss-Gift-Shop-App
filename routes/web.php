<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('pages/homepage');
});

Route::get('/shopping', function () {
    return view('pages.shoppingpage');
})->name('shopping');

Route::get('/aboutus', function () {
    return view('pages.aboutuspage');
})->name('aboutus');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::post('/products/{id}/toggle-like', [ProductController::class, 'toggleLike'])->name('products.toggle-like');