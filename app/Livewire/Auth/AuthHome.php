<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\Product;

class AuthHome extends Component
{
    public function mount()
    {
        // Fetch
        $this->categories = Product::all();
        $this->products = Product::all();
        $this->pricing = Product::all();
        $this->product_image = Product::all();
    }
    
    public function render()
    {
        return view('livewire.auth.auth-home', [
            'catugories' => $this->categories,
            'products' => $this->products,
            'pricing' => $this->pricing,
            'product_image' => $this->product_image,
        ]);
    }
}
