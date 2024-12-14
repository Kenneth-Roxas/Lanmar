<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class Authcontact extends Component
{

    public $name, $email;
    public $cartCount = 0;

    public function mount()
    {
        $this->cartCount = $this->getCartCount();
    }


    private function getCartCount()
    {
        if (Auth::check()) {
            // Get cart items count for authenticated users
            return Cart::where('user_id', Auth::id())->sum('quantity');
        } else {
            // Fallback for guest users
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
        $this->name = Auth::check() ? Auth::user()->name : 'Guest';
        $this->email = Auth::check() ? Auth::user()->email : 'Guest';

        return view('livewire.auth.authcontact')->with([
            'name' => $this->name,
            'email' => $this->email,
        ]);
    }
}