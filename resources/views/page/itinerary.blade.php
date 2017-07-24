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

                        <h4>
                            @foreach($paquete as $paquetes_d)
                                @foreach($paquete_destinos->where('idpaquetes',$paquetes_d->id)->take(2) as $paquete_destino)
                                    <b>{{ucwords(strtolower($paquete_destino->destinos->nombre))}}/</b>
                                @endforeach
                            @endforeach
                        <h4>
                        <div class="sec-title-div-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Nav tabs -->
                <div class="card card-itinerary">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#overview" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-home"></i>  <span>Overview</span></a></li>
                        <li role="presentation"><a href="#itinerary" aria-controls="itinerary" role="tab" data-toggle="tab"><i class="fa fa-envelope-o"></i>  <span>Itinerary</span></a></li>
                        <li role="presentation"><a href="#prices" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-user"></i>  <span>Prices</span></a></li>
                        <li role="presentation"><a href="#optional" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-plus-square-o"></i>  <span>Optional</span></a></li>
                        {{--<li role="presentation"><a href="#gallery" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-cog"></i>  <span>Photo Gallery</span></a></li>--}}
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active clearfix" id="overview">
                            <div class="col-md-8">
                                <h4>Route</h4>
                                @foreach($paquete as $paquetes)
                                    @foreach($paquetes->itinerario as $itinerario)
                                        <p><strong>Day {{$itinerario->dia}} :</strong> {{ucwords(strtolower($itinerario->titulo))}}</p>
                                    @endforeach
                                @endforeach

                                <h4 class="margin-top-20">Include</h4>
                                @php echo $paquetes->incluye; @endphp
                                <h4 class="margin-top-20">Not Include</h4>
                                @php echo $paquetes->noincluye; @endphp
                            </div>
                            <div class="col-md-4">
                                <img src="{{asset('images/packages/maps/1.jpg')}}" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane clearfix" id="itinerary">
                            <div class="col-md-8">
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
                                                    <div class="panel-body">
                                                        @php echo $itinerario->descripcion; @endphp
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach



                            </div>
                            <div class="col-md-4">
                                <img src="{{asset('images/packages/maps/1.jpg')}}" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane clearfix" id="prices">
                            <div class="col-md-6">
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
                        <div role="tabpanel" class="tab-pane clearfix" id="gallery">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passage..</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop