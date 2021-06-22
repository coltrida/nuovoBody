@extends('layouts.stile')

@section('main')

    <!--Page Title-->
    <section id="about" class="page-title">
        <div class="auto-container">
            <h2>CHI SIAMO</h2>
            <ul class="page-breadcrumb">
                <li><a href="{{route('inizio')}}">home</a></li>
                <li>Chi Siamo</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="auto-container">
            <div class="inner-container">
                <span class="quote-left flaticon-quote-3"></span>
                <span class="quote-right flaticon-quote-4"></span>
                <div class="single-item-carousel owl-carousel owl-theme">

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text">
                                Vuoi essere in forma ed esprire il tuo potenziale? BODYLINE CORTONA è la giusta scelta per te! Creiamo il tuo specifico programma di allenamento, indicazioni alimentari, stile di vita, ecc... in questo modo potrai raggiungere
                                <br> la forma dei tuoi desideri!
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="about-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
                <p>Odipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
            </div>

        </div>
    </section>
    <!-- End Testimonial Section -->

    <div class="container mb-5">
        @include('partials.gallery')
    </div>


@endsection
