<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\SiteController;

// Site home and contact page routes
Route::controller(SiteController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/contact', 'contact')->name('contact.page');
    Route::get('/services/editing', 'editing')->name('services.editing');
    Route::get('/services/book-cover-design', 'bookCoverDesign')->name('services.bookCover');
    Route::get('/services/publishing', 'publishing')->name('services.publishing');
});

// Password reset link request form route
Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])
    ->name('password.request');


// Authentication routes
Auth::routes();

// Include admin route file
include('admin.php');
