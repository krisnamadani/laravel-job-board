<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

Route::resource('posts', PostController::class)
  ->only(['index', 'show']);

Route::get('login', fn() => to_route('auth.create'))->name('login');

Route::resource('auth', AuthController::class)
  ->only(['create', 'store']);