@extends('layouts.pages')

@section('content')

    <!--===========  feature-large-images-wrapper  Start =============-->
    <div class="feature-large-images-wrapper section-space--ptb_100">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title-wrap Start -->
                    <div class="section-title-wrap text-center section-space--mb_60">
                        <h6 class="section-sub-title mb-20">Our company</h6>
                        <h3 class="heading">We run all kinds of IT services that <br> vow your <span class="text-color-primary"> success</span></h3>
                    </div>
                    <!-- section-title-wrap Start -->
                </div>
            </div>

            <div class="cybersecurity-about-box section-space--pb_70">
                <div class="row">
                    {{-- <div class="col-lg-4 offset-lg-1">
                        <div class="modern-number-01">
                            <h2 class="heading  mr-5"><span class="mark-text">1</span>Years’ Experience in IT</h2>
                            <h6 class="heading mt-30">More About Our Success Stories</h6>
                        </div>
                    </div> --}}

                    <div class="col-lg-12">
                        <div class="cybersecurity-about-text">
                            <div class="text">
                                At AKISAN TECH, we're more than just a tech company. We're passionate about technology and its potential to transform the way we live and work. We believe in pushing the boundaries of what's possible, whether we're creating innovative products in-house or providing customized solutions for our clients.
                                Our team of experts specializes in product development, personalized software solutions, and reliable IT support. We work closely with you to understand your unique needs and challenges, and we use our expertise to create solutions that exceed your expectations. But we don't just stop there.
                                We also create cutting-edge products in-house for the public to use, leveraging our expertise to build solutions that make a real difference. Our products are designed to simplify your life, streamline your processes, and improve your overall experience. From mobile apps to desktop software, we're always exploring new and innovative ways to harness the power of technology for the greater good.
                                Choose AKISAN TECH for cutting-edge technology, personalized attention, and exceptional service. Let us help you take your business to the next level, or discover how our in-house products can make your life easier.
                                We look forward to partnering with you.
                                AKISAN TECH.    {{-- Akisan Tech specializes in technological and IT-related services such as product engineering, warranty management, building cloud, infrastructure, network, etc. We put a strong focus on the needs of your business to figure out solutions that best fits your demand and nail it.--}}
                            
                            </div> 
                            <div class="button-text">
                            <a href="{{ url('contact-us')}}" class="btn-text">
                                    Discover now
                                    <span class="button-icon ml-1">
                                <i class="far fa-long-arrow-right"></i>
                            </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <div class="feature-images__six">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 wow move-up">
                                <!-- ht-box-icon Start -->
                                <div class="ht-box-images style-06">
                                    <div class="image-box-wrap">
                                        <div class="box-image">
                                            <div class="default-image">
                                                <img class="img-fulid" src="assets/images/icons/mitech-box-image-style-06-image-01-120x120.png" alt="">
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">What we can do?</h5>
                                            <div class="text">We put a strong focus on the needs of your business to figure out solutions that best fits your demand and nail it.
                                            </div>
                                            <a href="{{ url('contact-us')}}" class="box-images-arrow">
                                                <span class="button-text">Discover now</span>
                                                <i class="far fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- ht-box-icon End -->
                            </div>
                            <div class="col-lg-4 col-md-6 wow move-up">
                                <!-- ht-box-icon Start -->
                                <div class="ht-box-images style-06">
                                    <div class="image-box-wrap">
                                        <div class="box-image">
                                            <div class="default-image">
                                                <img class="img-fulid" src="assets/images/icons/mitech-box-image-style-06-image-02-120x120.png" alt="">
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Become our partners?</h5>
                                            <div class="text">Our preventive and progressive approach will help you take the lead while addressing possible threats in managing data.
                                            </div>
                                            <a href="{{ url('contact-us')}}" class="box-images-arrow">
                                                <span class="button-text">Discover now</span>
                                                <i class="far fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- ht-box-icon End -->
                            </div>
                            <div class="col-lg-4 col-md-6 wow move-up">
                                <!-- ht-box-icon Start -->
                                <div class="ht-box-images style-06">
                                    <div class="image-box-wrap">
                                        <div class="box-image">
                                            <div class="default-image">
                                                <img class="img-fulid" src="assets/images/icons/mitech-box-image-style-06-image-03-120x120.png" alt="">
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Need a hand?</h5>
                                            <div class="text">Our support team is available 24/7 a day, 7 days a week and can get ready for solving any of your situational rising problems.
                                            </div>
                                            <a href="{{ url('contact-us')}}" class="box-images-arrow">
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

                <div class="section-under-heading text-center section-space--mt_60">"Challenges are just opportunities in disguise." <a href="{{url('contact-us')}}">Take the challenge!</a></div>

                </div>
            </div>
        </div>
    </div>
    <!--===========  feature-large-images-wrapper  End =============-->




    <!--========= About Resources Wrapper Start ===========-->
    {{-- <div class="about-resources-wrapper">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="resources-left-box">
                        <div class="resources-inner">
                            <h6 class="sub-title mb-20">Resources</h6>
                            <h3 class="heading">Get a copy of brochure on <span class="text-color-primary"> Brand New IT Tech.</span></h3>
                            <div class="button mt-30">
                                <a href="#" class="ht-btn ht-btn-md">Download now (3MB)</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="resources-right-box">
                        <div class="resources-right-inner text-center">
                            <div class="resources-images">
                                <img class="img-fluid" src="assets/images/banners/consultant.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--========= About Resources Wrapper End ===========-->
    <!--========= About Delivering Wrapper Start ===========-->
    <div class="about-delivering-wrapper section-space--ptb_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrap text-center section-space--mb_20">
                        <h3 class="heading">We excel in delivering <br>optimal solutions.</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="delivering-optimal-wrap">
                        <div class="list-item">
                            <div class="marker"></div>
                            <div class="title-wrap">
                                <h5 class="title"> Warranty Management IT </h5>
                                <div class="desc">Our service offerings enhance customer experience throughout secure &amp; highly functional end-to-end warranty management. </div>
                            </div>
                        </div>
                        <div class="list-item">
                            <div class="marker"></div>
                            <div class="title-wrap">
                                <h5 class="title"> Quality Control System </h5>
                                <div class="desc">It's more than a responsibility but a guarantee from us to gain customer trust with highly reliable quality control system. </div>
                            </div>
                        </div>
                        <div class="list-item">
                            <div class="marker"></div>
                            <div class="title-wrap">
                                <h5 class="title">Highly Professional Staffs </h5>
                                <div class="desc">Having obtained the official & formal training in IT technology and technical fields, our staffs know more than what they show. </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="delivering-optimal-wrap">
                        <div class="list-item">
                            <div class="marker"></div>
                            <div class="title-wrap">
                                <h5 class="title">Product Engineering & Services </h5>
                                <div class="desc">Develop and propose product improvements through periodical and accurate testing, repairing & refining every version. </div>
                            </div>
                        </div>
                        <div class="list-item">
                            <div class="marker"></div>
                            <div class="title-wrap">
                                <h5 class="title">Infrastructure Integration Technology </h5>
                                <div class="desc">At Akisan Tech, we have a holistic and integrated approach towards core modernization to experience technological evolution. </div>
                            </div>
                        </div>
                        <div class="list-item">
                            <div class="marker"></div>
                            <div class="title-wrap">
                                <h5 class="title">Information Security Management </h5>
                                <div class="desc">Information security has been a rising issue lately due to a series of scandals from big companies, rest assured, we're here. </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=========== fun fact Wrapper Start ==========-->
    {{-- <div class="fun-fact-wrapper bg-theme-default section-space--pb_30 section-space--pt_60">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 wow move-up">
                    <div class="fun-fact--two text-center">
                        <div class="fun-fact__count counter">120</div>
                        <h6 class="fun-fact__text">Happy clients</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow move-up">
                    <div class="fun-fact--two text-center">
                        <div class="fun-fact__count counter">32</div>
                        <h6 class="fun-fact__text">Finished projects</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow move-up">
                    <div class="fun-fact--two text-center">
                        <div class="fun-fact__count counter">73</div>
                        <h6 class="fun-fact__text">Skilled Experts</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow move-up">
                    <div class="fun-fact--two text-center">
                        <div class="fun-fact__count counter">318</div>
                        <h6 class="fun-fact__text">Media Posts</h6>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--=========== fun fact Wrapper End ==========-->
 

    <!--============ Contact Us Area Start =================-->
    <div class="contact-us-area infotechno-contact-us-bg section-space--pt_100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="image">
                        <img class="img-fluid" src="assets/images/banners/optimize.png" alt="">
                    </div>
                </div>

                <div class="col-lg-4 ml-auto">
                    <div class="contact-info style-two text-left">

                        {{-- <div class="contact-info-title-wrap text-center">
                            <h3 class="heading  mb-10">4.9/5.0</h3>
                            <div class="ht-star-rating lg-style">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <p class="sub-text">by 700+ customers for 3200+ clients</p>
                        </div> --}}

                        <div class="contact-list-item">
                            <a href="tel:(+234)9099175200" class="single-contact-list">
                                <div class="content-wrap">
                                    <div class="content">
                                        <div class="icon">
                                            <span class="fal fa-phone"></span>
                                        </div>
                                        <div class="main-content">
                                            <h6 class="heading">Call for advice now!</h6>
                                            <div class="text">(+234)9099175200</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="mailto:info@akisantech.com" class="single-contact-list">
                                <div class="content-wrap">
                                    <div class="content">
                                        <div class="icon">
                                            <span class="fal fa-envelope"></span>
                                        </div>
                                        <div class="main-content">
                                            <h6 class="heading">Say hello</h6>
                                            <div class="text">info@akisantech.com</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============ Contact Us Area End =================-->

</div>
@endsection