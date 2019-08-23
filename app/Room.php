<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'channel_id',
        'name',
        'capacity',
    ];

    protected $hidden = [
        'channel_id',
        'capacity',
    ];

    public $timestamps = false;

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }
}
