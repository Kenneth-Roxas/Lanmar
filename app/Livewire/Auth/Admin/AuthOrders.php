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
    public function render()
    {
        return view('livewire.auth.admin.auth-orders', [
            'orders' => $this->orders,
        ]);
    }
}
