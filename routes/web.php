<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

// Halaman depan menampilkan daftar produk
Route::get('/', [ProductController::class, 'index'])->name('home');

// Rute CRUD untuk Produk
Route::resource('products', ProductController::class);

// Rute untuk kategori
Route::resource('categories', CategoryController::class);

// Rute untuk menampilkan produk berdasarkan kategori
Route::get('categories/{category}/products', [CategoryController::class, 'showProducts'])->name('categories.products');

// Rute khusus untuk mengunggah dan menyimpan gambar produk
Route::post('products/{product}/upload-image', [ProductController::class, 'uploadImage'])->name('products.uploadImage');