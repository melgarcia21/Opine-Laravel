<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'title',
        'slug',
        'content',
        'user_id',
        'category_id',
        'image',
        'published_at',
    ];
}