<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Authlogin extends Component
{
    public $email;

    public $password;

    public function login(){
        dd($this->email, $this->password);
    }

    public function register(){
        dd("this is register");
    }
    public function render()
    {
        return view('livewire.auth.authlogin');
    }
}
