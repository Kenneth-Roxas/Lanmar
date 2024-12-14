<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class AuthCart extends Component
{
    public $cartItems = [];
    public $cartCount = 0;

    protected $listeners = ['cartUpdated' => 'updateCartCount'];

    public function mount()
    {
        $this->refreshCartItems();
        $this->cartCount = $this->getCartCount();
    }

    public function updateCartCount()
    {
        $this->cartCount = $this->getCartCount();
    }

    private function getCartCount()
    {
        if (Auth::check()) {
            // Get cart count for authenticated user
            return Cart::where('user_id', Auth::id())->sum('quantity');
        } else {
            // Fallback for guest users
            $cart = session()->get('cart', []);
            return array_sum(array_column($cart, 'quantity'));
        }
    }

    private function refreshCartItems()
    {
        if (Auth::check()) {
            // Fetch cart items from the database for authenticated user
            $this->cartItems = Cart::where('user_id', Auth::id())
                ->with('product')
                ->get()
                ->map(function ($cartItem) {
                    return [
                        'id' => $cartItem->product_id,
                        'quantity' => $cartItem->quantity,
                        'price' => $cartItem->product->price,
                        'name' => $cartItem->product->product_name,
                        'image' => $cartItem->product->image_product,
                        'total_price' => $cartItem->product->price * $cartItem->quantity,
                    ];
                })
                ->toArray();
        } else {
            // Fallback for guest users
            $cart = session()->get('cart', []);
            $this->cartItems = collect($cart)->map(function ($item) {
                $product = Product::find($item['id']);
                return [
                    'id' => $item['id'],
                    'quantity' => $item['quantity'],
                    'price' => $product->price,
                    'name' => $product->product_name,
                    'image' => $product->image_product,
                    'total_price' => $product->price * $item['quantity'],
                ];
            })->toArray();
        }
    }

    public function incrementQuantity($itemId)
    {
        if (Auth::check()) {
            // Increment quantity in the database
            $cartItem = Cart::where('user_id', Auth::id())->where('product_id', $itemId)->first();
            if ($cartItem) {
                $cartItem->quantity++;
                $cartItem->save();
            }
        } else {
            // Increment quantity in session for guest users
            $cart = session()->get('cart', []);
            if (isset($cart[$itemId])) {
                $cart[$itemId]['quantity']++;
                session()->put('cart', $cart);
            }
        }

        $this->refreshCartItems();
        $this->updateCartCount();
    }

    public function decrementQuantity($itemId)
    {
        if (Auth::check()) {
            // Decrement quantity in the database
            $cartItem = Cart::where('user_id', Auth::id())->where('product_id', $itemId)->first();
            if ($cartItem && $cartItem->quantity > 1) {
                $cartItem->quantity--;
                $cartItem->save();
            }
        } else {
            // Decrement quantity in session for guest users
            $cart = session()->get('cart', []);
            if (isset($cart[$itemId]) && $cart[$itemId]['quantity'] > 1) {
                $cart[$itemId]['quantity']--;
                session()->put('cart', $cart);
            }
        }

        $this->refreshCartItems();
        $this->updateCartCount();
    }

    public function removeItem($itemId)
    {
        if (Auth::check()) {
            // Remove item from the database for authenticated user
            Cart::where('user_id', Auth::id())->where('product_id', $itemId)->delete();
        } else {
            // Remove item from session for guest users
            $cart = session()->get('cart', []);
            unset($cart[$itemId]);
            session()->put('cart', $cart);
        }

        $this->refreshCartItems();
        $this->updateCartCount();
    }

    public function getCartTotal()
    {
        return collect($this->cartItems)->sum('total_price');
    }

    public function checkout()
    {
        if (Auth::check()) {
            // Example: Save cart details to orders table or process payment
            Cart::where('user_id', Auth::id())->delete();
        } else {
            session()->forget('cart'); // Clear the cart for guest users
        }

        $this->cartItems = [];
        $this->cartCount = 0;

        session()->flash('success', 'Checkout completed successfully!');
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
        return view('livewire.auth.auth-cart', [
            'cartItems' => $this->cartItems,
        ]);
    }
}
