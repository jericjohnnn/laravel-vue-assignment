<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('index');
});

Route::get('/blog', function () {
    return Inertia::render('blog');
});

Route::get('/login', function () {
    return Inertia::render('login');
});