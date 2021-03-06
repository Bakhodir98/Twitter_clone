<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $users;

    protected $fillable = [
        'firstname', 'lastname', 'username', 'image', 'date_of_birth', 'email', 'password',
    ];
    public $timestamps = true;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function setNew_PasswordAttribute($password)
    {
        dd($password);
        $this->attributes['new_password'] = Hash::make($password);
    }
    public function likes()
    {
        return $this->hasMany('App\Like');
    }
}