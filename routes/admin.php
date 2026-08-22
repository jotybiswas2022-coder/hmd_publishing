<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PortfolioItemController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\ServicePageController;
use App\Http\Controllers\HomepagePlanController;
use App\Http\Controllers\PortfolioCategoryController;
use App\Http\Controllers\AboutPageController;

Route::prefix('admin')->middleware('admin')->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

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

    // Portfolio Categories CRUD
    Route::get('/portfolio-categories', [PortfolioCategoryController::class, 'index'])->name('portfolio-categories.index');
    Route::get('/portfolio-categories/create', [PortfolioCategoryController::class, 'create'])->name('portfolio-categories.create');
    Route::post('/portfolio-categories', [PortfolioCategoryController::class, 'store'])->name('portfolio-categories.store');
    Route::get('/portfolio-categories/{portfolioCategory}/edit', [PortfolioCategoryController::class, 'edit'])->name('portfolio-categories.edit');
    Route::put('/portfolio-categories/{portfolioCategory}', [PortfolioCategoryController::class, 'update'])->name('portfolio-categories.update');
    Route::delete('/portfolio-categories/{portfolioCategory}', [PortfolioCategoryController::class, 'destroy'])->name('portfolio-categories.destroy');

    // Service Categories CRUD
    Route::get('/service-categories', [ServiceCategoryController::class, 'index'])->name('service-categories.index');
    Route::get('/service-categories/create', [ServiceCategoryController::class, 'create'])->name('service-categories.create');
    Route::post('/service-categories', [ServiceCategoryController::class, 'store'])->name('service-categories.store');
    Route::get('/service-categories/{serviceCategory}/edit', [ServiceCategoryController::class, 'edit'])->name('service-categories.edit');
    Route::put('/service-categories/{serviceCategory}', [ServiceCategoryController::class, 'update'])->name('service-categories.update');
    Route::delete('/service-categories/{serviceCategory}', [ServiceCategoryController::class, 'destroy'])->name('service-categories.destroy');

    // Service Pages CRUD
    Route::get('/service-pages', [ServicePageController::class, 'index'])->name('service-pages.index');
    Route::get('/service-pages/create', [ServicePageController::class, 'create'])->name('service-pages.create');
    Route::post('/service-pages', [ServicePageController::class, 'store'])->name('service-pages.store');
    Route::get('/service-pages/{servicePage}/edit', [ServicePageController::class, 'edit'])->name('service-pages.edit');
    Route::put('/service-pages/{servicePage}', [ServicePageController::class, 'update'])->name('service-pages.update');
    Route::delete('/service-pages/{servicePage}', [ServicePageController::class, 'destroy'])->name('service-pages.destroy');

    // Homepage Pricing Plans CRUD
    Route::get('/pricing-plans', [HomepagePlanController::class, 'index'])->name('homepage-plans.index');
    Route::get('/pricing-plans/create', [HomepagePlanController::class, 'create'])->name('homepage-plans.create');
    Route::post('/pricing-plans', [HomepagePlanController::class, 'store'])->name('homepage-plans.store');
    Route::get('/pricing-plans/{homepagePlan}/edit', [HomepagePlanController::class, 'edit'])->name('homepage-plans.edit');
    Route::put('/pricing-plans/{homepagePlan}', [HomepagePlanController::class, 'update'])->name('homepage-plans.update');
    Route::delete('/pricing-plans/{homepagePlan}', [HomepagePlanController::class, 'destroy'])->name('homepage-plans.destroy');

    // About Page Editor
    Route::get('/about-page', [AboutPageController::class, 'index'])->name('about-page.index');
    Route::put('/about-page', [AboutPageController::class, 'update'])->name('about-page.update');

});
