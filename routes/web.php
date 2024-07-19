<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home/index', [
    'title' => 'Home',
] );

Route::view('/about', 'home/about', [
    'title' => 'About',
] );

Route::view('/contact', 'home/contact', [
    'title' => 'Contact',
] );

Route::view('projects', 'home/projects', [
    'title' => 'Projects',
] );

Route::view('/gallery', 'home/gallery', [
    'title' => 'Gallery',
] );

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


