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
                    <a class="navbar-brand" href="{{route('home_path')}}"> <img src="{{asset('images/logo-peruvian.png')}}" width="270"/></a>
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
                                <li><a href="{{route("destinations_path")}}">DESTINATIONS</a></li>
                                <li><a href="{{route("packages_path")}}">TOURS PACKAGES</a></li>
                                {{--<li><a href="#">TOURS</a></li>--}}
                                <li><a href="{{route("testimonials_path")}}">TESTIMONIALS</a></li>
                                <li><a href="{{route("about_path")}}">ABOUT</a></li>
                                {{--<li><a href="#">TRAVEL BLOG</a></li>--}}
                                <li><a href="#inquire" class="btn btn-danger color-white">Inquire Now</a></li>

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

    @yield('content')

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