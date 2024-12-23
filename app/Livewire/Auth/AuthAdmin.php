<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\User; 
use App\Models\Order;
use App\Models\Product;
use App\Models\Booking;
use App\Models\UserFeedback;

class AuthAdmin extends Component
{
    public $productCount;
    public $userCount;
    public $orderCount;
    public $recentActivities;
    public $userOrder;
    public $bookingCount;
    public $ratingCount;

    public function mount()
    {
        $this->recentActivities = User::latest()->take(10)->get();
        $this->productCount = Product::count();
        $this->userCount = User::count();
        $this->orderCount = Order::count();
        $this->bookingCount = Booking::count();
        $this->ratingCount = UserFeedback::avg('rating');
    }

    public function render()
    {
        return view('livewire.auth.admin.auth-admin', [
            'recentActivities' => $this->recentActivities,
            'productCount' => $this->productCount,
            'userCount' => $this->userCount,
            'orderCount' => $this->orderCount,
            'bookingCount' => $this->bookingCount,
            'orders' => Order::with('user')->latest()->take(5)->get(),
            'bookings' => Booking::with('user')->latest()->take(5)->get(),
            'feedbacks' => UserFeedback::with('user')->latest()->take(5)->get(),
            'ratings' => $this->ratingCount,
        ]);
    }
}