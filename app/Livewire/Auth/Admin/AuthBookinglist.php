<?php

namespace App\Livewire\Auth\Admin;

use Livewire\Component;
use App\Models\Booking;

class AuthBookinglist extends Component
{
    public function render()
    {
        return view('livewire.auth.admin.auth-bookinglist', [
            'bookings' => Booking::with('user')->latest()->get()
        ]);
        
    }
}
