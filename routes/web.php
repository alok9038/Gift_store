<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

// for homepage //

Route::get('/', [HomeController::class,"index"])->name('homepage');
Route::get('/product/{name}', [HomeController::class,"product"])->name('home.product');


// product filter
//Route::get('/{name}', [HomeController::class,"cat_filter"])->name('cat_filter');

Route::get('/category/{name}',[HomeController::class,"filter"])->name('filter');


// cart work //
Route::get('/cart', [UserController::class,"cart"])->name('cart');
Route::post('/cart/{id}',[UserController::class,"addToCart"])->name('add.to.cart');
Route::post('/cart/minus/{id}',[UserController::class,"minus"])->name('decrease.items');
Route::get('/cart/remove_item/{id}',[UserController::class,"remove_item"])->name('remove.item');

Route::get('/checkout',[UserController::class,"checkout"])->name('checkout');
Route::post('/checkout',[UserController::class,"address"])->name('insert.address');

Route::get('/myorder',[UserController::class,"orders"])->name('order');

Route::get('/payment',[UserController::class,"payment"])->name('payment.view');
Route::post('/payment',[UserController::class,"payment"])->name('payment');

// add coupon
Route::post('/coupon', [UserController::class,"coupon"])->name('coupon');
// remove coupon
Route::get('/coupon/{id}',[UserController::class,"coupon"])->name('coupon.remove');


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

    Route::get('/coupon',[AdminController::class,"coupon"])->name('coupon.view');
    Route::post('/coupon',[AdminController::class,"store_coupon"])->name('insert.coupon');
    Route::delete('/coupon/{id}',[AdminController::class,"drop_coupon"])->name('coupon.delete');
    Route::post('/coupon/status/{id}',[AdminController::class,"coupon_status"])->name('coupon.status');



    


    
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
