<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorsController;

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


Route::get('/authors', [AuthorsController::class, 'index'])->name('authors.index');
Route::post('/authors', [AuthorsController::class, 'store'])->name('authors.store');
Route::get('/authors/{id}', [AuthorsController::class, 'edit'])->name('authors.edit');
Route::delete('/authors/{id}', [AuthorsController::class, 'destroy'])->name('authors.destroy');



