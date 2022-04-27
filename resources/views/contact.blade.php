<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">


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

      <h1 class="logo me-auto me-lg-0"><a  href="{{route('welcome')}}">{{ __('messages.Baron') }}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
     <a href="{{route('welcome')}}" class="logo me-auto me-lg-0"><img src="{{asset('assets/img/logo1.png')}}" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
              <li><a class="nav-link scrollto active" href="{{route('welcome')}}">{{ __('messages.home') }}</a></li>
              <li><a class="nav-link scrollto" href="{{route('get.menu')}}">{{ __('messages.menu') }}</a></li>
              <li><a class="nav-link scrollto" href="{{route('get.image')}}">{{ __('messages.gallery') }}</a></li>
              <li><a class="nav-link scrollto" href="{{route('get.contact')}}">{{ __('messages.contact') }}</a></li>
             

          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="{{route('get.reservation')}}"
          class="book-a-table-btn scrollto d-none d-lg-flex">{{ __('messages.reservation') }}</a>

  </div>
</header><!-- End Header -->

  <main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="{{route('welcome')}}">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section>

    <section class="inner-page">
      <section id="contact" class="contact1">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>{{ __('messages.Contact') }}</h2>
                <p>{{ __('messages.ContactUs') }}</p>
            </div>
        </div>

        <div class="container" data-aos="fade-up">

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>{{ __('messages.Location') }}</h4>
                            <p>Business Bay - Dubai - United Arab Emirates</p>
                        </div>

                        <div class="open-hours">
                            <i class="bi bi-clock"></i>
                            <h4>{{ __('messages.openhours') }} :</h4>
                            <p>

                              Monday : 9AM–3AM<br>
                              Tuesday: 9AM–3AM<br>
                              Wednesday: 9AM–2AM<br>
                              Thursday : 9AM–5AM<br>
                              Friday: 9AM–1AM<br>
                              Saturday : 9AM–2AM<br>
                              Sunday : 9AM–1AM<br>
                            </p>
                            {{-- <p>

                              {{ __('messages.Monday') }}  9AM–3AM<br>
                              {{ __('messages.Tuesday') }} 9AM–3AM<br>
                              {{ __('messages.Wednesday') }} 9AM–2AM<br>
                              {{ __('messages.Thursday') }}  9AM–5AM<br>
                              {{ __('messages.Friday') }} 9AM–1AM<br>
                              {{ __('messages.Saturday') }}  9AM–2AM<br>
                              {{ __('messages.Sunday') }}  9AM–1AM<br>
                            </p> --}}
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>{{ __('messages.Email') }}</h4>
                            <p>info@example.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>{{ __('messages.Call') }}</h4>
                            <p>+971 56 220 9935</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <iframe style="border:0; width: 100%; height: 350px; border-radius: 20px; "
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14441.836022567655!2d55.28276849659581!3d25.187738761026047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f683b951ab2ed%3A0x1f8bcf090f4d8b98!2sBaron%20Gourmet!5e0!3m2!1sen!2s!4v1647853827555!5m2!1sen!2s"
                        frameborder="0" allowfullscreen></iframe>


                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
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

                        <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" > <span class="float-element tooltip-left">
                            <i class="material-icons">            {{ $properties['native'] }}
                            </i></a>
                          </span>
                    
                @endforeach
              
               
                   
                </div>
            </div>


  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>