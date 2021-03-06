<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\testController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', [ProductController::class, 'index']);  
Route::post('/add-to-cart', [ProductController::class, 'addToCart']);
Route::get('/count-cart-items', [ProductController::class, 'CountCartItems']);
Route::get('/cart-items', [ProductController::class, 'cartItems']);
Route::put('/cart-item-increment', [ProductController::class, 'cartItemIncrement']);
Route::put('/cart-item-dcrement', [ProductController::class, 'cartItemDcrement']);
