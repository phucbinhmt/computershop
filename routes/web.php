<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartItemsController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/403', [AuthController::class, 'error403'])->name('403');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/pc', [ProductsController::class, 'pc'])->name('pc');
Route::get('/laptop', [ProductsController::class, 'laptop'])->name('laptop');
Route::get('/accessory', [ProductsController::class, 'accessory'])->name('accessory');
Route::get('/search', [ProductsController::class, 'search'])->name('search');
Route::get('/detail/{productId}', [ProductsController::class, 'detail'])->name('detail');

Route::middleware('checkauth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/cart', [UserController::class, 'cart'])->name('cart');
    Route::get('/payment', [UserController::class, 'payment'])->name('payment');
    Route::get('/account', [UserController::class, 'account'])->name('account');
    Route::put('/update', [UserController::class, 'update'])->name('update');
    Route::prefix('cartitems')->group(function () {
        Route::post('/add', [CartItemsController::class, 'add'])->name('cartitems.add');
        Route::put('/update/{productId}', [CartItemsController::class, 'update'])->name('cartitems.update');
        Route::delete('/delete/{productId}', [CartItemsController::class, 'delete'])->name('cartitems.delete');
    });
});
