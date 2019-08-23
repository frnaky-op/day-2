<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'organizer_id',
        'name',
        'slug',
        'date',
    ];

    protected $hidden = [
        'organizer_id',
    ];

    public $timestamps = false;

    public function organizer()
    {
        return $this->belongsTo(User::class, 'organizer_id', 'id');
    }

    public function channels()
    {
        return $this->hasMany(Channel::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
    
    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}
