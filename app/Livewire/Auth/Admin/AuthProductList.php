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
    public $productdDescription;

    public function mount()
    {
        $this->products = Product::where('status', 1)->get();
        // Fetch all products
        $this->products = Product::all();
        $this->categories = $this->products;
        $this->pricing = $this->products;
        $this->product_image = $this->products;
        $this->productdDescription = $this->products;
    }

    public function toggleStatus($id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->status = !$product->status; // Toggle between 1 and 0
            $product->save();
            session()->flash('success', 'Product status updated successfully.');
        } else {
            session()->flash('error', 'Product not found.');
        }

        $this->products = Product::all(); // Refresh the product list
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
            'productdDescription' => $this->productdDescription,
        ]);
    }
}
