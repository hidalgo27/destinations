@extends("layouts.page.default")
@section('content')
    <div id="carousel-example-generic" class="carousel slide position-relative" data-ride="carousel">
        <!-- Indicators -->

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{asset('images/packages/banners/1.jpg')}}" alt="..." class="hidden-xs">
                <img src="{{asset('images/slider/slider-xs.jpg')}}" alt="" class="img-responsive hidden-sm hidden-md hidden-lg">
                <div class="carousel-caption carousel-caption-itinerary col-md-4 text-left">
                    <div class="header-big-text-1 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                        {{--<h3 class="color-white">Hello to Our Awesome <br>ew Template MyFlat.</h3>--}}
                        {{--<h1 class="color-goto-orange"><strong>Peru Packages: {{ucwords(strtolower($paquetes->titulo))}}</strong></h1>--}}
                        <h3 class="color-white">TOURS to <b>Traveler</b></h3>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="container margin-top-60">
        <div class="row margin-bottom-20">
            <div class="section-title-1 tx-center margin-bottom-30 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                <h2 class="color-orange-2"><strong>CITY TOURS</strong></h2>
                {{--<h4><b>“Better Hotels and superior Service at the best price”</b></h4>--}}
                <div class="sec-title-div-1"></div>
                <p class="margin-bottom-10 text-20">Get the most out of your stay with this selection of tours and experience each destination to the fullest.</p>
                <p class="margin-bottom-10 text-20">For your convenience and base on your preferences you can opt to be part of a small group or alternatively go on a private tour.</p>
            </div>
        </div>
        <div class="row">
            <blockquote>
                <p class="text-25 text-center">All tours are available 365 days a year.</p>
            </blockquote>
        </div>
    </div>


    <div class="container margin-top-20">
        <div class="row">
            @foreach($tours->unique('ubicacion') as $tour)
                @php
                    $ubicacion = explode(",", $tour->ubicacion);
                @endphp
                <div class="col-md-4 margin-bottom-30">
                    <div class="box-tours position-relative text-center">
                        <a href="{{route('tours_destinations_show_path', str_replace(' ', '-', strtolower($tour->ubicacion)))}}">
                            <img src="{{asset('images/destinations/'.str_replace(' ','-',$ubicacion[0]).'.jpg')}}" alt="" class="img-responsive">
                            <span><b><i>{{ucwords($tour->ubicacion)}} Tours</i></b></span>
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@stop