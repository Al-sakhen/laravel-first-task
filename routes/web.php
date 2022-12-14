<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
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


Route::get('/books' , [BookController::class , 'index']);
Route::get('/books/create' , [BookController::class , 'create'])->name('books.create');
Route::get('/books/update' , [BookController::class , 'update']);


Route::get('/users' , [UserController::class , 'index']);
Route::get('/users/create' , [UserController::class , 'create'])->name('users.create');
Route::get('/users/update' , [UserController::class , 'update']);