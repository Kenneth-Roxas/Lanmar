<?php

namespace App\Livewire\Auth\Admin;

use Livewire\Component;
use App\Models\Booking;

class AuthBookinglist extends Component
{
    public $bookings;

    public function mount()
    {
        $this->bookings = Booking::with('user')->latest()->get();
    }

    public function updateStatus($bookingId, $status)
    {
        $booking = Booking::findOrFail($bookingId);
        $booking->update(['status' => $status]);

        session()->flash('message', "Booking #{$bookingId} status updated to " . ucfirst($status));

        // Refresh
        $this->bookings = Booking::with('user')->latest()->get();
    }

    public function markAsDone($bookingId)
    {
        // update
        $booking = Booking::findOrFail($bookingId);
        $booking->update(['status' => 'done']);

        // remove
        $this->bookings = $this->bookings->filter(fn($booking) => $booking->id !== $bookingId);

        // Flash a message indicating success
        session()->flash('message', "booking #{$bookingId} marked as done.");
    }

    public function render()
    {
        return view('livewire.auth.admin.auth-bookinglist', [
            'bookings' => $this->bookings,
        ]);
    }
}
