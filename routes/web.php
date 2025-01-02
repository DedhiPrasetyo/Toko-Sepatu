<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BrandController;
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

// Route untuk Deskripsi
Route::get('/deskripsi/adidas', [AdminController::class, 'adidas'])->name('deskripsi.adidas');
Route::get('/deskripsi/jordan', [AdminController::class, 'jordan'])->name('deskripsi.jordan');
Route::get('/deskripsi/nike', [AdminController::class, 'nike'])->name('deskripsi.nike');
Route::get('/deskripsi/puma', [AdminController::class, 'puma'])->name('deskripsi.puma');
Route::get('/deskripsi/vans', [AdminController::class, 'vans'])->name('deskripsi.vans');


// Route CRUD untuk Adidas
Route::get('/admin/adidas', [AdminController::class, 'index'])->name('admin.adidas.index');
Route::get('/admin/adidas/create', [AdminController::class, 'create'])->name('admin.adidas.create');
Route::post('/admin/adidas', [AdminController::class, 'store'])->name('admin.adidas.store');
Route::get('/admin/adidas/{adidas}', [AdminController::class, 'show'])->name('admin.adidas.show');
Route::get('/admin/adidas/{adidas}/edit', [AdminController::class, 'edit'])->name('admin.adidas.edit');
Route::put('/admin/adidas/{adidas}', [AdminController::class, 'update'])->name('admin.adidas.update');
Route::delete('/admin/adidas/{adidas}', [AdminController::class, 'destroy'])->name('admin.adidas.destroy');

// Route CRUD untuk Jordan
Route::get('/admin/jordan', [AdminController::class, 'index'])->name('admin.jordan.index');
Route::get('/admin/jordan/create', [AdminController::class, 'create'])->name('admin.jordan.create');
Route::post('/admin/jordan', [AdminController::class, 'store'])->name('admin.jordan.store');
Route::get('/admin/jordan/{jordan}', [AdminController::class, 'show'])->name('admin.jordan.show');
Route::get('/admin/jordan/{jordan}/edit', [AdminController::class, 'edit'])->name('admin.jordan.edit');
Route::put('/admin/jordan/{jordan}', [AdminController::class, 'update'])->name('admin.jordan.update');
Route::delete('/admin/jordan/{jordan}', [AdminController::class, 'destroy'])->name('admin.jordan.destroy');

Route::resource('admin', AdminController::class);
