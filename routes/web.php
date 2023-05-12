<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('pages.welcome');
});

Route::get('/hoi', function () {
    return '<h2> hoii </h2>
    <p> como estas? <p>';
    // echo "hoiii";
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/users/{name}', function ($name) {
    echo 'Hello '.$name;
});

// Route::get('/register', function () {
//     return view('registration');
// });

Route::get('/register', [RegisterController::class, 'showRegForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

// use App\Http\Controllers\ProductController;


// Route::resource('products', ProductController::class);