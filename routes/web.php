<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController; 

 Route::get('/', function () {
     return view('welcome');
 }); 

// Esto es para crear un crud basico 
Route::resource('category', CategoryController::class);


