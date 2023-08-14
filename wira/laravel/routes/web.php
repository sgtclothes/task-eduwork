<?php

use App\Models\Member;
use App\Models\Publisher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\PublisherController;

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

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('/author',[AuthorController::class,'index'])->name('author');
Route::get('/catalog',[CatalogController::class,'index'])->name('catalog');
Route::get('/publisher',[PublisherController::class,'index'])->name('publisher');
Route::get('/book',[BookController::class,'index'])->name('book');
Route::get('/member',[MemberController::class,'index'])->name('member');
