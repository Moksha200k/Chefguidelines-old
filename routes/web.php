<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;


// Display pages
Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/jobs', function () {
    return view('jobpage');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

// After registering, redirect to dashboard.
Route::get('/home', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

// Show employer registration form
Route::get('/employerRegister', function () {
    return view('employerLayout/employerRegister');
});

// Handle employer registration submission
Route::post('/employerRegister', [RegisterController::class, 'register'])->name('employer.register');

// Logout Route
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

// Profile Routes
Route::middleware('auth')->group(function () {
    // Profile Edit
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

    // Profile Update
    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    // Profile Destroy
    Route::delete('/profile/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Login route
Route::post('/login', [LoginController::class, 'login'])->name('login');

// Password Reset Routes
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
