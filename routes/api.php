<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
    Route::get('/authors', [AuthorApiController::class, 'index'])->name('authors.index');
    Route::post('/authors', [AuthorApiController::class, 'store'])->name('authors.store');
    Route::get('/authors/{id}', [AuthorApiController::class, 'edit'])->name('authors.edit');
    Route::put('/authors/{id}', [AuthorApiController::class, 'update'])->name('authors.update');
    Route::delete('/authors/{id}', [AuthorApiController::class, 'destroy'])->name('authors.destroy');
