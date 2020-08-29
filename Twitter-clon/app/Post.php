<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $posts;

    protected $fillable = [
        'user_id', 'image', 'text', 'publish_date',
    ];
    public $timestamps = false;
}