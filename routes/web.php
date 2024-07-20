<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Models\User;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::inertia('/blog', 'blog', ['blogs' => Blog::paginate()])->name('blog');


Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        $user = Auth::user();
        return Inertia::render('dashboard', [
            'blogs' => Blog::where('user_id', $user->id)->paginate(5),
        ]);
    })->name('dashboard');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::delete('/blogs/{blog}', [BlogController::class, 'deleteBlog'])->name('deleteBlog');
});


Route::middleware('guest')->group(function () {
    Route::inertia('/', 'index')->name('index');

    Route::inertia('/register', 'Auth/register')->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::inertia('/login', 'Auth/login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);

});