<?php

namespace App\Livewire\Auth;

use App\Mail\OrderMail;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class AuthCheckOut extends Component
{
    public function OrderMail(){

        Mail::to('roxaskenneth508@gmail.com')->send(new OrderMail());

    }
    public function render()
    {
        return view('livewire.auth.auth-check-out');
    }
}
