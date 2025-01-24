<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;

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


Route::middleware('auth')->group(function (){

    Route::get('/authors', [AuthorsController::class, 'index'])->name('authors.index');
    Route::post('/authors', [AuthorsController::class, 'store'])->name('authors.store');
    Route::get('/authors/{id}', [AuthorsController::class, 'edit'])->name('authors.edit');
    Route::put('/authors/{id}', [AuthorsController::class, 'update'])->name('authors.update');
    Route::delete('/authors/{id}', [AuthorsController::class, 'destroy'])->name('authors.destroy');

    Route::get('/books', [BooksController::class, 'index'])->name('books.index');
    Route::post('/books', [BooksController::class, 'store'])->name('books.store');
    Route::get('/books/{id}', [BooksController::class, 'edit'])->name('books.edit');
    Route::put('/books/{id}', [BooksController::class, 'update'])->name('books.update');
    Route::delete('/books/{id}', [BooksController::class, 'destroy'])->name('books.destroy');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


route::get('/', function(){
    return view('welcome');
});

Route::middleware('auth', 'role:estudiante')->group(function (){
    Route::get('/estudiante', function() {
        return "estudiante";
    });
});