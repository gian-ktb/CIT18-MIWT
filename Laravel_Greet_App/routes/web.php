<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;

// Default homepage route (optional)
Route::get('/', function () {
    return view('welcome');
});

// First route: Directly return a message
Route::get('/hello', function () {
    return 'Hello, Laravel!';
});

// Second route: Calls the GreetController to return a Blade view
Route::get('/greet', [GreetController::class, 'index']);