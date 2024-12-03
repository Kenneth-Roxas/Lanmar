<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithFileUploads;

class AuthAddProduct extends Component
{
    use WithFileUploads;

    public $category_table, $product_table, $pricing, $image_product;

    public function add_category()
    {
        $this->validate([
            'category_table' => 'required|string|max:255|regex:/[A-Z]/',
            'product_table' => 'required|string|max:255|regex:/[A-Z]/',
            'pricing' => 'required|regex:/^\d+(\.\d{2})?$/',
            'image_product' => 'required|image|max:51200',
        ]);

        if ($this->image_product) {
            $path = $this->image_product->store('images/products', 'public');  // Store file in public directory
            Product::create([
                'category_name' => $this->category_table,
                'product_name' => $this->product_table,
                'price' => $this->pricing,
                'image_product' => $path, 
            ]);
        }

        // Reset fields
        $this->category_table = '';
        $this->product_table = '';
        $this->pricing = '';
        $this->image_product = null;

        // Provide feedback (optional)
        session()->flash('success', __('Product added successfully!'));

        return redirect()->route('adding');
    }


    public function render()
    {
        return view('livewire.auth.admin.auth-add-product');
    }
}
