<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'slug',
        'description',
        'image',
        'photos',
        'prix',
        'stock',
        'min_quantite',
        'is_active',
        'is_new',
        'is_featured',
        'in_stock',
        'is_solde',
        'tailles',
        'couleurs',
        'categorie_id'

    ];

    protected $casts = [
        'tailles' => 'array',
        'photos' => 'array',
    ];

    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
}
