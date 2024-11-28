<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $token;

    public function __construct($user, $token)
    {
        $this->user = $user;
        $this->token = $token;
    }

    public function build()
    {
        return $this->subject('Order Confirmation')
                    ->view('emails.orderConfirmation')
                    ->with([
                        'userName' => auth()->user()->name,
                        'confirmationLink' => url("/confirm-order/{$this->token}")
                    ]);
    }
}