@extends('layouts.app')

@section('content')
<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">About Us</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
       </div>
            </div>
        </div>
    </div>
</div>
-->
<head>
        <!-- Required meta tags -->

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/favicon.png" type="image/png">
        <title>Paradise With A View</title>


        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>


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

        
        <!--================ Facilities Area  =================-->
        <section class="facilities_area section_gap">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">  
            </div>


            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_w"><a href="#">Facilities</a></h2>
                    <p>Hotel awaits to provide and serve you with the best</p>
                </div>
                <div class="row mb_30">
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-dinner"></i><a href="#">Restaurant</a></h4>
                            <p>We provide the best Waikiki traditional menus and any food as prefered</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i><a href="#">Sports Club</a></h4>
                            <p>Join our outdoor and water sports club to get the best out of your vacation </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-shirt"></i><a href="#">Swimming Pool</a></h4>
                            <p>Enjoy our Roof Top
                                Ocean View Pool and
                                Jacuzzi In Waikik</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-car"></i><a href="#">Rent a Car</a></h4>
                            <p> VIP Car Rentals is one
                                block away, turn right on Kuhio</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-construction"></i><a href="#">Gymnesium</a></h4>
                            <p>Enjoy are fully equiped gym with a full view of the mountains and the beach</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i><a href="#">Spa</a></h4>
                            <p>Enjoy the free spa facilities provided to all our guests.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
@endsection
