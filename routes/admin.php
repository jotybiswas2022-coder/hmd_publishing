<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\AddonController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PortfolioItemController;
use App\Http\Controllers\GenreController;

Route::prefix('admin')->middleware('admin')->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

    Route::get('/plans', [PlanController::class, 'index'])->name('plans.index');
    Route::get('/plans/create', [PlanController::class, 'create'])->name('plans.create');
    Route::post('/plans', [PlanController::class, 'store'])->name('plans.store');
    Route::get('/plans/{plan}/edit', [PlanController::class, 'edit'])->name('plans.edit');
    Route::put('/plans/{plan}', [PlanController::class, 'update'])->name('plans.update');
    Route::delete('/plans/{plan}', [PlanController::class, 'destroy'])->name('plans.destroy');

    Route::get('/addons', [AddonController::class, 'index'])->name('addons.index');
    Route::get('/addons/create', [AddonController::class, 'create'])->name('addons.create');
    Route::post('/addons', [AddonController::class, 'store'])->name('addons.store');
    Route::get('/addons/{addon}/edit', [AddonController::class, 'edit'])->name('addons.edit');
    Route::put('/addons/{addon}', [AddonController::class, 'update'])->name('addons.update');
    Route::delete('/addons/{addon}', [AddonController::class, 'destroy'])->name('addons.destroy');

    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
    Route::patch('/orders/{order}/status', [OrderController::class, 'updateStatus'])->name('orders.status');
    Route::delete('/orders/{order}', [OrderController::class, 'destroy'])->name('orders.destroy');

    Route::get('/portfolio', [PortfolioItemController::class, 'index'])->name('portfolio.items.index');
    Route::get('/portfolio/create', [PortfolioItemController::class, 'create'])->name('portfolio.items.create');
    Route::post('/portfolio', [PortfolioItemController::class, 'store'])->name('portfolio.items.store');
    Route::get('/portfolio/{item}/edit', [PortfolioItemController::class, 'edit'])->name('portfolio.items.edit');
    Route::put('/portfolio/{item}', [PortfolioItemController::class, 'update'])->name('portfolio.items.update');
    Route::delete('/portfolio/{item}', [PortfolioItemController::class, 'destroy'])->name('portfolio.items.destroy');

    Route::get('/genres', [GenreController::class, 'index'])->name('genres.index');
    Route::post('/genres', [GenreController::class, 'store'])->name('genres.store');
    Route::put('/genres/{genre}', [GenreController::class, 'update'])->name('genres.update');
    Route::delete('/genres/{genre}', [GenreController::class, 'destroy'])->name('genres.destroy');

});
