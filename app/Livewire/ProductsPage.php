<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Categorie;
use App\Models\Produit;
use App\Models\Shop;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Produits - DigiShop' )]
class ProductsPage extends Component
{
    use WithPagination;

    public $perPage = 4;
    public $shop;

    public function mount()
    {
        // Récupérer les informations sur le shop actif
        $this->shop = Shop::where('is_active', 1)->first();
    }

    #[Url]
    public $selected_categories = [];

    public $selected_brands = [];



    public function render()
    {
        $productQuery = Produit::query()->where('is_active', 1)->with('categorie');

        if (!empty($this->selected_categories)) {
            $productQuery->whereIn('categorie_id', $this->selected_categories);
        }

        return view('livewire.products-page', [
            'produits' => $productQuery->paginate($this->perPage),
            'shop' => $this->shop,
            'categories' => Categorie::where('is_active', 1)->get(['id', 'nom', 'slug']),
            'brands' => Brand::where('is_active', 1)->get(['id', 'name', 'slug']),
        ]);
    }
}
