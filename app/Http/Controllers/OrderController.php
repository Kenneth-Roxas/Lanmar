<?php

namespace App\Http\Controllers;

use App\Mail\OrderConfirmationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function showGreeting()
    {
        $user = auth()->user(); 
        return view('greeting', ['userName' => $user->name]);
    }

    public function confirmOrder($token)
    {
        $sessionToken = session('order_confirmation_token');

        if (!$sessionToken) {
            return response()->json(['message' => 'No token found or session expired.'], 403);
        }

        if ($token === $sessionToken) {
            session()->forget('order_confirmation_token');
            return redirect()->route('greeting');
        }

        return response()->json(['message' => 'Invalid or expired token.'], 404);
    }

    public function sendOrderConfirmation()
    {
        $user = auth()->user();
        $token = Str::random(32);

        session(['order_confirmation_token' => $token]);

        Mail::to($user->email)->send(new OrderConfirmationMail($user, $token));

        return redirect()->route('product');
    }
}