<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('home.index');
});
Route::get('/product', function () {
    return view('home.product');
});


Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('/try', function () {
        return view('admin.try');
    });
    
    Route::get('/image',[AdminController::class,"index"]);
    Route::post('/image',[AdminController::class,"store"])->name('insert');

    Route::get('/insert',[AdminController::class,"insert"])->name('insert.product.view');
    Route::post('/insert',[AdminController::class,"InsertProduct"])->name('insert.product');

    Route::get('/products',[AdminController::class,"products"])->name('products.view');


    
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
