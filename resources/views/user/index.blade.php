@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Booking</div>

                <div class="card-body">
                    @foreach ($user->bookings as $booking)
                        <div>{{$booking->description}}</div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
