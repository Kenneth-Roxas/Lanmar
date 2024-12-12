<?php

namespace App\Livewire\Auth\Admin;

use Livewire\Component;
use App\Models\Order;

class AuthOrders extends Component
{
    public function render()
    {
        return view('livewire.auth.admin.auth-orders', [
            'orders' => Order::with('user')->latest()->get(),
        ]);
    }
}
