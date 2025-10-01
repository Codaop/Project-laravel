<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
Route::resource('employees', EmployeeController::class);
Route::get('/', [EmployeeController::class, 'index']);