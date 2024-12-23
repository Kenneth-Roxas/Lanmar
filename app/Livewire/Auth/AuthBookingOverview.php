<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Cart;
use App\Models\User;
use App\Models\Product;

class AuthBookingOverview extends Component
{
    public $quantity = 1;
    public $quantityCount = 1;
    public $cartCount = 0;
    public $product;

    public function mount($id)
    {
        $this->product = Product::findOrFail($id);

        $this->cartCount = $this->getCartCount();

    }

    public function updateCartCount()
    {
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

    public function booking(int $productId)
    {
        $product = Product::find($productId);

        if (!$product) {
            $this->message = 'Product not found.';
            $this->messageType = 'error';
            return;
        }

        if (Auth::check()) {
            return redirect()->route('booking', ['id' => $productId]);
        } else {
            $this->message = 'You must be logged in to book.';
            $this->messageType = 'error';
        }
    }
    public function render()
    {
        return view('livewire.auth.auth-booking-overview', [
            'product' => $this->product,
        ]);
    }
}
