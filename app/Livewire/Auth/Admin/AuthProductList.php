<?php

namespace App\Livewire\Auth\Admin;

use Livewire\Component;
use App\Models\Product;

class AuthProductList extends Component
{
    public $categories;
    public $products;

    public $pricing;

    public $product_image;

    public function mount()
    {
        // Fetch
        $this->products = Product::all();
        $this->categories = $this->products;
        $this->pricing = $this->products;
        $this->product_image = $this->products;

    }

    public function delete($id)
    {
        $deleteProducts = Product::find($id);
        if ($deleteProducts) {
            $deleteProducts->delete();
        } else {
            session()->flash('error', 'Product not Found');
        }

        $this->products = Product::all();
    }

    public function update($id)
    {
        return redirect()->route('updateProduct', ['id' => $id]);
    }
    
    public function render()
    {
        return view('livewire.auth.admin.auth-product-list', [
            'categories' => $this->categories,
            'products' => $this->products,
            'pricing' => $this->pricing,
            'product_image' => $this->product_image,
        ]);
    }
}
