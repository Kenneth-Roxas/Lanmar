<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class AuthAddProduct extends Component
{
    use WithFileUploads;

    public $category_table, $product_table, $pricing, $image_product, $product_description;

    public function add_category()
    {
        // Validate inputs
        $this->validate([
            'category_table' => 'required|string|max:255',
            'product_table' => 'required|string|max:255',
            'pricing' => 'required|numeric|min:0',
            'image_product' => 'required|image|max:5120', // 5MB max
            'product_description' => 'required|string|max:1000',
        ]);

        // Handle file upload
        if ($this->image_product) {
            $path = $this->image_product->store('images/products', 'public');
            
            // Save to the database
            Product::create([
                'category_name' => $this->category_table,
                'product_name' => $this->product_table,
                'price' => $this->pricing,
                'image_product' => $path,
                'description' => $this->product_description,
            ]);

            // Provide user feedback
            session()->flash('success', __('Product added successfully!'));

            // Redirect after adding product
            return redirect()->route('adding');
        }
    }

    public function render()
    {
        return view('livewire.auth.admin.auth-add-product');
    }
}
