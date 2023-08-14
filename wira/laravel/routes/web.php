<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\PublisherController;
use App\Models\Publisher;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/author',[AuthorController::class,'index'])->name('author');
Route::get('/catalog',[CatalogController::class,'index'])->name('catalog');
Route::get('/publisher',[PublisherController::class,'index'])->name('publisher');
Route::get('/book',[BookController::class,'index'])->name('book');
Route::get('/member',[BookController::class,'index'])->name('member');
