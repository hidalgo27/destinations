<div class=" item padding-top-60 padding-bottom-50" id="inquire">
    <div class="row wrapper">
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <div class="row">
                    <div class="process">
                        <div class="process-row nav nav-tabs">
                            <div class="process-step">
                                <button type="button" class="btn btn-info btn-circle" data-toggle="tab" href="#menu1"><i class="fa fa-map-marker fa-3x"></i></button>
                                <p><small>Choose<br/>destinations</small></p>
                            </div>
                            <div class="process-step">
                                <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu2"><i class="fa fa-file-text-o fa-3x"></i></button>
                                <p><small>Your<br />datails</small></p>
                            </div>

                            <div class="process-step">
                                <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu5"><i class="fa fa-check fa-3x"></i></button>
                                <p><small>Personal<br />information</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="menu1" class="tab-pane fade active in">
                            <div class="box-destination">
                                <div class="col-md-12 margin-top-10">
                                    <h5>CHOOSE DESTINATIONS</h5>
                                </div>
                                <div class="btn-group col-md-12" data-toggle="buttons">
                                    <label class="btn btn-custom col-md-4">
                                        <input type="checkbox" autocomplete="off" value="Machu Picchu">
                                        <i class="fa fa-check fa-3x"></i>
                                        <img src="{{asset('images/form/machupicchu.jpg')}}" alt="" class="img-responsive">
                                        <span>Machu Picchu</span>
                                    </label>
                                    <label class="btn btn-custom col-md-4">
                                        <input type="checkbox" autocomplete="off">
                                        <i class="fa fa-check fa-3x"></i>
                                        <img src="{{asset('images/form/nazca.jpg')}}" alt="" class="img-responsive">
                                        <span>Nazca Lines</span>
                                    </label>
                                    <label class="btn btn-custom col-md-4">
                                        <input type="checkbox" autocomplete="off">
                                        <i class="fa fa-check fa-3x"></i>
                                        <img src="{{asset('images/form/amazon.jpg')}}" alt="" class="img-responsive">
                                        <span>Peruvian Amazon</span>
                                    </label>
                                </div>

                                <div class="btn-group col-md-12" data-toggle="buttons">
                                    <label class="btn btn-custom col-md-4">
                                        <input type="checkbox" autocomplete="off">
                                        <i class="fa fa-check fa-3x"></i>
                                        <img src="{{asset('images/form/chiclayo.jpg')}}" alt="" class="img-responsive">
                                        <span>Trujillo / Chiclayo</span>
                                    </label>
                                    <label class="btn btn-custom col-md-4">
                                        <input type="checkbox" autocomplete="off">
                                        <i class="fa fa-check fa-3x"></i>
                                        <img src="{{asset('images/form/cusco.jpg')}}" alt="" class="img-responsive">
                                        <span>Cuzco</span>
                                    </label>
                                    <label class="btn btn-custom col-md-4">
                                        <input type="checkbox" autocomplete="off">
                                        <i class="fa fa-check fa-3x"></i>
                                        <img src="{{asset('images/form/titicaca.jpg')}}" alt="" class="img-responsive">
                                        <span>Lake Titicaca</span>
                                    </label>
                                </div>

                                <div class="btn-group col-md-12" data-toggle="buttons">
                                    <label class="btn btn-custom col-md-4">
                                        <input type="checkbox" autocomplete="off">
                                        <i class="fa fa-check fa-3x"></i>
                                        <img src="{{asset('images/form/paracas.jpg')}}" alt="" class="img-responsive">
                                        <span>Paracas / Ballestas Islands</span>
                                    </label>
                                    <label class="btn btn-custom col-md-4">
                                        <input type="checkbox" autocomplete="off">
                                        <i class="fa fa-check fa-3x"></i>
                                        <img src="{{asset('images/form/lima.jpg')}}" alt="" class="img-responsive">
                                        <span>Lima</span>
                                    </label>
                                    <label class="btn btn-custom col-md-4">
                                        <input type="checkbox" autocomplete="off">
                                        <i class="fa fa-check fa-3x"></i>
                                        <img src="{{asset('images/form/colca.jpg')}}" alt="" class="img-responsive">
                                        <span>Arequipa / Colca Canyon</span>
                                    </label>
                                </div>

                            </div>
                            <ul class="list-unstyled list-inline pull-right margin-top-20">
                                <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
                            </ul>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <div class="box-your-details">
                                <div class="col-md-12 margin-top-10">
                                    <h5>HOTEL CATEGORY</h5>
                                </div>
                                <div class="btn-group col-md-12" data-toggle="buttons">
                                    <label class="btn btn-details col-md-3">
                                        <input type="checkbox" autocomplete="off">
                                        <i class="fa fa-check-square-o check-from"></i>
                                        <i class="fa fa-square-o oncheck-form" aria-hidden="true"></i>
                                        <b>Budget 2 <i class="fa fa-star color-orange-2" aria-hidden="true"></i></b>
                                    </label>
                                    <label class="btn btn-details col-md-3">
                                        <input type="checkbox" autocomplete="off">
                                        <i class="fa fa-check-square-o check-from"></i>
                                        <i class="fa fa-square-o oncheck-form" aria-hidden="true"></i>
                                        <b>Best Value 3 <i class="fa fa-star color-orange-2" aria-hidden="true"></i></b>
                                    </label>
                                    <label class="btn btn-details col-md-3">
                                        <input type="checkbox" autocomplete="off">
                                        <i class="fa fa-check-square-o check-from"></i>
                                        <i class="fa fa-square-o oncheck-form" aria-hidden="true"></i>
                                        <b>Superior 4 <i class="fa fa-star color-orange-2" aria-hidden="true"></i></b>
                                    </label>
                                    <label class="btn btn-details col-md-3">
                                        <input type="checkbox" autocomplete="off">
                                        <i class="fa fa-check-square-o check-from"></i>
                                        <i class="fa fa-square-o oncheck-form" aria-hidden="true"></i>
                                        <b>Luxury 5 <i class="fa fa-star color-orange-2" aria-hidden="true"></i></b>
                                    </label>
                                </div>

                                <div class="col-md-12 margin-top-10">
                                    <h5>Trip length</h5>
                                </div>

                                <div class="btn-group col-md-12 margin-top-10" data-toggle="buttons">
                                    <label class="btn btn-details col-md-2">
                                        <input type="checkbox" autocomplete="off">
                                        <i class="fa fa-check-square-o check-from"></i>
                                        <i class="fa fa-square-o oncheck-form" aria-hidden="true"></i>
                                        <b>3-5 <span class="display-block">Days</span></b>
                                    </label>
                                    <label class="btn btn-details col-md-2">
                                        <input type="checkbox" autocomplete="off">
                                        <i class="fa fa-check-square-o check-from"></i>
                                        <i class="fa fa-square-o oncheck-form" aria-hidden="true"></i>
                                        <b>6-8 <span class="display-block">Days</span></b>
                                    </label>
                                    <label class="btn btn-details col-md-2">
                                        <input type="checkbox" autocomplete="off">
                                        <i class="fa fa-check-square-o check-from"></i>
                                        <i class="fa fa-square-o oncheck-form" aria-hidden="true"></i>
                                        <b>9-11 <span class="display-block">Days</span></b>
                                    </label>
                                    <label class="btn btn-details col-md-2">
                                        <input type="checkbox" autocomplete="off">
                                        <i class="fa fa-check-square-o check-from"></i>
                                        <i class="fa fa-square-o oncheck-form" aria-hidden="true"></i>
                                        <b>12-15 <span class="display-block">Days</span></b>
                                    </label>
                                    <label class="btn btn-details col-md-2">
                                        <input type="checkbox" autocomplete="off">
                                        <i class="fa fa-check-square-o check-from"></i>
                                        <i class="fa fa-square-o oncheck-form" aria-hidden="true"></i>
                                        <b>+16 <span class="display-block">Days</span></b>
                                    </label>
                                    <label class="btn btn-details col-md-2">
                                        <input type="checkbox" autocomplete="off">
                                        <i class="fa fa-check-square-o check-from"></i>
                                        <i class="fa fa-square-o oncheck-form" aria-hidden="true"></i>
                                        <b>Unknow <br>-</b>
                                    </label>
                                </div>


                                <div class="col-md-12 margin-top-10">
                                    <h5>NUMBER OF TRAVELERS</h5>
                                </div>

                                <div class="btn-group col-md-12 margin-top-10" data-toggle="buttons">
                                    <label class="btn btn-details col-md-2">
                                        <input type="checkbox" autocomplete="off">
                                        <i class="fa fa-check-square-o check-from"></i>
                                        <i class="fa fa-square-o oncheck-form" aria-hidden="true"></i>
                                        <b>1 <i class="fa fa-user-circle-o" aria-hidden="true"></i></b>
                                    </label>
                                    <label class="btn btn-details col-md-2">
                                        <input type="checkbox" autocomplete="off">
                                        <i class="fa fa-check-square-o check-from"></i>
                                        <i class="fa fa-square-o oncheck-form" aria-hidden="true"></i>
                                        <b>2 <i class="fa fa-user-circle-o" aria-hidden="true"></i></b>
                                    </label>
                                    <label class="btn btn-details col-md-2">
                                        <input type="checkbox" autocomplete="off">
                                        <i class="fa fa-check-square-o check-from"></i>
                                        <i class="fa fa-square-o oncheck-form" aria-hidden="true"></i>
                                        <b>3 <i class="fa fa-user-circle-o" aria-hidden="true"></i></b>
                                    </label>
                                    <label class="btn btn-details col-md-2">
                                        <input type="checkbox" autocomplete="off">
                                        <i class="fa fa-check-square-o check-from"></i>
                                        <i class="fa fa-square-o oncheck-form" aria-hidden="true"></i>
                                        <b>4 <i class="fa fa-user-circle-o" aria-hidden="true"></i></b>
                                    </label>
                                    <label class="btn btn-details col-md-2">
                                        <input type="checkbox" autocomplete="off">
                                        <i class="fa fa-check-square-o check-from"></i>
                                        <i class="fa fa-square-o oncheck-form" aria-hidden="true"></i>
                                        <b>5 <i class="fa fa-user-circle-o" aria-hidden="true"></i></b>
                                    </label>
                                    <label class="btn btn-details col-md-2">
                                        <input type="checkbox" autocomplete="off">
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
                                                <input class="" required="required" id="name" name="name" placeholder="TRAVEL DATE" type="date">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-unstyled list-inline pull-right margin-top-20">
                                <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
                                <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
                            </ul>
                        </div>

                        <div id="menu5" class="tab-pane fade">
                            <div class="box-personal">
                                <div class="col-md-12 margin-top-10">
                                    <h5>PERSONAL INFORMATION</h5>
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

                            </div>
                            <ul class="list-unstyled list-inline pull-right">
                                <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
                                <li><button type="button" class="btn btn-success"><i class="fa fa-check"></i> Done!</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.item -->
</div>