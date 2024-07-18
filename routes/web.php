<?php

use App\Http\Controllers\AuthController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::inertia('/blog', 'blog')->name('blog');


Route::middleware('auth')->group(function () {
    Route::inertia('/dashboard', 'dashboard', ['users' => User::paginate()])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});


Route::middleware('guest')->group(function () {
    Route::inertia('/', 'index')->name('index');

    Route::inertia('/register', 'Auth/register')->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::inertia('/login', 'Auth/login')->name('login');


    Route::post('/login', [AuthController::class, 'login']);

});