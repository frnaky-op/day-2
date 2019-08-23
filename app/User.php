<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'slug',
        'password',
    ];

    protected $hidden = [
        'email',
        'password',
    ];

    public $timestamps = false;

    protected $rememberTokenName = false;

    public function events()
    {
        return $this->hasMany(Event::class, 'organizer_id', 'id');
    }
}
