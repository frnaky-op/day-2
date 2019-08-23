<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    protected $fillable = [
        'lastname',
        'registration_code',
        'token',
    ];

    public $timestamps = false;
}
