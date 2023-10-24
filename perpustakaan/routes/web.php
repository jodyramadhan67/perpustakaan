<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/authors', App\Http\Controllers\AuthorController::class);
Route::resource('/books', App\Http\Controllers\BookController::class);

//api
Route::get('/api/authors', [App\Http\Controllers\AuthorController::class, 'api']);

Route::get('/api/books', [App\Http\Controllers\BookController::class, 'api']);
