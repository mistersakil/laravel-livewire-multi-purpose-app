<?php

use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;

/**
 * Web Routes
 */
Route::get('/', [DashboardController::class, 'index'])->name('index');
