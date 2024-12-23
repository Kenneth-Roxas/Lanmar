<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use App\Mail\CartMail;

class AuthCartCheckout extends Component
{
    public $cartItems = [];
    public $totalAmount = 0;

    public $name;
    public $contact_number;
    public $street;
    public $city;
    public $payment_method;
    public $gcash_number;

    public function mount()
    {
        $this->refreshCartItems();
        $this->totalAmount = $this->getCartTotal();

        if (Auth::check()) {
            $user = Auth::user();
            $this->name = $user->name;
            $this->contact_number = $user->contact_number ?? '';
            $this->street = $user->street ?? '';
            $this->city = 'Virac'; 
            $this->paymentMethod = null;
            $this->gcashNumber = '';
        }
    }

    public function refreshCartItems()
    {
        if (Auth::check()) {
            $this->cartItems = Cart::where('user_id', Auth::id())
                ->with('product')  // Ensure that 'product' is being loaded
                ->get()
                ->map(function ($cartItem) {
                    return [
                        'id' => $cartItem->product_id,
                        'quantity' => $cartItem->quantity,
                        'price' => $cartItem->product->price,
                        'name' => $cartItem->product->product_name,
                        'image' => $cartItem->product->image_product, // Add image here
                        'total_price' => $cartItem->product->price * $cartItem->quantity,
                    ];
                })
                ->toArray();
        } else {
            session()->flash('error', 'You must be logged in to checkout.');
            return redirect()->route('login');
        }
    }


    private function getCartTotal()
    {
        return collect($this->cartItems)->sum('total_price');
    }

    public function completeCheckout()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'contact_number' => 'required|string|max:15',
            'street' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'payment_method' => 'required|string|in:cash,gcash',
            'gcash_number' => 'nullable|string|max:15|required_if:payment_method,gcash',
        ]);

        if (!Auth::check()) {
            session()->flash('error', 'You must be logged in to complete checkout.');
            return redirect()->route('login');
        }

        $userId = Auth::id();
        $cartItems = [];

        foreach ($this->cartItems as $item) {
            Order::create([
                'user_id' => $userId,
                'name' => $this->name,
                'contact_number' => $this->contact_number,
                'street' => $this->street,
                'city' => $this->city,
                'payment_method' => $this->payment_method,
                'gcash_number' => $this->payment_method === 'gcash' ? $this->gcash_number : null,
                'product_name' => $item['name'],
                'product_price' => $item['price'],
                'quantity' => $item['quantity'],
                'total_price' => $item['total_price'],
            ]);

            $cartItems[] = [
                'product_name' => $item['name'],
                'product_price' => $item['price'],
                'quantity' => $item['quantity'],
                'total_price' => $item['total_price'],
            ];
        }

        Mail::to(Auth::user()->email)->send(new CartMail($cartItems, $this->name, $this->contact_number, $this->street, $this->city, $this->payment_method, $this->gcash_number));


        Cart::where('user_id', $userId)->delete();

        session()->flash('success', 'Your order has been placed successfully! A confirmation email has been sent.');
        return redirect()->route('cart');
    }

    public function render()
    {
        return view('livewire.auth.auth-cart-checkout', [
            'cartItems' => $this->cartItems,
            'totalAmount' => $this->totalAmount,
        ]);
    }
}
