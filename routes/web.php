<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/education', [PortfolioController::class, 'education'])->name('education');
Route::get('/specialization', [PortfolioController::class, 'specialization'])->name('specialization');
Route::get('/skills', [PortfolioController::class, 'skills'])->name('skills');
Route::get('/blog', [PortfolioController::class, 'blog'])->name('blog');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');