<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('products', ProductController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
//Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
