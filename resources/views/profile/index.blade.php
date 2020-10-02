@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Booking</div>

                <div class="card-body">
                    @foreach ($user->bookings as $booking)
                        <div>
                            <div>Booking date: {{$booking->created_at}}</div>
                            <div>Arrival date: {{$booking->arrival_date}}</div>
                            <div>Departure date: {{$booking->departure_date}}</div>
                            <div>Room:{{$booking->room->title}}</div>
                            <div>no. of room: {{$booking->num_room}}</div>
                            <div>Total price: ${{$booking->amount}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
