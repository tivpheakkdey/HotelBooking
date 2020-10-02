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


        $date1 = strtotime($data['arrival_date']);
        $date2 = strtotime($data['departure_date']);
        $diff = abs($date2 - $date1);

        $years = floor($diff / (365*60*60*24));
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
        $days = floor(($diff - $years * 365*60*60*24 -$months*30*60*60*24)/ (60*60*24));

        $price = Room::find($data['room_id'])->price;
        $total_price = $price * $data['num_room'] * $days;

        auth()->user()->bookings()->create(array_merge($data,['amount'=>$total_price]));

        return redirect('/profile/'.auth()->user()->id);
    }
}
