@extends('layouts.page.home')

@section('content')
    <div class="padding-top-60 padding-bottom-20" id="gallary-1">

        <div class="wrapper">

            <div class="container">

                <div class="row margin-bottom-20">
                    <div class="section-title-1 tx-center margin-bottom-30 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                        <h2 class="color-orange-2"><strong>Affordable Custom Tours one click away</strong></h2>
                        <h4><b>“Better Hotels and superior Service at the best price”</b></h4>
                        <div class="sec-title-div-1"></div>
                        <p class="">Finally can you enjoy of superb personalized service and exclusive itineraries as renowned world travel agencies do. With PERUVIAN DESTINATIONS Tour operator you cut off the middlemen, thus saving lots of money. To get a Quick Quote just fill in the form above and you will get a free quote in less than 24 Hours guaranteed..</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked well">
                            <li class="active"><a href="#vtab1" data-toggle="tab" class="text-20">Peru Packages</a></li>
                            <li><a href="#vtab3" data-toggle="tab" class="text-20">Inca Trail Packages</a></li>
                            <li><a href="#vtab2" data-toggle="tab" class="text-20">International Extensions</a></li>
                            <li><a href="#inquire" class="text-20">Customize your Trip</a></li>
                        </ul>

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Our Promise</h3>
                            </div>
                            <div class="panel-body">
                                <p class="text-14">At Peruvian Destinations we are friends that will treat you like family. With INTEGRITY, ENTHUSIASM and FAIRNESS we understand it is all about personal service and here we go far beyond the extra mile.</p>
                                <img src="{{asset('images/marco.jpg')}}" alt="" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="vtab1">
                                @foreach($paquete->take(6) as $paquetes)

                                <div class="col-md-4 col-sm-4 col-xs-12 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                                    <a href="{{route('show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}">
                                    <div class="content-area-2 clearfix">
                                        <div class="content-area-figure-1">
                                            <img src="{{asset('images/packages/'.$paquetes->codigo.'.jpg')}}" alt="content area">
                                        </div>
                                        <div class=" col-md-12 ">
                                            <div class="travel-duration tx-center">
                                                <p class="date color-white">{{$paquetes->duracion}}</p>
                                                <p class="days color-white">days</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-8 content-area-title-1">
                                            <h6 class="tx-left"><strong>{{ucwords(strtolower($paquetes->titulo))}}</strong></h6>
                                        </div>

                                        <div class="col-md-12 text-left color-green-1 margin-bottom-10">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            @foreach($paquete_destinos->where('idpaquetes',$paquetes->id)->take(2) as $paquete_destino)
                                                {{ucwords(strtolower($paquete_destino->destinos->nombre))}},
                                            @endforeach
                                            ...
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-4 travel-price">
                                            <h5 class="color-orange-2"><sup class="color-black-1">From</sup> <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                @foreach($paquetes->precio_paquetes as $precio)
                                                    @if($precio->estrellas == 2)
                                                        <b>${{$precio->precio_d}}</b>
                                                    @endif
                                                @endforeach
                                            </h5>
                                        </div>

                                    </div>
                                    </a>
                                </div><!-- /.col-md-4 col -->
                                @endforeach
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="vtab2">
                                @foreach($paquete_f->take(6) as $paquetes)

                                    <div class="col-md-4 col-sm-4 col-xs-12 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                                        <div class="content-area-2 clearfix">
                                            <div class="content-area-figure-1">
                                                <img src="{{asset('images/packages/'.$paquetes->codigo.'.jpg')}}" alt="content area">
                                            </div>
                                            <div class=" col-md-12 ">
                                                <div class="travel-duration tx-center">
                                                    <p class="date color-white">{{$paquetes->duracion}}</p>
                                                    <p class="days color-white">days</p>
                                                </div>
                                            </div>
                                            <div class="col-md-9 col-sm-12 col-xs-8 content-area-title-1">
                                                <h6 class="tx-left"><strong>{{ucwords(strtolower($paquetes->titulo))}}</strong></h6>
                                            </div>
                                            <div class="col-md-12 text-left color-green-1 margin-bottom-10">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                @foreach($paquete_destinos->where('idpaquetes',$paquetes->id)->take(2) as $paquete_destino)
                                                    {{ucwords(strtolower($paquete_destino->destinos->nombre))}},
                                                @endforeach
                                                ...
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-4 travel-price">
                                                <h5 class="color-orange-2"><sup class="color-black-1">From</sup> <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    @foreach($paquetes->precio_paquetes as $precio)
                                                        @if($precio->estrellas == 2)
                                                            <b>${{$precio->precio_d}}</b>
                                                        @endif
                                                    @endforeach
                                                </h5>
                                            </div>

                                        </div>
                                    </div><!-- /.col-md-4 col -->
                                @endforeach
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="vtab3">
                                @foreach($paquete_mg->take(6) as $paquetes)

                                    <div class="col-md-4 col-sm-4 col-xs-12 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                                        <div class="content-area-2 clearfix">
                                            <div class="content-area-figure-1">
                                                <img src="{{asset('images/packages/'.$paquetes->codigo.'.jpg')}}" alt="content area">
                                            </div>
                                            <div class=" col-md-12 ">
                                                <div class="travel-duration tx-center">
                                                    <p class="date color-white">{{$paquetes->duracion}}</p>
                                                    <p class="days color-white">days</p>
                                                </div>
                                            </div>
                                            <div class="col-md-9 col-sm-12 col-xs-8 content-area-title-1">
                                                <h6 class="tx-left"><strong>{{ucwords(strtolower($paquetes->titulo))}}</strong></h6>
                                            </div>
                                            <div class="col-md-3 col-sm-12 col-xs-4 travel-price">
                                                <h6>
                                                    @foreach($paquetes->precio_paquetes as $precio)
                                                        @if($precio->estrellas == 2)
                                                            ${{$precio->precio_d}}
                                                        @endif
                                                    @endforeach
                                                </h6>
                                            </div>

                                            <div class="col-md-12 text-left color-green-1 text-12">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                @foreach($paquete_destinos->where('idpaquetes',$paquetes->id)->take(3) as $paquete_destino)
                                                    {{ucwords(strtolower($paquete_destino->destinos->nombre))}},
                                                @endforeach
                                                ...
                                            </div>

                                        </div>
                                    </div><!-- /.col-md-4 col -->
                                @endforeach
                            </div>

                            <div role="tabpanel" class="tab-pane fade in" id="vtab4">
                                @foreach($paquete_m->take(6) as $paquetes)

                                    <div class="col-md-4 col-sm-4 col-xs-12 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                                        <div class="content-area-2 clearfix">
                                            <div class="content-area-figure-1">
                                                <img src="{{asset('images/packages/'.$paquetes->codigo.'.jpg')}}" alt="content area">
                                            </div>
                                            <div class=" col-md-12 ">
                                                <div class="travel-duration tx-center">
                                                    <p class="date color-white">{{$paquetes->duracion}}</p>
                                                    <p class="days color-white">days</p>
                                                </div>
                                            </div>
                                            <div class="col-md-9 col-sm-12 col-xs-8 content-area-title-1">
                                                <h6 class="tx-left"><strong>{{ucwords(strtolower($paquetes->titulo))}}</strong></h6>
                                            </div>
                                            <div class="col-md-3 col-sm-12 col-xs-4 travel-price">
                                                <h6>
                                                    @foreach($paquetes->precio_paquetes as $precio)
                                                        @if($precio->estrellas == 2)
                                                            ${{$precio->precio_d}}
                                                        @endif
                                                    @endforeach
                                                </h6>
                                            </div>

                                            <div class="col-md-12 text-left color-green-1 text-12">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                @foreach($paquete_destinos->where('idpaquetes',$paquetes->id)->take(3) as $paquete_destino)
                                                    {{ucwords(strtolower($paquete_destino->destinos->nombre))}},
                                                @endforeach
                                                ...
                                            </div>

                                        </div>
                                    </div><!-- /.col-md-4 col -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                {{--<div class="row hide">--}}
                    {{--<div class="col-md-3">--}}

                        {{--<div class="row">--}}
                            {{--<div class="process hide">--}}
                                {{--<div class="process-row nav nav-tabs">--}}
                                    {{--<div class="process-step">--}}
                                        {{--<button type="button" class="btn btn-info btn-circle" data-toggle="tab" href="#step1"><i class="fa fa-map-marker fa-3x"></i></button>--}}
                                        {{--<p><small>Choose<br/>destinations</small></p>--}}
                                    {{--</div>--}}

                                    {{--<div class="process-step">--}}
                                        {{--<button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#step2"><i class="fa fa-check fa-3x"></i></button>--}}
                                        {{--<p><small>Personal<br />information</small></p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="tab-content">--}}
                                {{--<div id="step1" class="tab-pane fade active in">--}}
                                    {{--<div class="panel panel-default">--}}
                                        {{--<div class="panel-heading">--}}
                                            {{--<h3 class="panel-title text-30 text-center">Destinations</h3>--}}
                                        {{--</div>--}}
                                        {{--<div class="panel-body">--}}
                                            {{--<div class="margin-top-20 margin-bottom-20" data-toggle="buttons">--}}
                                                {{--<label class="btn btn-default spacer-10">--}}
                                                    {{--<input type="checkbox" autocomplete="off"> Machu Picchu--}}
                                                {{--</label>--}}
                                                {{--<label class="btn btn-default spacer-10">--}}
                                                    {{--<input type="checkbox" autocomplete="off"> Amazon--}}
                                                {{--</label>--}}
                                                {{--<label class="btn btn-default spacer-10">--}}
                                                    {{--<input type="checkbox" autocomplete="off"> Lima--}}
                                                {{--</label>--}}
                                                {{--<label class="btn btn-default spacer-10">--}}
                                                    {{--<input type="checkbox" autocomplete="off"> Nazca--}}
                                                {{--</label>--}}
                                                {{--<label class="btn btn-default spacer-10">--}}
                                                    {{--<input type="checkbox" autocomplete="off"> Inca Trail--}}
                                                {{--</label>--}}
                                                {{--<label class="btn btn-default spacer-10">--}}
                                                    {{--<input type="checkbox" autocomplete="off"> Cuzco--}}
                                                {{--</label>--}}
                                                {{--<label class="btn btn-default spacer-10">--}}
                                                    {{--<input type="checkbox" autocomplete="off"> Lake Titicaca--}}
                                                {{--</label>--}}
                                                {{--<label class="btn btn-default spacer-10">--}}
                                                    {{--<input type="checkbox" autocomplete="off"> Colca Canyon--}}
                                                {{--</label>--}}
                                                {{--<label class="btn btn-default spacer-10">--}}
                                                    {{--<input type="checkbox" autocomplete="off"> Other--}}
                                                {{--</label>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<ul class="btn-search">--}}
                                        {{--<li><button type="button" class="btn btn-lg btn-primary next-step">Next <i class="fa fa-chevron-right"></i></button></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}

                                {{--<div id="step2" class="tab-pane fade">--}}
                                    {{--<div class="panel panel-default">--}}
                                        {{--<div class="panel-heading text-center">--}}
                                            {{--<h3 class="panel-title text-30">TRIP LENGTH (days)</h3>--}}
                                        {{--</div>--}}
                                        {{--<div class="panel-body">--}}
                                            {{--<div class="margin-top-20 margin-bottom-20" data-toggle="buttons">--}}
                                                {{--<label class="btn btn-lg btn-default spacer-10">--}}
                                                    {{--<input type="checkbox" autocomplete="off">4 - 7--}}
                                                {{--</label>--}}
                                                {{--<label class="btn btn-lg btn-default spacer-10">--}}
                                                    {{--<input type="checkbox" autocomplete="off">8 - 10--}}
                                                {{--</label>--}}
                                                {{--<label class="btn btn-lg btn-default spacer-10">--}}
                                                    {{--<input type="checkbox" autocomplete="off">11 - 14--}}
                                                {{--</label>--}}
                                                {{--<label class="btn btn-lg btn-default spacer-10">--}}
                                                    {{--<input type="checkbox" autocomplete="off">15 - 17--}}
                                                {{--</label>--}}
                                                {{--<label class="btn btn-lg btn-default spacer-10">--}}
                                                    {{--<input type="checkbox" autocomplete="off">18+--}}
                                                {{--</label>--}}
                                                {{--<label class="btn btn-lg btn-default spacer-10">--}}
                                                    {{--<input type="checkbox" autocomplete="off"> Undecided--}}
                                                {{--</label>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<ul class="list-unstyled list-inline pull-right">--}}
                                        {{--<li><button type="button" class="btn btn-lg btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>--}}
                                        {{--<li><button type="button" class="btn btn-lg btn-success"><i class="fa fa-check"></i> Done!</button></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}



                        {{--<div id="app">--}}
                            {{--<router-link to="/">Home</router-link>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                    {{--<div class="col-md-9">--}}
                        {{--<div class="col-md-4 col-sm-4 col-xs-12 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">--}}
                            {{--<div class="content-area-2 clearfix">--}}
                                {{--<div class="content-area-figure-1">--}}
                                    {{--<img src="{{asset('images/packages/img-1.jpg')}}" alt="content area">--}}
                                {{--</div>--}}
                                {{--<div class=" col-md-12 ">--}}
                                    {{--<div class="travel-duration tx-center">--}}
                                        {{--<p class="date color-white">22</p>--}}
                                        {{--<p class="days color-white">days</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-9 col-sm-12 col-xs-8 content-area-title-1">--}}
                                    {{--<h6 class="tx-left">Austrian Alps</h6>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3 col-sm-12 col-xs-4 travel-price">--}}
                                    {{--<h6>$200.00</h6>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div><!-- /.col-md-4 col -->--}}
                        {{--<div class="col-md-4 col-sm-4 col-xs-12 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">--}}
                            {{--<div class="content-area-2 clearfix">--}}
                                {{--<div class="content-area-figure-1">--}}
                                    {{--<img src="{{asset('images/packages/img-2.jpg')}}" alt="content area">--}}
                                {{--</div>--}}
                                {{--<div class=" col-md-12 ">--}}
                                    {{--<div class="travel-duration tx-center">--}}
                                        {{--<p class="date color-white">22</p>--}}
                                        {{--<p class="days color-white">days</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-9 col-sm-12 col-xs-8 content-area-title-1">--}}
                                    {{--<h6 class="tx-left">Austrian Alps</h6>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3 col-sm-12 col-xs-4 travel-price">--}}
                                    {{--<h6>$200.00</h6>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div><!-- /.col-md-4 col -->--}}
                        {{--<div class="col-md-4 col-sm-4 col-xs-12 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.2s">--}}
                            {{--<div class="content-area-2 clearfix">--}}
                                {{--<div class="content-area-figure-1">--}}
                                    {{--<img src="{{asset('images/packages/img-3.jpg')}}" alt="content area">--}}
                                {{--</div>--}}
                                {{--<div class=" col-md-12 ">--}}
                                    {{--<div class="travel-duration tx-center">--}}
                                        {{--<p class="date color-white">22</p>--}}
                                        {{--<p class="days color-white">days</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-9 col-sm-12 col-xs-8 content-area-title-1">--}}
                                    {{--<h6 class="tx-left">Austrian Alps</h6>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3 col-sm-12 col-xs-4 travel-price">--}}
                                    {{--<h6>$200.00</h6>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div><!-- /.col-md-4 col -->--}}
                        {{--<div class="col-md-4 col-sm-4 col-xs-12 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">--}}
                            {{--<div class="content-area-2 clearfix">--}}
                                {{--<div class="content-area-figure-1">--}}
                                    {{--<img src="{{asset('images/packages/img-1.jpg')}}" alt="content area">--}}
                                {{--</div>--}}
                                {{--<div class=" col-md-12 ">--}}
                                    {{--<div class="travel-duration tx-center">--}}
                                        {{--<p class="date color-white">22</p>--}}
                                        {{--<p class="days color-white">days</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-9 col-sm-12 col-xs-8 content-area-title-1">--}}
                                    {{--<h6 class="tx-left">Austrian Alps</h6>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3 col-sm-12 col-xs-4 travel-price">--}}
                                    {{--<h6>$200.00</h6>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div><!-- /.col-md-4 col -->--}}
                        {{--<div class="col-md-4 col-sm-4 col-xs-12 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">--}}
                            {{--<div class="content-area-2 clearfix">--}}
                                {{--<div class="content-area-figure-1">--}}
                                    {{--<img src="{{asset('images/packages/img-2.jpg')}}" alt="content area">--}}
                                {{--</div>--}}
                                {{--<div class=" col-md-12 ">--}}
                                    {{--<div class="travel-duration tx-center">--}}
                                        {{--<p class="date color-white">22</p>--}}
                                        {{--<p class="days color-white">days</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-9 col-sm-12 col-xs-8 content-area-title-1">--}}
                                    {{--<h6 class="tx-left">Austrian Alps</h6>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3 col-sm-12 col-xs-4 travel-price">--}}
                                    {{--<h6>$200.00</h6>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div><!-- /.col-md-4 col -->--}}
                        {{--<div class="col-md-4 col-sm-4 col-xs-12 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.2s">--}}
                            {{--<div class="content-area-2 clearfix">--}}
                                {{--<div class="content-area-figure-1">--}}
                                    {{--<img src="{{asset('images/packages/img-3.jpg')}}" alt="content area">--}}
                                {{--</div>--}}
                                {{--<div class=" col-md-12 ">--}}
                                    {{--<div class="travel-duration tx-center">--}}
                                        {{--<p class="date color-white">22</p>--}}
                                        {{--<p class="days color-white">days</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-9 col-sm-12 col-xs-8 content-area-title-1">--}}
                                    {{--<h6 class="tx-left">Austrian Alps</h6>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3 col-sm-12 col-xs-4 travel-price">--}}
                                    {{--<h6>$200.00</h6>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div><!-- /.col-md-4 col -->--}}
                    {{--</div>--}}

                {{--</div><!-- /.row -->--}}

            </div><!-- /.container -->

        </div><!-- /.wrapper -->

    </div><!-- /.item -->

    <div class=" item padding-top-60 padding-bottom-50" id="content-area-3">

        <div class=" wrapper">

            <div class="container">

                <div class="row">
                    <div class="section-title-1 tx-center margin-bottom-30 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                        <h5 class=""><b>Affordable Custom Tours one click away</b></h5>
                        <div class="sec-title-div-1"></div>
                        <p class="">Finally can you enjoy of superb personalized service and exclusive itineraries as renowned world travel agencies do. With PERUVIAN DESTINATIONS Tour operator you cut off the middlemen, thus saving lots of money. To get a Quick Quote just fill in the form above and you will get a free quote in less than 24 Hours guaranteed.</p>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="content-area-3">

                            <div class="content-area-title-1 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0s">
                                <h5>WORDS FROM <br> OUR CEO:</h5>
                            </div>
                            <div class="feature-disc-1 margin-top-10 margin-bottom-20 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.2s">
                                <p>It is my personal mission to make every trip a memorable, once-in-a-lifetime experience for our guests. Because the only thing we love more than travel is customer satisfaction, we anticipate our clients’ needs at every opportunity. For this reason, I gladly search for those exceptional experiences in the world of art, cuisine, culture, and conservation. This allows our guests to find the trip that is tailored to their needs and embark on adventures that exceed their wildest expectations.</p>
                                <p><i><b>Marco Herrera – CEO.</b></i></p>
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
                        <h5 class="">Machu Picchu Travel Packages</h5>
                        <div class="sec-title-div-1"></div>
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt<br> ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>
                    </div>
                </div>

                <div class="row">

                    @foreach($paquete->take(3) as $paquetes)

                        <div class="col-md-4 col-sm-4 col-xs-12 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                            <div class="content-area-2 clearfix">
                                <div class="content-area-figure-1">
                                    <img src="{{asset('images/packages/'.$paquetes->codigo.'.jpg')}}" alt="content area">
                                </div>
                                <div class=" col-md-12 ">
                                    <div class="travel-duration tx-center">
                                        <p class="date color-white">{{$paquetes->duracion}}</p>
                                        <p class="days color-white">days</p>
                                    </div>
                                </div>
                                <div class="col-md-9 col-sm-12 col-xs-8 content-area-title-1">
                                    <h6 class="tx-left"><strong>{{ucwords(strtolower($paquetes->titulo))}}</strong></h6>
                                </div>
                                <div class="col-md-12 text-left color-green-1 margin-bottom-10">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    @foreach($paquete_destinos->where('idpaquetes',$paquetes->id)->take(2) as $paquete_destino)
                                        {{ucwords(strtolower($paquete_destino->destinos->nombre))}},
                                    @endforeach
                                    ...
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-4 travel-price">
                                    <h5 class="color-orange-2"><sup class="color-black-1">From</sup> <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        @foreach($paquetes->precio_paquetes as $precio)
                                            @if($precio->estrellas == 2)
                                                <b>${{$precio->precio_d}}</b>
                                            @endif
                                        @endforeach
                                    </h5>
                                </div>

                            </div>
                        </div><!-- /.col-md-4 col -->
                    @endforeach
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




@stop