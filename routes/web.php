<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Existing home route
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [PageController::class, 'about'])->name('about');
