<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RoleController as Role;
use Illuminate\Support\Facades\Route;

Route::get('/', DashboardController::class)->name('dashboard');

/**
 * MANAGEMENT
 */

// Roles
Route::resource('/roles', Role::class);
