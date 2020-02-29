<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $guarded = ['id'];

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

    //relations
    public function type()
    {
        return $this->belongsTo('App\UserType', 'user_type_id');
    }

    // custom method
    public function isAdmin()
    {
        if ($this->type->name === 'Admin') {
            return true;
        }
        return false;
    }

    public function isMember()
    {
        if ($this->type->name === 'Member') {
            return true;
        }
        return false;
    }
}
