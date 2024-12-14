<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Booking;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingMail;

class AuthBooking extends Component
{
    use WithFileUploads;

    public $product;
    public $name;
    public $email;
    public $date;
    public $time;
    public $message;
    public $design;
    public $messageType;

    public function mount($id)
    {
        $this->product = Product::find($id);

        if (!$this->product) {
            $this->message = 'Product not found.';
            $this->messageType = 'error';
            return;
        }

        if (Auth::check()) {
            $this->name = Auth::user()->name;
            $this->email = Auth::user()->email;
        }
    }


    public function book()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'date' => 'required|date',
            'time' => 'required',
            'message' => 'nullable|string',
            'design' => 'nullable|image|max:5120', // Max 5MB
        ]);

        // Check if the product name exists
        if (!$this->product || !$this->product->product_name) {
            $this->message = 'Product is missing a name.';
            $this->messageType = 'error';
            return;
        }

        // Handle design
        $designPath = $this->design ? $this->design->store('designs', 'public') : null;

        // Create the booking record
        $booking = Booking::create([
            'user_id' => Auth::id(),
            'product_id' => $this->product->id,
            'product_name' => $this->product->product_name,
            'price' => $this->product->price,
            'name' => $this->name,
            'email' => $this->email,
            'date' => $this->date,
            'time' => $this->time,
            'message' => $this->message,
            'design' => $designPath,
        ]);

        Mail::to($this->email)->send(new BookingMail($booking));

        $this->reset(['date', 'time', 'message', 'design']);
        $this->message = 'Booking successful! A confirmation email has been sent.';
        $this->messageType = 'success';
    }


    public function render()
    {
        return view('livewire.auth.auth-booking', [
            'product' => $this->product,
        ]);
    }
}
