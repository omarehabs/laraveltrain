<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TodosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TodosController::class, 'index'])->name('home');
Route::view('/create', 'create')->name('create');
Route::post('/store', [TodosController::class, 'store'])->name('store');
Route::put('/finish/{id}', [TodosController::class, 'mark_finished'])->name('finished');
Route::delete('/delete/{id}', [TodosController::class, 'delete'])->name('delete');