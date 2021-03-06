<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {{--{!! Twitter::generate() !!}--}}
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
        {{--<img src="{{asset('images/slider/slider-xs.jpg')}}" alt="" class="img-responsive hidden-sm hidden-md hidden-lg">--}}
        @include('layouts.page.menu')
    </div>

    @yield('content')

    <div class="item callout-7 margin-top-40" id="callout-7">

        <div class="row"><!--.row -->

            <div class="container os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s"><!-- container -->

                <div class="callout-title-2 tx-center color-white">
                    <div class="col-md-2 col-sm-2">
                        <i class="fa fa-thumb-tack fa-5x" aria-hidden="true"></i>
                        <a href="" class="display-block color-orange-2">Destinations</a>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <i class="fa fa-flag fa-5x" aria-hidden="true"></i>
                        <a href="" class="display-block color-orange-2">Tours</a>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <i class="fa fa-th-large fa-5x" aria-hidden="true"></i>
                        <a href="" class="display-block color-orange-2">Travel Blog</a>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <i class="fa fa-globe fa-5x" aria-hidden="true"></i>
                        <a href="" class="display-block color-orange-2">Travel Packages</a>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <i class="fa fa-user-circle-o fa-5x" aria-hidden="true"></i>
                        <a href="" class="display-block color-orange-2">About Us</a>
                    </div>
                    <div class="col-md-2 col-sm-2">
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

    @include("layouts.page.footer")
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