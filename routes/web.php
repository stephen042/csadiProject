<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home/index');

Route::prefix('admin')->group(function () {

    Route::middleware(['auth'])->group(function () {
        
        Route::view('dashboard', 'admin/dashboard')
            ->middleware(['auth', 'verified'])
            ->name('dashboard');

        Route::view('profile', 'admin/profile')
            ->middleware(['auth'])
            ->name('profile');
    });
});


require __DIR__ . '/auth.php';
