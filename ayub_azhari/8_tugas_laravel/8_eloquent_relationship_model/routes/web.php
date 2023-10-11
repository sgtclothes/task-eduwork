<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/author', [App\Http\Controllers\AuthorController::class, 'index'])->name('author.index');
Route::get('/book', [App\Http\Controllers\BookController::class, 'index'])->name('book.index');
Route::get('/catalog', [App\Http\Controllers\CatalogController::class, 'index'])->name('catalog.index');
Route::get('/member', [App\Http\Controllers\MemberController::class, 'index'])->name('member.index');
Route::get('/publisher', [App\Http\Controllers\PublisherController::class, 'index'])->name('publisher.index');
