<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\Cart;
use App\Models\UserFeedback;
use Illuminate\Support\Facades\Auth;

class Authcontact extends Component
{

    public $name, $email;
    public $feedback, $rating;
    public $cartCount = 0;

    public function mount()
    {
        $this->name = Auth::check() ? Auth::user()->name : 'Guest';
        $this->email = Auth::check() ? Auth::user()->email : 'Guest';

        $this->cartCount = $this->getCartCount();
    }
    private function getCartCount()
    {
        if (Auth::check()) {
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

    public function submitFeedback()
    {
        $this->validate([
            'feedback' => 'required|string|min:10|max:500',
            'rating' => 'required|integer|min:1|max:10',
        ]);

        UserFeedback::create([
            'name' => $this->name,
            'email' => $this->email,
            'feedback' => $this->feedback,
            'rating' => $this->rating,
        ]);

        session()->flash('success', 'Thank you for your feedback!');
        $this->reset(['feedback', 'rating']);
    }



    public function render()
    {

        return view('livewire.auth.authcontact')->with([
            'name' => $this->name,
            'email' => $this->email,
        ]);
    }
}