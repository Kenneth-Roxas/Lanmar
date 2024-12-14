<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class Authabout extends Component
{
    public $cartCount = 0;

    public function mount(){
        $this->cartCount = $this->getCartCount();
    }

    private function getCartCount()
    {
        if (Auth::check()) {
            // Get cart items 
            return Cart::where('user_id', Auth::id())->sum('quantity');
        } else {
            $cart = session()->get('cart', []);
            return array_sum(array_column($cart, 'quantity'));
        }
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
        return view('livewire.auth.authabout');
    }
}