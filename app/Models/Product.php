<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'weight',
        'image',
        'short_description',
        'long_description',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
