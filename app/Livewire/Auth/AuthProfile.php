<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthProfile extends Component
{
    public $name, $email, $contact_number;
    public $updateName;
    public $updateEmail;
    public $updateContact;
    public $newPassword;

    public function update()
{
    $this->validate([
        'updateName' => 'required|string|max:255',
        'updateEmail' => 'required|email|unique:users,email,'.Auth::id(),
        'updateContact' => 'nullable|string|max:15',
        'newPassword' => 'nullable|min:8',
    ]);
    $user = Auth::user();

    $user->name = trim($this->updateName);
    $user->email = trim($this->updateEmail);
    $user->contact_number = trim($this->updateContact); 
    if (!empty($this->newPassword)) {
        $user->password = Hash::make($this->newPassword);
    }
    $user->save();

    session()->flash('success', 'Your Account Has Been Updated!');
}

    public function render()
    {
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