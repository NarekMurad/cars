<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ModelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return redirect()->route('admin.login');
});

Route::prefix('admin')->group( function (){
    Route::get('login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('login', [AdminController::class, 'signin'])->name('admin.signin');
    Route::middleware('isAdmin')->group(function (){
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::resource('brand', BrandController::class)->except(['show']);
        Route::resource('model', ModelController::class)->except(['show']);
        Route::resource('car', CarController::class)->except(['show']);
        Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
    });
});
