<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $likes;

    protected $fillable = [
        'user_id', 'post_id', 'like',
    ];
    public $timestamps = false;
}