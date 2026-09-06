<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viewController;

Route::get('/', [viewController::class, 'home']);

Route::get('/about', [viewController::class, 'about']);

Route::get('/explore_our_menu', [viewController::class, 'menu'])->name('menu');