<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AdminController,
    CartController,
    UsersController,
    HomeController,
    OrdersController,
    ProductsController
};
use App\Http\Controllers\Api\CheckoutController;
use Psy\VersionUpdater\Checker;

require __DIR__.'/auth.php';


Route::get('/', [HomeController::class, 'index']);

Route::middleware('auth')->prefix('site')->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('home.index');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/addcart/{id}', [CartController::class, 'store'])->name('cart.store');
    Route::post('/removecart/{key}', [CartController::class, 'destroy'])->name('cart.destroy');
    Route::get('/orders', [HomeController::class, 'orders'])->name('home.orders');
    Route::post('/createorder', [CartController::class, 'create'])->name('order.create');

    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/checkout/create', [CheckoutController::class, 'create'])->name('paylivre.create');
    
    //CHECKOUT
    Route::post('/payment/ticket', [CheckoutController::class, 'ticket'])->name('payment.ticket');
    Route::post('/payment/card', [CheckoutController::class, 'card'])->name('payment.card');
    
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    //Users
    Route::delete('/users/{id}', [UsersController::class, 'destroy'])->name('users.destroy');
    Route::put('/users/{id}', [UsersController::class, 'update'])->name('users.update');
    Route::get('/users/{id}/edit', [UsersController::class, 'edit'])->name('users.edit');
    Route::get('/users', [UsersController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
    Route::post('/users', [UsersController::class, 'store'])->name('users.store');
    Route::get('/users/{id}', [UsersController::class, 'show'])->name('users.show');

    //Products
    Route::delete('/products/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');
    Route::put('/products/{id}', [ProductsController::class, 'update'])->name('products.update');
    Route::get('/products/{id}/edit', [ProductsController::class, 'edit'])->name('products.edit');
    Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductsController::class, 'store'])->name('products.store');
    Route::get('/products/{id}', [ProductsController::class, 'show'])->name('products.show');

    //Orders
    Route::delete('/orders/{id}', [OrdersController::class, 'destroy'])->name('orders.destroy');
    Route::put('/orders/{id}', [OrdersController::class, 'update'])->name('orders.update');
    Route::get('/orders/{id}/edit', [OrdersController::class, 'edit'])->name('orders.edit');
    Route::get('/orders', [OrdersController::class, 'index'])->name('orders.index');
    Route::get('/orders/create', [OrdersController::class, 'create'])->name('orders.create');
    Route::post('/orders', [OrdersController::class, 'store'])->name('orders.store');
    Route::get('/orders/{id}', [OrdersController::class, 'show'])->name('orders.show');

    //ADMIN
    Route::get('/',[AdminController::class, 'index'])->name('admin.index');
});