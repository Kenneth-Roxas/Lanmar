<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $orderDetails;

    // Constructor now accepts the orderDetails array
    public function __construct($orderDetails)
    {
        $this->orderDetails = $orderDetails;
    }

    public function build()
    {
        return $this->subject('Order Confirmation')
                    ->view('emails.orderConfirmation')  // Blade view path
                    ->with('orderDetails', $this->orderDetails);
    }
}
