@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$room->title}}</div>

                <div class="card-body">
                    <div><img src="../{{$room->image}}" alt=""></div>
                    <div>description:{{$room->description}}</div>
                    <div>price{{$room->price}}</div>
                </div>
                @auth
                    <div>
                        <form method="POST" action="/booking">
                            @csrf
                            <input type="hidden" id="room_id" name="room_id" value="{{$room->id}}"><br><br>

                            <div>
                                <label for="arrival_date">Arrival Date:</label><br>
                                <input type="date" id="arrival_date" name="arrival_date"><br><br>

                                @error('arrival_date')
                                        <strong>{{ $message }}</strong>
                                @enderror
                            </div>

                            <div>
                                <label for="departure_date">Departure Date:</label><br>
                                <input type="date" id="departure_date" name="departure_date"><br><br>

                                @error('departure_date')
                                        <strong>{{ $message }}</strong>
                                @enderror
                            </div>

                            <div>
                                <label for="num_room">Number of room:</label><br>
                                <input type="number" id="num_room" name="num_room" min="0" max="10"><br><br>
                                @error('num_room')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <input type="submit" value="Submit">
                        </form>
                    </div>
                @endauth


            </div>
        </div>
    </div>
</div>
@endsection
