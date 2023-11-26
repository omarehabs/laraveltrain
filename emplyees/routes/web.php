<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
/*
    Route URL => Controller (Functionality) => Model => DB
                                        => View => UI (blade template engine)
    
    Routes => routes/web.php
    Views => [resource/views]
    Controllers => [app/http/controllers]
    Models => [app/Models]
 */

Route::view('/', 'pages.home')->name('home');
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees');
Route::get('/employees/{id}', [EmployeeController::class, 'show'])->name('show-employee');
Route::view('/store', 'pages.store')->name('store');
Route::post('/store-employee', [EmployeeController::class, 'store'])->name('store-employee');
Route::put('/update-employee/{id}', [EmployeeController::class, 'update'])->name('update-employee');
Route::get('/edit/{id}', [EmployeeController::class, 'edit'])->name('edit-employee');
Route::get('/delete/{id}', [EmployeeController::class, 'destroy'])->name('delete-employee');
