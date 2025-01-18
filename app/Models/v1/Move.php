<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Model;

class Move extends Model
{
    protected $table = 'move';
    protected $fillable=[
        'name'
    ];
}
