<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>BodyLine Cortona</title>
    <!-- Stylesheets -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">

    <!-- Preloder -->
    <div id="preloder" class="preloader">
        <div class="loader"></div>
    </div>
    <!-- Εnd Preloader -->

    <!-- Main Header-->
    <header class="main-header header-style-one">

        <!--Header-Upper-->
        <div class="header-upper">
            <div class="outer-container">
                <div class="inner-container clearfix">

                    <!-- Logo Box -->
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="{{asset('images/logo.png')}}" alt="" title=""></a>
                        </div>
                    </div>

                    <!-- Logo -->
                    <div class="mobile-logo pull-left">
                        <a href="index.html" title=""><img src="{{asset('images/logo-small.png')}}" alt="" title=""></a>
                    </div>

                    <!-- Header Social Box -->
                    <div class="header-social-box clearfix">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                    </div>

                    <div class="outer-box clearfix">

                        <!-- Hidden Nav Toggler -->
                        <div class="nav-toggler">
                            <div class="nav-btn">
                                <button class="hidden-bar-opener">Menu</button>
                            </div>
                        </div>
                        <!-- / Hidden Nav Toggler -->

                    </div>

                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon"><img
                                    src="{{asset('images/icons/burger.svg')}}" alt=""/></span></div>
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="index.html">Home</a></li>
                                    <li class="dropdown"><a href="#">About Us</a>
                                        <ul>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="timetable.html">Programma</a></li>
                                            <li><a href="commingsoon.html">In Arrivo</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Personal Trainers</a>
                                        <ul>
                                            <li><a href="trainer.html">Trainer 01</a></li>
                                            <li><a href="trainer-2.html">Trainer 02</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Shop</a>
                                        <ul>
                                            <li><a href="shop-left.html">Shop Left Sidebar</a></li>
                                            <li><a href="shop-right.html">Shop Right Sidebar</a></li>
                                            <li><a href="shop-single.html">Product Single</a></li>
                                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Our Blog</a></li>
                                            <li><a href="blog-classic.html">Blog Classic</a></li>
                                            <li><a href="blog-detail.html">Blog Detail One</a></li>
                                            <li><a href="blog-detail-two.html">Blog Detail Two</a></li>
                                            <li><a href="not-found.html">Not Found</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contattaci</a></li>
                                    @guest
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                    @else
                                        <li class="dropdown"><a href="#">{{ Auth::user()->name }}</a>
                                            <ul>
                                                <li><a href="{{ route('admin.index') }}">Dashbord</a></li>
                                                <li><a href="#">
                                                        <form method="POST" action="{{ route('logout') }}">
                                                            @csrf

                                                            <x-dropdown-link :href="route('logout')"
                                                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                                {{ __('Log Out') }}
                                                            </x-dropdown-link>
                                                        </form>
                                                    </a></li>
                                            </ul>
                                        </li>

                                    @endguest
                                </ul>
                            </div>
                        </nav>

                    </div>

                </div>

            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" title=""><img src="{{asset('images/logo-small.png')}}" style="height: 60px"
                                                       alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->

                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="{{asset('images/logo-small.png')}}" alt=""
                                                                title=""></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>

        </div>
        <!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

    <!-- FullScreen Menu -->
    <div class="fullscreen-menu">
        <!--Close Btn-->
        <div class="close-menu"><span>Chiudi</span></div>

        <div class="menu-outer-container">
            <div class="menu-box">
                <nav class="full-menu">
                    <ul class="navigation">
                        <li><a href="index.html">Home</a></li>
                        <li class="dropdown"><a href="#">About Us</a>
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="timetable.html">Programma</a></li>
                                <li><a href="commingsoon.html">In Arrivo</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Personal Trainers</a>
                            <ul>
                                <li><a href="trainer.html">Trainer 01</a></li>
                                <li><a href="trainer-2.html">Trainer 02</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Shop</a>
                            <ul>
                                <li><a href="shop-left.html">Shop Left Sidebar</a></li>
                                <li><a href="shop-right.html">Shop Right Sidebar</a></li>
                                <li><a href="shop-single.html">Product Single</a></li>
                                <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Blog</a>
                            <ul>
                                <li><a href="blog.html">Our Blog</a></li>
                                <li><a href="blog-classic.html">Blog Classic</a></li>
                                <li><a href="blog-detail.html">Blog Detail One</a></li>
                                <li><a href="blog-detail-two.html">Blog Detail Two</a></li>
                                <li><a href="not-found.html">Not Found</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contattaci</a></li>
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @else
                            <li>
                                <a href="">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </a>

                            </li>

                        @endguest
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- End FullScreen Menu -->

@yield('main')


<!-- Main Footer -->
    <footer id="infondo" class="main-footer">
        <div class="auto-container">
            <!-- Widgets Section -->
            <div class="widgets-section">
                <div class="row clearfix">

                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
                                    <div class="logo">
                                        <a href="index.html"><img src="{{asset('images/footer-logo.svg')}}" alt=""/></a>
                                    </div>
                                    <!-- Footer Mobile Logo -->
                                    <div class="footer-mobile-logo">
                                        <a href="index.html"><img src="{{asset('images/logo.svg')}}" alt=""
                                                                  title=""></a>
                                    </div>
                                    <ul class="info-list">
                                        <li><span>Address:</span>4578 Marmora Road, Glasgow</li>
                                        <li><span>Phones:</span>
                                            <a href="tel:1-123-456-78-89">+1-123-456-78-89</a><br>
                                            <a href="tel:1-123-456-78-80">+1-123-456-78-80</a>
                                        </li>
                                        <li><span>Working Hours:</span>Monday-Sunday: 07:00 - 22:00</li>
                                        <li><span>Email:</span><a href="mailto:info@bigbear.com">info@bigbear.com</a>
                                        </li>
                                        <li class="social-links"><span>Our Socials:</span>
                                            <a href="#" class="fa fa-facebook"></a>
                                            <a href="#" class="fa fa-twitter"></a>
                                            <a href="#" class="fa fa-instagram"></a>
                                            <a href="#" class="fa fa-linkedin"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget news-widget">
                                    <h6>BLOG POSTS</h6>
                                    <div class="widget-content">

                                        <div class="post">
                                            <div class="thumb"><a href="blog-detail.html"><img
                                                        src="{{asset('images/resource/post-thumb-1.jpg')}}" alt=""></a>
                                            </div>
                                            <h5><a href="blog-detail.html">HOW TO MAXIMISE TIME SPENT AT THE GYM</a>
                                            </h5>
                                            <span class="date">JUNE 21, 2020</span>
                                        </div>

                                        <div class="post">
                                            <div class="thumb"><a href="blog-detail.html"><img
                                                        src="{{asset('images/resource/post-thumb-2.jpg')}}" alt=""></a>
                                            </div>
                                            <h5><a href="blog-detail.html">10 TIPS HOW TO PREPARE MEALS FAST AND
                                                    EASY</a></h5>
                                            <span class="date">JUNE 21, 2020</span>
                                        </div>

                                        <div class="post">
                                            <div class="thumb"><a href="blog-detail.html"><img
                                                        src="{{asset('images/resource/post-thumb-3.jpg')}}" alt=""></a>
                                            </div>
                                            <h5><a href="blog-detail.html">SIMPLE CONDITION FOR ALL AROUND FITNESS</a>
                                            </h5>
                                            <span class="date">JUNE 21, 2020</span>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget gallery-widget">
                                    <h6>Instagram</h6>
                                    <div class="widget-content">

                                        <div class="images-outer clearfix">
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="{{asset('images/gallery/1.jpg')}}"
                                                                         class="lightbox-image"
                                                                         data-fancybox="footer-gallery"
                                                                         title="Image Title Here"
                                                                         data-fancybox-group="footer-gallery"><img
                                                        src="{{asset('images/gallery/footer-gallery-thumb-1.jpg')}}"
                                                        alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="{{asset('images/gallery/2.jpg')}}"
                                                                         class="lightbox-image"
                                                                         data-fancybox="footer-gallery"
                                                                         title="Image Title Here"
                                                                         data-fancybox-group="footer-gallery"><img
                                                        src="{{asset('images/gallery/footer-gallery-thumb-2.jpg')}}"
                                                        alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="{{asset('images/gallery/3.jpg')}}"
                                                                         class="lightbox-image"
                                                                         data-fancybox="footer-gallery"
                                                                         title="Image Title Here"
                                                                         data-fancybox-group="footer-gallery"><img
                                                        src="{{asset('images/gallery/footer-gallery-thumb-3.jpg')}}"
                                                        alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="{{asset('images/gallery/4.jpg')}}"
                                                                         class="lightbox-image"
                                                                         data-fancybox="footer-gallery"
                                                                         title="Image Title Here"
                                                                         data-fancybox-group="footer-gallery"><img
                                                        src="{{asset('images/gallery/footer-gallery-thumb-4.jpg')}}"
                                                        alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="{{asset('images/gallery/5.jpg')}}"
                                                                         class="lightbox-image"
                                                                         data-fancybox="footer-gallery"
                                                                         title="Image Title Here"
                                                                         data-fancybox-group="footer-gallery"><img
                                                        src="{{asset('images/gallery/footer-gallery-thumb-5.jpg')}}"
                                                        alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="{{asset('images/gallery/6.jpg')}}"
                                                                         class="lightbox-image"
                                                                         data-fancybox="footer-gallery"
                                                                         title="Image Title Here"
                                                                         data-fancybox-group="footer-gallery"><img
                                                        src="{{asset('images/gallery/footer-gallery-thumb-6.jpg')}}"
                                                        alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="{{asset('images/gallery/7.jpg')}}"
                                                                         class="lightbox-image"
                                                                         data-fancybox="footer-gallery"
                                                                         title="Image Title Here"
                                                                         data-fancybox-group="footer-gallery"><img
                                                        src="{{asset('images/gallery/footer-gallery-thumb-7.jpg')}}"
                                                        alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="{{asset('images/gallery/8.jpg')}}"
                                                                         class="lightbox-image"
                                                                         data-fancybox="footer-gallery"
                                                                         title="Image Title Here"
                                                                         data-fancybox-group="footer-gallery"><img
                                                        src="{{asset('images/gallery/footer-gallery-thumb-8.jpg')}}"
                                                        alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="{{asset('images/gallery/9.jpg')}}"
                                                                         class="lightbox-image"
                                                                         data-fancybox="footer-gallery"
                                                                         title="Image Title Here"
                                                                         data-fancybox-group="footer-gallery"><img
                                                        src="{{asset('images/gallery/footer-gallery-thumb-9.jpg')}}"
                                                        alt=""></a></figure>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget newsletter-widget">
                                    <h6>Newsletter</h6>
                                    <div class="text">BLACKFIT – fitness health center where your body gets its shape!
                                        Start training now to stay fit and healthy all year round!
                                    </div>
                                    <!-- Newsletter Form -->
                                    <div class="newsletter-form">
                                        <form method="post" action="contact.html">
                                            <div class="form-group">
                                                <input type="email" name="email" value="" placeholder="Email"
                                                       required="">
                                                <button type="submit" class="theme-btn submit-btn"><span><img
                                                            src="{{asset('images/icons/message-icon.png')}}"
                                                            alt=""/></span></button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="copyright">DESIGN BY KADIROV. 2020</div>
            </div>

        </div>
    </footer>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!-- Purchase Popup -->
<div id="purchase-popup" class="purchase-popup">
    <div class="close-search theme-btn"><span>Close</span></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>

        <div class="purchase-form">
            <div class="sec-title centered">
                <h2><span>GET FREE</span> CONSULTATION</h2>
                <div class="text">If you need of a Personal Trainer, Fitness Instructor advice, or a healthy <br> living
                    product review, please feel free to contact us
                </div>
            </div>

            <!-- Default Form -->
            <form method="post" action="contact.html">
                <div class="row clearfix">

                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="text" name="name" placeholder="Name" required>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <input type="text" name="subject" placeholder="Subject" required>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <textarea class="darma" name="message" placeholder="Your Message"></textarea>
                    </div>

                    <div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
                        <span class="data">* Personal data will be encrypted</span>
                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">SEND MESSAGE</span>
                        </button>
                    </div>

                </div>
            </form>


        </div>

    </div>
</div>

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.js')}}"></script>
<script src="{{asset('js/appear.js')}}"></script>
<script src="{{asset('js/owl.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>

</body>
</html>
