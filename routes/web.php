<?php

use App\Http\Controllers\AdidasController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\DeskripsiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('layout.index');

// Route CRUD untuk Products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

// Route CRUD untuk Brands
Route::get('/brands', [BrandController::class, 'index'])->name('brands.index');
Route::get('/brands/create', [BrandController::class, 'create'])->name('brands.create');
Route::post('/brands', [BrandController::class, 'store'])->name('brands.store');
Route::get('/brands/{brand}', [BrandController::class, 'show'])->name('brands.show');
Route::get('/brands/{brand}/edit', [BrandController::class, 'edit'])->name('brands.edit');
Route::put('/brands/{brand}', [BrandController::class, 'update'])->name('brands.update');
Route::delete('/brands/{brand}', [BrandController::class, 'destroy'])->name('brands.destroy');
Route::delete('/brands/{brand}', [BrandController::class, 'destroy'])->name('brands.destroy');

Route::get('/deskripsi/adidas', [AdidasController::class, 'deskripsi'])->name('deskripsi.adidas');
Route::get('/deskripsi/jordan', [DeskripsiController::class, 'jordan'])->name('deskripsi.jordan');
Route::get('/deskripsi/nike', [DeskripsiController::class, 'nike'])->name('deskripsi.nike');
Route::get('/deskripsi/puma', [DeskripsiController::class, 'puma'])->name('deskripsi.puma');
Route::get('/deskripsi/vans', [DeskripsiController::class, 'vans'])->name('deskripsi.vans');

Route::resource('adidas', AdidasController::class);

Route::get('/adidas/{id}', [AdidasController::class, 'show'])->name('adidas.show');
