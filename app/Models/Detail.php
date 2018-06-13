<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = [
        'price',
        'start_day',
        'end_day',
        'tour_id',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }

    public function news()
    {
        return $this->belongsTo(News::class);
    }
}
