<?php

use App\Http\Controllers\ClientController;
use App\Http\Middleware\ShareShopData;
use Illuminate\Support\Facades\Route;

// client routes
Route::middleware([ShareShopData::class])->group(function () {
    Route::get('/', [ClientController::class, 'index'])->name('client.index');
    Route::get('/login', [ClientController::class, 'viewLogin'])->name('client.login');
    Route::get('/register', [ClientController::class, 'viewRegister'])->name('client.register');
    Route::get('/account/orders', [ClientController::class, 'viewAccountOrders'])->name('client.account.orders');
    Route::get('/account/order-details', [ClientController::class, 'viewAccountOrderDetails'])->name('client.account.order.details');
    Route::get('/product/details', [ClientController::class, 'viewProductDetails'])->name('client.product.details');
    Route::get('/shopping-cart', [ClientController::class, 'viewShoppingCart'])->name('client.shopping-cart');
    Route::get('/checkout', [ClientController::class, 'viewCheckout'])->name('client.checkout');
    Route::get('/faq', [ClientController::class, 'viewFaq'])->name('client.faq');
    Route::get('/order-completed', [ClientController::class, 'viewOrderCompleted'])->name('client.order-completed');
    Route::get('/shop', [ClientController::class, 'viewShop'])->name('client.shop');
    
});

