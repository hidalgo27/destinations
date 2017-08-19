<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="phone-box">
        <div class="container">
            <div class="col-md-12 text-right">
                {{--<a href="tel:+18172304971" class="color-white"><b>US:+1(813)402-8042</b></a> |--}}
                {{--<a href="tel:+51956235133" class="color-white"><b>PE:+51 956-235-133</b></a>--}}
                <div class="medias">
                    <ul>
                        <a href="tel:+18172304971" class="color-white text-14">US:+1(813) 336-22202</a> |
                        <a href="tel:+51956235133" class="color-white text-14">PE:+51 956-235-133</a>
                        <li class="hidden-xs"> <a href="http://peruviandestinations1.blogspot.pe/" class="bg-orange" target="_blank"> <i class="fa fa-rss-square" aria-hidden="true"></i></a></li>
                        {{--<li> <a href="#" onclick="startOlark()" class="bg-blue-2"> <i class="fa fa-commenting-o" aria-hidden="true"></i></a></li>--}}
                        <li class="hidden-xs">|</li>
                        <li class="hidden-xs"> <a href="https://www.facebook.com/peruviandestinations/" target="_blank" class="color-facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="hidden-xs"> <a href="https://www.youtube.com/channel/UCLYoki8IRrP5BoU2PkUc_xA" target="_blank" class="color-youtube"> <i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        <li class="hidden-xs"> <a href="https://www.instagram.com/peruviandestinations/" target="_blank" class="color-instagram"> <i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                    </ul>
                </div>
            </div>
        </div>

    </div>
    <div class="container1 container-fluid">
        <div class="col-md-3 col-xs-12 no-padding">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <i class="icon-menu"></i> Menu
            </button>
            <a class="navbar-brand hidden-xs" href="{{route('home_path')}}"> <img src="{{asset('images/logo-peruvian.png')}}" width="270"/></a>
            <a class="navbar-brand-xs hidden-sm hidden-md hidden-lg" href="{{route('home_path')}}"> <img src="{{asset('images/logo-peruvian.png')}}" width="270"/></a>
        </div>

        {{--<div class="col-md-4 well">--}}
        {{--hola--}}
        {{--</div>--}}
        <div class="col-md-6 no-padding">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                {{--<div class="col-md-12 text-center margin-top-20">--}}
                {{--<a href="#" onclick="startOlark()" class="btn btn-danger"><i class="fa fa-commenting-o"></i> Chat</a>--}}
                {{--<a href="#inquire" class="btn btn-primary">Help me plan my trip</a>--}}
                {{--<a href="" class="btn btn-danger">Contact Us</a>--}}
                {{--</div>--}}
                {{--<div class="col-md-12 text-center phone-box">--}}
                {{--<p class="text-12"><a href="tel:+51956235133" class="color-white"><b><i class="fa fa-phone" aria-hidden="true"></i> PERÚ:+51 956-235-133</b></a> | <a href="tel:+18134028042" class="color-white"><b><i class="fa fa-phone" aria-hidden="true"></i> USA:+1(813)402-8042</b></a></p>--}}
                {{--<p><a href="tel:+18172304971"><b>USA:+1(813)402-8042</b></a></p>--}}
                {{--</div>--}}
                <div class="col-md-12 margin-top-15">
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
                        <li><a href="{{route("tours_path")}}">CITY TOURS</a></li>
                        <li><a href="{{route("packages_path")}}">TOUR PACKAGES</a></li>
                        <li><a href="{{route("destinations_path")}}">DESTINATIONS</a></li>
                        {{--<li><a href="#">TOURS</a></li>--}}
                        {{--<li><a href="{{route("testimonials_path")}}">TESTIMONIALS</a></li>--}}
                        <li><a href="{{route("about_path")}}">ABOUT</a></li>
                        {{--<li><a href="#">TRAVEL BLOG</a></li>--}}
                        <li><a href="mailto:info@peruviandestinations.com" class="color-red-1 text-menu-email"><b><i class="fa fa-envelope-o"></i> CONTACT US</b></a></li>

                    </ul>
                </div>

            </div>
        </div>

        <div class="col-md-3 col-xs-12 hidden-xs">

            {{--<ul>--}}
            {{--<li> <a href="http://peruviandestinations1.blogspot.pe/" class="bg-orange"> <i class="fa fa-rss-square" aria-hidden="true"></i></a></li>--}}
            {{--<li> <a href="#" onclick="startOlark()" class="bg-blue-2"> <i class="fa fa-commenting-o" aria-hidden="true"></i></a></li>--}}
            {{--<li>|</li>--}}
            {{--<li> <a href="https://www.facebook.com/peruviandestinations/" target="_blank" class="color-facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
            {{--<li> <a href="https://www.youtube.com/channel/UCLYoki8IRrP5BoU2PkUc_xA" target="_blank" class="color-youtube"> <i class="fa fa-youtube" aria-hidden="true"></i></a></li>--}}
            {{--<li> <a href="https://www.instagram.com/peruviandestinations/" target="_blank" class="color-instagram"> <i class="fa fa-instagram" aria-hidden="true"></i></a></li>--}}

            {{--</ul>--}}
            <div class="margin-top-15">
                <a href="#" onclick="startOlark()" class="btn btn-primary hidden-xs"><i class="fa fa-commenting-o"></i> Chat</a>
                <a href="#inquire" class="btn btn-lg btn-danger hidden-xs">Help me plan my trip</a>
            </div>
            {{--<div class="classus margin-top-10">--}}
            {{--<a href="mailto:info@peruviandestinations.com"> <b>info@peruviandestinations.com</b></a>--}}
            {{--<p class="text-12"><a href="tel:+51956235133" class="color-white"><b><i class="fa fa-phone" aria-hidden="true"></i> PERÚ:+51 956-235-133</b></a> | <a href="tel:+18134028042" class="color-white"><b><i class="fa fa-phone" aria-hidden="true"></i> USA:+1(813)402-8042</b></a></p>--}}
            {{--<p class="no-margin"><a href="tel:+51956235133"><b class="color-black">PERÚ:+51 956-235-133</b></a></p>--}}
            {{--<p class="no-margin"><a href="tel:+18172304971"><b class="color-black">USA:+1(813)402-8042</b></a></p>--}}
            {{--</div>--}}

            {{--<div class="why_bookonline">--}}
            {{--<p> Why Bookonline?</p>--}}

            {{--</div>--}}

        </div>


    </div>
    <div class="col-md-12 box-action-xs text-center padding-10 hidden-md hidden-lg hidden-sm">
        <a href="mailto:info@peruviandestinations.com" class="btn btn-danger"><i class="fa fa-envelope-o"></i></a>
        <a href="#inquire" class="btn btn-primary">Help me plan my trip</a>
    </div>

</nav>