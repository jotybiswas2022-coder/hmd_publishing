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
    Route::middleware('auth')->group(function () {
        Route::get('/checkout', 'checkout')->name('checkout');
        Route::get('/checkout/payment', 'payment')->name('checkout.payment');
    });
    Route::post('/contact', 'storeContact')->name('contact.submit');
});

// Dynamic service page route (DB-driven)
Route::get('/services/{slug}', [SiteController::class, 'servicePage'])->name('services.show');

// Order placement (payment form submit) and confirmation
Route::post('/checkout/payment', [OrderController::class, 'store'])->middleware('auth')->name('order.store');
Route::get('/order/success/{order}', [OrderController::class, 'success'])->name('order.success');

// My Orders (frontend)
Route::middleware('auth')->group(function () {
    Route::get('/my-orders', [OrderController::class, 'myOrders'])->name('my-orders');
    Route::get('/my-orders/{order}', [OrderController::class, 'myOrderShow'])->name('my-order.show');
});

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
