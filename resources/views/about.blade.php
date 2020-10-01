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
            <div class="booking_table" style="min-height: 400px;">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="col-md-12">
                    
                <br/>
                <br/> 
                <br/>
                <br/>     
                </div>
                <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">About Us</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">About</li>
                    </ol>
                </div>
            </div>
        </section>

        <!--================Breadcrumb Area =================-->
        <section class="accomodation_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">About Us
                        <!--<br>Services Provided-->
                    </h2>
                    <p>Paradise With A View is a privately owned ,and managed Resorts and Condominiums since 2005.We provide two properties :<br>
                         <b>The Royal Garden Resort<br>Pacific Monarch Top Of the Beach Front Tower</b><br>

                    We provide our guests with the best service to make their stay with us memorable.
                    We provide The Loveliest Condos In All Of Waikiki
                        This is the best place for those who seek tranquility.</p><br>



                    <h5><B>The Royal Garden Hotel</B></h5><p>
                    Located short steps away
                    from the excitement of
                    world famous Waikiki
                    beach, the Royal Garden
                    at Waikiki hotel awaits you
                    upon arrival. On a
                    peaceful tree-lined lane,
                    just near Ala Wai
                    waterway, this resort
                    hotel with its elegant
                    tropical gardens
                    effectively merge
                    European eloquence with
                    Hawaii's tropical appeal.</p><br>



                    <h5><b>Pacific Monarch Top Of the Beach Front Tower</b></h5><p>


                    Gracious and  serene
                    best describes this
                    distinctive Waikiki tropical
                    garden-of-eden hotel.
                    From the moment you set
                    your feet in the luxurious
                    Italian marble lobbies, you
                    are overwhelmed with
                    astonishing elegance.
                    The attention to detail in
                    this centrally located
                    Pacific Ocean tropical
                    paradise leaves little to be
                    desired</p><br>

                </div>
                <div class="row mb_30">

                    <div class="container">
                        <div class="image-container" style="width:50%; padding: 5px ; float: left">

                            <img class="img-fluid" src="images/about_bg.jpg" alt="img">
                        </div>
                         <div class="image-container" style="width: 50% ; padding: 5px ; float: left">

                            <img class="img-fluid" src="images/rm.jpg" alt="img">
                         </div>
                    </div>
                </div>

            </div>
        </section>

<<<<<<< HEAD
=======

>>>>>>> 44d9250... added booking route, controller
        <!--================ Facilities Area  =================-->
        <section class="facilities_area section_gap">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            </div>
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_w">Royal Facilities</h2>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
                <div class="row mb_30">
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Restaurant</h4>
                            <p>We have world class Resturant in our Hotel with experienced cheffs. You can enjoy veg & non-ver meals.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Sports Area</h4>
                            <p>We have seperate sports area for your sports activities and for your children leausure. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Swimming Pool</h4>
                            <p>There is very tiny swimming pool at our Restaurant for your. Its surronded by a nature environment.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-car"></i>Rent a Car</h4>
                            <p>You can rent a car from us with Driver or Withour Driver. We provides for you with an incredible offer.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Gymnesium</h4>
                            <p>We have a great gymnesium with lots of equipments. You can do your fitness activites at anytime.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Bar</h4>
                            <p>For make you more happy we have mini bar inside our Resturant. You can enjoy your parties here.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<<<<<<< HEAD
        <!--================ Facilities Area  =================-->
=======
>>>>>>> 44d9250... added booking route, controller

@endsection

</body>
</html>