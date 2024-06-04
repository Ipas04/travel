<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\DestinationController as AdminDestinationController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;

use Illuminate\Support\Facades\Route;

// Route for User
Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::resource('destination', DestinationController::class);
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/order/create/{id}', [OrderController::class, 'create'])->name('order.create');
Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');
Route::get('/invoice/{id}', [OrderController::class, 'show'])->name('order.show');
Route::delete('/order/{id}', [OrderController::class, 'destroy'])->name('order.destroy');
Route::get('/order', [OrderController::class, 'index'])->name('order.index');

// Route for Admin
Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('destination', AdminDestinationController::class);
    Route::resource('order', AdminOrderController::class);
});


Route::get('/destination/detail', function () {
    return view('frontend.destination.detail');
});

Route::get('/destination/detailbromo', function () {
    return view('frontend.destination.detailbromo');
});