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
        'description',
        'image',
        'photos',
        'prix',
        'stock',
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
}
