<?php

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionDetailController;
use App\Http\Livewire\Transaction;
use App\Http\Livewire\TransactionDetail;
use App\Http\Livewire\TransactionDetailShow;

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


Auth::routes();
Route::group(['middleware' => 'auth'], function() {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
    Route::resource('transaction', TransactionController::class);
    // Route::resource('transaction-detail', TransactionDetailController::class);

    Route::get('/api/category', [CategoryController::class,'api']);
    
    Route::get('/api/category/latest', [ProductController::class,'apiCategory']);
    Route::get('/api/transaction-detail', [TransactionDetailController::class,'api']);
    Route::get('/api/transaction-detail/{invoice}', [TransactionDetailController::class,'apiDetail']);
    
    Route::get('/api/product', [ProductController::class,'api']);
    Route::get('/transaction-product', Transaction::class)->name('transaction-product');
    Route::get('/transaction-detail', TransactionDetail::class)->name('transaction-detail');
    Route::get('/transaction-detail-show/{invoice}', TransactionDetailShow::class)->name('transaction-detail-show');
   
});
