<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionDetailController;
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

Route::resource('/home', HomeController::class);
Route::resource('/members', MemberController::class);
Route::resource('/publishers', PublisherController::class);
Route::resource('/authors', AuthorController::class);
Route::get('/api/authors', [AuthorController::class, 'api']);

Route::resource('/catalogs', CatalogController::class);
Route::resource('/books', BookController::class);
Route::get('/api/books', [BookController::class, 'api']);

Route::resource('/transactions', TransactionController::class);
Route::resource('/transactionDetails', TransactionDetailController::class);