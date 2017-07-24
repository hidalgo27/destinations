@extends("layouts.page.default")
@section('content')
    <div id="carousel-example-generic" class="carousel slide position-relative" data-ride="carousel">
        <!-- Indicators -->

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{asset('images/packages/banners/1.jpg')}}" alt="...">
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
                <h2 class="color-orange-2"><strong>Peru Tour Packages</strong></h2>
                {{--<h4><b>“Better Hotels and superior Service at the best price”</b></h4>--}}
                <div class="sec-title-div-1"></div>
                <p class="margin-bottom-10">Peruvian destinations has selected the must see destinations in Peru and designed a collection of special packages to suit the needs and preferences of all travelers. You can just tell us where you want to go and what you want to do anywhere in Latin America, and we'll take care of the rest for you.</p>
                <p class="margin-bottom-10">Our collection of Peru tour packages highlights the most iconic attractions in the country, such as Machu Picchu, Lake Titicaca, Colca and the Amazon.</p>
            </div>
        </div>
        <div class="row">
            <blockquote>
                <p class="text-20 text-center">"Our tours leave 365 days a year! We sell virtually all services available in Peru.”</p>
            </blockquote>
        </div>
    </div>


    <div class="container">
        <div class="row">
            @foreach($tours->unique('ubicacion') as $tour)
                <div class="col-md-3">
                    <div class="box-tours position-relative text-center">
                        <a href="{{route('tours_destinations_show_path', str_replace(' ', '-', strtolower($tour->ubicacion)))}}">
                            <img src="{{asset('images/destinations/amazon.jpg')}}" alt="" class="img-responsive">
                            <span>{{ucwords($tour->ubicacion)}} Tours</span>
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@stop