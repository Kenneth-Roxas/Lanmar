<?php

namespace App\Livewire\Auth\Admin;

use Livewire\Component;
use App\Models\Product;

class AuthProductList extends Component
{
    public $categories;
    public $products;

    public $pricing;

    public function mount() 
    {
        // Fetch
        $this->categories = Product::all();
        $this->products = Product::all();
        $this->pricing = Product::all();
    }

    public function render()
    {
        return view('livewire.auth.admin.auth-product-list', [
            'categories' => $this->categories,
            'products' => $this->products,
            'pricing' => $this->pricing,
        ]);
    }
}
