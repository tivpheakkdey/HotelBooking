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
</head>
<body>
<!--================Banner Area =================-->
    <section class="banner_area">
            <div class="booking_table">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0"
                    data-background="">
                </div>

                <div class="col-md-12"><br/><br/></div>

                <div class="container">
                    <div class="banner_content text-center">
                        <h6>Welcome to</h6>
                        <h2>Profile Page</h2>
                    </div>
                </div>
            </div>

            <section class="facilities_area section_gap">
                <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
                @foreach ($user->bookings as $booking)
                <div class="container">
                    <div class="col-lg-4 col-md-6">
                            <div class="facilities_item">
                                <div>Booking date: {{$booking->created_at}}</div>
                                <div>Arrival date: {{$booking->arrival_date}}</div>
                                <div>Departure date: {{$booking->departure_date}}</div>
                                <div>Room:{{$booking->room->title}}</div>
                                <div>no. of room: {{$booking->num_room}}</div>
                                <div>Total price: ${{$booking->amount}}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </section>

    </section>
</body>
@endsection

</html>







