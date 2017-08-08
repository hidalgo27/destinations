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

    <div class="jain_container">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="phone-box">
                <div class="container">
                    <div class="col-md-12 text-right">
                        {{--<a href="tel:+18172304971" class="color-white"><b>US:+1(813)402-8042</b></a> |--}}
                        {{--<a href="tel:+51956235133" class="color-white"><b>PE:+51 956-235-133</b></a>--}}
                        <div class="medias">
                            <ul>
                                <a href="tel:+18172304971" class="color-white text-15">US:+1(813)402-8042</a> |
                                <a href="tel:+51956235133" class="color-white text-15">PE:+51 956-235-133</a> |
                                <li> <a href="http://peruviandestinations1.blogspot.pe/" class="bg-orange" target="_blank"> <i class="fa fa-rss-square" aria-hidden="true"></i></a></li>
                                {{--<li> <a href="#" onclick="startOlark()" class="bg-blue-2"> <i class="fa fa-commenting-o" aria-hidden="true"></i></a></li>--}}
                                <li>|</li>
                                <li> <a href="https://www.facebook.com/peruviandestinations/" target="_blank" class="color-facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li> <a href="https://www.youtube.com/channel/UCLYoki8IRrP5BoU2PkUc_xA" target="_blank" class="color-youtube"> <i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                <li> <a href="https://www.instagram.com/peruviandestinations/" target="_blank" class="color-instagram"> <i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="container1 container-fluid">
                <div class="col-md-3 no-padding">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="icon-menu"></i> Menu
                    </button>
                    <a class="navbar-brand" href="{{route('home_path')}}"> <img src="{{asset('images/logo-peruvian.png')}}" width="270"/></a>
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

                <div class="col-md-3">

                    {{--<ul>--}}
                    {{--<li> <a href="http://peruviandestinations1.blogspot.pe/" class="bg-orange"> <i class="fa fa-rss-square" aria-hidden="true"></i></a></li>--}}
                    {{--<li> <a href="#" onclick="startOlark()" class="bg-blue-2"> <i class="fa fa-commenting-o" aria-hidden="true"></i></a></li>--}}
                    {{--<li>|</li>--}}
                    {{--<li> <a href="https://www.facebook.com/peruviandestinations/" target="_blank" class="color-facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
                    {{--<li> <a href="https://www.youtube.com/channel/UCLYoki8IRrP5BoU2PkUc_xA" target="_blank" class="color-youtube"> <i class="fa fa-youtube" aria-hidden="true"></i></a></li>--}}
                    {{--<li> <a href="https://www.instagram.com/peruviandestinations/" target="_blank" class="color-instagram"> <i class="fa fa-instagram" aria-hidden="true"></i></a></li>--}}

                    {{--</ul>--}}
                    <div class="margin-top-15">
                        <a href="#" onclick="startOlark()" class="btn btn-danger"><i class="fa fa-commenting-o"></i> Chat</a>
                        <a href="#inquire" class="btn btn-lg btn-primary">Help me plan my trip</a>
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

        </nav>

    </div>

    @yield('content')

    <div class="item callout-7 margin-top-40" id="callout-7">

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

    @include("layouts.page.form.default-from")

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

<script>
    function tours(){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('[name="_token"]').val()
            }
        });

        $("#t_send").attr("disabled", true);

        var filter=/^[A-Za-z][A-Za-z0-9_]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;


        var s_tours = $('#t_tours').val();
        var s_name = $('#t_name').val();
        var s_email = $('#t_email').val();
        var s_tel = $('#t_tel').val();
        var s_comment = $('#t_comment').val();


        if (filter.test(s_email)){
            sendMail = "true";
        } else{
            $('#t_email').css("border-bottom", "2px solid #FF0000");
            sendMail = "false";
        }
        if (s_name.length == 0 ){
            $('#t_name').css("border-bottom", "2px solid #FF0000");
            var sendMail = "false";
        }

        if(sendMail == "true"){
            var datos = {

                "txt_tours" : s_tours,
                "txt_name" : s_name,
                "txt_email" : s_email,
                "txt_tel" : s_tel,
                "txt_comment" : s_comment

            };
            $.ajax({
                data:  datos,
                url:   "{{route('tours_form_path')}}",
                type:  'post',

                beforeSend: function () {
                    $('#t_send').removeClass('show');
                    $("#t_send").addClass('hide');
                    $("#loader3").removeClass('hide');
                    $("#loader3").addClass('show');
                },
                success:  function (response) {
                    $('#t_form')[0].reset();
                    $("#loader3").removeClass('show');
                    $("#loader3").addClass('hide');
                    $("#t_congratulation b").html(response);
                    $("#t_congratulation").fadeIn('slow');
                    $('#t_congratulation').removeClass('hide');
                    $("#t_send").removeAttr("disabled");
                    $('#t_send').removeClass('hide');
                    $('#t_send').addClass('show');
                }
            });
        } else{
            $("#t_send").removeAttr("disabled");
        }
    }


    function design(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('[name="_token"]').val()
            }
        });

        $("#d_send").attr("disabled", true);

        var filter=/^[A-Za-z][A-Za-z0-9_]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;


        var s_destinations = document.getElementsByName('destinations[]');
        var $destinations = "";
        for (var i = 0, l = s_destinations.length; i < l; i++) {
            if (s_destinations[i].checked) {
                $destinations += s_destinations[i].value+' , ';
            }
        }
        s_destinations = $destinations.substring(0,$destinations.length-3);


        var s_category = document.getElementsByName('category[]');
        var $category = "";
        for (var i = 0, l = s_category.length; i < l; i++) {
            if (s_category[i].checked) {
                $category += s_category[i].value+' , ';
            }
        }
        s_category = $category.substring(0,$category.length-3);

        var s_duration = document.getElementsByName('duration[]');
        var $duration = "";
        for (var i = 0, l = s_duration.length; i < l; i++) {
            if (s_duration[i].checked) {
                $duration += s_duration[i].value+' , ';
            }
        }
        s_duration = $duration.substring(0,$duration.length-3);

        var s_number = document.getElementsByName('number[]');
        var $number = "";
        for (var i = 0, l = s_number.length; i < l; i++) {
            if (s_number[i].checked) {
                $number += s_number[i].value+' , ';
            }
        }

        s_number = $number.substring(0,$number.length-3);


        var s_date = $('#d_date').val();
        var s_name = $('#d_name').val();
        var s_email = $('#d_email').val();
        var s_tel = $('#d_tel').val();
        var s_comment = $('#d_comment').val();


        if (filter.test(s_email)){
            sendMail = "true";
        } else{
            $('#d_email').css("border-bottom", "2px solid #FF0000");
            sendMail = "false";
        }
        if (s_name.length == 0 ){
            $('#d_name').css("border-bottom", "2px solid #FF0000");
            var sendMail = "false";
        }
        if (s_date.length == 0 ){
            $('#d_date').css("border-bottom", "2px solid #FF0000");
            var sendMail = "false";
        }

        if(sendMail == "true"){
            var datos = {

                "txt_destinations" : s_destinations,
                "txt_category" : s_category,
                "txt_duration" : s_duration,
                "txt_number" : s_number,

                "txt_date" : s_date,
                "txt_name" : s_name,
                "txt_email" : s_email,
                "txt_tel" : s_tel,
                "txt_comment" : s_comment,

            };
            $.ajax({
                data:  datos,
                url:   "{{route('design_path')}}",
                type:  'post',

                beforeSend: function () {
                    $('#d_send').removeClass('show');
                    $("#d_send").addClass('hide');
                    $("#loader2").removeClass('hide');
                    $("#loader2").addClass('show');
                },
                success:  function (response) {
                    $('#d_form')[0].reset();
                    $('#d_send').removeClass('show');
                    $('#d_send').addClass('hide');
                    $("#loader2").removeClass('show');
                    $("#loader2").addClass('hide');
                    $('#d_check').removeClass('hidden');
                    $("#d_check").addClass('show');
                    $("#d_congratulation b").html(response);
                    $("#d_congratulation").fadeIn('slow');
                    $('#d_congratulation').removeClass('hide');
                    $("#d_send").removeAttr("disabled");
                }
            });
        } else{
            $("#d_send").removeAttr("disabled");
        }
    }
</script>
<!-- begin olark code -->
<script type="text/javascript" async>
    ;(function(o,l,a,r,k,y){if(o.olark)return;
        r="script";y=l.createElement(r);r=l.getElementsByTagName(r)[0];
        y.async=1;y.src="//"+a;r.parentNode.insertBefore(y,r);
        y=o.olark=function(){k.s.push(arguments);k.t.push(+new Date)};
        y.extend=function(i,j){y("extend",i,j)};
        y.identify=function(i){y("identify",k.i=i)};
        y.configure=function(i,j){y("configure",i,j);k.c[i]=j};
        k=y._={s:[],t:[+new Date],c:{},l:a};
    })(window,document,"static.olark.com/jsclient/loader.js");
    /* Add configuration calls below this comment */
    olark.identify('7112-623-10-4666');

    //jQuery for page scrolling feature - requires jQuery Easing plugin
    function startOlark() {
        olark('api.box.expand');
    }

</script>
<!-- end olark code -->
</body>
</html>