<?php

namespace App\Livewire\Auth;

use App\Mail\OrderMail;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class AuthCheckOut extends Component
{

    public $name, $contact_number;
    public function OrderMail(){

        Mail::to(Auth::user()->email)->send(new OrderMail());

    }
    public function render()
    {

        $this->name = Auth::check() ? Auth::user()->name : 'Guest';
        $this->contact_number = Auth::check() ? Auth::user()->contact_number : 'None';

        return view('livewire.auth.auth-check-out')->with([
            'name' => $this->name,
            'contact_number' => $this->contact_number,
        ]);
    }
}
