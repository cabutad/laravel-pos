<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('customers', CustomerController::class);
Route::resource('users', UserController::class);
