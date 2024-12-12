<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\User; 
use App\Models\Order;

class AuthAdmin extends Component
{
    public $userCount;
    public $orderCount;
    public $recentActivities;

    public function mount()
    {
        $this->recentActivities = User::latest()->take(10)->get();
        $this->userCount = User::count();
        $this->orderCount = Order::count();
    }

    public function render()
    {
        return view('livewire.auth.admin.auth-admin', [
            'recentActivities' => $this->recentActivities,
            'userCount' => $this->userCount,
            'orderCount' => $this->orderCount,
        ]);
    }
}
