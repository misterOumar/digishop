<?php

use App\Http\Controllers\ClientController;
use App\Http\Middleware\ShareShopData;
use App\Livewire\CheckoutPage;
use App\Livewire\FaqPage;
use App\Livewire\HomePage;
use App\Livewire\LoginPage;
use App\Livewire\MyOrderDetailPage;
use App\Livewire\MyOrdersPage;
use App\Livewire\NotFoundPage;
use App\Livewire\OrderCompletedPage;
use App\Livewire\ProductDetailPage;
use App\Livewire\ProductsPage;
use App\Livewire\RegisterPage;
use App\Livewire\ShoppingCartPage;
use Illuminate\Support\Facades\Route;

// customer routes
Route::middleware([ShareShopData::class])->group(function () {
    Route::get('/', HomePage::class)->name('client.index');
    Route::get('/login', LoginPage::class)->name('customer.login');
    Route::get('/register', RegisterPage::class)->name('customer.register');
    Route::get('/my-orders', MyOrdersPage::class)->name('client.account.orders');
    Route::get('/my-orders/{order}', MyOrderDetailPage::class)->name('client.account.order.details');
    Route::get('/products/{product}', ProductDetailPage::class)->name('customer.product.details');
    Route::get('/shopping-cart', ShoppingCartPage::class)->name('client.shopping-cart');
    Route::get('/checkout', CheckoutPage::class)->name('client.checkout');
    Route::get('/faq', FaqPage::class)->name('customer.faqs');
    Route::get('/order-completed', OrderCompletedPage::class)->name('client.order-completed');
    Route::get('/products', ProductsPage::class)->name('customer.products');
    
    // not found
    Route::fallback(NotFoundPage::class);
});


