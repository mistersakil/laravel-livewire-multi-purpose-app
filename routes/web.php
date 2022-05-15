<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Livewire\Backend\Users\UserListComponent;
use Illuminate\Support\Facades\Route;

/**
 * Web Routes
 */
Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/users', UserListComponent::class)->name('admin.users');
