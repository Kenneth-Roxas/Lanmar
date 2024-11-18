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
        $userName = 'Kenneth Roxas'; // Assuming the user is authenticated
    
        return view('greeting', ['userName' => 'Kenneth Roxas']);
    }
    
    public function confirmOrder($token)
{
    // Retrieve the token stored in the session
    $sessionToken = session('order_confirmation_token');

    // Check if the provided token matches the session token
    if ($sessionToken && $token === $sessionToken) {
        // Clear the token from the session
        session()->forget('order_confirmation_token');

        // Redirect to the greeting route
        return redirect()->route('greeting');
    }

    return response()->json(['message' => 'Invalid or expired token.'], 404);
}


    public function sendOrderConfirmation()
    {
        $user = auth()->user(); // Assuming the user is authenticated
        $token = Str::random(32); // Generate a unique token

        // Store the token temporarily in the session for later verification
        session(['order_confirmation_token' => $token]);

        // Send the confirmation email
        Mail::to('roxaskenneth508@gmail.com')->send(new OrderConfirmationMail($user, $token));

        return response()->json(['message' => 'Confirmation email sent.']);
    }
}
