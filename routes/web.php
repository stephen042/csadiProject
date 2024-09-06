<?php

use App\Http\Controllers\AdminController;
use App\Models\Member;
use App\Models\Project;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Xml\Project as XmlProject;

Route::view('/', 'home/index', [
    'title' => 'Home',
] );

Route::get('/', function (Project $projects) {
    
    return view('home.index',[
        'members' => Member::all(),
        'projects' => $projects->take(4)->get(),
        'latest_projects' => $projects->latest('created_at')->take(3)->get(),
        'title' => 'Home',
    ]);

})->name('home');

Route::view('/about', 'home/about', [
    'members' => Member::all(),
    'title' => 'About',
] )->name('about');

Route::view('/contact', 'home/contact', [
    'title' => 'Contact',
] )->name('contact');

Route::view('projects', 'home/projects', [
    'title' => 'Projects',
] )->name('projects');

Route::view('policies', 'home/policies', [
    'title' => 'policies',
] )->name('policies');

Route::get('projects/{project}', function (Project $project) {

    return view('home.projects-details', [
        'title' => 'projects-details',
        'project' => $project
    ]);
    
})->name('projects-details');

Route::view('/gallery', 'home/gallery', [
    'title' => 'Gallery',
] )->name('gallery');

// Auth routes
Route::view('/login', 'auth/login', [
    'title' => 'Login',
] )->name('login');

Route::prefix('admin')->group(function () {

    Route::middleware(['auth','admin'])->group(function () {
        
        Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/edit-member/{member}', [AdminController::class, 'members'])->name('edit_member');
        Route::post('/edit-member/{member}', [AdminController::class, 'members'])->name('post_edit_member');
        Route::delete('/members/{member}', [AdminController::class, 'deleteMember'])->name('delete_member');

        Route::get('/create-member', [AdminController::class, 'createMember'])->name('create_member');
        Route::post('/create-member', [AdminController::class, 'createMember'])->name('post_create_member');
        Route::get('all-members', [AdminController::class, 'allMembers'])->name('all_members');

        Route::get('/create-project', [AdminController::class, 'createProject'])->name('create_project');
        Route::post('/create-project', [AdminController::class, 'createProject'])->name('post_create_project');
        Route::get('/all-projects', [AdminController::class, 'allProjects'])->name('all_projects');
        Route::get('/edit-project/{project}', [AdminController::class, 'editProject'])->name('edit_project');
        Route::post('/edit-project/{project}', [AdminController::class, 'editProject'])->name('post_edit_project');

        Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
        Route::post('/profile', [AdminController::class, 'profile'])->name('post_profile');
    });
});


