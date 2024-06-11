<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentAuthController;

// Set the default route to redirect to frontend.home
Route::get('/', function () {
    return redirect()->route('frontend.home');
});

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
