<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;
use App\Livewire\Auth;
use Livewire\Livewire;

class Order extends Controller
{
    function sendEmail(){
        $to="roxaskenneth508@gmail.com";
        $msg="This Email is Confirmation about your order";
        $subject="Lan-Mar";
        Mail::to($to)->send(new OrderMail($msg,$subject));

        return view('mail');
    }
}
