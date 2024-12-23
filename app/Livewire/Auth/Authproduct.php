<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class Authproduct extends Component
{
    public $categories, $products, $pricing, $product_image;
    public $quantityCount = 1;
    public $message = null;
    public $messageType = 'info';

    public $cartCount = 0;

    public function mount()
    {
        $this->products = Product::where('status', 1)->get();
        $this->categories = Product::all();
        $this->pricing = Product::all();
        $this->product_image = Product::all();

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
    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect()->route('login');
    }

    // Booking
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
        return view('livewire.auth.authproduct', [
            'categories' => $this->categories,
            'products' => $this->products,
            'pricing' => $this->pricing,
            'product_image' => $this->product_image,
        ]);
    }
}
