<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\User; 
use App\Models\Order;
use App\Models\Product;

class AuthAdmin extends Component
{
    public $productCount;

    public $userCount;
    public $orderCount;
    public $recentActivities;
    public $userOrder;

    public function mount()
    {
        $this->recentActivities = User::latest()->take(10)->get();
        $this->productCount = Product::count();
        $this->userCount = User::count();
        $this->orderCount = Order::count();

    }

    public function render()
    {
        return view('livewire.auth.admin.auth-admin', [
            'recentActivities' => $this->recentActivities,
            'productCount' => $this->productCount,
            'userCount' => $this->userCount,
            'orderCount' => $this->orderCount,
            'orders' => Order::with('user')->latest()->take(5)->get(),
        ]);
    }
}