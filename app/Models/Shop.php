<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'adresse',
        'phone_1',
        'phone_2',
        'email',
        'logo',
        'favicon',
        'primary_color',
        'secondary_color',
        'slogan',
        'description',
        'map',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'tiktok',
        'whatsapp'
    ];
}
