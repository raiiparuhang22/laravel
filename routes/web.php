<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

// Home route
Route::get('/', [HomeController::class, 'welcome']);

// Example RoleController route
Route::get('/role', [RoleController::class, 'showHello']);

// User Routes
Route::get('/users', [UserController::class, 'index'])->name('users.index');        // List users
Route::get('/users/create', [UserController::class, 'create'])->name('users.create'); // Show form
Route::post('/users', [UserController::class, 'store'])->name('users.store');       // Submit form

Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('users', UserController::class);

Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');


