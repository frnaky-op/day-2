<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $fillable = [
        'event_id',
        'name',
    ];

    protected $hidden = [
        'event_id',
    ];

    public $timestamps = false;

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
