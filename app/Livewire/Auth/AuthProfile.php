<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AuthProfile extends Component
{
    public $name, $email, $contact_number;

    public function render()
    {
        // User Name
        $this->name = Auth::check() ? Auth::user()->name : 'Guest';
        $this->email = Auth::check() ? Auth::user()->email : 'None';
        $this->contact_number = Auth::check() ? Auth::user()->contact_number : 'None';

        return view('livewire.auth.auth-profile')->with([
            'name' => $this->name,
            'email' => $this->email,
            'contact_number' => $this->contact_number,
        ]);
    }
}
