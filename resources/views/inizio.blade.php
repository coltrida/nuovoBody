@extends('layouts.stile')

@section('main')
    <!-- Banner Section -->
    <section class="banner-section">
        <div class="main-slider-carousel owl-carousel owl-theme">

            <div class="slide">
                <div id="prima" class="image-layer"></div>
                <div class="auto-container">
                    <!-- Content Boxed -->
                    <div class="content-boxed">
                        <div class="inner-boxed">
                            <h1>KEEP YOUR BODY <span>FIT & STRONG</span></h1>
                            <div class="text">BODYLINE CORTONA – Centro fitness per il benessere fisico e mentale! <br> Comincia ad allenarti adesso per restare in forma tutto l'anno!</div>
                            {{--<div class="btns-box">
                                <div class="theme-btn purchase-box-btn btn-style-one"><span class="txt">LET’S TRAIN</span></div>
                            </div>--}}
                        </div>
                    </div>
                </div>

            </div>

            <div class="slide">
                <div id="seconda" class="image-layer"></div>
                <div class="auto-container">
                    <!-- Content Boxed -->
                    <div class="content-boxed">
                        <div class="inner-boxed">
                            <h1>KEEP YOUR BODY <span>FIT & STRONG</span></h1>
                            <div class="text">BODYLINE CORTONA – Centro fitness dove il tuo corpo tornerà in forma! <br> Fissare degli obiettivi è il primo passo per trasformare l’invisibile in visibile!</div>
                            {{--<div class="btns-box">
                                <div class="theme-btn purchase-box-btn btn-style-one"><span class="txt">LET’S TRAIN</span></div>
                            </div>--}}
                        </div>
                    </div>
                </div>

            </div>

            <div class="slide">
                <div id="terza" class="image-layer"></div>
                <div class="auto-container">
                    <!-- Content Boxed -->
                    <div class="content-boxed">
                        <div class="inner-boxed">
                            <h1>KEEP YOUR BODY <span>FIT & STRONG</span></h1>
                            <div class="text">BODYLINE CORTONA – Vieni a trovarci! <br> La voglia di vincere non è nemmeno lontanamente così importante come la voglia di prepararsi a vincere!</div>
                            {{--<div class="btns-box">
                                <div class="theme-btn purchase-box-btn btn-style-one"><span class="txt">LET’S TRAIN</span></div>
                            </div>--}}
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!--Scroll Dwwn Btn-->
        <div class="mouse-btn-down scroll-to-target" data-target=".testimonial-section">
            <span class="icon"><img src="{{asset('images/icons/scroll.png')}}" alt="" /></span>
        </div>

    </section>
    <!-- End Banner Section -->

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="auto-container">
            <div class="inner-container">
                <span class="quote-left flaticon-quote-3"></span>
                <span class="quote-right flaticon-quote-4"></span>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="text">
                            Il bodybuilding non è solo uno sport, è uno stile di vita. Se ogni aspetto della tua esistenza non è focalizzato sulla realizzazione dei sacrifici necessari per costruire il tuo fisico migliore, alla fine fallirai e non raggiungerai mai il tuo pieno potenziale.
                            <br> <i>Robert Cheeke</i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->

    <!-- Services Section -->
    <section class="services-section">
        <div class="outer-container">
            <div class="clearfix">

                <!-- Service Block -->
                <div class="service-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="body-builder.html" class="overlay-link"></a>
                            <img src="{{asset('storage/secondMain/service-1.jpg')}}" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h4><a href="#">FITNESS</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="body-builder.html" class="overlay-link"></a>
                            <img src="{{asset('storage/secondMain/service-2.jpg')}}" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h4><a href="#">BODYBUILDING</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="body-builder.html" class="overlay-link"></a>
                            <img src="{{asset('storage/secondMain/service-3.jpg')}}" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h4><a href="#">CROSSFIT</a></h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="body-builder.html" class="overlay-link"></a>
                            <img src="{{asset('storage/secondMain/service-4.jpg')}}" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h4><a href="#">CARDIO</a></h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- We Are Section -->
    <section class="we-are-section">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2><span>WHO</span> We Are</h2>
                <div class="text">
                    Siamo un gruppo di appassionati, amanti del fitness! <br> Impossibile non è un dato di fatto, è un parere. Impossibile non è una dichiarazione è una sfida, impossibile è teorico, impossibile è temporaneo, impossibile non esiste è nulla.
                </div>
            </div>

            <!--Video Box-->
            <div class="video-box">
                <figure class="video-image">
                    <img src="{{asset('images/resource/video-img.jpg')}}" alt="">
                </figure>
                <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span><img src="{{asset('images/icons/play-icon.png')}}" alt="" /><i class="ripple"></i></span></a>
            </div>

            <!-- Button Box -->
            <div class="button-box text-center">
                <div class="heme-btn btn-style-one purchase-box-btn"><span class="txt">FREE CONSULTATION</span></div>
            </div>

        </div>
    </section>
    <!-- End We Are Section -->

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="outer-container">
            <div class="row clearfix">

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/gallery/1.jpg')}}" alt="" />
                            <a class="overlay-link" href="{{asset('images/gallery/1.jpg')}}" data-fancybox="images1" data-caption=""></a>
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                {{--<div class="overlay-inner">
                                    <div class="content">
                                        <a class="plus" href="{{asset('images/gallery/1.jpg')}}" data-fancybox="images1" data-caption=""></a>
                                    </div>
                                </div>--}}
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a class="plus" href="{{asset('images/gallery/2.jpg')}}" data-fancybox="images1" data-caption=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/gallery/2.jpg')}}" alt="" />
                            <a class="overlay-link" href="{{asset('images/gallery/2.jpg')}}" data-fancybox="images" data-caption=""></a>
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a class="plus" href="{{asset('images/gallery/2.jpg')}}" data-fancybox="images" data-caption=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/gallery/3.jpg')}}" alt="" />
                            <a class="overlay-link" href="images/gallery/gallery3.jpg" data-fancybox="images" data-caption=""></a>
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a class="plus" href="images/gallery/gallery3.jpg" data-fancybox="images" data-caption=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/gallery/4.jpg')}}" alt="" />
                            <a class="overlay-link" href="images/gallery/gallery4.jpg" data-fancybox="images" data-caption=""></a>
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a class="plus" href="images/gallery/gallery4.jpg" data-fancybox="images" data-caption=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/gallery/5.jpg')}}" alt="" />
                            <a class="overlay-link" href="images/gallery/gallery5.jpg" data-fancybox="images" data-caption=""></a>
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a class="plus" href="images/gallery/gallery5.jpg" data-fancybox="images" data-caption=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/gallery/6.jpg')}}" alt="" />
                            <a class="overlay-link" href="images/gallery/gallery6.jpg" data-fancybox="images" data-caption=""></a>
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a class="plus" href="images/gallery/gallery6.jpg" data-fancybox="images" data-caption=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/gallery/7.jpg')}}" alt="" />
                            <a class="overlay-link" href="images/gallery/gallery7.jpg" data-fancybox="images" data-caption=""></a>
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a class="plus" href="images/gallery/gallery7.jpg" data-fancybox="images" data-caption=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/gallery/8.jpg')}}" alt="" />
                            <a class="overlay-link" href="images/gallery/gallery8.jpg" data-fancybox="images" data-caption=""></a>
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a class="plus" href="images/gallery/gallery8.jpg" data-fancybox="images" data-caption=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/gallery/9.jpg')}}" alt="" />
                            <a class="overlay-link" href="images/gallery/gallery9.jpg" data-fancybox="images" data-caption=""></a>
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a class="plus" href="images/gallery/gallery9.jpg" data-fancybox="images" data-caption=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/gallery/10.jpg')}}" alt="" />
                            <a class="overlay-link" href="images/gallery/gallery10.jpg" data-fancybox="images" data-caption=""></a>
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a class="plus" href="images/gallery/gallery10.jpg" data-fancybox="images" data-caption=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/gallery/11.jpg')}}" alt="" />
                            <a class="overlay-link" href="images/gallery/gallery11.jpg" data-fancybox="images" data-caption=""></a>
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a class="plus" href="images/gallery/gallery11.jpg" data-fancybox="images" data-caption=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/gallery/12.jpg')}}" alt="" />
                            <a class="overlay-link" href="images/gallery/gallery12.jpg" data-fancybox="images" data-caption=""></a>
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a class="plus" href="images/gallery/gallery12.jpg" data-fancybox="images" data-caption=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Gallery Section -->

    <!-- Counter Section -->
    <section class="counter-section">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2><span>Perchè </span>sceglierci</h2>
                <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br> tempor incididunt ut labore et dolore magna aliqua</div>
            </div>

            <!-- Fact Counter -->
            <div class="fact-counter">
                <div class="row clearfix">

                    <!-- Column -->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="12">0</span>
                                </div>
                                <div class="counter-title">Progrmmi di Training</div>
                            </div>
                        </div>
                    </div>

                    <!-- Column -->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="count-outer count-box alternate">
                                    <span class="count-text" data-speed="5000" data-stop="14">0</span>
                                </div>
                                <div class="counter-title">Anni di esperienza</div>
                            </div>
                        </div>
                    </div>

                    <!-- Column -->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="5000" data-stop="357">0</span>
                                </div>
                                <div class="counter-title">Clienti Felici</div>
                            </div>
                        </div>
                    </div>

                    <!-- Column -->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3500" data-stop="14">0</span>
                                </div>
                                <div class="counter-title">Best Trainers</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Counter Section -->

    <!-- Pricing Section -->
    <section id="priceSection" class="pricing-section">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2><span>Program</span> Pricing</h2>
            </div>
            <div class="row clearfix">

                <!-- Pricing Block -->
                <div class="price-block col-lg-4 col-md-4 col-sm-12">
                    <div class="side-text">STANDART</div>
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon"><img src="{{asset('images/icons/price-1-icon.svg')}}" alt="" /></span>
                        </div>
                        <ul class="price-list">
                            <li class="hide">Membership Card</li>
                            <li>Health and Fitness Tips</li>
                            <li>Personal Health Solution</li>
                            <li>Diet Plan Included</li>
                            <li class="hide">6 Days a Week</li>
                            <li class="hide">Zumba Classes</li>
                        </ul>
                        <div class="price">$100<span>Per Month</span></div>
                        <div class="theme-btn btn-style-one purchase-box-btn"><span class="txt">PURCHASE NOW</span></div>
                    </div>
                </div>

                <!-- Pricing Block -->
                <div class="price-block col-lg-4 col-md-4 col-sm-12">
                    <div class="side-text">PROFESSIONAL</div>
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon"><img src="{{asset('images/icons/price-2-icon.svg')}}" alt="" /></span>
                        </div>
                        <ul class="price-list">
                            <li>Membership Card</li>
                            <li>Health and Fitness Tips</li>
                            <li>Personal Health Solution</li>
                            <li>Diet Plan Included</li>
                            <li class="hide">6 Days a Week</li>
                            <li class="hide">Zumba Classes</li>
                        </ul>
                        <div class="price">$150<span>Per Month</span></div>
                        <div class="theme-btn btn-style-one purchase-box-btn"><span class="txt">PURCHASE NOW</span></div>
                    </div>
                </div>

                <!-- Pricing Block -->
                <div class="price-block col-lg-4 col-md-4 col-sm-12">
                    <div class="side-text">ULTIMATE</div>
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon"><img src="{{asset('images/icons/price-3-icon.svg')}}" alt="" /></span>
                        </div>
                        <ul class="price-list">
                            <li>Membership Card</li>
                            <li>Health and Fitness Tips</li>
                            <li>Personal Health Solution</li>
                            <li>Diet Plan Included</li>
                            <li>6 Days a Week</li>
                            <li>Zumba Classes</li>
                        </ul>
                        <div class="price">$200<span>Per Month</span></div>
                        <div class="theme-btn btn-style-one purchase-box-btn"><span class="txt">PURCHASE NOW</span></div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Pricing Section -->

    <!-- Coaches Section -->
    <section class="coaches-section">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2><span>I nostri</span> Trainers</h2>
{{--                <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br> tempor incididunt ut labore et dolore magna aliqua</div>--}}
            </div>
        </div>

        <div class="four-item-carousel owl-carousel owl-theme">

            @foreach($trainers as $item)
                <div class="coach-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset("storage/trainers/$item->id.jpg")}}" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <a href="trainer.html" class="overlay-link"></a>
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h4><a href="blog-detail.html">{{$item->nome}}</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Overlay Box Two -->
                            <div class="overlay-box-two">
                                <a href="trainer.html" class="overlay-link-two"></a>
                                <div class="content">
                                    <h5><a href="blog-detail.html">{{$item->nome}} <br> {{$item->cognome}}</a></h5>
                                    <div class="text" style="font-size: 12px; text-align:justify ">{{$item->descrizione}}</div>
                                    <!-- Social Box -->
                                    {{--<div class="social-box">
                                        <a href="#" class="fa fa-facebook"></a>
                                        <a href="#" class="fa fa-instagram"></a>
                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- Coach Block -->
      {{--

            <!-- Coach Block -->
            <div class="coach-block">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{asset('images/resource/coach-2.jpg')}}" alt="" />
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <a href="trainer.html" class="overlay-link"></a>
                            <div class="overlay-inner">
                                <div class="content">
                                    <h4><a href="blog-detail.html">DAVIDE</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- Overlay Box Two -->
                        <div class="overlay-box-two">
                            <a href="trainer.html" class="overlay-link-two"></a>
                            <div class="content">
                                <h5><a href="blog-detail.html">DAVIDE</a></h5>
                                <div class="text">8 years of experience. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</div>
                                <!-- Social Box -->
                                <div class="social-box">
                                    <a href="#" class="fa fa-facebook"></a>
                                    <a href="#" class="fa fa-twitter"></a>
                                    <a href="#" class="fa fa-instagram"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Coach Block -->
            <div class="coach-block">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{asset('images/resource/coach-3.jpg')}}" alt="" />
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <a href="trainer.html" class="overlay-link"></a>
                            <div class="overlay-inner">
                                <div class="content">
                                    <h4><a href="blog-detail.html">NADIA</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- Overlay Box Two -->
                        <div class="overlay-box-two">
                            <a href="trainer.html" class="overlay-link-two"></a>
                            <div class="content">
                                <h5><a href="blog-detail.html">NADIA</a></h5>
                                <div class="text">8 years of experience. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</div>
                                <!-- Social Box -->
                                <div class="social-box">
                                    <a href="#" class="fa fa-facebook"></a>
                                    <a href="#" class="fa fa-twitter"></a>
                                    <a href="#" class="fa fa-instagram"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Coach Block -->
            <div class="coach-block">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{asset('images/resource/coach-4.jpg')}}" alt="" />
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <a href="trainer.html" class="overlay-link"></a>
                            <div class="overlay-inner">
                                <div class="content">
                                    <h4><a href="blog-detail.html">JENNIFER</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- Overlay Box Two -->
                        <div class="overlay-box-two">
                            <a href="trainer.html" class="overlay-link-two"></a>
                            <div class="content">
                                <h5><a href="blog-detail.html">JENNIFER</a></h5>
                                <div class="text">8 years of experience. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</div>
                                <!-- Social Box -->
                                <div class="social-box">
                                    <a href="#" class="fa fa-facebook"></a>
                                    <a href="#" class="fa fa-twitter"></a>
                                    <a href="#" class="fa fa-instagram"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Coach Block -->
            <div class="coach-block">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{asset('images/resource/coach-1.jpg')}}" alt="" />
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <a href="trainer.html" class="overlay-link"></a>
                            <div class="overlay-inner">
                                <div class="content">
                                    <h4><a href="blog-detail.html">John</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- Overlay Box Two -->
                        <div class="overlay-box-two">
                            <a href="trainer.html" class="overlay-link-two"></a>
                            <div class="content">
                                <h5><a href="blog-detail.html">JOHN <br> ABRAHAM</a></h5>
                                <div class="text">8 years of experience. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</div>
                                <!-- Social Box -->
                                <div class="social-box">
                                    <a href="#" class="fa fa-facebook"></a>
                                    <a href="#" class="fa fa-twitter"></a>
                                    <a href="#" class="fa fa-instagram"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Coach Block -->
            <div class="coach-block">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{asset('images/resource/coach-2.jpg')}}" alt="" />
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <a href="trainer.html" class="overlay-link"></a>
                            <div class="overlay-inner">
                                <div class="content">
                                    <h4><a href="blog-detail.html">DONALD</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- Overlay Box Two -->
                        <div class="overlay-box-two">
                            <a href="trainer.html" class="overlay-link-two"></a>
                            <div class="content">
                                <h5><a href="blog-detail.html">DONALD</a></h5>
                                <div class="text">8 years of experience. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</div>
                                <!-- Social Box -->
                                <div class="social-box">
                                    <a href="#" class="fa fa-facebook"></a>
                                    <a href="#" class="fa fa-twitter"></a>
                                    <a href="#" class="fa fa-instagram"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Coach Block -->
            <div class="coach-block">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{asset('images/resource/coach-3.jpg')}}" alt="" />
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <a href="trainer.html" class="overlay-link"></a>
                            <div class="overlay-inner">
                                <div class="content">
                                    <h4><a href="blog-detail.html">MONICA</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- Overlay Box Two -->
                        <div class="overlay-box-two">
                            <a href="trainer.html" class="overlay-link-two"></a>
                            <div class="content">
                                <h5><a href="blog-detail.html">MONICA</a></h5>
                                <div class="text">8 years of experience. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</div>
                                <!-- Social Box -->
                                <div class="social-box">
                                    <a href="#" class="fa fa-facebook"></a>
                                    <a href="#" class="fa fa-twitter"></a>
                                    <a href="#" class="fa fa-instagram"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Coach Block -->
            <div class="coach-block">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{asset('images/resource/coach-4.jpg')}}" alt="" />
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <a href="trainer.html" class="overlay-link"></a>
                            <div class="overlay-inner">
                                <div class="content">
                                    <h4><a href="blog-detail.html">JENNIFER</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- Overlay Box Two -->
                        <div class="overlay-box-two">
                            <a href="trainer.html" class="overlay-link-two"></a>
                            <div class="content">
                                <h5><a href="blog-detail.html">JENNIFER</a></h5>
                                <div class="text">8 years of experience. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</div>
                                <!-- Social Box -->
                                <div class="social-box">
                                    <a href="#" class="fa fa-facebook"></a>
                                    <a href="#" class="fa fa-twitter"></a>
                                    <a href="#" class="fa fa-instagram"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

     --}}
        </div>

    </section>
    <!-- End Coaches Section -->

    <!-- Testimonial Section Two -->
    <section class="testimonial-section-two">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2><span>COSA DICONO </span><br>I NOSTRI CLIENTI</h2>
{{--                <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br> tempor incididunt ut labore et dolore magna aliqua</div>--}}
            </div>

            <div class="testimonial-outer">


                <!--Product Thumbs Carousel-->
                <div class="client-thumb-outer">
                    <div class="client-thumbs-carousel owl-carousel owl-theme">
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="{{asset('images/resource/author-4.jpg')}}" alt=""></figure>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="{{asset('images/resource/author-2.jpg')}}" alt=""></figure>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="{{asset('images/resource/author-3.jpg')}}" alt=""></figure>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="{{asset('images/resource/author-1.jpg')}}" alt=""></figure>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="{{asset('images/resource/author-5.jpg')}}" alt=""></figure>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="{{asset('images/resource/author-6.jpg')}}" alt=""></figure>
                        </div>
                    </div>
                </div>

                <!-- Client Testimonial Carousel -->
                <div class="client-testimonial-carousel owl-carousel owl-theme">

                    <!--Testimonial Block -->
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <span class="quote-left flaticon-quote-3"></span>
                            <span class="quote-right flaticon-quote-4"></span>
                            <div class="text">“Volevo più tonicità e...BODYLINE CORTONA me l'ha fatta ottenere! Grazie!”</div>
                            <div class="author-info">
{{--                                <div class="author-name">Luisa</div>--}}
{{--                                <div class="designation">CEO of Company</div>--}}
                            </div>
                        </div>
                    </div>

                    <!--Testimonial Block -->
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <span class="quote-left flaticon-quote-3"></span>
                            <span class="quote-right flaticon-quote-4"></span>
                            <div class="text">“grazie BODYLINE CORTONA sono arrivata alla forma che volevo! Grazie di cuore!”</div>
                            <div class="author-info">
{{--                                <div class="author-name">Vivien</div>--}}
{{--                                <div class="designation">CEO of Company</div>--}}
                            </div>
                        </div>
                    </div>

                    <!--Testimonial Block -->
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <span class="quote-left flaticon-quote-3"></span>
                            <span class="quote-right flaticon-quote-4"></span>
                            <div class="text">“All'inizio non avevo la giusta volontà, ma grazie ai trainers ho trovato le giuste motivazioni! Grazie BODYLINE CORTONA!”</div>
                            <div class="author-info">
{{--                                <div class="author-name">Jacqueline</div>--}}
{{--                                <div class="designation">CEO of Company</div>--}}
                            </div>
                        </div>
                    </div>

                    <!--Testimonial Block -->
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <span class="quote-left flaticon-quote-3"></span>
                            <span class="quote-right flaticon-quote-4"></span>
                            <div class="text">“BODYLINE CORTONA mi ha fatto ritornare in palestra con il sorriso e la voglia di migliorare! Ho mangiato pulito e ascoltato i consigli dei trainer!”</div>
                            <div class="author-info">
{{--                                <div class="author-name">Davide</div>--}}
{{--                                <div class="designation">CEO of Company</div>--}}
                            </div>
                        </div>
                    </div>

                    <!--Testimonial Block -->
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <span class="quote-left flaticon-quote-3"></span>
                            <span class="quote-right flaticon-quote-4"></span>
                            <div class="text">“BODYLINE CORTONA mi ha seguito e mi ha fatto divertire con i suoi corsi, intensi ma coinvolgenti! Sono felicissima dei risultati”</div>
                            <div class="author-info">
{{--                                <div class="author-name">Sara</div>--}}
{{--                                <div class="designation">CEO of Company</div>--}}
                            </div>
                        </div>
                    </div>

                    <!--Testimonial Block -->
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <span class="quote-left flaticon-quote-3"></span>
                            <span class="quote-right flaticon-quote-4"></span>
                            <div class="text">“Ho scoperto BODYLINE CORTONA da poco e mi sono innamorata dei suoi corsi!”</div>
                            <div class="author-info">
{{--                                <div class="author-name">Roberta</div>--}}
{{--                                <div class="designation">CEO of Company</div>--}}
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- End Testimonial Section -->

    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2><span>ULTIME</span><br>NOTIZIE</h2>
                <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br> tempor incididunt ut labore et dolore magna aliqua</div>
            </div>

            <div class="single-item-carousel owl-carousel owl-theme">

                <div class="row clearfix">

                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">

                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <a href="blog-detail.html" class="overlay-link"></a>
                                <div class="image">
                                    <img src="{{asset('images/resource/news-1.jpg')}}" alt="" />
                                    <div class="post-date">
                                        <span>27</span>SEP
                                    </div>
                                    <div class="content">
                                        <h4><a href="blog-detail.html">HOW TO MAXIMISE TIME SPENT AT THE GYM</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">

                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <a href="blog-detail.html" class="overlay-link"></a>
                                <div class="image">
                                    <img src="{{asset('images/resource/news-2.jpg')}}" alt="" />
                                    <div class="post-date">
                                        <span>7</span>SEP
                                    </div>
                                    <div class="content">
                                        <h4><a href="blog-detail.html">SIMPLE CONDITION FOR ALL AROUND FITNESS</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <a href="blog-detail.html" class="overlay-link"></a>
                                <div class="image">
                                    <img src="{{asset('images/resource/news-3.jpg')}}" alt="" />
                                    <div class="post-date">
                                        <span>18</span>SEP
                                    </div>
                                    <div class="content">
                                        <h4><a href="blog-detail.html">10 TIPS HOW TO PREPARE MEALS FAST AND EASY</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row clearfix">

                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">

                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <a href="blog-detail.html" class="overlay-link"></a>
                                <div class="image">
                                    <img src="{{asset('images/resource/news-1.jpg')}}" alt="" />
                                    <div class="post-date">
                                        <span>27</span>SEP
                                    </div>
                                    <div class="content">
                                        <h4><a href="blog-detail.html">HOW TO MAXIMISE TIME SPENT AT THE GYM</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">

                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <a href="blog-detail.html" class="overlay-link"></a>
                                <div class="image">
                                    <img src="{{asset('images/resource/news-2.jpg')}}" alt="" />
                                    <div class="post-date">
                                        <span>7</span>SEP
                                    </div>
                                    <div class="content">
                                        <h4><a href="blog-detail.html">SIMPLE CONDITION FOR ALL AROUND FITNESS</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <a href="blog-detail.html" class="overlay-link"></a>
                                <div class="image">
                                    <img src="{{asset('images/resource/news-3.jpg')}}" alt="" />
                                    <div class="post-date">
                                        <span>18</span>SEP
                                    </div>
                                    <div class="content">
                                        <h4><a href="blog-detail.html">10 TIPS HOW TO PREPARE MEALS FAST AND EASY</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row clearfix">

                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">

                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <a href="blog-detail.html" class="overlay-link"></a>
                                <div class="image">
                                    <img src="{{asset('images/resource/news-1.jpg')}}" alt="" />
                                    <div class="post-date">
                                        <span>27</span>SEP
                                    </div>
                                    <div class="content">
                                        <h4><a href="blog-detail.html">HOW TO MAXIMISE TIME SPENT AT THE GYM</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">

                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <a href="blog-detail.html" class="overlay-link"></a>
                                <div class="image">
                                    <img src="{{asset('images/resource/news-2.jpg')}}" alt="" />
                                    <div class="post-date">
                                        <span>7</span>SEP
                                    </div>
                                    <div class="content">
                                        <h4><a href="blog-detail.html">SIMPLE CONDITION FOR ALL AROUND FITNESS</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <a href="blog-detail.html" class="overlay-link"></a>
                                <div class="image">
                                    <img src="{{asset('images/resource/news-3.jpg')}}" alt="" />
                                    <div class="post-date">
                                        <span>18</span>SEP
                                    </div>
                                    <div class="content">
                                        <h4><a href="blog-detail.html">10 TIPS HOW TO PREPARE MEALS FAST AND EASY</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <div class="lower-text text-center">
                <a href="blog-detail-two.html" class="view-all">View all</a>
            </div>

        </div>
    </section>
    <!-- End News Section -->
@endsection
