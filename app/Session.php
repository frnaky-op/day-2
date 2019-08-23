<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = [
        'room_id',
        'type',
        'title',
        'speaker',
        'cost',
        'start',
        'end',
        'description',
    ];

    protected $hidden = [
        'room_id',
    ];

    public $timestamps = false;

    public function getCostAttribute()
    {
        return 'workshop' === $this->attributes['type'] ? $this->attributes['cost'] : null;
    }
}
