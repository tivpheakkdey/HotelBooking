<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

