<?php

use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::post('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('auth.login');
Route::post('/register', [\App\Http\Controllers\UserController::class, 'register'])->name('auth.register');
Route::post('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('auth.logout');
Route::get('/', [productController::class, 'index'])->name('home');
Route::get('detail/{id}', [productController::class, 'detail'])->name('product.detail');
Route::get('search', [productController::class, 'search'])->name('search');
Route::post('add_to_cart', [productController::class, 'AddToCart'])->name('add-to-cart')->middleware('auth');
Route::get('cartlist', [productController::class, 'cartList'])->middleware('auth');
Route::post('removecart/{id}', [productController::class, 'removeCart'])->name('cart.remove');
Route::get('ordernow', [productController::class, 'oderNow'])->middleware('auth');
Route::post('orderplace', [productController::class, 'orderPlace']);
Route::get('my-orders', [productController::class, 'myOrder'])->name('my-orders');
Route::view('/register', 'register');
Route::view('/register_done', 'register_done');
Route::view('/password_missmatch', 'password_missmatch');



