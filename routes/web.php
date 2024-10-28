<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController; 

// Esto es para crear un crud basico 
Route::resource('category', CategoryController::class);


