<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

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

    public function logout()
    {
        Auth::logout(); 
        session()->invalidate(); 
        session()->regenerateToken(); 

        return redirect()->route('login'); 
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
