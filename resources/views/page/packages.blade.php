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
                        <h3 class="color-white">Peru Tour Packages</h3>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="container margin-top-60">
        <div class="row margin-bottom-20">
            <div class="section-title-1 tx-center margin-bottom-30 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                <h2 class="color-orange-2"><strong>Tour Packages</strong></h2>
                {{--<h4><b>“Better Hotels and superior Service at the best price”</b></h4>--}}
                <div class="sec-title-div-1"></div>
                <p class="margin-bottom-10">We have designed a collection of Travel Packages based on the must see destinations in Peru and South America.</p>
                <p>As a Tour Operator Company, at Peruvian Destinations we can always build your own exclusive tailor-made Itinerary based on your needs, preferences and budget.</p>
                <p class="margin-bottom-10">With tours available 365 days a year and in-travel assistance 24/7, we represent the best option!</p>
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
        <div class="col-md-12">
        <!-- Nav tabs -->
            <div class="text-center margin-bottom-20">
                <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" class="btn btn-info"><i class="fa fa-list" aria-hidden="true"></i> List</a>
                <a href="#home" aria-controls="home" role="tab" data-toggle="tab" class="btn btn-success"><i class="fa fa-th" aria-hidden="true"></i> Desing</a>
            </div>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="profile">
                <div class="row">
                    <div class="alert alert-info" role="alert">
                        <h5 class="text-center"><a href="#peru2">Peru Tour Packages</a> | <a href="#trekking2">Trekking Tours</a> | <a href="#International">International Extensions</a></h5>
                    </div>
                </div>
                <div class="container">
                    <div class="row" id="peru2">
                        <h4 class="text-center margin-top-40">Peru Tour Packages</h4>
                    </div>
                    <div class="row margin-top-40">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Peru Specials</h3>
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
                                    <th>Package Name</th>
                                    <th>Destinations</th>
                                    {{--<th>Category</th>--}}
                                    <th class="text-right">Price from</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($paquete->where('estado',1) as $paquetes)
                                    <tr onClick="CrearEnlace('{{route('show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}');" class="clickable">
                                        <td class="text-primary">{{$paquetes->duracion}} days {{ucfirst(strtolower($paquetes->titulo))}}</td>
                                        <td>
                                            @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                                *{{ucwords(strtolower($paquete_destino->destinos->nombre))}}
                                            @endforeach
                                        </td>
                                        {{--<td>--}}

                                            {{--@foreach($paquete_categoria->where('idpaquetes',$paquetes->id) as $paquete_categorias)--}}
                                                {{--<a href="#">{{ucfirst(strtolower($paquete_categorias->categoria->nombre))}}</a> |--}}
                                            {{--@endforeach--}}

                                        {{--</td>--}}
                                        <td class="text-right color-orange-2">
                                            @foreach($paquetes->precio_paquetes as $precio)
                                                @if($precio->estrellas == 2)
                                                    ${{$precio->precio_d}}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row margin-top-40" id="trekking2">
                        <h4 class="text-center">Trekking Tours</h4>
                    </div>
                    <div class="row margin-top-40">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Trekking Tours</h3>
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
                                    <th>Package Name</th>
                                    <th>Destinations</th>
                                    {{--<th>Category</th>--}}
                                    <th class="text-right">Price from</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($paquete->where('estado',2) as $paquetes)
                                    <tr onClick="CrearEnlace('{{route('show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}');" class="clickable">
                                        <td class="text-primary">{{$paquetes->duracion}} days {{ucfirst(strtolower($paquetes->titulo))}}</td>
                                        <td>
                                            @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                                *{{ucwords(strtolower($paquete_destino->destinos->nombre))}}
                                            @endforeach
                                        </td>
                                        {{--<td>--}}

                                        {{--@foreach($paquete_categoria->where('idpaquetes',$paquetes->id) as $paquete_categorias)--}}
                                        {{--<a href="#">{{ucfirst(strtolower($paquete_categorias->categoria->nombre))}}</a> |--}}
                                        {{--@endforeach--}}

                                        {{--</td>--}}
                                        <td class="text-right color-orange-2">
                                            @foreach($paquetes->precio_paquetes as $precio)
                                                @if($precio->estrellas == 2)
                                                    ${{$precio->precio_d}}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row margin-top-40" id="International">
                        <h4 class="text-center">International Extensions</h4>
                    </div>
                    <div class="row margin-top-40">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">International Extensions</h3>
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
                                    <th>Package Name</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th class="text-right">Price from</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($paquete->where('estado',3) as $paquetes)
                                    <tr onClick="CrearEnlace('{{route('show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}');" class="clickable">
                                        <td class="text-primary">{{$paquetes->duracion}} days {{ucfirst(strtolower($paquetes->titulo))}}</td>
                                        <td>Kilgore</td>
                                        <td>

                                            @foreach($paquete_categoria->where('idpaquetes',$paquetes->id) as $paquete_categorias)
                                                <a href="#">{{ucfirst(strtolower($paquete_categorias->categoria->nombre))}}</a> |
                                            @endforeach

                                        </td>
                                        <td class="text-right color-orange-2">
                                            @foreach($paquetes->precio_paquetes as $precio)
                                                @if($precio->estrellas == 2)
                                                    ${{$precio->precio_d}}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="home">
                <div class="row">
                    <div class="alert alert-info" role="alert">
                        <h5 class="text-center"><a href="#peru">Peru Specials</a> | <a href="#trekking">Trekking Tours</a> | <a href="#offers">Peru Offers</a></h5>
                    </div>
                </div>
                <div class="container">
                    <div class="row" id="peru">
                        <h4 class="text-center margin-top-40">Peru Travel Packages</h4>
                    </div>
                    <div class="row margin-top-40">
                        @foreach($paquete as $paquetes)

                            <div class="col-md-3 col-sm-4 col-xs-12 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                                <a href="{{route('show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}">
                                    <div class="content-area-2 content-area-packages clearfix">
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
                                            {{--<i class="fa fa-map-marker" aria-hidden="true"></i>--}}
                                            @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                                *{{ucwords(strtolower($paquete_destino->destinos->nombre))}},
                                            @endforeach
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

                    {{--<div class="row margin-top-40" id="trekking">--}}
                        {{--<h4 class="text-center">Trekking Tours</h4>--}}
                    {{--</div>--}}
                    {{--<div class="row margin-top-40">--}}
                        {{--@foreach($paquete as $paquetes)--}}

                            {{--<div class="col-md-3 col-sm-4 col-xs-12 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">--}}
                                {{--<a href="{{route('show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}">--}}
                                    {{--<div class="content-area-2 content-area-packages clearfix">--}}
                                        {{--<div class="content-area-figure-1">--}}
                                            {{--<img src="{{asset('images/packages/'.$paquetes->codigo.'.jpg')}}" alt="content area">--}}
                                        {{--</div>--}}
                                        {{--<div class=" col-md-12 ">--}}
                                            {{--<div class="travel-duration tx-center">--}}
                                                {{--<p class="date color-white">{{$paquetes->duracion}}</p>--}}
                                                {{--<p class="days color-white">days</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-9 col-sm-12 col-xs-8 content-area-title-1">--}}
                                            {{--<h6 class="tx-left"><strong>{{ucwords(strtolower($paquetes->titulo))}}</strong></h6>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-3 col-sm-12 col-xs-4 travel-price">--}}
                                            {{--<h6>--}}
                                                {{--@foreach($paquetes->precio_paquetes as $precio)--}}
                                                    {{--@if($precio->estrellas == 2)--}}
                                                        {{--<b>${{$precio->precio_d}}</b>--}}
                                                    {{--@endif--}}
                                                {{--@endforeach--}}
                                            {{--</h6>--}}
                                        {{--</div>--}}

                                        {{--<div class="col-md-12 text-left color-green-1 text-12 margin-bottom-10">--}}
                                            {{--<i class="fa fa-map-marker" aria-hidden="true"></i>--}}
                                            {{--@foreach($paquete_destinos->where('idpaquetes',$paquetes->id)->take(3) as $paquete_destino)--}}
                                                {{--{{ucwords(strtolower($paquete_destino->destinos->nombre))}},--}}
                                            {{--@endforeach--}}
                                            {{--...--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</div><!-- /.col-md-4 col -->--}}
                        {{--@endforeach--}}
                    {{--</div>--}}

                    {{--<div class="row margin-top-40" id="offers">--}}
                        {{--<h4 class="text-center">Peru Offers</h4>--}}
                    {{--</div>--}}
                    {{--<div class="row margin-top-40">--}}
                        {{--@foreach($paquete as $paquetes)--}}

                            {{--<div class="col-md-3 col-sm-4 col-xs-12 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">--}}
                                {{--<a href="{{route('show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}">--}}
                                    {{--<div class="content-area-2 content-area-packages clearfix">--}}
                                        {{--<div class="content-area-figure-1">--}}
                                            {{--<img src="{{asset('images/packages/'.$paquetes->codigo.'.jpg')}}" alt="content area">--}}
                                        {{--</div>--}}
                                        {{--<div class=" col-md-12 ">--}}
                                            {{--<div class="travel-duration tx-center">--}}
                                                {{--<p class="date color-white">{{$paquetes->duracion}}</p>--}}
                                                {{--<p class="days color-white">days</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-9 col-sm-12 col-xs-8 content-area-title-1">--}}
                                            {{--<h6 class="tx-left"><strong>{{ucwords(strtolower($paquetes->titulo))}}</strong></h6>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-3 col-sm-12 col-xs-4 travel-price">--}}
                                            {{--<h6>--}}
                                                {{--@foreach($paquetes->precio_paquetes as $precio)--}}
                                                    {{--@if($precio->estrellas == 2)--}}
                                                        {{--<b>${{$precio->precio_d}}</b>--}}
                                                    {{--@endif--}}
                                                {{--@endforeach--}}
                                            {{--</h6>--}}
                                        {{--</div>--}}

                                        {{--<div class="col-md-12 text-left color-green-1 text-12 margin-bottom-10">--}}
                                            {{--<i class="fa fa-map-marker" aria-hidden="true"></i>--}}
                                            {{--@foreach($paquete_destinos->where('idpaquetes',$paquetes->id)->take(3) as $paquete_destino)--}}
                                                {{--{{ucwords(strtolower($paquete_destino->destinos->nombre))}},--}}
                                            {{--@endforeach--}}
                                            {{--...--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</div><!-- /.col-md-4 col -->--}}
                        {{--@endforeach--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>


@stop