<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthSignUp extends Component
{
    public $name, $email, $contact_number, $password, $password_confirmation;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email|unique:users,email',
        'contact_number' => 'required|digits:11|regex:/^[0-9]+$/',
        'password' => 'required|min:6|confirmed',
    ];

    // Ensure that only guests can access the registration page
    public function mount()
    {
        if (Auth::check()) {
            // Redirect to Home
            return redirect()->route('home'); 
            
        }
    }

    public function register()
    {
        $validatedData = $this->validate();
        // New User
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'contact_number' => $validatedData['contact_number'],
            'password' => Hash::make($validatedData['password']),
        ]);

        Auth::login($user);

        session()->flash('message', 'Registration successful!');
        return redirect()->route('login');
        
    }

    public function render()
    {
        return view('livewire.auth.auth-sign-up');
    }
}