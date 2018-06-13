<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'name',
        'content',
        'user_id',
        'tour_id',
        'rating',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tour()
    {
        return$this->belongsTo(Tour::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
