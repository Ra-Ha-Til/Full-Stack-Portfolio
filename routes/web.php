<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// Existing routes
Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/education', [PortfolioController::class, 'education'])->name('education');
Route::get('/skills', [PortfolioController::class, 'specializationSkills'])->name('skills'); // Combined page
Route::get('/blog', [PortfolioController::class, 'blog'])->name('blog');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');

// Remove these if they existed before
// Route::get('/specialization', ...); 
// Route::get('/skills', ...); // Old individual skills route