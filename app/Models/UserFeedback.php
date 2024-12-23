<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFeedback extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     */
    protected $table = 'user_feedback';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'email',
        'feedback',
        'rating',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
