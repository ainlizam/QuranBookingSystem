<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentAuthController;
use App\Http\Controllers\BookingController;


// Set the default route to redirect to frontend.home
Route::get('/', function () {
    return redirect()->route('frontend.home');
});
//Route bookings input from BookingController
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

// web.php
Route::get('/', function () {
    return view('frontend.home');
})->name('home');

// Home route, accessible after login
Route::get('/home', function () {
    return view('frontend.home');
})->name('frontend.home');

Route::get('/booking', function () {
    return view('frontend.bview');
})->name('frontend.bview');

// Custom student authentication routes
Route::get('student/register', [StudentAuthController::class, 'showRegistrationForm'])->name('student.register');
Route::post('student/register', [StudentAuthController::class, 'register']);
Route::get('student/login', [StudentAuthController::class, 'showLoginForm'])->name('student.login');
Route::post('student/login', [StudentAuthController::class, 'login']);
Route::post('student/logout', [StudentAuthController::class, 'logout'])->name('student.logout');

// Middleware group for authenticated routes
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//Route::get('/bookings', [BookingController::class,'index']);
//Route::resource('bookings.store', BookingController::class);
