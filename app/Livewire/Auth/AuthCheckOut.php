<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\Product;
use App\Mail\OrderMail;

class AuthCheckOut extends Component
{
    public $products; // Eloquent Collection of products
    public $name;
    public $contact_number;
    public $street = '';
    public $city = 'Virac';
    public $paymentMethod;
    public $gcashNumber;
    public $total = 0;

    public function mount(array $productIds = [7])
    {
        if (empty($productIds)) {
            $this->products = collect(); 
        } else {
            $this->products = Product::whereIn('id', $productIds)->get();
            $this->products->each(function ($product) {
                $product->quantity = $product->quantity ?? 1; 
                \Log::info("Product quantity: " . $product->quantity);
            });
        }

        $this->name = Auth::check() ? Auth::user()->name : 'Guest';
        $this->contact_number = Auth::check() ? Auth::user()->contact_number : 'None';
    }

    public function calculateTotal()
    {
        $this->total = $this->products->reduce(function ($carry, $product) {
            if ($product->price > 0) {
                \Log::info("Product price: " . $product->price); 
                return $carry + ($product->price * $product->quantity);
            } else {
                \Log::warning("Invalid price for product: " . $product->product_name); 
            }
            return $carry;
        }, 0);

        \Log::info("Total calculated: ₱" . number_format($this->total, 2)); 
    }

    public function increaseQuantity($index)
    {
        if (isset($this->products[$index])) {
            $this->products[$index]->quantity++;
            $this->calculateTotal(); 
        }
    }

    public function decreaseQuantity($index)
    {
        if (isset($this->products[$index])) {
            $this->products[$index]->quantity = max($this->products[$index]->quantity - 1, 1);
            $this->calculateTotal(); 
        }
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

        $orderDetails = [
            'products' => $this->products->map(function ($product) {
                return [
                    'product_name' => $product->product_name,
                    'price' => '₱' . number_format($product->price, 2),
                    'quantity' => $product->quantity,
                ];
            })->toArray(),
            'name' => $this->name,
            'contact_number' => $this->contact_number,
            'street' => $this->street,
            'city' => $this->city,
            'payment_method' => $this->paymentMethod,
            'gcash_number' => $this->paymentMethod === 'gcash' ? $this->gcashNumber : null,
            'total' => '₱' . number_format($this->total, 2),
        ];

        if (Auth::check()) {
            Mail::to(Auth::user()->email)->send(new OrderMail($orderDetails));
        }

        session()->flash('message', 'Order placed successfully! A confirmation email has been sent.');
        $this->resetForm();
    }

    private function resetForm()
    {
        $this->products = collect();
        $this->street = '';
        $this->city = '';
        $this->paymentMethod = null;
        $this->gcashNumber = null;
        $this->total = 0;
    }

    public function render()
    {
        $this->calculateTotal();

        return view('livewire.auth.auth-check-out', [
            'products' => $this->products,
            'total' => $this->total,
        ]);
    }
}
