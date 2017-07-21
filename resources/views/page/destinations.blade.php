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
                        <h3 class="color-white">Traveler to <b>Traveler</b></h3>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="container margin-top-60">
        <div class="row margin-bottom-20">
            <div class="section-title-1 tx-center margin-bottom-30 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                <h2 class="color-orange-2"><strong>Peru Destinations</strong></h2>
                {{--<h4><b>“Better Hotels and superior Service at the best price”</b></h4>--}}
                <div class="sec-title-div-1"></div>
                <p class="margin-bottom-10">Travel to Peru and fuel your imagination on a diet of ancient treasures and wonderful landscapes. Surrounded by majestic Andean peaks, world wonder Machu Picchu and the historic city of Cusco highlight Peru’s dramatic birth from the encounter between Incas and Spaniards.</p>
                <p class="margin-bottom-10">Just as thrilling are the lush expanses of Amazon rainforest, the breathtaking vastness of Lake Titicaca, the fantastic food scene in Lima, and the enduring enigma of the Nazca Lines. One thing is certain. Peru has something for everyone. All you have to do is choose where to go and when.</p>
                <p class="margin-bottom-10">Keep reading to see more Peru attractions and destinations and contact us to start planning your own exciting trip to Peru.</p>
            </div>
        </div>
        <div class="row">
            <blockquote>
                <p class="text-20 text-center"><i class="fa fa-briefcase fa-2x color-green-1" aria-hidden="true"></i>  Our tours are Fully Customizable and leave 365 days a year!</p>
            </blockquote>
        </div>
        <div class="row">
            <h4 class="text-center">Today's Destinations</h4>
        </div>
    </div>

    <div class="container margin-top-60">
        <div class="row">
            @foreach($destinos->sortBy('nombre') as $destino)
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail thumbnail-destination">
                    <a href="{{route('destinations_show_path', str_replace(' ', '-', strtolower($destino->nombre)))}}"><img src="{{asset('images/destinations/'.str_replace(' ','-', strtolower($destino->nombre)).'.jpg')}}" alt="..."></a>
                    <div class="caption clearfix">
                        <h5>{{ucwords(strtolower($destino->nombre))}}</h5>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a href="{{route('destinations_show_path', str_replace(' ', '-', strtolower($destino->nombre)))}}" class="btn btn-primary pull-right" role="button">View More</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@stop