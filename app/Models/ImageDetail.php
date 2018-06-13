<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageDetail extends Model
{
    protected $fillable = [
        'image_detail',
        'mediable_id',
        'mediable_type',
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }

    public function news()
    {
        return $this->belongsTo(News::class);
    }
}
