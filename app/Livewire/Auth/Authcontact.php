<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Authcontact extends Component
{

    public $name, $email;


    public function render()
    {
        $this->name = Auth::check() ? Auth::user()->name : 'Guest';
        $this->email = Auth::check() ? Auth::user()->email : 'Guest';

        return view('livewire.auth.authcontact')->with([
            'name' => $this->name,
            'email' => $this->email,
        ]);
    }
}
