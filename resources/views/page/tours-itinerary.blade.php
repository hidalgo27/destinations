@extends("layouts.page.itinerary")
@section("content")
    {{--<div id="carousel-example-generic" class="carousel slide carousel-fade position-relative" data-ride="carousel">--}}
    <div id="carousel-example-generic" class="carousel slide position-relative" data-ride="carousel">
        <!-- Indicators -->

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{asset('images/packages/banners/1.jpg')}}" alt="...">
                <div class="carousel-caption carousel-caption-itinerary col-md-4 text-left">
                    <div class="header-big-text-1 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                        {{--<h3 class="color-white">Hello to Our Awesome <br>ew Template MyFlat.</h3>--}}
                        @foreach($tours as $tour)
                            <h3 class="color-white">{{$tour->titulo}}</h3>
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
                                @foreach($tours as $tour)
                                    {{$tour->titulo}}
                                @endforeach
                            </strong>
                        </h2>
                        <div class="sec-title-div-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-info">Description</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @php echo $tour->descripcion @endphp
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="text-info">Include</h4>
                        @php echo $tour->incluye @endphp
                    </div>
                    <div class="col-md-6">
                        <h4 class="text-info">Not Include</h4>
                        @php echo $tour->noincluye @endphp
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-info">Itinerary</h4>
                        @foreach($tour->itinerario_tours as $itinerario)
                            <h5>{{$itinerario->titulo}}</h5>
                            @php echo $itinerario->descripcion @endphp
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <table class="table table-bordered condensed">
                    {{--<caption>table title and/or explanatory text</caption>--}}
                    {{--<thead>--}}
                    {{--<tr>--}}
                        {{--<th>header</th>--}}
                    {{--</tr>--}}
                    {{--</thead>--}}
                    <tbody>
                    <tr>
                        <td><b>Tour Schedule :</b></td>
                        <td>{{$tour->horario}}</td>
                    </tr>
                    <tr>
                        <td><b>Tour Duration :</b></td>
                        <td>{{$tour->duracion}}</td>
                    </tr>
                    <tr>
                        <td><b>Price per Person (Group Tour):</b></td>
                        <td>USD ${{$tour->precio_g}}</td>
                    </tr>
                    <tr>
                        <td><b>Price per Person (Private Tour):</b></td>
                        <td>USD ${{$tour->precio_p}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@stop