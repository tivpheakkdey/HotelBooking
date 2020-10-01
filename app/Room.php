<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'title', 'description', 'No',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
