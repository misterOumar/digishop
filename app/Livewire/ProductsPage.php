<?php

namespace App\Livewire;

use App\Models\Produit;
use App\Models\Shop;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Produits - DigiShop' )]
class ProductsPage extends Component
{
    use WithPagination;

    public $perPage = 2;
    public $shop;

    public function mount()
    {
        // Récupérer les informations sur le shop actif
        $this->shop = Shop::where('is_active', 1)->first();
    }

    public function render()
    {
        $productQuery = Produit::query()->where('is_active', 1)->with('categorie');
        return view('livewire.products-page', [
            'produits' => $productQuery->paginate($this->perPage),
            'shop' => $this->shop
        ]);
    }
}
