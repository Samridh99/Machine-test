<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Employer routes
    Route::get('/employers', [EmployerController::class, 'index'])->name('employers.index');
    Route::post('/employers', [EmployerController::class, 'store'])->name('employers.store');

    // Employee routes
    Route::get('/employers/{employer}/employees', [EmployeeController::class, 'index'])->name('employees.index');
    Route::post('/employers/{employer}/employees', [EmployeeController::class, 'store'])->name('employees.store');
});

require __DIR__ . '/auth.php';
