<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AuthBooking extends Component
{

    public $name, $email;
    public function render()
    {
        $this->name = Auth::check() ? Auth::user()->name : 'Sign In First';
        $this->email = Auth::check() ? Auth::user()->email : 'Sign In First';

        return view('livewire.auth.auth-booking')->with([
            'name' => $this->name,
            'email' => $this->email,
        ]);
    }
}
