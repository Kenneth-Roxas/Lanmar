<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\Product;

class Authproduct extends Component
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
        return view('livewire.auth.authproduct', [
            'catugories' => $this->categories,
            'products' => $this->products,
            'pricing' => $this->pricing,
            'product_image' => $this->product_image,
        ]);
    }
}
