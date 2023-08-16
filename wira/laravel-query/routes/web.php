<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\PublisherController;
use Spatie\LaravelIgnition\Recorders\QueryRecorder\QueryRecorder;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [QueryController::class, 'index']);
Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::get('/author',[AuthorController::class,'index'])->name('author');
Route::get('/catalog',[CatalogController::class,'index'])->name('catalog');
Route::get('/publisher',[PublisherController::class,'index'])->name('publisher');
Route::get('/book',[BookController::class,'index'])->name('book');
Route::get('/member',[MemberController::class,'index'])->name('member');
