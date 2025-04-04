<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [HomeController::class, 'redirect'])->name('redirect');
Route::get('/', [HomeController::class, 'index']);
// Product routes
Route::get('/product', [AdminController::class, 'product'])->name('product');
// upload product
Route::get('/products', [HomeController::class, 'showProducts']);
Route::post('/uploadproduct', [AdminController::class, 'uploadproduct'])->name('uploadproduct');