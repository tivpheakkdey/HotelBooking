<!DOCTYPE html>

@extends('layouts.app')

@section('content')

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--<link rel="icon" href="images/favicon.png" type="images/png">-->
    <!--<title>Paradise With a View</title>-->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/nice-select/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/owl-carousel/owl.carousel.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
    
</head>

<body>

<section class="banner_area">
        <div class="booking_table">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0"
                data-background=""></div>
                <div class="col-md-12">
                    <br/>
                    <br/>

                </div>

        
                    <div class="container">
                        <!--<div class="row justify-content-center">-->
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">{{$room->title}}</div>

                                    <div class="card-body">
                                        <div><img src="../{{$room->image}}" alt=""></div>
                                        <div class="details" style="display:inline;">Room Details: </div>
                                        <div>{{$room->description}}</div>
                                        <br/>
                                        <div class="price" style="display:inline;">Price: ${{$room->price}}</div>
                                        <!--<button class="bookingBtn">Book now!</button>-->
                                    </div>
                                    
                                    @auth
                    <div class="bookingDetails">
                        
                        <form method="POST" action="/booking">
                            @csrf
                            
                            <input type="hidden" id="room_id" name="room_id" value="{{$room->id}}"><br><br>

                            <div>
                                <h6>Book Now!</h6>
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

                            <input class="submitBtn" type="submit" value="Submit">
                        </form>
                    </div>
                @endauth

                @guest
                    <a href="{{ route('login') }}" class="signinAlert">Please signin to book</a>
                @endguest

                <br/>
                        <br/>
                        <br/>
                        <br/>
            </div>
                                </div>
                                
                            </div>
                        <!--</div>-->
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                    </div>

                
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
</section>
@endsection
</body>
</html>
<!-- -->