<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'slug',
        'cover',
        'is_active',
    ];

    // Relation avec les produits
    public function produits()
    {
        return $this->hasMany(Produit::class);
    }
}
