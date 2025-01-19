<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReceiptController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/addproduct', [PageController::class, 'addproduct'])->name('addproduct');
Route::post('/products', [ProductController::class, 'store'])->name('storeProduct');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('productDetails');
Route::get('/thank-you', [ProductController::class, 'thankyou'])->name('thankyou');



