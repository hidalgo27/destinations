@extends("layouts.page.default")
@section('content')
    <div id="carousel-example-generic" class="carousel slide position-relative" data-ride="carousel">
        <!-- Indicators -->

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{asset('images/destinations/banners/'.str_replace(' ', '-', strtolower($title)).'.jpg')}}" alt="...">
                <div class="carousel-caption carousel-caption-itinerary col-md-4 text-left">
                    <div class="header-big-text-1 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                        {{--<h3 class="color-white">Hello to Our Awesome <br>ew Template MyFlat.</h3>--}}
                        {{--<h1 class="color-goto-orange"><strong>Peru Packages: {{ucwords(strtolower($paquetes->titulo))}}</strong></h1>--}}
                        <h3 class="color-white"><b>{{ucwords(strtolower($title))}}</b></h3>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="container margin-top-60">
        <div class="row margin-bottom-20">
            <div class="section-title-1 tx-center margin-bottom-30 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                <h2 class="color-orange-2"><strong>{{ucwords(strtolower($title))}}</strong></h2>
                {{--<h4><b>“Better Hotels and superior Service at the best price”</b></h4>--}}
                <div class="sec-title-div-1"></div>
                {{--<p class="margin-bottom-10">Travel to Peru and fuel your imagination on a diet of ancient treasures and wonderful landscapes. Surrounded by majestic Andean peaks, world wonder Machu Picchu and the historic city of Cusco highlight Peru’s dramatic birth from the encounter between Incas and Spaniards.</p>--}}
                {{--<p class="margin-bottom-10">Just as thrilling are the lush expanses of Amazon rainforest, the breathtaking vastness of Lake Titicaca, the fantastic food scene in Lima, and the enduring enigma of the Nazca Lines. One thing is certain. Peru has something for everyone. All you have to do is choose where to go and when.</p>--}}
                {{--<p class="margin-bottom-10">Keep reading to see more Peru attractions and destinations and contact us to start planning your own exciting trip to Peru.</p>--}}
                <div class="text-left">
                    @foreach($destinos->where('nombre', str_replace('-',' ', strtoupper($title))) as $des)
                            @php echo $des->tours; @endphp

                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="alert alert-warning" role="alert">
                <h5 class="text-center"><a href="#packages">Peru Travel Packages</a> | <a href="#tours">Peru Tours</a></h5>
            </div>
        </div>
    </div>

    <div class="container" id="packages">
        <div class="row">
            <h4 class="text-center">Peru Travel Packages</h4>
        </div>
        <div class="row margin-top-30">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Travel Packages</h3>
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
                            <th class="text-right">Price from</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($paquetes_de as $paquetes_des)
                            @if(isset($paquetes_des->destinos))
                                @foreach($paquete->where('id',$paquetes_des->paquetes->id)->sortBy("duracion") as $paquetes)
                                    <tr onClick="CrearEnlace('{{route('show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}');" class="clickable">
                                        <td class="text-primary">{{$paquetes->duracion}} days {{ucfirst(strtolower($paquetes->titulo))}}</td>
                                        <td>
                                            @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                                - {{ucwords(strtolower($paquete_destino->destinos->nombre))}}
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
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="container margin-top-20" id="tours">
        <div class="row">
            <h4 class="text-center">{{ucwords(strtolower($title))}} Tours</h4>
        </div>
        <div class="row margin-top-30">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Travel Packages</h3>
                        <div class="pull-right">
							<span class="clickable filter">
								<i class="glyphicon glyphicon-filter"></i>
							</span>
                        </div>
                    </div>
                    <div class="panel-body panel-body-destinations">
                        <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-tours" placeholder="Filter Packages" />
                    </div>
                    <table class="table table-hover" id="dev-tours">
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