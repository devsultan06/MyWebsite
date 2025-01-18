<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/addproduct', [PageController::class, 'addproduct'])->name('addproduct');
Route::post('/addproduct', [ProductController::class, 'store'])->name('storeProduct');
