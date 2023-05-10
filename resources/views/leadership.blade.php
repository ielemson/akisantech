@extends('layouts.pages')

@section('content')

<div id="main-wrapper">
    <div class="site-wrapper-reveal">
        <!-- ============ Team Member Wrapper Start =============== -->
        <div class="team-member-wrapper section-space--pt_100 section-space--pb_70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title section-space--mb_60 text-center">
                            <h3 class="heading">We pride ourselves on having a team <br> of <span class="text-color-primary">highly-skilled</span> experts</h3>
                        </div>
                    </div>
                </div>
                <div class="row ht-team-member-style-two">
                    <div class="col-lg-4 col-md-6 wow move-up">
                        <div class="grid-item">
                            <div class="ht-team-member">
                                <div class="team-image">
                                    <img class="img-fluid" src="{{asset('assets/images/team/elemson-ifeanyi.jpg')}}" alt="">
                                    <div class="social-networks">
                                        <div class="inner">
                                            <a target="_blank" href="{{route('elemson_ifeanyi')}}" class=" hint--bounce  hint--top hint--theme-two" aria-label="View Info">
                                                View Info
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-info text-center">
                                    <h5 class="name">Elemson Ifeanyi</h5>
                                    <div class="position">Director/Lead Frontend Developer</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow move-up">
                        <div class="grid-item">
                            <div class="ht-team-member">
                                <div class="team-image">
                                    <img class="img-fluid" src="{{asset('assets/images/team/ayomide-akisanmi.jpeg')}}" alt="">
                                    <div class="social-networks">
                                        <div class="inner">
                                            <a target="_blank" href="{{route('akisanmi_ayomide')}}" class=" hint--bounce  hint--top hint--theme-two" aria-label="View Info">
                                                View Info
                                            </a>
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="team-info text-center">
                                    <h5 class="name">Akisanmi-S. Ayomide</h5>
                                    <div class="position">CEO & Founder</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow move-up">
                        <div class="grid-item">
                            <div class="ht-team-member">
                                <div class="team-image">
                                    <img class="img-fluid" src="{{asset('assets/images/team/mohammedamin abdi.jpeg')}}" alt="">
                                    <div class="social-networks">
                                        <div class="inner">
                                            <a target="_blank" href="{{route('mohammedamin_abdi')}}" class=" hint--bounce  hint--top hint--theme-two" aria-label="View Info">
                                                View Info
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-info text-center">
                                    <h5 class="name">Mohammedamin Abdi</h5>
                                    <div class="position">Lead Backend Developer</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           

            </div>
        </div>
        <!-- ============ Team Member Wrapper End =============== -->

       


    </div>



</div>
@endsection