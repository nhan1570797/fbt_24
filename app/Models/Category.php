<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'parent_id',
    ];

    public function tours()
    {
        return$this->hasMany(Tour::class);
    }

    public function news()
    {
        return$this->hasMany(News::class);
    }
}
