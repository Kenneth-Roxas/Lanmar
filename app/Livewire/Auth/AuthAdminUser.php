<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class AuthAdminUser extends Component
{
    public function render()
    {
        $user = User::orderBy('last_seen', 'DESC')->get();
        return view('livewire.auth.admin.auth-admin-user', [
            'user' => $user,
        ]);
    }
}