<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\PublisherController;
use App\Models\Author;

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

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::get('/author', [AuthorController::class, 'index'])->name('author');

    Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');
    Route::get('/catalog/create', [CatalogController::class, 'create'])->name('catalog-create');
    Route::post('/catalog/store', [CatalogController::class, 'store'])->name('catalog-store');
    Route::get('/catalog/edit/{id}', [CatalogController::class, 'edit'])->name('catalog-edit');
    Route::post('/catalog/update/{id}', [CatalogController::class, 'update'])->name('catalog-update');
    Route::delete('/catalog/destroy/{id}', [CatalogController::class, 'destroy'])->name('catalog-delete');

    Route::resource('/publishers', PublisherController::class);

    Route::resource('/authors', AuthorController::class);

    Route::get('/book', [BookController::class, 'index'])->name('book');
    Route::get('/member', [MemberController::class, 'index'])->name('member');

});

Route::get('api/authors',[AuthorController::class,'api']);