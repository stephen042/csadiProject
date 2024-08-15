<?php

use App\Http\Controllers\AdminController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Xml\Project as XmlProject;

Route::view('/', 'home/index', [
    'title' => 'Home',
] );

Route::get('/', function (Project $projects) {
    
    return view('home.index',[
        'projects' => $projects->take(4)->get(),
        'latest_projects' => $projects->latest('created_at')->take(3)->get(),
        'title' => 'Home',
    ]);

})->name('home');

Route::view('/about', 'home/about', [
    'title' => 'About',
] );

Route::view('/contact', 'home/contact', [
    'title' => 'Contact',
] );

Route::view('projects', 'home/projects', [
    'title' => 'Projects',
] );

Route::get('projects/{project}', function (Project $project) {

    return view('home.projects-details', [
        'title' => 'projects-details',
        'project' => $project
    ]);
    
})->name('projects-details');

Route::view('/gallery', 'home/gallery', [
    'title' => 'Gallery',
] );

// Auth routes
Route::view('/login', 'auth/login', [
    'title' => 'Login',
] );

Route::prefix('admin')->group(function () {

    Route::middleware(['auth','admin'])->group(function () {
        
        Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    });
});


