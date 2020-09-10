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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function getTotalComments()
    {
        return $this->hasMany('App\Comment')->where('id', $this->id)->count();
    }
    public function likes()
    {
        return $this->hasMany('App\Like');
    }
}