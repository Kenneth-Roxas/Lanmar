<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'product_name',
        'price', 
        'image_product',
    ];

    protected $casts = [
        'price' => 'decimal:2', 
    ];

    
    public function getCategoryName()
    {
        return strtoupper($this->category_name);
    }

    
    public function setCategoryName($value)
    {
        $this->attributes['category_name'] = strtolower($value);
    }

    
    public function getProductName()
    {
        return strtoupper($this->product_name);
    }

    public function setProductName($value)
    {
        $this->attributes['product_name'] = strtolower($value);
    }
}