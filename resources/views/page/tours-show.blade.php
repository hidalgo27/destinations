@extends("layouts.page.default")
@section('content')
    <div id="carousel-example-generic" class="carousel slide position-relative" data-ride="carousel">
        <!-- Indicators -->

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                @foreach($tours->unique('ubicacion') as $tour)
                    @php
                        $ubicacion = explode(",", $tour->ubicacion);
                    @endphp
                    {{--<h3 class="color-white">{{ucwords(strtolower($tour->ubicacion))}} <b>Tours</b></h3>--}}
                    <img src="{{asset('images/destinations/banners/'.$ubicacion[0].'.jpg')}}" alt="...">
                @endforeach
                <div class="carousel-caption carousel-caption-itinerary col-md-4 text-left">
                    <div class="header-big-text-1 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                        {{--<h3 class="color-white">Hello to Our Awesome <br>ew Template MyFlat.</h3>--}}
                        {{--<h1 class="color-goto-orange"><strong>Peru Packages: {{ucwords(strtolower($paquetes->titulo))}}</strong></h1>--}}

                            <h3 class="color-white">{{ucwords(strtolower($tour->ubicacion))}} <b>Tours</b></h3>

                    </div>
                </div>
            </div>

        </div>

    </div>

    {{--<div class="container margin-top-60">--}}
        {{--<div class="row margin-bottom-20">--}}
            {{--<div class="section-title-1 tx-center margin-bottom-30 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">--}}
                {{--<h2 class="color-orange-2"><strong>--}}
                        {{--@foreach($tours->unique('ubicacion') as $tour)--}}
                            {{--{{ucwords(strtolower($tour->ubicacion))}} Tours--}}
                        {{--@endforeach--}}
                    {{--</strong></h2>--}}
                {{--<h4><b>“Better Hotels and superior Service at the best price”</b></h4>--}}
                {{--<div class="sec-title-div-1"></div>--}}
                {{--<p class="margin-bottom-10">Peruvian destinations has selected the must see destinations in Peru and designed a collection of special packages to suit the needs and preferences of all travelers. You can just tell us where you want to go and what you want to do anywhere in Latin America, and we'll take care of the rest for you.</p>--}}
                {{--<p class="margin-bottom-10">Our collection of Peru tour packages highlights the most iconic attractions in the country, such as Machu Picchu, Lake Titicaca, Colca and the Amazon.</p>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--<blockquote>--}}
                {{--<p class="text-20 text-center">"Our tours leave 365 days a year! We sell virtually all services available in Peru.”</p>--}}
            {{--</blockquote>--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="container margin-top-60">
        <div class="row">
            <div class="col-md-12">
                <h2 class="color-orange-2 text-center"><strong>
                        @foreach($tours->unique('ubicacion') as $tour)
                            {{ucwords(strtolower($tour->ubicacion))}} Tours
                        @endforeach
                    </strong></h2>
                <div class="sec-title-div-1"></div>
                <div class="text-justify">
                    @foreach($destino as $destinations)
                        @php echo $destinations->tours; @endphp
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <div class="container margin-top-40">
        @foreach($tours as $tour)
            <div class="row margin-bottom-20 box-tours-d">

                    <div class="col-md-7">
                        <div id="carousel-{{$tour->id}}" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            {{--<ol class="carousel-indicators">--}}
                                {{--<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>--}}
                                {{--<li data-target="#carousel-example-generic" data-slide-to="1"></li>--}}
                                {{--<li data-target="#carousel-example-generic" data-slide-to="2"></li>--}}
                            {{--</ol>--}}

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                @php
                                    $i = 0;
                                @endphp
                                @foreach($imagen->where('idtours', $tour->id) as $img)
                                    <div class="item @if ($i == 0) active @endif">
                                        <img src="{{asset('images/tours/slider/'.$img->imagen.'')}}" alt="" class="img-responsive">
                                    </div>
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-{{$tour->id}}" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-{{$tour->id}}" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <h5 class="no-margin color-orange-2"><b>{{$tour->titulo}}</b></h5>
                        <div class="divider-tours margin-top-10 margin-bottom-10"></div>
                        <p class="margin-top-10"><b>Tour Schedule:</b> {{$tour->horario}}</p>
                        <p class="margin-bottom-20"><b>Tour Duration:</b> {{$tour->duracion}}</p>

                        <div class="col-md-6">
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <p class="text-center no-padding"><b>Group Tour</b></p>
                                </div>
                                <div class="panel-body text-center">
                                    <p class="no-padding text-25"><strong>USD <sup>$</sup>{{$tour->precio_g}}</strong></p>
                                </div>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item color-black-1"><i class="fa fa-bell" aria-hidden="true"></i> <i>Price per Person</i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <p class="text-center no-padding"><b>Group Tour</b></p>
                                </div>
                                <div class="panel-body text-center">
                                    <p class="no-padding text-25"><strong>USD <sup>$</sup>{{$tour->precio_p}}</strong></p>
                                </div>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item color-black-1"><i class="fa fa-bell" aria-hidden="true"></i> <i>Price per Person</i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="{{route('tours_show_path', str_replace(' ','-',strtolower($tour->titulo)))}}" class="btn btn-lg btn-primary btn-avalavility">More Info</a>
                        </div>

                    </div>
            </div>
            <div class="divider-tours-dashed margin-bottom-40 margin-top-40"></div>
        @endforeach
    </div>

    <div class="container hide">
        <div class="row">
            <div class="row margin-top-40">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Tours
                        </h3>
                        <div class="pull-right">
							<span class="clickable filter">
								<i class="glyphicon glyphicon-filter"></i>
							</span>
                        </div>
                    </div>
                    <div class="panel-body panel-body-destinations">
                        <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Packages" />
                    </div>
                    <table class="table table-hover" id="dev-table">
                        <thead>
                        <tr>
                            <th>Tours Name</th>
                            <th>Tour Schedule</th>
                            <th>Tour Duration</th>
                            <th class="text-right">Price per Person (Group Tour)</th>
                            <th class="text-right">Price per Person (Private Tour)</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($tours as $tour)
                                <tr onClick="CrearEnlace('{{route('tours_show_path', str_replace(' ','-',strtolower($tour->titulo)))}}');" class="clickable">
                                    <td class="text-primary">{{$tour->titulo}}</td>
                                    <td>{{$tour->horario}}</td>
                                    <td>
                                        {{$tour->duracion}}
                                    </td>
                                    <td class="text-right color-orange-2">
                                        USD $ {{$tour->precio_g}}
                                    </td>
                                    <td class="text-right text-info">
                                        USD $ {{$tour->precio_p}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop