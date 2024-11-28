<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authlogin extends Component
{
    public $email, $password;

    public function login() {
        $this->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $field = filter_var($this->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'contact_number';

        if(Auth::attempt([$field => $this->email, 'password' => $this->password])) {
            return redirect()->route('home');
        }

        session()->flash('error', 'Email or Password is incorrect');
    }
    public function render()
    {
        return view('livewire.auth.authlogin');
    }
}
