<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController; 
use App\Http\Controllers\ProductController;

 Route::get('/', function () {
     return view('welcome');
 }); 

// Esto es para crear un crud basico 
Route::resource('category', CategoryController::class);
Route::resource('product', ProductController::class);

