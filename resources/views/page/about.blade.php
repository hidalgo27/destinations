@extends("layouts.page.default")
@section('content')
    <div id="carousel-example-generic" class="carousel slide position-relative" data-ride="carousel">
        <!-- Indicators -->

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{asset('images/nosotros.jpg')}}" alt="...">
                <div class="carousel-caption carousel-caption-itinerary col-md-4 text-left">
                    <div class="header-big-text-1 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                        {{--<h3 class="color-white">Hello to Our Awesome <br>ew Template MyFlat.</h3>--}}
                        {{--<h1 class="color-goto-orange"><strong>Peru Packages: {{ucwords(strtolower($paquetes->titulo))}}</strong></h1>--}}
                        {{--<h3 class="color-white">PERUVIAN DESTINATIONS</h3>--}}
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="container margin-top-60">
        <div class="row margin-bottom-20">
            <div class="section-title-1 tx-center margin-bottom-30 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                <h2 class="color-orange-2"><strong>WHO WE ARE</strong></h2>
                {{--<h4><b>“Better Hotels and superior Service at the best price”</b></h4>--}}
                <div class="sec-title-div-1"></div>
                <p class="">We are a Tour Operator company located in Peru. The PD associates are professionals who love our country and are passionate about introducing our culture to you. We are united by a bond that goes beyond work; it is our passion for our history.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row margin-bottom-20">
            <div class="section-title-1 margin-bottom-30 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                <h4 class="text-info"><strong>WORDS FROM OUR CEO:</strong></h4>
                {{--<h4><b>“Better Hotels and superior Service at the best price”</b></h4>--}}
                <p class=""><i class="fa fa-quote-left fa-3x fa-pull-left fa-border" aria-hidden="true"></i>It is my personal mission to make every trip a memorable, once-in-a-lifetime experience for our guests. Because the only thing we love more than travel is customer satisfaction, we anticipate our clients’ needs at every opportunity. For this reason, I gladly search for those exceptional experiences in the world of art, cuisine, culture, and conservation. This allows our guests to find the trip that is tailored to their needs and embark on adventures that exceed their wildest expectations.”</p>
                <p class="text-right"><i>Marco Herrera – CEO</i></p>
            </div>
        </div>
    </div>

    <div class="bg-about-card padding-top-30 padding-bottom-30">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <article class="card fl-left">
                        <section class="date date-about">
                            <time datetime="23th feb">
                                <span>PERUVIAN</span><span>DESTINATIONS</span>
                            </time>
                        </section>
                        <section class="card-cont">
                            <small>Av. Jose Larco 101 Of. 006, Miraflores. Lima – PERU.</small>

                            <div class="even-date">
                                <i class="fa fa-phone"></i>
                                <time>
                                    <span> PE (51)(1) 314-7776   Cel. (51) 956235133</span>
                                    <span> US (813) 402-8042</span>
                                </time>
                            </div>
                            <div class="even-date">
                                <i class="fa fa-envelope"></i>
                                <p>salesd@peruviandestinations.com</p>
                            </div>
                            <div class="even-date">
                                <i class="fa fa-skype"></i>
                                <p>Skype: peruviandestinations</p>
                            </div>
                            <div class="even-date">
                                <i class="fa fa-globe"></i>
                                <p>www.peruviandestinations.com</p>
                            </div>
                        </section>
                    </article>
                </div>
            </div>
        </div>
    </div>

    <div class="container margin-top-60">
        <div class="row">
            <figure class="snip1139 col-md-6">
                <blockquote>B.A in Business Administration with Graduate studies in Business at
                    F.I.U (US). Marco’s entrepreneur’s expertise in both USA and Peru
                    along with his understanding of the American culture and his passion for tourism are the basis for the foundation of Peruvian Destinations in 2014.
                    Marco’s philosophy is to continuously visit and experience each destination and tours in order to test quality standards and improve itineraries, timing and hotel options for a more pleasant stay.
                    <div class="arrow"></div>
                </blockquote>
                <img src="{{asset("images/marco.jpg")}}" alt="sample3" class="img-responsive"/>
                <div class="author">
                    <h5>MARCO HERRERA <span>- CEO</span></h5>
                </div>
            </figure>
            <figure class="snip1139 col-md-6 hover">
                <blockquote>With more than 40 years of experience Official Tour Guide Betty is a true eminence and referent of the tourism industry in Peru. Her outstanding performance and thoroughness led her to lead groups as TC for top travel agencies such as National Geographic, Lindblad.
                    Expeditions, Tauck Tours, Spiced Expeditions, Cox & Kings, A&K, SA Expeditions, Celebrity, among others.
                    Today Betty uses all that expertise and knowledge to guarantee the highest quality standards of all operations.
                    <div class="arrow"></div>
                </blockquote>
                <img src="{{asset("images/betty.jpg")}}" alt="sample3" class="img-responsive"/>
                <div class="author">
                    <h5>BETTY LEYVA<span>- Group Organization Manager</span></h5>
                </div>
            </figure>
        </div>
    </div>


    <div class="container margin-top-60">
        <div class="row margin-bottom-20">
            <div class="section-title-1 margin-bottom-30 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                <h4 class="text-info"><strong>WHAT WE DO</strong></h4>
                {{--<h4><b>“Better Hotels and superior Service at the best price”</b></h4>--}}
                <p>Whether it is FITS or GROUPS we always focus on personalized Assistance. To us it is all about Quality of Service. To all Groups we appoint a local TC exclusively at your service. To FITS we appoint just one tour guide per destination, because we understand the value of building personal relationships.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row margin-bottom-20">
            <div class="section-title-1 margin-bottom-30 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                <h4 class="text-info"><strong>WHAT SETS US APART</strong></h4>
                {{--<h4><b>“Better Hotels and superior Service at the best price”</b></h4>--}}
                <p>We organize tailor-made trips throughout Peru.</p>
                <ul>
                    <li><b>Personalized Service</b> At Peruvian Destinations we are friends who will treat you like family. </li>
                    <li>The PD Values A Peruvian Destinations associate is passionate, knowledgeable, and trustworthy.</li>
                    <li>The PD Extra Mile We will go above and beyond the expected to make your experience unique and unforgettable.</li>
                    <li>Social Responsibility At PD we organize social activities to aid those who live in remote areas and are in deep needs. Tourists are welcome to bring donations (clothing, toddler toys, etc.) that we can arrange that they deliver personally during their stay or we can register under inventory and take it to those areas afterwards.</li>

                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row margin-bottom-20">
            <div class="section-title-1 margin-bottom-30 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                <h4 class="text-info"><strong>OUR PROMISE</strong></h4>
                {{--<h4><b>“Better Hotels and superior Service at the best price”</b></h4>--}}
                <p>At Peruvian Destinations we are friends that will treat you like family. With INTEGRITY, ENTHUSIASM and FAIRNESS we understand it is all about personal service and here we go far beyond the extra mile.</p>
            </div>
        </div>
    </div>
@stop