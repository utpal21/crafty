<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";
    
    protected $fillable = [
        'name',
        'price', 
        'sale_price',
        'price_range',
        'min_order',
        'quantity',
        'featured',
        'description',
        'short_description',
        'image',
        'images',
        'category_id'
    ];

     public function category()
    {
        return $this->belongsTo(Category::class);
    }

    protected $casts = [
        'images' => 'array'
    ];
}