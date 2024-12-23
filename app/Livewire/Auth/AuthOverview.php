<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class AuthOverview extends Component
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

    public function decrement(int $productId)
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }

    public function increment(int $productId)
    {
        $this->quantity++;
    }

    public function getTotalPrice()
    {
        return $this->product->price * $this->quantity;
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

    public function addToCart(int $productId)
    {
        $product = Product::find($productId);

        if (!$product) {
            $this->message = 'Product not found.';
            $this->messageType = 'error';
            return;
        }

        if (Auth::check()) {
            // Authenticating the user
            $cartItem = Cart::where('user_id', Auth::id())->where('product_id', $productId)->first();

            if ($cartItem) {
                $cartItem->quantity += $this->quantityCount;
                $cartItem->save();
            } else {
                Cart::create([
                    'user_id' => Auth::id(),
                    'product_id' => $productId,
                    'quantity' => $this->quantityCount,
                ]);
            }
        } else {
            // Guest user
            $cart = session()->get('cart', []);

            if (isset($cart[$productId])) {
                $cart[$productId]['quantity'] += $this->quantityCount;
            } else {
                $cart[$productId] = [
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'quantity' => $this->quantityCount,
                ];
            }

            session()->put('cart', $cart);
        }

        $this->updateCartCount();

        $this->message = 'Product added to cart successfully!';
        $this->messageType = 'success';
    }
    public function render()
    {
        return view('livewire.auth.auth-overview', [
            'product' => $this->product,
            'totalPrice' => $this->getTotalPrice(),
        ]);
    }
}
