<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            'room_id' => ['required'],
            'description' => ['string','nullable'],
            'arrival_date' => ['required','date','after_or_equal:today'],
            'departure_date' => ['required','date','after:arrival_date'],
            'num_room' => ['required', 'numeric'],
            'amount' => ['required','numeric'],
        ]);

        dd($data);
        // auth()->user()->bookings()->create($data);
    }
}
