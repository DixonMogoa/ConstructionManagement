<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth:admin')->group(function () {
    Route::resource('vendors', VendorController::class);
    Route::resource('categories', CategoryController::class);
    Route::get('orders', [OrderController::class, 'index']);
    Route::get('users', [UserController::class, 'index']);
    Route::get('feedback', [FeedbackController::class, 'index']);
});

Route::middleware('auth:vendor')->group(function () {
    Route::resource('items', ItemController::class);
    Route::get('orders', [OrderController::class, 'vendorOrders']);
});

Route::get('register', [RegisterController::class, 'showRegistrationForm']);
Route::post('register', [RegisterController::class, 'register']);
Route::get('login', [LoginController::class, 'showLoginForm']);
Route::post('login', [LoginController::class, 'login']);
Route::middleware('auth:user')->group(function () {
    Route::get('items', [ItemController::class, 'index']);
    Route::post('order', [OrderController::class, 'store']);
});
