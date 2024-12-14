<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Carbon\Carbon;

class Authlogin extends Component
{
    public $email;
    public $password;
    public $lockoutTime = 0;

    public function mount()
    {
        if ($this->email) {
            $key = $this->rateLimiterKey();
            if (RateLimiter::tooManyAttempts($key, 3)) {
                $this->lockoutTime = RateLimiter::availableIn($key);
            }
        }
    }

    public function decrementLockoutTime()
    {
        if ($this->lockoutTime > 0) {
            $this->lockoutTime--;

            if ($this->lockoutTime === 0) {
                RateLimiter::clear($this->rateLimiterKey());
            }
        }
    }

    public function login()
    {
        $this->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|max:255',
        ]);

        $key = $this->rateLimiterKey();


        if (RateLimiter::tooManyAttempts($key, 3)) {
            $this->lockoutTime = RateLimiter::availableIn($key);
            $this->addError('credentials', 'Please wait before trying again.');
            return;
        }

        // Attempt 
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            RateLimiter::clear($key);
            return redirect()->route('home');
        }

        RateLimiter::hit($key, 5); 
        $this->lockoutTime = RateLimiter::availableIn($key);
        $this->addError('credentials', 'Email or Password is incorrect');
    }

    private function rateLimiterKey()
    {
        return 'login|' . strtolower($this->email) . '|' . request()->ip();
    }

    public function render()
    {
        return view('livewire.auth.authlogin');
    }
}