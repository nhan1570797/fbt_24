<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'address',
        'email',
        'gender',
        'identity_card',
        'phone',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
