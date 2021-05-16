<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;
use  App\Http\Controllers\productController;
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

Route::post('/login', [\App\Http\Controllers\UserController::class, 'login']);
Route::post('/register', [\App\Http\Controllers\UserController::class, 'register']);
Route::get('/', [productController::class, 'index']);
Route::get('detail/{id}', [productController::class, 'detail']);
Route::get('search', [productController::class, 'search']);
Route::post('add_to_cart', [productController::class, 'AddToCart']);
Route::get('cartlist',[productController::class, 'cartList']);
Route::get('removecart/{id}', [productController::class, 'removeCart']);
Route::get('ordernow', [productController::class, 'oderNow']);
Route::post('orderplace', [productController::class, 'orderPlace']);
Route::get('myorder', [productController::class, 'myOrder']);
Route::view('/register','register');
Route::view('/register_done','register_done');
Route::view('/password_missmatch','password_missmatch');



