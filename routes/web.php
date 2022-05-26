<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Auth::routes(['register' => false]);

Route::get('products/{id}/gallery', '\App\Http\Controllers\ProductController@gallery')->name('products.gallery');

Route::resource('products', '\App\Http\Controllers\ProductController');

Route::resource('product-galleries', '\App\Http\Controllers\ProductGalleryController');

Route::get('transactions/{id}/setStatus', '\App\Http\Controllers\TransactionController@setStatus')->name('transactions.status');

Route::resource('transactions', '\App\Http\Controllers\TransactionController');
