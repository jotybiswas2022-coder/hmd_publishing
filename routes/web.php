<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PortfolioItemController;
use App\Http\Controllers\SiteController;

// Site home and contact page routes
Route::controller(SiteController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/about', 'about')->name('about');
    Route::get('/tools', 'tools')->name('tools');
    Route::get('/portfolio', 'portfolio')->name('portfolio');
    Route::get('/services', 'services')->name('services');
    Route::get('/contact', 'contact')->name('contact.page');
    Route::get('/checkout', 'checkout')->name('checkout');
    Route::get('/checkout/payment', 'payment')->name('checkout.payment');
    Route::post('/contact', 'storeContact')->name('contact.submit');
    Route::get('/services/book-writing', 'bookWriting')->name('services.bookWriting');
    Route::get('/services/book-writing/checkout', 'bookWritingCheckout')->name('services.bookWritingCheckout');
    Route::get('/services/editing', 'editing')->name('services.editing');
    Route::get('/services/editing/checkout', 'editingCheckout')->name('services.editingCheckout');
    Route::get('/services/book-cover-design', 'bookCoverDesign')->name('services.bookCover');
    Route::get('/services/publishing', 'publishing')->name('services.publishing');
});

// Order placement (payment form submit) and confirmation
Route::post('/checkout/payment', [OrderController::class, 'store'])->name('order.store');
Route::get('/order/success/{order}', [OrderController::class, 'success'])->name('order.success');

// Auto-generated SVG book cover for portfolio items without an image
Route::get('/portfolio/cover/{item}', [PortfolioItemController::class, 'cover'])->name('portfolio.cover');

// Portfolio item detail page
Route::get('/portfolio/{item}', [SiteController::class, 'portfolioShow'])->name('portfolio.show');

// Password reset link request form route
Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])
    ->name('password.request');


// Authentication routes
Auth::routes();

// Include admin route file
include('admin.php');
