<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'attendee_id',
        'ticket_id',
        'date',
        'rating',
    ];

    public $timestamps = false;
}
