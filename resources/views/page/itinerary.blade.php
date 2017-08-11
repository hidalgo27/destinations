@extends("layouts.page.itinerary")
@section("content")
    {{--<div id="carousel-example-generic" class="carousel slide carousel-fade position-relative" data-ride="carousel">--}}
    <div id="carousel-example-generic" class="carousel slide position-relative" data-ride="carousel">
        <!-- Indicators -->

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                @foreach($paquete as $paquetes)
                    {{--<h1 class="color-goto-orange"><strong>Peru Packages: {{ucwords(strtolower($paquetes->titulo))}}</strong></h1>--}}
{{--                    <h3 class="color-white">{{$paquetes->duracion}} Days {{ucwords(strtolower($paquetes->titulo))}}</h3>--}}
                    <img src="{{asset('images/packages/banners/'.$paquetes->codigo.'.jpg')}}" alt="...">
                @endforeach
                <div class="carousel-caption carousel-caption-itinerary col-md-4 text-left">
                    <div class="header-big-text-1 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                        {{--<h3 class="color-white">Hello to Our Awesome <br>ew Template MyFlat.</h3>--}}
                        @foreach($paquete as $paquetes)
                            {{--<h1 class="color-goto-orange"><strong>Peru Packages: {{ucwords(strtolower($paquetes->titulo))}}</strong></h1>--}}
                            <h3 class="color-white">{{$paquetes->duracion}} Days {{ucwords(strtolower($paquetes->titulo))}}</h3>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>

    </div>



    <div class="padding-top-60 padding-bottom-20" id="gallary-1">

        <div class="wrapper">

            <div class="container">

                <div class="row margin-bottom-20">
                    <div class="section-title-1 tx-center margin-bottom-30 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                        <h2 class="color-orange-2">
                            <strong>
                                @foreach($paquete as $paquetes)
                                    {{--<h1 class="color-goto-orange"><strong>Peru Packages: {{ucwords(strtolower($paquetes->titulo))}}</strong></h1>--}}
                                    Peru Package: {{ucwords(strtolower($paquetes->titulo))}}
                                @endforeach
                            </strong>
                        </h2>

                        {{--<h4>--}}
                            {{--@foreach($paquete as $paquetes_d)--}}
                                {{--@foreach($paquete_destinos->where('idpaquetes',$paquetes_d->id)->take(2) as $paquete_destino)--}}
                                    {{--<b>{{ucwords(strtolower($paquete_destino->destinos->nombre))}}/</b>--}}
                                {{--@endforeach--}}
                            {{--@endforeach--}}
                        {{--<h4>--}}
                        <div class="sec-title-div-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <!-- Nav tabs -->
                <div class="card card-itinerary">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#overview" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-home"></i>  <span>Overview</span></a></li>
                        <li role="presentation"><a href="#itinerary" aria-controls="itinerary" role="tab" data-toggle="tab"><i class="fa fa-list" aria-hidden="true"></i>  <span>Itinerary</span></a></li>
                        <li role="presentation"><a href="#prices" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-usd" aria-hidden="true"></i>  <span>Prices</span></a></li>
                        <li role="presentation"><a href="#optional" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-columns" aria-hidden="true"></i>  <span>Optional</span></a></li>
                        {{--<li role="presentation"><a href="#destinations" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-location-arrow"></i>  <span>Destinations</span></a></li>--}}
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active clearfix" id="overview">
                            <div class="col-md-6">
                                <h4>Route</h4>
                                @foreach($paquete as $paquetes)
                                    @foreach($paquetes->itinerario as $itinerario)
                                        <p><strong>Day {{$itinerario->dia}} :</strong> {{ucwords(strtolower($itinerario->titulo))}}</p>
                                    @endforeach
                                @endforeach

                                <h4 class="margin-top-20">Included</h4>
                                @php echo $paquetes->incluye; @endphp
                                <h4 class="margin-top-20">Not Included</h4>
                                @php echo $paquetes->noincluye; @endphp
                            </div>
                            <div class="col-md-6">
{{--                                <img src="{{asset('images/packages/maps/1.jpg')}}" alt="" class="img-responsive">--}}
                                <a href="#" class="" data-toggle="modal" data-target=".bs-example-modal-lg">
                                    @foreach($paquete_destinos->where('idpaquetes',$paquetes->id)->take(1) as $paquete_destino)
{{--                                        <li><i class="fa fa-map-marker"></i> {{ucwords(strtolower($paquete_destino->destinos->nombre))}}</li>--}}
                                        {{--<img src="{{asset('images/destinations/banners/hola.jpg}}" alt="">--}}
{{--                                        {{str_replace(" ", "-", strtolower($paquete_destino->destinos->nombre))}}--}}
                                        <img src="{{asset('images/destinations/banners/'.str_replace(" ", "-", strtolower($paquete_destino->destinos->nombre)).'.jpg')}}" alt="...">
                                    @endforeach
                                </a>

                                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div id="carousel-destinations" class="carousel slide" data-ride="carousel">

                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner">
                                                    @php
                                                        $i = 0;
                                                    @endphp
                                                    @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)

                                                        <div class="item @if ($i == 0) active @endif">
                                                            <img class="img-responsive" src="{{asset('images/destinations/banners/'.str_replace(" ", "-", strtolower($paquete_destino->destinos->nombre)).'.jpg')}}" alt="...">
                                                            <div class="carousel-caption">
                                                                {{ucwords(strtolower($paquete_destino->destinos->nombre))}}
                                                            </div>
                                                        </div>
                                                        @php
                                                            $i++;
                                                        @endphp
                                                    @endforeach
                                                </div>

                                                <!-- Controls -->
                                                <a class="left carousel-control" href="#carousel-destinations" role="button" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                </a>
                                                <a class="right carousel-control" href="#carousel-destinations" role="button" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane clearfix" id="itinerary">
                            <div class="col-md-12">
                                @foreach($paquete as $paquetes)
                                    @foreach($paquetes->itinerario as $itinerario)
                                        {{--<div class="panel panel-default">--}}
                                            {{--<div class="panel-heading">--}}
                                                {{--<h3 class="panel-title"><b>Day {{$itinerario->dia}}: </b> {{ucwords(strtolower($itinerario->titulo))}}</h3>--}}
                                            {{--</div>--}}
                                            {{--<div class="panel-body">--}}
                                                {{--@php echo $itinerario->descripcion; @endphp--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#{{$itinerario->id}}" aria-expanded="true" aria-controls="collapseOne">
                                                            <b>Day {{$itinerario->dia}}: </b> {{ucwords(strtolower($itinerario->titulo))}}
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="{{$itinerario->id}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="panel-body tour-description">
                                                        @php echo $itinerario->descripcion; @endphp
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach



                            </div>
                            {{--<div class="col-md-4">--}}
                                {{--<img src="{{asset('images/packages/maps/1.jpg')}}" alt="" class="img-responsive">--}}
                            {{--</div>--}}
                        </div>
                        <div role="tabpanel" class="tab-pane clearfix" id="prices">
                            <div class="col-md-12">
                                <table class="table">
                                    {{--<caption>Price per person</caption>--}}
                                    <thead>
                                    <tr>
                                        <th colspan="4">Double accomodation</th>
                                    </tr>
                                    <tr class="info">
                                        <th>Tourist 3 <i class="fa fa-star color-orange-2" aria-hidden="true"></i></th>
                                        <th>Superior 3 <i class="fa fa-star color-orange-2" aria-hidden="true"></i></th>
                                        <th>Comfort 4 <i class="fa fa-star color-orange-2" aria-hidden="true"></i></th>
                                        <th>Luxury 5 <i class="fa fa-star color-orange-2" aria-hidden="true"></i></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        @foreach($paquete as $paquetes)
                                            @foreach($paquetes->precio_paquetes->sortBy('estrellas') as $precio)
                                                @if($precio->precio_d == 0)
                                                    <td>Ask for a quote</td>
                                                @else
                                                    <td>USD ${{$precio->precio_d}}</td>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane clearfix" id="optional">
                            <div class="col-md-12">
                                <h4>Optional</h4>
                                @php echo $paquetes->opcional; @endphp
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane clearfix" id="destinations">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="well">
                    <p class="text-20"><b>{{$paquetes->duracion}} days</b></p>
                    <h5 class="text-50"><sup class="text-10">from</sup> <b class="color-orange-2">
                            @foreach($paquetes->precio_paquetes as $precio)
                                @if($precio->estrellas == 2)
                                    @if($precio->precio_d == 0)
                                        Ask for a quote
                                    @else
                                        ${{$precio->precio_d}}
                                    @endif
                                @endif
                            @endforeach
                        </b> <span class="text-10">USD</span></h5>
                    <p>Trip Code: {{$paquetes->codigo}}</p>
                    {{--<a href="" class="btn btn-primary btn-lg btn-avalavility margin-top-10">Check Availability</a>--}}
                    <a  href="#inquire" type="button" class="btn btn-primary btn-lg btn-avalavility margin-top-10">
                        Book
                    </a>
                </div>
                <div class="itinerary-destination">
                    <h4>Destinations</h4>
                    <ul class="list-none no-padding">
                        @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                            <li><i class="fa fa-map-marker"></i> {{ucwords(strtolower($paquete_destino->destinos->nombre))}}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="itinerary-destination">
                    <h4>What sets us apart</h4>
                    <ul class="list-none no-padding">
                        <li><i class="fa fa-check" aria-hidden="true"></i> Personalized service</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> 24/7 in trip assistance</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Better tours</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    @stop