<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Livewire\Backend\Users\UserListComponent;
use App\Http\Livewire\Backend\Appointments\AppointmentComponent;

### Web Routes ###

Route::get('/', function () {
    return 'Welcome to laravel livewire';
})->name('web.home');
### End: Web Routes ###


### Admin Routes ###
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/users', UserListComponent::class)->name('users');
    Route::get('/appointments', AppointmentComponent::class)->name('appointments');
    Route::get('/customers', AppointmentComponent::class)->name('customers');
});



### End: Admin Routes ###
