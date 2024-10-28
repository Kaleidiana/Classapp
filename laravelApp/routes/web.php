<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController; // Fixed typo
use App\Http\Controllers\OrderController; // Ensure this is imported
use App\Http\Controllers\CategoryController; // Ensure this is imported
use App\Http\Controllers\CustomerController; // Ensure this is imported
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/products', ProductController::class);
Route::resource('/services', ServiceController::class); // Fixed typo
Route::resource('/orders', OrderController::class);
Route::resource('/categories', CategoryController::class);
Route::resource('/customers', CustomerController::class);
