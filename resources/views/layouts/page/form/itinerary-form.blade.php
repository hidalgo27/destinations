<div class=" item padding-top-40 padding-bottom-50" id="inquire">
    <div class="row text-center">
        <h3 class="color-orange-2">REQUEST INFORMATION</h3>
        @if(isset($paquetes))
            <p class="text-primary"><b>Trip:</b> {{$paquetes->codigo}} {{$paquetes->titulo}} {{$paquetes->duracion}} DAYS</p>
            @else
            no
        @endif
    </div>
    <div class="row wrapper margin-top-20">
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <div class="row">
                    <div class="process hide">
                        <div class="process-row nav nav-tabs">
                            {{--<div class="process-step">--}}
                                {{--<button type="button" class="btn btn-info btn-circle" data-toggle="tab" href="#menu1"><i class="fa fa-map-marker fa-3x"></i></button>--}}
                                {{--<p><small>Choose<br/>destinations</small></p>--}}
                            {{--</div>--}}
                            <div class="process-step">
                                <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu1"><i class="fa fa-file-text-o fa-3x"></i></button>
                                <p><small>Your<br />datails</small></p>
                            </div>

                            <div class="process-step">
                                <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu2"><i class="fa fa-check fa-3x"></i></button>
                                <p><small>Personal<br />information</small></p>
                            </div>
                        </div>
                    </div>
                    <form role="form" id="p_form">
                    <div class="tab-content">
                        <div id="menu1" class="tab-pane fade active in">
                            <div class="box-your-details">
                                <div class="col-md-12 margin-top-10">
                                    <h5>HOTEL CATEGORY</h5>
                                </div>
                                <div class="btn-group col-md-12" data-toggle="buttons">
                                    <label class="btn btn-details col-md-3">
                                        <input type="checkbox" autocomplete="off" name="category[]" value="Budget 2">
                                        <i class="fa fa-check-square-o check-from"></i>
                                        <i class="fa fa-square-o oncheck-form" aria-hidden="true"></i>
                                        <b>Budget 2 <i class="fa fa-star color-orange-2" aria-hidden="true"></i></b>
                                    </label>
                                    <label class="btn btn-details col-md-3">
                                        <input type="checkbox" autocomplete="off" name="category[]" value="Best Value 3">
                                        <i class="fa fa-check-square-o check-from"></i>
                                        <i class="fa fa-square-o oncheck-form" aria-hidden="true"></i>
                                        <b>Best Value 3 <i class="fa fa-star color-orange-2" aria-hidden="true"></i></b>
                                    </label>
                                    <label class="btn btn-details col-md-3">
                                        <input type="checkbox" autocomplete="off" name="category[]" value="Superior 4">
                                        <i class="fa fa-check-square-o check-from"></i>
                                        <i class="fa fa-square-o oncheck-form" aria-hidden="true"></i>
                                        <b>Superior 4 <i class="fa fa-star color-orange-2" aria-hidden="true"></i></b>
                                    </label>
                                    <label class="btn btn-details col-md-3">
                                        <input type="checkbox" autocomplete="off" name="category[]" value="Luxury 5">
                                        <i class="fa fa-check-square-o check-from"></i>
                                        <i class="fa fa-square-o oncheck-form" aria-hidden="true"></i>
                                        <b>Luxury 5 <i class="fa fa-star color-orange-2" aria-hidden="true"></i></b>
                                    </label>
                                </div>

                                <div class="col-md-12 margin-top-10">
                                    <h5>NUMBER OF TRAVELERS</h5>
                                </div>

                                <div class="btn-group col-md-12 margin-top-10" data-toggle="buttons">
                                    <label class="btn btn-details col-md-2">
                                        <input type="checkbox" autocomplete="off" name="number[]" value="1 days">
                                        <i class="fa fa-check-square-o check-from"></i>
                                        <i class="fa fa-square-o oncheck-form" aria-hidden="true"></i>
                                        <b>1 <i class="fa fa-user-circle-o" aria-hidden="true"></i></b>
                                    </label>
                                    <label class="btn btn-details col-md-2">
                                        <input type="checkbox" autocomplete="off" name="number[]" value="2 days">
                                        <i class="fa fa-check-square-o check-from"></i>
                                        <i class="fa fa-square-o oncheck-form" aria-hidden="true"></i>
                                        <b>2 <i class="fa fa-user-circle-o" aria-hidden="true"></i></b>
                                    </label>
                                    <label class="btn btn-details col-md-2">
                                        <input type="checkbox" autocomplete="off" name="number[]" value="3 days">
                                        <i class="fa fa-check-square-o check-from"></i>
                                        <i class="fa fa-square-o oncheck-form" aria-hidden="true"></i>
                                        <b>3 <i class="fa fa-user-circle-o" aria-hidden="true"></i></b>
                                    </label>
                                    <label class="btn btn-details col-md-2">
                                        <input type="checkbox" autocomplete="off" name="number[]" value="4 days">
                                        <i class="fa fa-check-square-o check-from"></i>
                                        <i class="fa fa-square-o oncheck-form" aria-hidden="true"></i>
                                        <b>4 <i class="fa fa-user-circle-o" aria-hidden="true"></i></b>
                                    </label>
                                    <label class="btn btn-details col-md-2">
                                        <input type="checkbox" autocomplete="off" name="number[]" value="5 days">
                                        <i class="fa fa-check-square-o check-from"></i>
                                        <i class="fa fa-square-o oncheck-form" aria-hidden="true"></i>
                                        <b>5 <i class="fa fa-user-circle-o" aria-hidden="true"></i></b>
                                    </label>
                                    <label class="btn btn-details col-md-2">
                                        <input type="checkbox" autocomplete="off" name="number[]" value="Undecided">
                                        <i class="fa fa-check-square-o check-from"></i>
                                        <i class="fa fa-square-o oncheck-form" aria-hidden="true"></i>
                                        <b>Undecided</b>
                                    </label>
                                </div>

                                <div class="col-md-12 margin-top-10">
                                    <h5>TRAVEL DATE</h5>
                                </div>
                                <div class="box-personal">
                                    <div class="col-md-12 header-form-2">
                                        <div id="contact_form">
                                            <div class="row">
                                                <input class="" required="required" id="p_date" name="p_date" placeholder="TRAVEL DATE" type="date">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-unstyled list-inline pull-right margin-top-20">
                                {{--<li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>--}}
                                {{--<li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>--}}

                                {{--<div class="process-step">--}}
                                    {{--<button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu2"><i class="fa fa-file-text-o fa-3x"></i></button>--}}
                                    {{--<p><small>Your<br />datails</small></p>--}}
                                {{--</div>--}}

                                <div class="process-step">
                                    <button type="button" class="btn btn-default btn-lg next-step" data-toggle="tab" href="#menu2">Next <i class="fa fa-chevron-right"></i></button>
                                </div>

                            </ul>
                        </div>

                        <div id="menu2" class="tab-pane fade">
                            <div class="box-personal">
                                <div class="col-md-12 margin-top-10">
                                    <h5>PERSONAL INFORMATION</h5>
                                </div>

                                <div class="col-md-12 header-form-2">
                                    <div id="contact_form">
                                        <div class="row">
                                            <input class="" required="required" id="p_name" name="p_name" placeholder="NAME" type="text">
                                            <input type="hidden" id="p_package" name="p_package" value="{{$paquetes->codigo}} {{$paquetes->titulo}}">
                                        </div>
                                    </div>

                                    <div id="contact_form">
                                        <div class="row">
                                            <input class="" required="required" id="p_email" name="p_email" placeholder="EMAIL" type="email">
                                        </div>
                                    </div>

                                    <div id="contact_form">
                                        <div class="row">
                                            <input class="" required="required" id="p_tel" name="p_tel" placeholder="TELEPHONE" type="tel">
                                        </div>
                                    </div>

                                    <div id="contact_form">
                                        <div class="row">
                                            <textarea class="" id="p_comment" name="p_comment" placeholder="MESSAGE"></textarea>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="process-step pull-right">
                                <button type="button" class="btn btn-default btn-lg prev-step" data-toggle="tab" href="#menu1"><i class="fa fa-chevron-left"></i> Back</button>
                                {{--<button type="button" class="btn btn-success btn-lg"><i class="fa fa-check"></i> Done!</button>--}}

                                <button class="btn btn-success btn-lg pull-right" id="p_send" type="button" onclick="packages()"><i class="fa fa-check"></i> Done!
                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                </button>
                                <ul class="fa-ul pull-right hide" id="loader4">
                                    <li><i class="fa-li fa fa-spinner fa-spin"></i> <i>Sending...</i></li>
                                </ul>

                            </div>

                            <div class="col-md-12 margin-top-30 hide" id="p_congratulation">
                                <div class="alert alert-dismissible show custom-alert info-alert" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <p><strong><i class="fa fa-thumbs-up"></i> <b></b></strong></p>
                                </div>

                            </div>
                                {{--<li><button type="button" class="btn btn-default btn-lg prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>--}}
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /.item -->
</div>