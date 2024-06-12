<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentAuthController;
use App\Http\Controllers\BookingController;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;


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

// routes add class button to booking view
Route::get('/add-class', [BookingController::class, 'showAddClassForm'])->name('frontend.bview');

// routes to drop class
//Route::delete('/classes/{id}', [BookingController::class, 'destroy'])->name('classes.destroy');
//Route::get('/frontend/bview', [FrontendController::class, 'bview'])->name('frontend.bview');

// Custom student authentication routes
Route::get('student/register', [StudentAuthController::class, 'showRegistrationForm'])->name('student.register');
Route::post('student/register', [StudentAuthController::class, 'register']);
Route::get('student/login', [StudentAuthController::class, 'showLoginForm'])->name('student.login');
Route::post('student/login', [StudentAuthController::class, 'login']);
Route::post('student/logout', [StudentAuthController::class, 'logout'])->name('student.logout');

// Middleware group for authenticated routes
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        // Fetch bookings of the authenticated user
        $bookings = Booking::where('email', Auth::user()->email)->get();

        // Pass the bookings to the dashboard view
        return view('dashboard', ['bookings' => $bookings]);
    })->name('dashboard');
});


//Route::get('/bookings', [BookingController::class,'index']);
//Route::resource('bookings.store', BookingController::class);
