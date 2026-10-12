<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;


// Route::get('/products', [ProductController::class,'index']);

// Route::get('/', function () {
//     return redirect()->route('products.index');
// });
Route::resource('products', ProductController::class);
Route::resource('contact', ContactController::class);