<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use App\Models\Shop;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    // show index page
    public function index()
    {   
        // Récupérer toutes les catégories avec le nombre de produits
        $categories = Categorie::withCount('produits')->get();

        // Récupérer tous les produits avec le nom de la catégorie
        $produits = Produit::with('categorie')->get();

        return view('clients.index', compact('categories', 'produits'));
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
        // Récupérer tous les produits avec le nom de la catégorie
        $produits = Produit::with('categorie')->get();
        return view('clients.shop', compact('produits'));
    }
}
