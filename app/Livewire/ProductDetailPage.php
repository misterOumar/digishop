<?php

namespace App\Livewire;

use App\Models\Produit;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Product Detail Page')]
class ProductDetailPage extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        return view('livewire.product-detail-page', [
            'product' => Produit::where('slug', $this->slug)->firstOrFail(),
        ]);
    }
}
