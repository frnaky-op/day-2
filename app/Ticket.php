<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'event_id',
        'name',
        'cost',
        'validity',
        'amount',
        'date',
    ];

    protected $hidden = [
        'event_id',
        'validity',
        'amount',
        'deadline',
        'registrations',
    ];

    protected $appends = [
        'description',
        'available',
    ];

    public $timestamps = false;

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }

    public function getDescriptionAttribute()
    {
        if (!$this->attributes['validity']) {
            return null;
        }

        if ('date' === $this->attributes['validity']) {
            $date = new Carbon($this->attributes['date']);
            return 'Available until ' . $date->englishMonth . ' ' . $date->day . ', ' . $date->year;
        }

        return max(0, $this->attributes['amount'] - $this->registrations->count()) . ' tickets available';
    }

    public function getAvailableAttribute()
    {
        if ('date' === $this->attributes['validity']) {
            return time() < strtotime($this->attributes['date']);
        }

        return $this->registrations->count() < $this->attributes['amount'];
    }
}
