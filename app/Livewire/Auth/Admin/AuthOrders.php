<?php

namespace App\Livewire\Auth\Admin;

use Livewire\Component;
use App\Models\Order;

class AuthOrders extends Component
{
    public $orders;

    public function mount()
    {
        $this->orders = Order::with('user')->latest()->get();
    }

    public function updateStatus($orderId, $status)
    {
        $orders = Order::findOrFail($orderId);
        $orders->update(['status' => $status]);

        session()->flash('message', "Order #{$orderId} status updated to " . ucfirst($status));

        // Refresh
        $this->orders = Order::with('user')->latest()->get();
    }

    public function markAsDone($orderId)
    {
        // update
        $order = Order::findOrFail($orderId);
        $order->update(['status' => 'done']);

        // remove
        $this->orders = $this->orders->filter(fn($order) => $order->id !== $orderId);

        // Flash a message indicating success
        session()->flash('message', "Order #{$orderId} marked as done.");
    }



    public function render()
    {
        return view('livewire.auth.admin.auth-orders', [
            'orders' => $this->orders,
        ]);
    }
}
