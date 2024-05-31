<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
