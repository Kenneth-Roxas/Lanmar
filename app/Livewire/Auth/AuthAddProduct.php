<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\Product;

class AuthAddProduct extends Component
{
    public $category_table, $product_table, $pricing; 

    public function add_category()
    {
        // Validate input
        $this->validate([
            'category_table' => 'required|string|max:255|regex:/[A-Z]/', 
            'product_table' =>  'required|string|max:255|regex:/[A-Z]/', 
            'pricing' => 'required|regex:/^\d+(\.\d{2})?$/',
        ]);

        // Save
        Product::create([
            'category_name' => $this->category_table,
            'product_name' => $this->product_table,
            'price' => $this->pricing,
        ]);

        $this->category_table = '';
        $this->product_table = '';
        $this->pricing = '';

        // Provide feedback (optional)
        session()->flash('success', __('Product added successfully!'));

    }

    public function render()
    {
        return view('livewire.auth.admin.auth-add-product');
    }
}
