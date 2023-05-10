@extends('layouts.app')

@section('content')
    <div class="site-wrapper-reveal">
        <!--============ Appointment Hero Start ============-->
        <div class="appointment-hero-wrapper appointment-hero-bg section-space--ptb_120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="appointment-hero-wrap wow move-up">
                            <div class="appointment-hero-text">
                                <h6>Secure & IT Services</h6>
                                <h1 class="font-weight--reguler  mb-30">
                                    Excellent IT services for
                                    <span class="text-line">your success</span>
                                </h1>
                                <div class="hero-button">
                                    <div class="video-popup infotech-video-box">
                                        <a href="{{ url('comingsoon') }}" class="single-popup-wrap video-link">
                                            <div class="video-content">
                                                <div class="ht-popup-video video-button">
                                                    <div class="video-mark">
                                                        <div class="wave-pulse wave-pulse-1"></div>
                                                        <div class="wave-pulse wave-pulse-2"></div>
                                                    </div>
                                                    <div class="video-button__two">
                                                        <div class="video-play">
                                                            <span class="video-play-icon"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="video-text">How we work</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 mr-auto ml-auto col-md-6">
                        <div class="business-solution-form-wrap mr-auto ml-auto">
                            <div class="contact-title text-center section-space--mb_40">
                                <h5 class="mb-10">Book appointment</h5>
                                <p class="text">
                                    It's our pleasure to have a chance to cooperate.
                                </p>
                            </div>
                            <!-- Success message -->
                            @if (Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('appointment.store') }}">
                                @csrf
                                <div class="contact-form__two">
                                    <div class="contact-inner">
                                        <input type="text" placeholder="Name *" name="name" id="name" required />
                                        @if ($errors->has('name'))
                                            <div class="error">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="contact-inner">
                                        <input type="email" placeholder="Email *" name="email" id="email"
                                            required />
                                        @if ($errors->has('email'))
                                            <div class="error">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="contact-select">
                                        <div class="form-item contact-inner">
                                            <span class="inquiry">
                                                <select class="select-item" name="inquiry" id="inquiry" required>
                                                    <option value="">
                                                        Your inquiry about
                                                    </option>
                                                    <option value="General Information Request">
                                                        General Information Request
                                                    </option>
                                                    <option value="Partner Relations">
                                                        Partner Relations
                                                    </option>
                                                    <option value="Careers">Careers</option>
                                                    <option value="Software Licencing">
                                                        Software Licencing
                                                    </option>
                                                </select>
                                            </span>
                                            @if ($errors->has('inquiry'))
                                                <div class="error">
                                                    {{ $errors->first('inquiry') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="comment-submit-btn text-center">
                                        <button class="ht-btn ht-btn-md" type="submit">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============ Appointment Hero End ============-->
        <!--===========  feature-icon-wrapper  Start =============-->
        <div class="feature-icon-wrapper section-space--ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center section-space--mb_40">
                            <h6 class="section-sub-title mb-20">Industries we Serve</h6>
                            <h3 class="heading">
                                Services We Deliver<br />
                                we provide
                                <span class="text-color-primary">
                                    truly prominent IT solutions.</span>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="feature-list__two">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <div class="ht-box-icon style-02 single-svg-icon-box">
                                        <div class="icon-box-wrap">
                                            <div class="icon">
                                                <div class="svg-icon" id="svg-1"
                                                    data-svg-icon="assets/images/svg/linea-basic-heart.svg"></div>
                                            </div>
                                            <div class="content">
                                                <h5 class="heading">IT Design</h5>
                                                <div class="text">
                                                    We provide the most responsive and functional IT
                                                    design for companies and businesses worldwide.
                                                </div>
                                                <div class="feature-btn">
                                                    <a href="#">
                                                        <span class="button-text">Discover now</span>
                                                        <i class="far fa-long-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <div class="ht-box-icon style-02 single-svg-icon-box">
                                        <div class="icon-box-wrap">
                                            <div class="icon">
                                                <div class="svg-icon" id="svg-2"
                                                    data-svg-icon="assets/images/svg/linea-basic-case.svg"></div>
                                            </div>
                                            <div class="content">
                                                <h5 class="heading">IT Management</h5>
                                                <div class="text">
                                                    It’s possible to simultaneously manage and transform
                                                    information from one server to another.
                                                </div>
                                                <div class="feature-btn">
                                                    <a href="#">
                                                        <span class="button-text">Discover now</span>
                                                        <i class="far fa-long-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <div class="ht-box-icon style-02 single-svg-icon-box">
                                        <!-- ht-box-icon Start -->
                                        <div class="icon-box-wrap">
                                            <div class="icon">
                                                <div class="svg-icon" id="svg-3"
                                                    data-svg-icon="assets/images/svg/linea-basic-alarm.svg"></div>
                                            </div>
                                            <div class="content">
                                                <h5 class="heading">Data Security</h5>
                                                <div class="text">
                                                    We provide the most responsive and functional IT
                                                    design for companies and businesses worldwide.
                                                </div>
                                                <div class="feature-btn">
                                                    <a href="#">
                                                        <span class="button-text">Discover now</span>
                                                        <i class="far fa-long-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <div class="ht-box-icon style-02 single-svg-icon-box">
                                        <!-- ht-box-icon Start -->
                                        <div class="icon-box-wrap">
                                            <div class="icon">
                                                <div class="svg-icon" id="svg-4"
                                                    data-svg-icon="assets/images/svg/linea-basic-geolocalize-05.svg"></div>
                                            </div>
                                            <div class="content">
                                                <h5 class="heading">Business Reform</h5>
                                                <div class="text">
                                                    We provide the most responsive and functional IT
                                                    design for companies and businesses worldwide.
                                                </div>
                                                <div class="feature-btn">
                                                    <a href="#">
                                                        <span class="button-text">Discover now</span>
                                                        <i class="far fa-long-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <div class="ht-box-icon style-02 single-svg-icon-box">
                                        <!-- ht-box-icon Start -->
                                        <div class="icon-box-wrap">
                                            <div class="icon">
                                                <div class="svg-icon" id="svg-5"
                                                    data-svg-icon="assets/images/svg/linea-ecommerce-money.svg"></div>
                                            </div>
                                            <div class="content">
                                                <h5 class="heading">Infrastructure Plan</h5>
                                                <div class="text">
                                                    We provide the most responsive and functional IT
                                                    design for companies and businesses worldwide.
                                                </div>
                                                <div class="feature-btn">
                                                    <a href="#">
                                                        <span class="button-text">Discover now</span>
                                                        <i class="far fa-long-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <div class="ht-box-icon style-02 single-svg-icon-box">
                                        <!-- ht-box-icon Start -->
                                        <div class="icon-box-wrap">
                                            <div class="icon">
                                                <div class="svg-icon" id="svg-6"
                                                    data-svg-icon="assets/images/svg/linea-basic-spread-text-bookmark.svg">
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h5 class="heading">Firewall Advance</h5>
                                                <div class="text">
                                                    We provide the most responsive and functional IT
                                                    design for companies and businesses worldwide.
                                                </div>
                                                <div class="feature-btn">
                                                    <a href="#">
                                                        <span class="button-text">Discover now</span>
                                                        <i class="far fa-long-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="feature-list-button-box mt-30 text-center">
                            <a href="#" class="ht-btn ht-btn-md">Talk to a consultant</a>
                            <a href="{{ url('contact-us') }}" class="ht-btn ht-btn-md ht-btn--outline">Contact us now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===========  feature-icon-wrapper  End =============-->
        <!--======== Tabs Wrapper Start ======== -->
        <div class="tabs-wrapper bg-gray section-space--ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrapper text-center section-space--mb_60 wow move-up">
                            <h6 class="section-sub-title mb-20">discover our company</h6>
                            <h3 class="section-title">
                                We’ve been thriving in<span class="text-color-primary">
                                    1 year</span>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 ht-tab-wrap">
                        <div class="text-center">
                            <ul class="nav justify-content-center ht-tab-menu ht-tab-menu_two" role="tablist">
                                <li class="tab__item nav-item active">
                                    <a class="nav-link active" id="nav-tab1" data-toggle="tab" href="#tab_list_06"
                                        role="tab" aria-selected="true">Our mission</a>
                                </li>
                                <li class="tab__item nav-item">
                                    <a class="nav-link" id="nav-tab2" data-toggle="tab" href="#tab_list_07"
                                        role="tab" aria-selected="false">Our services</a>
                                </li>
                                <li class="tab__item nav-item">
                                    <a class="nav-link" id="nav-tab3" data-toggle="tab" href="#tab_list_08"
                                        role="tab" aria-selected="false">Technology partners</a>
                                </li>
                                <li class="tab__item nav-item">
                                    <a class="nav-link" id="nav-tab5" data-toggle="tab" href="#tab_list_09"
                                        role="tab" aria-selected="false">Our awards</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content ht-tab__content">
                            <div class="tab-pane fade show active" id="tab_list_06" role="tabpanel">
                                <div class="tab-history-wrap section-space--mt_40">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="tab-history-image video-popup mt-30">
                                                <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link">
                                                    <div class="single-popup-wrap">
                                                        <img class="img-fluid" src="assets/images/bg/team-work.png"
                                                            alt="" />
                                                        <div class="ht-popup-video video-button">
                                                            <div class="video-mark">
                                                                <div class="wave-pulse wave-pulse-1"></div>
                                                                <div class="wave-pulse wave-pulse-2"></div>
                                                            </div>
                                                            <div class="video-button__two">
                                                                <div class="video-play">
                                                                    <span class="video-play-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 offset-lg-1">
                                            <div class="tab-content-inner mt-30">
                                                <div class="text mb-30">
                                                    We’re available for 8 hours a day! <br />Contact to
                                                    require a detailed analysis and assessment of your
                                                    plan.
                                                </div>
                                                <ul class="check-list section-space--mb_40">
                                                    <li class="list-item">IT Consultancy</li>
                                                    <li class="list-item">IT Design</li>
                                                    <li class="list-item">Desktop Computing</li>
                                                    <li class="list-item">Software Engineering</li>
                                                </ul>

                                                <div class="tab-button">
                                                    <a class="btn-text" href="{{ url('contact-us') }}">
                                                        <span class="button-text">Let's get started
                                                            <i class="far fa-long-arrow-right"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab_list_07" role="tabpanel">
                                <div class="tab-history-wrap section-space--mt_60">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <!-- ht-box-icon Start -->
                                            <a href="#" class="ht-large-box-images style-04">
                                                <div class="large-image-box">
                                                    <div class="box-image">
                                                        <div class="default-image">
                                                            <img class="img-fluid"
                                                                src="assets/images/box-image/quality.png"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="heading">Quality Assurance System</h5>
                                                        <div class="text">
                                                            At Akisan Tech&#174;, we have a holistic and
                                                            integrated approach towards core modernization
                                                            to experience technological evolution.
                                                        </div>
                                                        <div class="box-images-arrow">
                                                            <span class="button-text">Discover now</span>
                                                            <i class="far fa-long-arrow-right"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- ht-box-icon End -->
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <!-- ht-box-icon Start -->
                                            <a href="#" class="ht-large-box-images style-04">
                                                <div class="large-image-box">
                                                    <div class="box-image">
                                                        <div class="default-image">
                                                            <img class="img-fluid"
                                                                src="assets/images/box-image/professional.jpg"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="heading">
                                                            Highly Professional Staffs
                                                        </h5>
                                                        <div class="text">
                                                            Having obtained the official & formal training
                                                            in IT technology and technical fields, our
                                                            staffs know best.
                                                        </div>
                                                        <div class="box-images-arrow">
                                                            <span class="button-text">Discover now</span>
                                                            <i class="far fa-long-arrow-right"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- ht-box-icon End -->
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <!-- ht-box-icon Start -->
                                            <a href="#" class="ht-large-box-images style-04">
                                                <div class="large-image-box">
                                                    <div class="box-image">
                                                        <div class="default-image">
                                                            <img class="img-fluid"
                                                                src="assets/images/box-image/excellence.png"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="heading">Info Security Management</h5>
                                                        <div class="text">
                                                            At Akisan Tech&#174;, we have a holistic and
                                                            integrated approach towards core modernization
                                                            to experience technological evolution.
                                                        </div>
                                                        <div class="box-images-arrow">
                                                            <span class="button-text">Discover now</span>
                                                            <i class="far fa-long-arrow-right"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- ht-box-icon End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--======== Tabs Wrapper End ======== -->

        <!-- ============ Team Member Wrapper Start =============== -->
        <div class="team-member-wrapper section-space--pt_100 section-space--pb_40">
            <!-- <div class="container">
    <div class="row">
    <div class="col-lg-4">
    <div class="section-title section-space--mb_60">
    <h3 class="heading">
    Our
    <span class="text-color-primary">experience </span> experts
    </h3>
    <p class="text mt-30">
    Akisan Tech&#174; specializes in technological and IT-related
    services such as product engineering, warranty management,
    building cloud, infrastructure, network, etc.
    </p>

    <div class="sider-title-button-box mt-30">
    <a href="#" class="ht-btn ht-btn-md">Join us now</a>
    <a href="#" class="btn-text font-weight--bold small-mt__20"
    >View all team
    <i class="ml-1 button-icon far fa-long-arrow-right"></i
    ></a>
    </div>
    </div>
    </div>
    <div class="col-lg-8 ht-team-member-style-one">
    <div class="row">
    <div class="col-lg-6 col-md-6 wow move-up">
    <div class="grid-item">
    <div class="ht-team-member">
    <div class="team-image">
    <img
    class="img-fluid"
    src="assets/images/team/team-member-01-370x250.jpg"
    alt=""
    />
    <div class="social-networks">
    <div class="inner">
    <a
    target="_blank"
    href="#"
    class="hint--bounce hint--top hint--theme-two"
    aria-label="Facebook"
    ><i class="fab fa-facebook"></i>
    </a>
    <a
    target="_blank"
    href="#"
    class="hint--bounce hint--top hint--theme-two"
    aria-label="Twitter"
    ><i class="fab fa-twitter"></i>
    </a>
    <a
    target="_blank"
    href="#"
    class="hint--bounce hint--top hint--theme-two"
    aria-label="Instagram"
    ><i class="fab fa-instagram"></i>
    </a>
    </div>
    </div>
    </div>
    <div class="team-info">
    <h5 class="name">Dollie Horton</h5>
    <div class="position">Marketing</div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 wow move-up">
    <div class="grid-item">
    <div class="ht-team-member">
    <div class="team-image">
    <img
    class="img-fluid"
    src="assets/images/team/team-member-07-370x250.jpg"
    alt=""
    />
    <div class="social-networks">
    <div class="inner">
    <a
    target="_blank"
    href="#"
    class="hint--bounce hint--top hint--theme-two"
    aria-label="Facebook"
    ><i class="fab fa-facebook"></i>
    </a>
    <a
    target="_blank"
    href="#"
    class="hint--bounce hint--top hint--theme-two"
    aria-label="Twitter"
    ><i class="fab fa-twitter"></i>
    </a>
    <a
    target="_blank"
    href="#"
    class="hint--bounce hint--top hint--theme-two"
    aria-label="Instagram"
    ><i class="fab fa-instagram"></i>
    </a>
    </div>
    </div>
    </div>
    <div class="team-info">
    <h5 class="name">Stephen Mearsley</h5>
    <div class="position">President & CEO</div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 wow move-up">
    <div class="grid-item">
    <div class="ht-team-member">
    <div class="team-image">
    <img
    class="img-fluid"
    src="assets/images/team/team-member-04-370x250.jpg"
    alt=""
    />
    <div class="social-networks">
    <div class="inner">
    <a
    target="_blank"
    href="#"
    class="hint--bounce hint--top hint--theme-two"
    aria-label="Facebook"
    ><i class="fab fa-facebook"></i>
    </a>
    <a
    target="_blank"
    href="#"
    class="hint--bounce hint--top hint--theme-two"
    aria-label="Twitter"
    ><i class="fab fa-twitter"></i>
    </a>
    <a
    target="_blank"
    href="#"
    class="hint--bounce hint--top hint--theme-two"
    aria-label="Instagram"
    ><i class="fab fa-instagram"></i>
    </a>
    </div>
    </div>
    </div>
    <div class="team-info">
    <h5 class="name">Maggie Strickland</h5>
    <div class="position">Financial Services</div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 wow move-up">
    <div class="grid-item">
    <div class="ht-team-member">
    <div class="team-image">
    <img
    class="img-fluid"
    src="assets/images/team/team-member-02-370x250.jpg"
    alt=""
    />
    <div class="social-networks">
    <div class="inner">
    <a
    target="_blank"
    href="#"
    class="hint--bounce hint--top hint--theme-two"
    aria-label="Facebook"
    ><i class="fab fa-facebook"></i>
    </a>
    <a
    target="_blank"
    href="#"
    class="hint--bounce hint--top hint--theme-two"
    aria-label="Twitter"
    ><i class="fab fa-twitter"></i>
    </a>
    <a
    target="_blank"
    href="#"
    class="hint--bounce hint--top hint--theme-two"
    aria-label="Instagram"
    ><i class="fab fa-instagram"></i>
    </a>
    </div>
    </div>
    </div>
    <div class="team-info">
    <h5 class="name">Monica Blews</h5>
    <div class="position">Project manager</div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div> -->
            <!-- ============ Team Member Wrapper End =============== -->

            <!--========== Call to Action Area Start ============-->
            <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_two">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-7">
                            <div class="cta-content md-text-center">
                                <h3 class="heading">
                                    We run all kinds of IT services that wow your
                                    <span class="text-color-primary"> success</span>
                                </h3>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="cta-button-group--two text-center">
                                <a href="#" class="btn btn--white btn-one"><span class="btn-icon mr-2"><i
                                            class="far fa-comment-alt-dots"></i></span>
                                    Let's talk</a>
                                <a href="{{ url('contact-us') }}" class="btn btn--secondary btn-two"><span
                                        class="btn-icon mr-2"><i class="far fa-info-circle"></i></span>
                                    Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--========== Call to Action Area End ============-->

            <!--===========  Projects wrapper Start =============-->

            <!--===========  Projects wrapper End =============-->

            <!--====================  testimonial section ====================-->

            <!--====================  End of testimonial section  ====================-->

            <!--=========== fun fact Wrapper Start ==========-->

            <!--=========== fun fact Wrapper End ==========-->
            <!--============ Contact Us Area Start =================-->
            <div class="contact-us-area appointment-contact-bg section-space--ptb_100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-title section-space--mb_50">
                                <h3 class="mb-20">Need a hand?</h3>
                                <p class="sub-title">
                                    Reach out to the world’s most reliable IT services.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-6 col-lg-6">
                            <div class="conact-us-wrap-one">
                                <h3 class="heading">Get further information by <span
                                        class="text-color-primary">contacting</span>our experienced IT staff. </h3>

                                <div class="sub-heading">We’re available for 8 hours a day!<br>We will be delighted to hear
                                    from you.</div>

                            </div>
                        </div>
                        <div class="col-lg-5 ml-auto">
                            <div class="contact-info-three text-left">
                                <h6 class="heading font-weight--reguler">Reach out now!</h6>
                                <h3 class="call-us"><a href="#">(+234)9099175200</a></h3>
                                <div class="text">
                                    Start the collaboration with us while figuring out the best
                                    solution based on your needs.
                                </div>
                                <div class="location-button mt-20">
                                    <a href="#" class="location-text-button"><span class="button-icon"></span>
                                        <span class="button-text">View on Google map</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--============ Contact Us Area End =================-->
        </div>
    @endsection
