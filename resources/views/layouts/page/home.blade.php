<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="9Yt9m5zfYigMhCS8Vo0qApTQN63Co4FJBKMR4Cytpjo" />

    <!-- Loading Bootstrap -->
    <link href="{{mix('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{mix("css/font-awesome.css")}}">
    <!-- main style sheet -->
    <link rel="shortcut icon" href="images/favicon.ico">

</head>
<body>

<div id="page" class="page">

    {{--<div id="carousel-example-generic" class="carousel slide carousel-fade position-relative" data-ride="carousel">--}}
    <div id="carousel-example-generic" class="carousel slide position-relative hidden-xs" data-ride="carousel">
        <!-- Indicators -->
        {{--<ol class="carousel-indicators">--}}
            {{--<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>--}}
            {{--<li data-target="#carousel-example-generic" data-slide-to="1"></li>--}}
            {{--<li data-target="#carousel-example-generic" data-slide-to="2"></li>--}}
        {{--</ol>--}}

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{asset('images/slider/slider-1.jpg')}}" alt="...">
                {{--<div class="carousel-caption col-md-12">--}}
                    {{--<div class="header-big-text-1 os-animation text-center" data-os-animation="fadeInUp" data-os-animation-delay="0s">--}}
                        {{--<h3 class="color-white">Hello to Our Awesome <br>ew Template MyFlat.</h3>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
            <div class="item">
                <img src="{{asset('images/slider/slider-2.jpg')}}" alt="...">
                {{--<div class="carousel-caption">--}}
                    {{--<div class="header-big-text-1 os-animation text-center" data-os-animation="fadeInUp" data-os-animation-delay="0s">--}}
                        {{--<h3 class="color-white">Hello to Our Awesome <br>ew Template MyFlat.</h3>--}}
                    {{--</div>--}}
                    {{--<div class="header-small-text-1 os-animation text-center" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">--}}
                        {{--<h6 class="color-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Suspendis sefaucibus risus sit amet auctor sodales<br> justo erat tempor eros, non </h6>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
            <div class="item">
                <img src="{{asset('images/slider/slider-3.jpg')}}" alt="...">
                {{--<div class="carousel-caption">--}}

                {{--</div>--}}
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

        <div class="col-md-4 col-sm-5 col-xs-12 os-animation form-header hide" data-os-animation="fadeInUp" data-os-animation-delay="0s">
            <div class="header-form-2 bg-color-white">
                <div class="row">
                    <h5 class="color-orange-2 tx-center">INQUIRE NOW</h5>
                </div>
                <div class="row">
                    <form role="form" id="f_form">
                        {{csrf_field()}}
                        <div id="contact_form" >
                            <div class="row">
                                <input class="" required="required" id="f_name" name="f_name" placeholder="NAME (Required)" type="text">
                            </div>
                            <div class="row">
                                <input class="" required="required" id="f_email" name="f_email" placeholder="EMAIL" type="email">
                            </div>
                            <div class="row">
                                <input class="" required="required" id="f_country" name="f_country" placeholder="COUNTRY" type="text">
                            </div>
                            <div class="row">
                                <input class="" required="required" id="f_travel_date" name="f_travel_date" placeholder="TRAVEL DATE" type="date">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="" required="required" id="f_travelers" name="f_travelers" placeholder="TRAVELERS" min="0" type="number">
                                </div>
                                <div class="col-md-6">
                                    <input class="" required="required" id="f_days" name="f_days" placeholder="DAYS" min="0" type="number">
                                </div>
                            </div>
                            <div class="row">
                                <textarea class="" id="f_message" name="f_message" placeholder="MESSAGE"></textarea>
                            </div>
                            <div class="row">
                                {{--<input class="color-white" value="INQUIRE NOW" type="" id="f_send" onclick="sendDesign()">--}}
                                <button class="btn-inquire-form pull-right" id="f_send" type="button" onclick="sendDesign()">INQUIRE NOW
                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                </button>
                                <ul class="fa-ul pull-right hide" id="loader">
                                    <li><i class="fa-li fa fa-spinner fa-spin"></i> <i>Sending...</i></li>
                                </ul>
                            </div>
                            <div id="contact_results"></div>
                            <div class="col-md-12 margin-top-30 hide" id="f_congratulation">
                                <div class="alert alert-dismissible show custom-alert info-alert" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <p><strong><i class="fa fa-thumbs-up"></i> <b></b></strong></p>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>




    <div class="jain_container">
        <img src="{{asset('images/slider/slider-xs.jpg')}}" alt="" class="img-responsive hidden-sm hidden-md hidden-lg">

        @include('layouts.page.menu')

    </div>

    @yield('content')

    @include("layouts.page.form.default-from")

    @include("layouts.page.footer")
</div><!-- /#page -->


<!--====================== JAVA SCRIPTS =============================-->

<script src="{{asset("js/app.js")}}"></script>
<script src="{{asset("js/admin/plugins.js")}}"></script>



<script>
    function sendDesign(){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('[name="_token"]').val()
            }
        });

        $("#f_send").attr("disabled", true);

        var filter=/^[A-Za-z][A-Za-z0-9_]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;


        var s_name = $('#f_name').val();
        var s_email = $('#f_email').val();
        var s_country = $('#f_country').val();
        var s_date = $('#f_travel_date').val();
        var s_travelers = $('#f_travelers').val();
        var s_days = $('#f_days').val();
        var s_message = $('#f_message').val();


        if (filter.test(s_email)){
            sendMail = "true";
        } else{
            $('#f_email').css("border-bottom", "2px solid #FF0000");
            sendMail = "false";
        }
        if (s_name.length == 0 ){
            $('#f_name').css("border-bottom", "2px solid #FF0000");
            var sendMail = "false";
        }

        if(sendMail == "true"){
            var datos = {

                "txt_name" : s_name,
                "txt_email" : s_email,
                "txt_country" : s_country,
                "txt_date" : s_date,
                "txt_travelers" : s_travelers,
                "txt_days" : s_days,
                "txt_message" : s_message

            };
            $.ajax({
                data:  datos,
                url:   "{{route('inquire_path')}}",
                type:  'post',

                beforeSend: function () {
                    $('#f_send').removeClass('show');
                    $("#f_send").addClass('hide');
                    $("#loader").removeClass('hide');
                    $("#loader").addClass('show');
                },
                success:  function (response) {
                    $('#f_form')[0].reset();
                    $("#loader").removeClass('show');
                    $("#loader").addClass('hide');
                    $("#f_congratulation b").html(response);
                    $("#f_congratulation").fadeIn('slow');
                    $('#f_congratulation').removeClass('hide');
                    $("#f_send").removeAttr("disabled");
                    $('#f_send').removeClass('hide');
                    $('#f_send').addClass('show');
                }
            });
        } else{
            $("#f_send").removeAttr("disabled");
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
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-105312358-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>