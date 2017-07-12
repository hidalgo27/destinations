<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Peruvian Destiations | Peru Travel Packages</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Loading Bootstrap -->
    <link href="{{mix('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{mix("css/font-awesome.css")}}">
    <!-- main style sheet -->
    <link rel="shortcut icon" href="images/favicon.ico">

</head>
<body>

<div id="page" class="page">

    {{--<header class="item header margin-top-0 header19" id="header19">--}}

        {{--<div class="container padding-top-100 padding-bottom-200"><!-- container -->--}}
            {{--<div class="row"><!--.row -->--}}
                {{--<div class="col-md-12 col-sm-12 col-xs-12 margin-top-100 margin-bottom-100 tx-center">--}}
                    {{--<div class="header-big-text-2 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">--}}
                        {{--<h2 class="color-white">best places to teavel</h2>--}}
                        {{--<h3 class="color-white">EXPLORE THE PLANET</h3>--}}
                    {{--</div>--}}
                    {{--<div class="subscription-form-2 col-md-8 col-sm-12 col-xs-12 tx-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.2s">--}}
                        {{--<!-- SIMPLE CONTACT FORM -->--}}

                        {{--<div id="contact_form3" >--}}
                            {{--<input name="name" class="input-field" placeholder="YOUR NAME" type="text" required="required">--}}
                            {{--<input name="email" class="input-field" placeholder="YOUR EMAIL" required="required" type="email">--}}
                            {{--<input class="subs-form-btn" value="KEEP ME UPDATED" type="submit" id="submit_btn3">--}}
                            {{--<div id="contact_results"></div>--}}
                        {{--</div>--}}

                        {{--<!--<form id="signup-1" class="mailchimp">--}}
                            {{--<input class="input-field" name="NAME" placeholder="YOUR NAME" type="text">--}}
                            {{--<input class="input-field" name="EMAIL" placeholder="YOUR EMAIL" required="" type="email">--}}
                            {{--<input class="subs-form-btn" value="KEEP ME UPDATED" type="submit">--}}
                            {{--<div class="subscription-success tx-left"></div>--}}
                            {{--<div class="subscription-error tx-left"></div>--}}
                        {{--</form>-->--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div><!-- /.row -->--}}

        {{--</div><!-- /.container -->--}}

    {{--</header><!-- /.item -->--}}

    {{--<div id="carousel-example-generic" class="carousel slide carousel-fade position-relative" data-ride="carousel">--}}
    <div id="carousel-example-generic" class="carousel slide position-relative" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{asset('images/slider/slider-1.jpg')}}" alt="...">
                <div class="carousel-caption col-md-4 text-left">
                    <div class="header-big-text-1 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                        <h3 class="color-white">Hello to Our Awesome <br>ew Template MyFlat.</h3>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{asset('images/slider/slider-2.jpg')}}" alt="...">
                <div class="carousel-caption">
                    <div class="header-big-text-1 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                        <h3 class="color-white">Hello to Our Awesome <br>ew Template MyFlat.</h3>
                    </div>
                    <div class="header-small-text-1 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">
                        <h6 class="color-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Suspendis sefaucibus risus sit amet auctor sodales<br> justo erat tempor eros, non </h6>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{asset('images/slider/slider-3.jpg')}}" alt="...">
                <div class="carousel-caption">

                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

        <div class="col-md-4 col-sm-5 col-xs-12 os-animation form-header" data-os-animation="fadeInUp" data-os-animation-delay="0s">
            <div class="header-form-2 bg-color-white">
                <div class="row">
                    <h5 class="color-orange-2 tx-center">INQUIRE NOW</h5>
                </div>
                <div class="row">
                    <div id="contact_form" >
                        <div class="row">
                            <input class="" required="required" id="name" name="name" placeholder="NAME" type="text">
                        </div>
                        <div class="row">
                            <input class="" required="required" id="email" name="email" placeholder="EMAIL" type="email">
                        </div>
                        <div class="row">
                            <input class="" required="required" id="country" name="country" placeholder="COUNTRY" type="email">
                        </div>
                        <div class="row">
                            <input class="" required="required" id="travel-date" name="travel-date" placeholder="TRAVEL DATE" type="date">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="" required="required" id="travel-date" name="travel-date" placeholder="TRAVELERS" min="0" type="number">
                            </div>
                            <div class="col-md-6">
                                <input class="" required="required" id="days" name="days" placeholder="DAYS" min="0" type="number">
                            </div>
                        </div>
                        <div class="row">
                            <textarea class="" id="message" name="message" placeholder="MESSAGE"></textarea>
                        </div>
                        <div class="row">
                            <input class="color-white" value="INQUIRE NOW"  type="submit" id="submit_btn">
                        </div>
                        <div id="contact_results"></div>
                    </div>
                </div>

            </div>
        </div>

    </div>




    <div class="jain_container">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container1 container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="icon-menu"></i> Menu
                    </button>
                    <a class="navbar-brand" href="#"> <img src="{{asset('images/logo-peruvian.png')}}" width="270"/></a>
                </div>


                <div class="col-md-6">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        {{--<div class="col-md-12 text-center margin-top-20">--}}
                            {{--<a href="" class="btn btn-danger">Contact Us</a>--}}
                        {{--</div>--}}
                        <div class="col-md-12">
                            <ul class="nav navbar-nav">

                                <li class="dropdown mega-dropdown">
                                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">DESTINATIONS <span class="caret"></span></a>--}}
                                    {{--<ul class="dropdown-menu mega-dropdown-menu">--}}
                                        {{--<li class="col-sm-4">--}}
                                            {{--<ul>--}}
                                                {{--<li class="dropdown-header">Features</li>--}}
                                                {{--<li><a href="#">Auto Carousel</a></li>--}}
                                                {{--<li><a href="#">Carousel Control</a></li>--}}
                                                {{--<li><a href="#">Left & Right Navigation</a></li>--}}
                                                {{--<li><a href="#">Four Columns Grid</a></li>--}}
                                                {{--<!-- <li class="divider"></li>--}}
                                                {{--<li class="dropdown-header">Fonts</li>--}}
                                                {{--<li><a href="#">Glyphicon</a></li>--}}
                                                {{--<li><a href="#">Google Fonts</a></li> -->--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-sm-4">--}}
                                            {{--<ul>--}}
                                                {{--<li class="dropdown-header">Plus</li>--}}
                                                {{--<li><a href="#">Navbar Inverse</a></li>--}}
                                                {{--<li><a href="#">Pull Right Elements</a></li>--}}
                                                {{--<li><a href="#">Coloured Headers</a></li>--}}
                                                {{--<li><a href="#">Primary Buttons & Default</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-sm-4">--}}
                                            {{--<ul>--}}
                                                {{--<li class="dropdown-header">Much more</li>--}}
                                                {{--<li><a href="#">Easy to Customize</a></li>--}}
                                                {{--<li><a href="#">Calls to action</a></li>--}}
                                                {{--<li><a href="#">Custom Fonts</a></li>--}}
                                                {{--<li><a href="#">Slide down on Hover</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}

                                    {{--</ul>--}}
                                </li>
                                <li><a href="#">DESTINATIONS</a></li>
                                <li><a href="#">TRAVEL PACKAGES</a></li>
                                <li><a href="#">TESTIMONIALS</a></li>
                                <li><a href="#">ABOUT</a></li>
                                {{--<li><a href="#">TRAVEL BLOG</a></li>--}}
                                <li><a href="" class="btn btn-danger color-white">Inquire Now</a></li>

                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-md-2 medias">

                    <ul>
                        <li> <a href=""> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li> <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li> <a href=""> <i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li> <a href=""> <i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>

                    </ul>

                    <div class="classus">

                        <p> Call us +91 22 39178077</p>

                    </div>

                    {{--<div class="why_bookonline">--}}
                        {{--<p> Why Bookonline?</p>--}}

                    {{--</div>--}}

                </div>


            </div>

        </nav>

    </div>


    <div class=" item padding-top-60 padding-bottom-50" id="content-area-3">

        <div class=" wrapper">

            <div class="container">

                <div class="row">
                    <div class="section-title-1 tx-center margin-bottom-30 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                        <h5 class="">incredible Travel Experiences</h5>
                        <div class="sec-title-div-1"></div>
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt<br> ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="content-area-3">

                            <div class="content-area-title-1 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0s">
                                <h5>All you have to know<br> about Our TRAVEL</h5>
                            </div>
                            <div class="feature-disc-1 margin-top-10 margin-bottom-20 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.2s">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br><br>t has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software.</p>
                            </div>



                        </div>

                    </div><!-- /.col-md-6 col -->
                    <div class="col-md-6 col-sm-6 col-xs-12 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                        <div class="content-area-3">
                            <div class="content-video-1">
                                <img src="{{asset('images/travel/video-2.jpg')}}" alt="video">

                                <div class="content-video-btn-1">
                                    <a href="https://www.youtube.com/watch?v=XzMFpRp5pYo"  class="html5lightbox content-vbtn-color-blue" data-width="570" data-height="320"><i class="fa fa-play-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-6 col -->
                </div><!-- /.row -->

            </div><!-- /.container -->

        </div><!-- /.wrapper -->

    </div><!-- /.item -->

    <div class="padding-top-60 padding-bottom-20" id="gallary-1">

        <div class="wrapper">

            <div class="container">

                <div class="row">
                    <div class="section-title-1 tx-center margin-bottom-30 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                        <h5 class="">What it can do for you</h5>
                        <div class="sec-title-div-1"></div>
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt<br> ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-4 col-sm-4 col-xs-12 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                        <div class="content-area-2 clearfix">
                            <div class="content-area-figure-1">
                                <img src="{{asset('images/packages/img-1.jpg')}}" alt="content area">
                            </div>
                            <div class=" col-md-12 ">
                                <div class="travel-duration tx-center">
                                    <p class="date color-white">22</p>
                                    <p class="days color-white">days</p>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-12 col-xs-8 content-area-title-1">
                                <h6 class="tx-left">Austrian Alps</h6>
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-4 travel-price">
                                <h6>$200.00</h6>
                            </div>

                        </div>
                    </div><!-- /.col-md-4 col -->
                    <div class="col-md-4 col-sm-4 col-xs-12 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">
                        <div class="content-area-2 clearfix">
                            <div class="content-area-figure-1">
                                <img src="{{asset('images/packages/img-2.jpg')}}" alt="content area">
                            </div>
                            <div class=" col-md-12 ">
                                <div class="travel-duration tx-center">
                                    <p class="date color-white">22</p>
                                    <p class="days color-white">days</p>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-12 col-xs-8 content-area-title-1">
                                <h6 class="tx-left">Austrian Alps</h6>
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-4 travel-price">
                                <h6>$200.00</h6>
                            </div>

                        </div>
                    </div><!-- /.col-md-4 col -->
                    <div class="col-md-4 col-sm-4 col-xs-12 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.2s">
                        <div class="content-area-2 clearfix">
                            <div class="content-area-figure-1">
                                <img src="{{asset('images/packages/img-3.jpg')}}" alt="content area">
                            </div>
                            <div class=" col-md-12 ">
                                <div class="travel-duration tx-center">
                                    <p class="date color-white">22</p>
                                    <p class="days color-white">days</p>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-12 col-xs-8 content-area-title-1">
                                <h6 class="tx-left">Austrian Alps</h6>
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-4 travel-price">
                                <h6>$200.00</h6>
                            </div>

                        </div>
                    </div><!-- /.col-md-4 col -->
                </div><!-- /.row -->

            </div><!-- /.container -->

        </div><!-- /.wrapper -->

    </div><!-- /.item -->

    <div class=" item padding-top-60 padding-bottom-50" id="content-area-4">

        <div class=" wrapper">

            <div class="container">

                {{--<div class="row">--}}
                    {{--<div class="section-title-1 tx-center margin-bottom-30 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">--}}
                        {{--<h5 class="">LAND OF THE INCAS</h5>--}}
                        {{--<div class="sec-title-div-1"></div>--}}
                        {{--<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt<br> ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>--}}
                    {{--</div>--}}
                {{--</div>--}}

                <div class="row">

                    {{--<div class="col-md-6 col-sm-6 col-xs-12">--}}
                        {{--<div class="content-area-3">--}}

                            {{--<div class="content-area-title-1 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0s">--}}
                                {{--<h5>All you have to know<br> about Our TRAVEL</h5>--}}
                            {{--</div>--}}
                            {{--<div class="feature-disc-1 margin-top-10 margin-bottom-20 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.2s">--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br><br>t has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software.</p>--}}
                            {{--</div>--}}



                        {{--</div>--}}

                    {{--</div><!-- /.col-md-6 col -->--}}
                    <div class="col-md-5 col-sm-6 col-xs-12 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                        <div class="content-area-3">
                            <div class="box-banner-offers clearfix">
                                <div class="col-md-12">
                                    <h2 class="text-30 text-center">LAND OF THE INCAS</h2>
                                    <div class="sec-title-div-1"></div>
                                    <p class="text-20 text-center color-black"><b>7 Days with air | from $1739*</b></p>
                                    <p class="color-black"><b>Save $250 with promo code KTEK250.</b></p>
                                    <p class="color-black"><b>Book by July 21, 2017.</b></p>
                                </div>
                                <div class="col-md-12 text-center margin-top-10">
                                    <a href="" class="btn btn-danger">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-6 col -->
                </div><!-- /.row -->

            </div><!-- /.container -->

        </div><!-- /.wrapper -->

    </div><!-- /.item -->

    <div class="padding-top-60 padding-bottom-20" id="feature-2">

        <div class="wrapper">

            <div class="container">

                <div class="row">
                    <div class="section-title-1 tx-center margin-bottom-30 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                        <h5>What it can do for you</h5>
                        <div class="sec-title-div-1"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt<br> ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-3 col-sm-6 col-xs-12 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                        <div class="feature-2">
                            <div class="feature-figure-1">
                                <img src="{{asset('images/icons/location.png')}}" alt="feature">
                            </div>
                            <div class="feature-title-1">
                                <h6>Destinations</h6>
                            </div>
                            <div class="feature-disc-1">
                                <p>Sed bibendum, arcu ac rhoncu nullalectus dictum mauris massa ipsum in nibh.</p>
                            </div>

                        </div>

                    </div><!-- /.col-md-3 col -->
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">
                        <div class="feature-2">
                            <div class="feature-figure-1">
                                <img src="{{asset('images/icons/tours.png')}}" alt="feature">
                            </div>
                            <div class="feature-title-1">
                                <h6>Hot Tours</h6>
                            </div>
                            <div class="feature-disc-1">
                                <p>Sed bibendum, arcu ac rhoncu nullalectus dictum mauris massa ipsum in nibh.</p>
                            </div>

                        </div>

                    </div><!-- /.col-md-3 col -->
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.2s">
                        <div class="feature-2">
                            <div class="feature-figure-1">
                                <img src="{{asset('images/icons/hotel.png')}}" alt="feature">
                            </div>
                            <div class="feature-title-1">
                                <h6>Hotel Info</h6>
                            </div>
                            <div class="feature-disc-1">
                                <p>Sed bibendum, arcu ac rhoncu nullalectus dictum mauris massa ipsum in nibh.</p>
                            </div>

                        </div>

                    </div><!-- /.col-md-3 col -->
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.3s">
                        <div class="feature-2">
                            <div class="feature-figure-1">
                                <img src="{{asset('images/icons/honeymon.png')}}" alt="feature">
                            </div>
                            <div class="feature-title-1">
                                <h6>Honeymoons</h6>
                            </div>
                            <div class="feature-disc-1">
                                <p>Sed bibendum, arcu ac rhoncu nullalectus dictum mauris massa ipsum in nibh.</p>
                            </div>

                        </div>

                    </div><!-- /.col-md-3 col -->

                </div><!-- /.row -->

            </div><!-- /.container -->

        </div><!-- /.wrapper -->

    </div><!-- /.item -->

    {{--<div class="item testimonial-2 padding-top-50 padding-bottom-50" id="testimonial-2">--}}
        {{--<div class="container">--}}

            {{--<div id="owl-testimonial-1" class="testimonials-ct">--}}

                {{--<div class="item">--}}
                    {{--<div class="col-md-6 col-sm-6 col-xs-12">--}}
                        {{--<div class="testi-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</div>--}}
                        {{--<div class="testi-cap-2">--}}
                            {{--<img src="images/travel/testi-1.png" alt="testimonial">--}}
                            {{--<div class="cap-content-2">--}}
                                {{--<h6>Sarah Schmidt</h6>--}}
                                {{--<p>CEO Digitalcraft</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6 col-sm-6 col-xs-12">--}}
                        {{--<div class="testi-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</div>--}}
                        {{--<div class="testi-cap-2">--}}
                            {{--<img src="images/travel/testi-1.png" alt="testimonial">--}}
                            {{--<div class="cap-content-2">--}}
                                {{--<h6>Sarah Schmidt</h6>--}}
                                {{--<p>CEO Digitalcraft</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="item callout-7" id="callout-7">

        <div class="row"><!--.row -->

            <div class="container os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s"><!-- container -->

                <div class="callout-title-2 tx-center color-white">
                    <div class="col-md-2">
                        <i class="fa fa-thumb-tack fa-5x" aria-hidden="true"></i>
                        <a href="" class="display-block color-orange-2">Destinations</a>
                    </div>
                    <div class="col-md-2">
                        <i class="fa fa-flag fa-5x" aria-hidden="true"></i>
                        <a href="" class="display-block color-orange-2">Tours</a>
                    </div>
                    <div class="col-md-2">
                        <i class="fa fa-th-large fa-5x" aria-hidden="true"></i>
                        <a href="" class="display-block color-orange-2">Travel Blog</a>
                    </div>
                    <div class="col-md-2">
                        <i class="fa fa-globe fa-5x" aria-hidden="true"></i>
                        <a href="" class="display-block color-orange-2">Travel Packages</a>
                    </div>
                    <div class="col-md-2">
                        <i class="fa fa-user-circle-o fa-5x" aria-hidden="true"></i>
                        <a href="" class="display-block color-orange-2">About Us</a>
                    </div>
                    <div class="col-md-2">
                        <i class="fa fa-comment-o fa-5x" aria-hidden="true"></i>
                        <a href="" class="display-block color-orange-2">Testimonials</a>
                    </div>
                </div>
                {{--<div class="callout-btn-6 tx-center">--}}
                    {{--<a href="#">CALL TO ACTION</a>--}}
                {{--</div>--}}
            </div><!-- /.container -->
        </div><!-- /.row -->
    </div><!-- /.item -->
    <div class=" item padding-top-60 padding-bottom-50" id="contact-form-1">
        <div class="row wrapper">
            <div class="container">
                <div class="row contact-form-1">
                    <div id="contact_form4" >
                        <div class="col-md-4 col-sm-4 col-xs-12 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                            <label>FIRST NAME</label>
                            <input placeholder="FIRST NAME" name="fname" required="required" type="text">
                        </div><!-- /.col-md-4 col -->
                        <div class="col-md-4 col-sm-4 col-xs-12 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                            <label>LAST NAME</label>
                            <input placeholder="LAST NAME" name="lname" required="required" type="text">
                        </div><!-- /.col-md-4 col -->
                        <div class="col-md-4 col-sm-4 col-xs-12 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">
                            <label>EMAIL</label>
                            <input placeholder="EMAIL" name="email" required="required" type="email">
                        </div><!-- /.col-md-4 col -->
                        <div class="col-md-4 col-sm-4 col-xs-12 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">
                            <label>PHONE NUMBER</label>
                            <input placeholder="PHONE NUMBER" name="phone" required="required" type="text">
                        </div><!-- /.col-md-4 col -->
                        <div class="col-md-4 col-sm-4 col-xs-12 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.2s">
                            <label>COUNTRY</label>
                            <input placeholder="COUNTRY" name="country" required="required" type="text">
                        </div><!-- /.col-md-4 col -->
                        <div class="col-md-4 col-sm-4 col-xs-12 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.2s">
                            <label>PACKAGE</label>
                            <input placeholder="PACKAGE" name="package" required="required" type="text">
                        </div><!-- /.col-md-4 col -->
                        <div class="col-md-12 col-sm-12 col-xs-12 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.3s">
                            <label>MESSAGE</label>
                            <textarea  name="message" placeholder="MESSAGE"></textarea>
                        </div><!-- /.col-md-4 col -->
                        <div class="col-md-12 col-sm-12 col-xs-12 tx-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.4s">
                            <input class="form-btn" value="Inquire Now" type="submit" id="submit_btn4">
                        </div><!-- /.col-md-4 col -->
                        <div id="contact_results"></div>
                    </div>
                </div>
            </div><!-- /.container -->
        </div>
    </div><!-- /.item -->
    <footer class="item footer  footer-2" id="footer-2">
        <div class="row"><!--.row -->

            <div class="container"><!-- container -->
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-2-box tx-center">
                            <div class="footer-2-icon"><i class="fa fa-map-marker"></i></div>
                            <div class="footer-title-1">
                                <h5>ADDRESS</h5>
                            </div>
                            <div class="footer-disc-1">
                                <p>250 Elizabeth Str., Melbourne, Australia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-2-box tx-center">
                            <div class="footer-2-icon"><i class="fa fa-map-marker"></i></div>
                            <div class="footer-title-1">
                                <h5>ADDRESS</h5>
                            </div>
                            <div class="footer-disc-1">
                                <p>250 Elizabeth Str., Melbourne, Australia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-2-box tx-center">
                            <div class="footer-2-icon"><i class="fa fa-map-marker"></i></div>
                            <div class="footer-title-1">
                                <h5>ADDRESS</h5>
                            </div>
                            <div class="footer-disc-1">
                                <p>250 Elizabeth Str., Melbourne, Australia</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-social-2 tx-center">
                    <ul>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </div>
                <div class="copyright-text-1 tx-center">
                    <p>© Travel 2017, All Rights Reserved, Developed by Hidalgo</p>
                </div>
            </div><!-- /.container -->
        </div><!-- /.row -->
    </footer><!-- /.item -->
</div><!-- /#page -->


<!--====================== JAVA SCRIPTS =============================-->

<script src="{{asset("js/app.js")}}"></script>
<script src="{{asset("js/admin/plugins.js")}}"></script>



</body>
</html>