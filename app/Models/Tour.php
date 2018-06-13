<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = [
        'name',
        'rating',
        'content',
        'joumey',
        'image',
        'category_id',
        'qty_max',
        'qty_min',
    ];

    public function details()
    {
        return $this->hasMany(Detail::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function imageDetails()
    {
        return $this->hasMany(ImageDetail::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
