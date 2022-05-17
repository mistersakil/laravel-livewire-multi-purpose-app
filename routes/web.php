<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Livewire\About;
use App\Http\Livewire\Backend\Users\UserListComponent;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Home;
use Illuminate\Support\Facades\Route;

/**
 * Web Routes
 */
Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/users', UserListComponent::class)->name('admin.users');
Route::get('/', Home::class);
Route::get('/about', About::class);
Route::get('/contact', Contact::class);
