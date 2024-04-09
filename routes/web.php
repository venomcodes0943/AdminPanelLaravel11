<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

Route::group(['controller' => AuthController::class], function () {
    Route::get('/login', 'index')->name('login.index');
    Route::post('/login', 'login')->name('login');
    Route::get('/logout', 'logout')->name('logout');

});
Route::group(['middleware' => Authenticate::class], function () {
    Route::get('/', function () {
        return view('admin.index.index');
    })->name('index');
    Route::resource('product', ProductController::class);
    // Route::get('product/create', [ProductController::class, 'create']);
});
