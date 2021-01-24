<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

// for homepage //

Route::get('/', [HomeController::class,"index"])->name('homepage');
Route::get('/product/{name}', [HomeController::class,"product"])->name('home.product');

// cart work //

Route::get('/cart', [UserController::class,"cart"])->name('cart');
Route::post('/cart', [UserController::class,"coupon"])->name('coupon');
Route::get('/cart/{id}',[UserController::class,"addToCart"])->name('add.to.cart');


// For admin Pannel //


Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class,"index"])->name('admin.dashboard');
    
    Route::get('/try', function () {
        return view('admin.try');
    });
    
    Route::get('/image',[AdminController::class,"index"]);
    Route::post('/image',[AdminController::class,"store"])->name('insert');

    Route::get('/insert',[AdminController::class,"insert"])->name('insert.product.view');
    Route::post('/insert',[AdminController::class,"InsertProduct"])->name('insert.product');

    Route::get('/products',[AdminController::class,"products"])->name('products.view');
    Route::delete('/product/{id}',[AdminController::class,"dropProduct"])->name('product.delete');

    Route::get('/category',[AdminController::class,"category"])->name('category.view');
    Route::post('/category',[AdminController::class,"storeCategory"])->name('insert.category');

    


    
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
