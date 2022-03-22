<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
     return redirect()->route('home');
});

Route::get('/book', [App\Http\Controllers\BookController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\BookController::class, 'create'])->name('addBook');
Route::post('/create', [App\Http\Controllers\BookController::class, 'store'])->name('addBook');
Route::post('/update', [App\Http\Controllers\BookController::class, 'update'])->name('update');
Route::get('/book/{bookId}', [App\Http\Controllers\BookController::class, 'show']);
Route::get('/book/delete/{bookId}', [App\Http\Controllers\BookController::class, 'delete']);
