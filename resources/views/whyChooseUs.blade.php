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
                        <h3 class="heading">Why Choose Us</h3>
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
                               <p>
                                
                            At AKISAN TECH, we're dedicated to bringing your ideas to life with innovative product development, customized software solutions, and reliable IT support. We believe that technology should work for you, not against you. That's why we strive to create solutions that not only meet your needs, but exceed your expectations.
                            As Steve Jobs once said, "Innovation distinguishes between a leader and a follower." We're committed to being leaders in the tech industry, constantly pushing the boundaries of what's possible and driving innovation forward. With AKISAN TECH, you can trust that you're in good hands.
                            Choose AKISAN TECH for personalized attention, cutting-edge solutions, and exceptional service. Let us help you take your business to the next level.

                         
                               </p>
                            </div> 
                            
                        </div>
                    </div>
                </div>
            </div>


           
        </div>
    </div>
    <!--===========  feature-large-images-wrapper  End =============-->



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
                                    </div >
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