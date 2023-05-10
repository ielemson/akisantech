    <!--====================  header area ====================-->
    <div class="header-area header-area--default">

        <!-- Header Top Wrap Start -->
        {{-- <div class="header-top-wrap border-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="text-center top-message"><a href="#">Now Hiring:</a> Are you a driven and motivated 1st Line IT Support Engineer?</p>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Header Top Wrap End -->

        <!-- Header Bottom Wrap Start -->
        <div class="header-bottom-wrap header-sticky">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header default-menu-style position-relative">

                            <!-- brand logo -->
                            <div class="header__logo">
                            <a href="{{ url('/')}}">
                                    <img src="{{asset('assets/images/logo/logo-dark.png')}}" class="img-fluid" alt="">
                                </a>
                            </div>

                            <!-- header midle box  -->
                            <div class="header-midle-box">
                                <div class="header-bottom-wrap d-md-block d-none">
                                    <div class="header-bottom-inner">
                                        <div class="header-bottom-left-wrap">
                                            <!-- navigation menu -->
                                            <div class="header__navigation d-none d-xl-block">
                                                <nav class="navigation-menu primary--menu">
                                                    <ul>
                                                        <li>
                                                        <a href="{{ url('/')}}"><span>Home</span></a>
                                                           
                                                        </li>
                                                        <li class="has-children has-children--multilevel-submenu">
                                                            <a href="#"><span>Company</span></a>
                                                            <ul class="submenu">
                                                                <li><a href="{{route('leadership')}}"><span>Leadership</span></a></li>
                                                                <li><a href="{{route('why_choose_us')}}"><span>Why choose us</span></a></li>
                                                               
                                                            </ul>
                                                        </li>
                                                        <li class="has-children has-children--multilevel-submenu">
                                                            <a href="#"><span>IT solutions</span></a>
                                                            <ul class="submenu">
                                                                <li><a href="{{url('comingsoon')}}"><span>Products</span></a></li>
                                                                <li><a href="{{url('comingsoon')}}"><span>IT Services</span></a></li>
                                                                <li><a href="{{url('comingsoon')}}"><span>Business solution</span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li >
                                                        <a href="{{ url('contact-us')}}"><span>Contact Us</span></a>
                                                            <!-- mega menu -->
                                                          
                                                        </li>
                                                        <li >
                                                        <a href="{{ url('about-us')}}"><span>About Us</span></a>
                                                           
                                                        </li>
                                                        
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- header right box -->
                            <div class="header-right-box">
                                <div class="header-right-inner" id="hidden-icon-wrapper">

                                    <!-- language-menu -->
                                    <div class="language-menu">
                                        <ul>
                                            <li>
                                                <a href="#" class="">
                                                    <img class="ls-flag" src="assets/images/flags/en.png" alt="en" title="English">
                                                    <span class="wpml-ls-native">English</span>
                                                </a>

                                                <ul class="ls-sub-menu">
                                                    <li class="">
                                                        <a href="#" class="">
                                                            <img class="ls-flag" src="assets/images/flags/fr.png" alt="en" title="Français"><span class="wpml-ls-native">Français</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="">
                                                            <img class="wpml-ls-flag" src="assets/images/flags/de.png" alt="de" title="Deutsch"><span class="wpml-ls-native">Deutsch</span>
                                                        </a>
                                                    </li>

                                                </ul>

                                            </li>

                                        </ul>
                                    </div>

                                    <!-- header-search-form -->
                                    <div class="header-search-form default-search">
                                        <form action="#" class="search-form-top">
                                            <input class="search-field" type="text" placeholder="Search…">
                                            <button class="search-submit">
                                                <i class="search-btn-icon fa fa-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>

                                <!-- mobile menu -->
                                <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                                    <i></i>
                                </div>
                                <!-- hidden icons menu -->
                                <div class="hidden-icons-menu d-block d-md-none" id="hidden-icon-trigger">
                                    <a href="javascript:void(0)">
                                        <i class="far fa-ellipsis-h-alt"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Bottom Wrap End -->

    </div>
    <!--====================  End of header area  ====================-->







    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">{{$title ?? ''}}</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active">{{$title ?? ''}}</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->




