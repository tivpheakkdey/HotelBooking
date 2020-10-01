<?php

namespace App\Http\Controllers;

use App\Room;
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
            'amount' => ['numeric'],
        ]);

        $price = Room::find(request('room_id'))->price;
        $total_price = $price * request('num_room');

        dd(array_merge($data,['amount'=>$total_price]));
        // auth()->user()->bookings()->create($data);
    }
}
