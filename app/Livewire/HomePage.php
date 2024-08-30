<?php

namespace App\Livewire;

use App\Models\Categorie;
use App\Models\Produit;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Accueil - DigiShop' )]
class HomePage extends Component
{
    public function render()
    {
        // Récupérer toutes les catégories avec le nombre de produits
        $categories = Categorie::where('is_active', 1)->withCount('produits')->get();

        // Récupérer tous les produits avec le nom de la catégorie
        $produits = Produit::with('categorie')->get();
        return view('livewire.home-page', compact('categories', 'produits'));
    }
}
