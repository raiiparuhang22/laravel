<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController; // Add this line

Route::get('/', function () {
    return view('welcome');
});

// New route to call RoleController method
Route::get('/role', [RoleController::class, 'showHello']);

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'welcome']);

use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index']);
