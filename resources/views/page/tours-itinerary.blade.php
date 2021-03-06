@extends("layouts.page.default")
@section("content")
    {{--<div id="carousel-example-generic" class="carousel slide carousel-fade position-relative" data-ride="carousel">--}}
    <div id="carousel-example-generic" class="carousel slide position-relative" data-ride="carousel">
        <!-- Indicators -->

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                @foreach($tours->unique('ubicacion') as $tour)
                    @php
                        $ubicacion = explode(",", $tour->ubicacion);
                    @endphp

                    <img src="{{asset('images/destinations/banners/'.str_replace(' ','-',$ubicacion[0]).'.jpg')}}" alt="..." class="hidden-xs">
                    <img src="{{asset('images/slider/slider-xs.jpg')}}" alt="" class="img-responsive hidden-sm hidden-md hidden-lg">

                @endforeach
{{--                <img src="{{asset('images/packages/banners/1.jpg')}}" alt="...">--}}
                <div class="carousel-caption carousel-caption-itinerary col-md-4 text-left">
                    <div class="header-big-text-1 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                        {{--<h3 class="color-white">Hello to Our Awesome <br>ew Template MyFlat.</h3>--}}
                        {{--@foreach($tours as $tour)--}}
                            {{--<h3 class="color-white">{{$tour->titulo}}</h3>--}}
                        {{--@endforeach--}}

                        <h3 class="color-white">Tours in {{ucwords($ubicacion[0])}}</h3>

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
                        <h2 class="color-orange-2 text-30">
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
                <div class="row margin-bottom-20">
                    <div class="col-md-12">
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
                </div>
                @if(isset($tour->descripcion))
                <div class="row">
                    <div class="col-md-12 margin-top-20">
                        <h4 class="text-info">Description</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="tour-description">
                            @php echo $tour->descripcion @endphp
                        </div>
                    </div>
                </div>
                @endif
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="text-info">Included</h4>
                        @php echo $tour->incluye @endphp
                    </div>
                    <div class="col-md-6">
                        <h4 class="text-info">Not Included</h4>
                        @php echo $tour->noincluye @endphp
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-justify">
                        @foreach($tour->itinerario_tours->take(1) as $itinerario_i)
                            @if(isset($itinerario_i))

                                <h4 class="text-info">Itinerary</h4>
                                @foreach($tour->itinerario_tours as $itinerario)
                                    <h6 class="color-orange-2"><b>Day {{$itinerario->dia}}:</b> {{$itinerario->titulo}}</h6>
                                    @php echo $itinerario->descripcion @endphp
                                @endforeach
                            @endif
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
                    @if($tour->ubicacion == 'inca trail')
                        @php $estado = 'hide' @endphp
                    @else
                        @php $estado = '' @endphp
                    @endif
                    <tr class="{{$estado}}">
                        <td><b>Tour Schedule :</b></td>
                        <td>{{$tour->horario}}</td>
                    </tr>
                    <tr>
                        <td><b>Tour Duration :</b></td>
                        <td>{{$tour->duracion}}</td>
                    </tr>
                    <tr class="{{$estado}}">
                        <td><b>Price per Person <br>(Group Tour):</b></td>
                        @if($tour->precio_g == 0 OR $tour->precio_g == "" OR $tour->precio_g == NULL)
                            <td>UPON REQUEST</td>
                        @else
                            <td>USD ${{$tour->precio_g}}</td>
                        @endif

                    </tr>
                    <tr class="{{$estado}}">
                        <td><b>Price per Person <br>(Group Tour):</b></td>
                        @if($tour->precio_p == 0 OR $tour->precio_p == "" OR $tour->precio_p == NULL)
                            <td><b>UPON REQUEST</b></td>
                        @else
                            <td>USD ${{$tour->precio_p}}</td>
                        @endif
                    </tr>
                    @if($tour->ubicacion == 'inca trail')
                    <tr>
                        <td><b>Price</td>
                        @if($tour->precio == 0 OR $tour->precio == "" OR $tour->precio == NULL)
                            <td><b>UPON REQUEST</b></td>
                        @else
                            <td>USD ${{$tour->precio}}</td>
                        @endif
                    </tr>
                    @endif
                    </tbody>
                </table>

                <div>
                    <button type="button" class="btn btn-lg btn-danger btn-avalavility margin-top-20" data-toggle="modal" data-target=".bs-example-modal-lg">BOOK THIS TOUR</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content clearfix">
                <div class="col-md-12 margin-top-10">
                    <h5 class="color-orange-2 text-center">{{$tour->titulo}}</h5>
                    <p><b>Personal Information</b></p>
                </div>
                <form role="form" id="t_form">
                    {{csrf_field()}}
                    <div class="col-md-12 header-form-2">
                        <div id="contact_form">
                            <div class="row">
                                <input class="" required="required" id="t_name" name="t_name" placeholder="NAME" type="text">
                                <input class="" id="t_tours" name="t_tours" type="hidden" value="{{$tour->titulo}}">
                            </div>
                        </div>

                        <div id="contact_form">
                            <div class="row">
                                <input class="" required="required" id="t_email" name="t_email" placeholder="EMAIL" type="email">
                            </div>
                        </div>

                        <div id="contact_form">
                            <div class="row">
                                <input class="" required="required" id="t_tel" name="t_tel" placeholder="TELEPHONE" type="tel">
                            </div>
                        </div>

                        <div id="contact_form">
                            <div class="row">
                                <textarea class="" id="t_comment" name="t_comment" placeholder="MESSAGE"></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 margin-bottom-20">
                        {{--<a href="" class="btn btn-primary btn-lg btn-avalavility">Request Information</a>--}}
                        <button class="btn btn-primary btn-lg btn-avalavility" id="t_send" type="button" onclick="tours()"> Request Information
                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        </button>
                        <ul class="fa-ul pull-right hide" id="loader3">
                            <li><i class="fa-li fa fa-spinner fa-spin"></i> <i>Sending...</i></li>
                        </ul>

                        <div class="col-md-12 margin-top-30 hide" id="t_congratulation">
                            <div class="alert alert-dismissible show custom-alert info-alert" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <p><strong><i class="fa fa-thumbs-up"></i> <b></b></strong></p>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@stop