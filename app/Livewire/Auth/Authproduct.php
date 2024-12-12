<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class Authproduct extends Component
{
    public $categories, $products, $pricing, $product_image;
    public $quantityCount = 1;
    public $message = null;
    public $messageType = 'info';

    public function mount()
    {
        $this->products = Product::where('is_active', '1')->get();
        $this->categories = Product::all();
        $this->products = Product::all();
        $this->pricing = Product::all();
        $this->product_image = Product::all();
    }

    public function incrementQuantity()
    {
        if ($this->quantityCount < 20) {
            $this->quantityCount++;
        }
    }

    public function decrementQuantity()
    {
        if ($this->quantityCount > 1) {
            $this->quantityCount--;
        }
    }
    public function addToCart(int $productsId)
    {
    }
    public function render()
    {
        return view('livewire.auth.authproduct', [
            'categories' => $this->categories,
            'products' => $this->products,
            'pricing' => $this->pricing,
            'product_image' => $this->product_image,
        ]);
    }
}
