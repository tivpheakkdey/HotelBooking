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
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
<!--================Banner Area =================-->

            <section class="facilities_area section_gap">
                <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
                
                <div class="container">
                    <div class="banner_content text-center">
                        <h3>Booking details: </h3>
                    </div>
                </div>

                <div class="container2">
                    <div class="col-lg-4 col-md-6">
                            <!--<div class="facilities_item">-->
                                <table id="bookinDetailsTB">
                                    <tr class="rows">
                                        <th class="titleCell">>Booking date: </th>
                                        <th class="titleCell">Arrival date: </th>
                                        <th class="titleCell">Departure date: </th>
                                        <th class="titleCell">Room: </th>
                                        <th class="titleCell">no. of room: </th>
                                        <th class="titleCell">Total price: </th>
                                    </tr>
                                    @foreach ($user->bookings as $booking)
                                    <tr class="rows">>
                                        <td class="cell">{{$booking->created_at}}</td>
                                        <td class="cell">{{$booking->arrival_date}}</td>
                                        <td class="cell">{{$booking->departure_date}}</td>
                                        <td class="cell">{{$booking->room->title}}</td>
                                        <td class="cell">{{$booking->num_room}}</td>
                                        <td class="cell">${{$booking->amount}}</td>
                                    </tr>
                                    @endforeach
                                </table>
                            <!--</div>-->
                            </br>
                            </br>
                            </br>
                            </br>
                            </br>
                            </br>
                            </br>
                        </div>
                    </div>
            </section>

    </section>
</body>
@endsection

</html>







