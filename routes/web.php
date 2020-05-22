<?php

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

Route::statamic('/products/{product}', 'products/show');
Route::statamic('/thanks', 'checkout-flow/thanks', []);
Route::statamic('/login', 'auth/login', [])->name('login');
Route::statamic('/register', 'auth/register', [])->name('register');

Route::middleware(\DoubleThreeDigital\SimpleCommerce\Http\Middleware\HasItemsInCart::class)->group(function () {
    Route::statamic('/cart', 'checkout-flow/cart');
    Route::statamic('/checkout', 'checkout-flow/checkout');
});

Route::middleware(['auth'])->group(function () {
    Route::statamic('/account', 'auth/account', []);
    Route::statamic('/orders/{order}', 'auth/order', []);
});