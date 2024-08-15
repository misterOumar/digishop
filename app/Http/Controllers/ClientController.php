<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    // show index page
    public function index()
    {
        $shop = Shop::where('is_active', 1)->first();
        return view('clients.index', compact('shop'));
    }


    public function viewLogin()
    {
        return view('clients.login');
    }

    public function viewRegister()
    {
        return view('clients.register');
    }

    public function viewAccountOrders()
    {
        return view('clients.account-orders');
    }

    public function viewAccountOrderDetails()
    {
        return view('clients.account-order-detail');
    }

    public function viewProductDetails()
    {
        return view('clients.product-detail');
    }

    public function viewShoppingCart()
    {
        return view('clients.shopping-cart');
    }

    public function viewCheckout()
    {
        return view('clients.checkout');
    }

    public function viewFaq()
    {
        return view('clients.faq');
    }

    public function viewOrderCompleted()    
    {
        return view('clients.order-completed');
    }

    public function viewShop()    
    {
        return view('clients.shop');
    }
}
