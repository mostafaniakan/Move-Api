<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Model;

class Movie_Category extends Model
{
    protected $table = 'movie_category';
    protected $fillable=[
        'movie_id',
        'category_id',
    ];
}
