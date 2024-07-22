<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [BlogController::class, 'showAuthenticatedBlogs'])->name('dashboard');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/dashboard', [BlogController::class, 'createBlog']);

    Route::patch('/blogs/{blog}', [BlogController::class, 'updateBlog'])->name('updateBlog');
    
    Route::delete('/blogs/{blog}', [BlogController::class, 'deleteBlog'])->name('deleteBlog');
});


Route::middleware('guest')->group(function () {
    Route::inertia('/', 'index')->name('index');
    Route::get('/blog', [BlogController::class, 'showAllBlogs'])->name('blog');

    Route::inertia('/register', 'Auth/register')->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::inertia('/login', 'Auth/login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});