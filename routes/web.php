<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

Route::group(['controller' => AuthController::class], function () {
    Route::get('/login', 'index')->name('login.index');
    Route::post('/login', 'login')->name('login');
    Route::get('/logout', 'logout')->name('logout');

});

Route::group(['middleware' => Authenticate::class], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('index');
    Route::resource('product', ProductController::class);
    Route::resource('category', CategoryController::class);
});

Route::group(['controller' => CustomerController::class], function () {
    Route::get('/', 'index')->name('customer.index');
    Route::get('/products', 'show')->name('customer.products');
    Route::get('/wishlist', 'wishlistAll')->name('customer.wishlistAll');
    Route::get('/wishlist/{id}', 'wishlist')->name('customer.wishlist');
    Route::get('/product-details/{id}', 'productDetail')->name('product.detail');
    Route::post('/addToCart/{id}', 'addToCart')->name('product.cart');
    Route::get('/clearMyCart', 'clearCart')->name('clear.cart');
    Route::get('/checkout', 'checkout')->name('cart.checkout');
    Route::get('/clearSingleCart/{itemId}/{sessionName}', 'clearSingleSession')->name('cart.single.clear');
});

