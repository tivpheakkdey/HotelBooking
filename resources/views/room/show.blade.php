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