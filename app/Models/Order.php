<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 
        'contact_number', 
        'street', 'city', 
        'payment_method', 
        'gcash_number',
    ];

    public function items()
    {
        return $this->belongsTo(User::class);
    }
}
