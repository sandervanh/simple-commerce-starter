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

Route::statamic('/products/{product}', 'product', []);
Route::statamic('/checkout', 'checkout', []);
Route::statamic('/thanks', 'thanks', []);
Route::statamic('/cart', 'cart', []);
Route::statamic('/login', 'login', [])->name('login');
Route::statamic('/register', 'register', [])->name('register');

Route::middleware(['auth'])->group(function () {
    Route::statamic('/account', 'account', []);
    Route::statamic('/orders/{order}', 'order', []);
});