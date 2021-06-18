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
                            <div class="text">BLACKFIT – fitness health center where your body gets its shape! <br> Start training now to stay fit and healthy all year round!</div>
                            <div class="btns-box">
                                <div class="theme-btn purchase-box-btn btn-style-one"><span class="txt">LET’S TRAIN</span></div>
                            </div>
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
                            <div class="text">BLACKFIT – fitness health center where your body gets its shape! <br> Start training now to stay fit and healthy all year round!</div>
                            <div class="btns-box">
                                <div class="theme-btn purchase-box-btn btn-style-one"><span class="txt">LET’S TRAIN</span></div>
                            </div>
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
                            <div class="text">BLACKFIT – fitness health center where your body gets its shape! <br> Start training now to stay fit and healthy all year round!</div>
                            <div class="btns-box">
                                <div class="theme-btn purchase-box-btn btn-style-one"><span class="txt">LET’S TRAIN</span></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{--            <div class="slide">
                            <div id="quarta" class="image-layer"></div>
                            <div class="auto-container">
                                <!-- Content Boxed -->
                                <div class="content-boxed">
                                    <div class="inner-boxed">
                                        <h1>KEEP YOUR BODY <span>FIT & STRONG</span></h1>
                                        <div class="text">BLACKFIT – fitness health center where your body gets its shape! <br> Start training now to stay fit and healthy all year round!</div>
                                        <div class="btns-box">
                                            <div class="theme-btn purchase-box-btn btn-style-one"><span class="txt">LET’S TRAIN</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>--}}

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
                        <div class="text">Want to be healthy and have a perfect body? BLACKFIT is the right decision for you! It will create your personal training program and balance your diet so you could get the <br> shape of your dream shortly!</div>
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
                            <img src="{{asset('images/resource/service-1.jpg')}}" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h4><a href="body-builder.html">FITNESS</a></h4>
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
                            <img src="{{asset('images/resource/service-2.jpg')}}" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h4><a href="body-builder.html">BODYBUILDING</a></h4>
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
                            <img src="{{asset('images/resource/service-3.jpg')}}" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h4><a href="body-builder.html">CROSSFIT</a></h4>
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
                            <img src="{{asset('images/resource/service-4.jpg')}}" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h4><a href="body-builder.html">CARDIO</a></h4>
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
                <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. <br> Risus commodo viverra maecenas accumsan lacus vel facilisis</div>
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
                            <a class="overlay-link" href="images/gallery/gallery1.jpg" data-fancybox="images" data-caption=""></a>
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a class="plus" href="images/gallery/gallery1.jpg" data-fancybox="images" data-caption=""></a>
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
                            <a class="overlay-link" href="images/gallery/gallery2.jpg" data-fancybox="images" data-caption=""></a>
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a class="plus" href="images/gallery/gallery2.jpg" data-fancybox="images" data-caption=""></a>
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
                <h2><span>why</span> choose us</h2>
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
                                <div class="counter-title">Training Programs</div>
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
                                <div class="counter-title">Years Experience</div>
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
                                <div class="counter-title">Happy clients</div>
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
    <section class="pricing-section" style="background-image: url(images/background/1.jpg)">
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
                <h2><span>Our</span> Coaches</h2>
                <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br> tempor incididunt ut labore et dolore magna aliqua</div>
            </div>
        </div>

        <div class="four-item-carousel owl-carousel owl-theme">

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

        </div>

    </section>
    <!-- End Coaches Section -->

    <!-- Calculator Section -->
    <section class="calculator-section">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2><span>bmi</span> CALCULATOR</h2>
                <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br> tempor incididunt ut labore et dolore magna aliqua</div>
            </div>

            <div class="inner-container">

                <!-- Default Form -->
                <div class="default-form">

                    <!-- Default Form -->
                    <form method="post" action="contact.html">
                        <div class="row clearfix">

                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <input type="text" name="cm" placeholder="Height / Cm" required>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <input type="text" name="weight" placeholder="Weight / kg" required>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <input type="text" name="age" placeholder="Age" required>
                            </div>

                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                <select class="custom-select-box">
                                    <option>Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                <select class="custom-select-box">
                                    <option>Select an activity factor</option>
                                    <option>Factor 01</option>
                                    <option>Factor 02</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">CALCULATE</span></button>
                            </div>

                        </div>
                    </form>

                    <!--End Default Form -->
                </div>

            </div>

        </div>
    </section>
    <!-- End Calculator Section -->

    <!-- Testimonial Section Two -->
    <section class="testimonial-section-two">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2><span>WHAT OUR</span><br>CLIENTS SAY</h2>
                <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br> tempor incididunt ut labore et dolore magna aliqua</div>
            </div>

            <div class="testimonial-outer">


                <!--Product Thumbs Carousel-->
                <div class="client-thumb-outer">
                    <div class="client-thumbs-carousel owl-carousel owl-theme">
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="{{asset('images/resource/author-1.jpg')}}" alt=""></figure>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="{{asset('images/resource/author-2.jpg')}}" alt=""></figure>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="{{asset('images/resource/author-3.jpg')}}" alt=""></figure>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="{{asset('images/resource/author-4.jpg')}}" alt=""></figure>
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
                            <div class="text">“BLACKFIT’s 90 day challenge put me back in the gym on a consistent basis. I eat clean and listen to the advice of coach on every workout”</div>
                            <div class="author-info">
                                <div class="author-name">Samantha Green</div>
                                <div class="designation">CEO of Company</div>
                            </div>
                        </div>
                    </div>

                    <!--Testimonial Block -->
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <span class="quote-left flaticon-quote-3"></span>
                            <span class="quote-right flaticon-quote-4"></span>
                            <div class="text">“BLACKFIT’s 90 day challenge put me back in the gym on a consistent basis. I eat clean and listen to the advice of coach on every workout”</div>
                            <div class="author-info">
                                <div class="author-name">Samantha Green</div>
                                <div class="designation">CEO of Company</div>
                            </div>
                        </div>
                    </div>

                    <!--Testimonial Block -->
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <span class="quote-left flaticon-quote-3"></span>
                            <span class="quote-right flaticon-quote-4"></span>
                            <div class="text">“BLACKFIT’s 90 day challenge put me back in the gym on a consistent basis. I eat clean and listen to the advice of coach on every workout”</div>
                            <div class="author-info">
                                <div class="author-name">Samantha Green</div>
                                <div class="designation">CEO of Company</div>
                            </div>
                        </div>
                    </div>

                    <!--Testimonial Block -->
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <span class="quote-left flaticon-quote-3"></span>
                            <span class="quote-right flaticon-quote-4"></span>
                            <div class="text">“BLACKFIT’s 90 day challenge put me back in the gym on a consistent basis. I eat clean and listen to the advice of coach on every workout”</div>
                            <div class="author-info">
                                <div class="author-name">Samantha Green</div>
                                <div class="designation">CEO of Company</div>
                            </div>
                        </div>
                    </div>

                    <!--Testimonial Block -->
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <span class="quote-left flaticon-quote-3"></span>
                            <span class="quote-right flaticon-quote-4"></span>
                            <div class="text">“BLACKFIT’s 90 day challenge put me back in the gym on a consistent basis. I eat clean and listen to the advice of coach on every workout”</div>
                            <div class="author-info">
                                <div class="author-name">Samantha Green</div>
                                <div class="designation">CEO of Company</div>
                            </div>
                        </div>
                    </div>

                    <!--Testimonial Block -->
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <span class="quote-left flaticon-quote-3"></span>
                            <span class="quote-right flaticon-quote-4"></span>
                            <div class="text">“BLACKFIT’s 90 day challenge put me back in the gym on a consistent basis. I eat clean and listen to the advice of coach on every workout”</div>
                            <div class="author-info">
                                <div class="author-name">Samantha Green</div>
                                <div class="designation">CEO of Company</div>
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
                <h2><span>LATEST</span><br>BLOG POSTS</h2>
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