<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;  // Add this
use App\Http\Controllers\CategoryController; // Add this
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // --- Your Souk Routes ---
    // Route::resource('/products', ProductController::class);
    // Route::resource('/categories', CategoryController::class);
    // categories
    Route::get('/categories', [CategoryController::class,'index'])->name('categories');
    Route::get('/categories/edit/{category}', [CategoryController::class,'edit']);
    Route::post('/categories/update/{category}', [CategoryController::class,'update']);
    Route::get('/categories/create', [CategoryController::class,'create']);
    Route::post('/categories/store', [CategoryController::class,'store']);
    Route::get('/categories/delete/{category}', [CategoryController::class,'destroy']);


    // products
    Route::get('/products', [ProductController::class,'index'])->name('products');
    Route::get('/products/edit/{product}', [ProductController::class,'edit']);
    Route::post('/products/update/{product}', [ProductController::class,'update']);
    Route::get('/products/create', [ProductController::class,'create']);
    Route::post('/products/store', [ProductController::class,'store']);
    Route::get('/products/delete/{produc}', [ProductController::class,'destroy']);
    // Route::post('/products', [ProductController::class,'store']);

    // ------------------------

    // auth
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    });

require __DIR__.'/auth.php';