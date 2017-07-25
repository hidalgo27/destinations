@extends("layouts.page.default")
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
                        <button type="button" class="btn btn-lg btn-primary margin-top-20" data-toggle="modal" data-target=".bs-example-modal-lg">Request Information</button>
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

    <div class="col-md-12">
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content clearfix">
                <div class="col-md-12 margin-top-10">
                    <h5 class="color-orange-2 text-center">{{$tour->titulo}}</h5>
                    <p><b>Personal Information</b></p>
                </div>

                <div class="col-md-12 header-form-2">
                    <div id="contact_form">
                        <div class="row">
                            <input class="" required="required" id="name" name="name" placeholder="NAME" type="text">
                        </div>
                    </div>

                    <div id="contact_form">
                        <div class="row">
                            <input class="" required="required" id="name" name="name" placeholder="EMAIL" type="email">
                        </div>
                    </div>

                    <div id="contact_form">
                        <div class="row">
                            <input class="" required="required" id="name" name="name" placeholder="TELEPHONE" type="tel">
                        </div>
                    </div>

                    <div id="contact_form">
                        <div class="row">
                            <textarea class="" id="message" name="message" placeholder="MESSAGE"></textarea>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 margin-bottom-20">
                    <a href="" class="btn btn-primary btn-lg btn-avalavility">Request Information</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop