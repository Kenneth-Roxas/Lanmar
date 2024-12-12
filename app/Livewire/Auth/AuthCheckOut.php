<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Mail\OrderMail;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;

class AuthCheckOut extends Component
{
    public $name, $contact_number, $street = '', $city = 'Virac', $paymentMethod, $gcashNumber;
    public $product;
    public $quantity = 1; 

    public function mount($id)
    {
        $this->product = Product::findOrFail($id);

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
    public function placeOrder()
{
    if ($this->paymentMethod === 'gcash') {
        if (empty($this->gcashNumber)) {
            $this->addError('gcashNumber', 'GCash number is required for GCash payment.');
            return;
        }

        if (!preg_match('/^\d{11}$/', $this->gcashNumber)) {
            $this->addError('gcashNumber', 'Please enter a valid 11-digit GCash number.');
            return;
        }
    }

    if (Auth::check()) {
        // Save Order
        $order = Order::create([
            'user_id' => Auth::id(),
            'name' => $this->name,
            'contact_number' => $this->contact_number,
            'street' => $this->street,
            'city' => $this->city,
            'payment_method' => $this->paymentMethod,
            'gcash_number' => $this->gcashNumber,
            'product_name' => $this->product->product_name,
            'product_price' => $this->product->price,
            'quantity' => $this->quantity,
            'total_price' => $this->getTotalPrice(),
        ]);

        // Confirmation Email
        Mail::to(Auth::user()->email)->send(new OrderMail($order));
    }

    session()->flash('message', 'Order placed successfully! A confirmation email has been sent.');
}


    public function render()
    {
        return view('livewire.auth.auth-check-out', [
            'product' => $this->product,
            'totalPrice' => $this->getTotalPrice(),
        ]);
    }
}
















// $orderDetails = [
//     'products' => $this->products->map(function ($product) {
//         return [
//             'product_name' => $product->product_name,
//             'price' => '₱' . number_format($product->price, 2),
//             'quantity' => $product->quantity,
//         ];
//     })->toArray(),
//     'name' => $this->name,
//     'contact_number' => $this->contact_number,
//     'street' => $this->street,
//     'city' => $this->city,
//     'payment_method' => $this->paymentMethod,
//     'gcash_number' => $this->paymentMethod === 'gcash' ? $this->gcashNumber : null,
//     'total' => '₱' . number_format($this->total, 2),
// ];