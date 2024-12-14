<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CartMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $cartItems;
    public string $name;
    public string $contact_number;
    public string $street;
    public string $city;
    public string $payment_method;
    public ?string $gcash_number;
    public float $totalPrice;

    public function __construct(
        array $cartItems,
        string $name,
        string $contact_number,
        string $street,
        string $city,
        string $payment_method,
        ?string $gcash_number = null
    ) {
        $this->cartItems = $cartItems;
        $this->name = $name;
        $this->contact_number = $contact_number;
        $this->street = $street;
        $this->city = $city;
        $this->payment_method = $payment_method;
        $this->gcash_number = $gcash_number;

        // Total Price
        $this->totalPrice = array_reduce($cartItems, function ($carry, $item) {
            return $carry + $item['total_price'];
        }, 0);
    }

    public function build()
    {
        return $this->subject('Cart Order Confirmation')
                    ->view('emails.cart_confirmation');
    }
}