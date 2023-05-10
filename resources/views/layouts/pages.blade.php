<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="{{ asset('assets/images/logo/favico.png')}}" />
    {{-- <title>{{ config('app.name', 'Akisan') }} | Home</title> --}}

    <title>
        @if(empty($title))
        Akisan Tech
        @else
        Akisan Tech :: {{$title}}
        @endif
        </title>
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css')}}" />

      <!-- Font Family CSS -->
      <link rel="stylesheet" href="{{ asset('assets/css/vendor/cerebrisans.css')}}" />
  
      <!-- FontAwesome CSS -->
      <link rel="stylesheet" href="{{ asset('assets/css/vendor/fontawesome-all.min.css')}}" />
  
      <!-- Swiper slider CSS -->
      <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css')}}" />
  
      <!-- animate-text CSS -->
      <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate-text.css')}}" />
  
      <!-- Animate CSS -->
      <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.min.css')}}" />
  
      <!-- Light gallery CSS -->
      <link rel="stylesheet" href="{{ asset('assets/css/plugins/lightgallery.min.css')}}" />

       <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/alert.css')}}" />


</head>

<body>


<div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
@include('inc.pagesNavbar')
   
    @yield('content')
    <!--====================  footer area ====================-->
   @include('inc.footer')
    <!--====================  End of footer area  ====================-->


    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->

    <!--====================  mobile menu overlay ====================-->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <div class="mobile-menu-overlay__inner">
            <div class="mobile-menu-overlay__header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-8">
                            <!-- logo -->
                            <div class="logo">
                                <a href="{{url('/')}}">
                                    <img src="assets/images/logo/logo-dark.png" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-4">
                            <!-- mobile menu content -->
                            <div class="mobile-menu-content text-right">
                                <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-overlay__body">
                <nav class="offcanvas-navigation">
                  <ul>
                    <li >
                      <a href="{{url('/')}}">Home</a>
                    
                    </li>
                    <li class="has-children">
                      <a href="#">Company</a>
                      <ul class="sub-menu">
                        <li>
                          <a href="{{route('about_us')}}"><span>About us</span></a>
                         
                        </li>
                        <li>
                          <a href="{{route('contact_us')}}"><span>Contact us</span></a>
                        </li>
                        <li>
                          <a href="{{route('leadership')}}"><span>Leadership</span></a>
                        </li>
                        <li>
                          <a href="{{route('why_choose_us')}}"><span>Why choose us</span></a>
                        </li>
                       
                      </ul>
                    </li>
                    <li class="has-children">
                      <a href="{{url('comingsoon')}}">IT solutions</a>
                      <ul class="sub-menu">
                        <li>
                          <a href="{{url('comingsoon')}}"><span>Products</span></a>
                        </li>
                        <li>
                          <a href="{{url('comingsoon')}}"
                            ><span>IT Services</span></a
                          >
                       
                        <li>
                          <a href="{{url('comingsoon')}}"
                            ><span>Business solution</span></a
                          >
                        </li>
                       
                      </ul>
                    </li>
                  </ul>
                </nav>
              </div>
        </div>
    </div>
    <!--====================  End of mobile menu overlay  ====================-->


    <!--====================  search overlay ====================-->
    <div class="search-overlay" id="search-overlay">

        <div class="search-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 ml-auto col-4">
                        <!-- search content -->
                        <div class="search-content text-right">
                            <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-overlay__inner">
            <div class="search-overlay__body">
                <div class="search-overlay__form">
                    <form action="#">
                        <input type="text" placeholder="Search">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of search overlay  ====================-->

    <!-- JS
    ============================================ -->
      <!-- Modernizer JS -->
       {{-- <script src="{{ mix('/js/app.js')}}"></script> --}}
       <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>

       <!-- jQuery JS -->
       <script src="{{ asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
   
       <!-- Bootstrap JS -->
       <script src="{{ asset('assets/js/vendor/bootstrap.min.js')}}"></script>
   
       <!-- Swiper Slider JS -->
       <script src="{{ asset('assets/js/plugins/swiper.min.js')}}"></script>
   
       <!-- Light gallery JS -->
       <script src="{{ asset('assets/js/plugins/lightgallery.min.js')}}"></script>
   
       <!-- Waypoints JS -->
       <script src="{{ asset('assets/js/plugins/waypoints.min.js')}}"></script>
   
       <!-- Counter down JS -->
       <script src="{{ asset('assets/js/plugins/countdown.min.js')}}"></script>
   
       <!-- Isotope JS -->
       <script src="{{ asset('assets/js/plugins/isotope.min.js')}}"></script>
   
       <!-- Masonry JS -->
       <script src="{{ asset('assets/js/plugins/masonry.min.js')}}"></script>
   
       <!-- ImagesLoaded JS -->
       <script src="{{ asset('assets/js/plugins/images-loaded.min.js')}}"></script>
   
       <!-- Wavify JS -->
       <script src="{{ asset('assets/js/plugins/wavify.js')}}"></script>
   
       <!-- jQuery Wavify JS -->
       <script src="{{ asset('assets/js/plugins/jquery.wavify.js')}}"></script>
   
       <!-- circle progress JS -->
       <script src="{{ asset('assets/js/plugins/circle-progress.min.js')}}"></script>
   
       <!-- counterup JS -->
       <script src="{{ asset('assets/js/plugins/counterup.min.js')}}"></script>
   
       <!-- wow JS -->
       <script src="{{ asset('assets/js/plugins/wow.min.js')}}"></script>
   
       <!-- animation text JS -->
       <script src="{{ asset('assets/js/plugins/animation-text.min.js')}}"></script>
   
       <!-- Vivus JS -->
       <script src="{{ asset('assets/js/plugins/vivus.min.js')}}"></script>
   
       <!-- Some plugins JS -->
       <script src="{{ asset('assets/js/plugins/some-plugins.js')}}"></script>
   
       <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->
   
       <!--
       <script src="assets/js/plugins/plugins.min.js"></script>
       -->
   
       <!-- Main JS -->
       <script src="{{ asset('assets/js/main.js')}}"></script>


</body>

</html>