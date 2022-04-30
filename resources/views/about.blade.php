<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Contact</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo2.png') }}" rel="icon">
    <link href="{{ asset('assets/img/logo2.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">


</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-center justify-content-md-between">

            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-phone d-flex align-items-center"><span>+971 56 220 9935</span></i>
                <i class="bi bi-clock d-flex align-items-center ms-4"><span> 11AM - 23PM</span></i>
            </div>

            <div class="languages d-none d-md-flex align-items-center">

                <ul>
                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a rel="alternate" hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>


            </div>
        </div>
    </div>




    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-cente">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0"><a href="{{ route('welcome') }}">{{ __('messages.Baron') }}</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="{{ route('welcome') }}" class="logo me-auto me-lg-0"><img
                    src="{{ asset('assets/img/logo1.png') }}" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active"
                            href="{{ route('welcome') }}">{{ __('messages.home') }}</a></li>
                    <li><a class="nav-link scrollto" href="{{route('get.menu')}}">{{ __('messages.menu') }}</a></li>
                    <li><a class="nav-link scrollto" href="{{route('get.image')}}">{{ __('messages.gallery') }}</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('get.order') }}">{{ __('messages.order') }}</a> </li>
                    <li><a class="nav-link scrollto" href="{{route('get.contact')}}">{{ __('messages.contact') }}</a></li>


                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <a href="{{ route('get.reservation') }}"
                class="book-a-table-btn scrollto d-none d-lg-flex">{{ __('messages.reservation') }}</a>

        </div>
    </header><!-- End Header -->

    <main id="main">
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>ِabout Us</h2>
                    <ol>
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li>ِabout Us</li>
                    </ol>
                </div>

            </div>
        </section>

        <section class="inner-page">
              <!-- ======= About Section ======= -->
        <section id="about1" class="about1">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                        <div class="about-img">
                            <img src="{{asset('assets/img/gallery/back.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h2>{{ __('messages.desc') }}</h2>
                        <p class="fst-italic">
                            {{ __('messages.desc1') }}
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> {{ __('messages.desc2') }}</li>
                            <li><i class="bi bi-check-circle"></i> {{ __('messages.desc3') }}</li>
                            <li><i class="bi bi-check-circle"></i> {{ __('messages.desc4') }}</li>
                        </ul>
                  
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us1" class="why-us1">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>{{ __('messages.why') }}</h2>
                    <p>{{ __('messages.whychoose') }}</p>
                </div>

                <div class="row">

                    <div class="col-lg-3">
                        <div class="box text-center" data-aos="zoom-in" data-aos-delay="100">
                          
                          <h4> <span>{{ __('messages.why4') }}</span> </h4> 
                            <p></p>
                        </div>
                        
                    </div>

                    <div class="col-lg-3 mt-4 mt-lg-0">
                        <div class="box text-center" data-aos="zoom-in" data-aos-delay="200">
                           
                          <h4> <span>{{ __('messages.why1') }}</span> </h4> 
                            <p></p>
                        </div>
                    </div>

                    <div class="col-lg-3 mt-4 mt-lg-0">
                        <div class="box text-center" data-aos="zoom-in" data-aos-delay="300">
                            
                        <h4> <span>{{ __('messages.why2') }}</span> </h4> 
                            <p></p>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-4 mt-lg-0">
                        <div class="box text-center" data-aos="zoom-in" data-aos-delay="300">
                            
                        <h4> <span>{{ __('messages.why3') }}</span> </h4> 
                            <p></p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Why Us Section --><!-- End Contact Section -->
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>In&Out Group</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div class="floating-container">
        <div class="floating-button"><i class="bi bi-translate"></i></div>
        <div class="element-container">

            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                {{-- <a rel="alternate" hreflang="{{ $localeCode }}"
                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a> --}}

                <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"> <span
                        class="float-element tooltip-left">
                        <i class="material-icons"> {{ $properties['native'] }}
                        </i></a>
                </span>
            @endforeach



        </div>
    </div>


    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
