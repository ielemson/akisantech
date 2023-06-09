@extends('layouts.pages')

@section('content')

<div class="site-wrapper-reveal">
<!--====================  Conact us Section Start ====================-->
<div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-lg-6">
<div class="conact-us-wrap-one mb-30">
<h3 class="heading">To make requests for <br>further information, <br><span class="text-color-primary">contact us</span> via our social channels. </h3>
<div class="sub-heading">We just need a couple of hours! <br> No more than 2 working days since receiving your issue ticket.</div>
</div>
</div>


<div class="contact-form-wrap">
<div class="col-lg-12 col-lg-12">
<!-- Success message -->
@if(Session::has('success'))
<div class="alert alert-success">
{{Session::get('success')}}
</div>
@endif
</div>
<form  method="POST" action="{{ route('contact.store') }}">
@csrf
<div class="contact-form">
<div class="contact-input">
<div class="contact-inner">
<input type="text" placeholder="Name *"  name="name" id="name" required/>
@if ($errors->has('name'))
<span class="help-block">
<div class="error">
<strong>{{ $errors->first('name') }}</strong>
</div>
</span>
@endif
</div>


<div class="contact-inner">
<input type="email" placeholder="Email *"  name="email" id="email" required/>
@if ($errors->has('email'))
<span class="help-block">
<div class="error">
<strong>{{ $errors->first('email') }}</strong>
</div>
</span>
@endif
</div>
</div>


<div class="contact-inner">
<input  type="text" placeholder="Subject *"  name="subject"
id="subject" required/>
@if ($errors->has('subject'))
<span class="help-block">
<div class="error">
<strong>{{ $errors->first('subject') }}</strong>
</div>
</span>
@endif
</div>


<div class="contact-inner contact-message">
<textarea name="message"   placeholder="Please describe what you need." name="message" id="message" required></textarea>
@if ($errors->has('message'))
<span class="help-block">
<div class="error">
<strong>{{ $errors->first('message') }}</strong>
</div>
</span>
@endif
</div>
<div class="submit-btn mt-20">
<button class="ht-btn ht-btn-md" type="submit">Send message</button>

</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<!--====================  Conact us Section End  ====================-->

<!--====================  Conact us info Start ====================-->
<div class="contact-us-info-wrappaer section-space--pb_100">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-4 col-md-6">
<div class="conact-info-wrap mt-30">
<h5 class="heading mb-20">Lagos, Nigeria</h5>
<ul class="conact-info__list">
{{-- <li>Lagos State</li> --}}
<li><a href="#" class="hover-style-link text-color-primary"> info@akisantech.com</a></li>
<li><a href="#" class="hover-style-link text-black font-weight--bold">(+234)9099175200</a></li>
</ul>
</div>
</div>
{{-- <div class="col-lg-4 col-md-6">
<div class="conact-info-wrap mt-30">
<h5 class="heading mb-20">New York</h5>
<ul class="conact-info__list">
<li>58 Howard Street #14 New York</li>
<li><a href="" class="hover-style-link text-color-primary">info@akisantech.com</a></li>
<li><a href="#" class="hover-style-link text-black font-weight--bold">(+47)1221 09878</a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="conact-info-wrap mt-30">
<h5 class="heading mb-20">Russia</h5>
<ul class="conact-info__list">
<li>The Courtyard Building 11 Curtain Road, Russia</li>
<li><a href="#" class="hover-style-link text-color-primary">contact.russia@mitech.com</a></li>
<li><a href="#" class="hover-style-link text-black font-weight--bold">(+53)1221 09877</a></li>
</ul>
</div>
</div> --}}

</div>
</div>
</div>
<!--====================  Conact us info End  ====================-->


<!--========== Call to Action Area Start ============-->
<div class="cta-image-area_one section-space--ptb_80 cta-bg-image_two">
<div class="container">
<div class="row align-items-center">
<div class="col-xl-8 col-lg-7">
<div class="cta-content md-text-center">
<h3 class="heading">We run all kinds of IT services that vow your <span class="text-color-primary"> success</span></h3>
</div>
</div>
<div class="col-xl-4 col-lg-5">
<div class="cta-button-group--two text-center">
<a href="#" class="btn btn--white btn-one"><span class="btn-icon mr-2"><i class="far fa-comment-alt-dots"></i></span> Let's talk</a>
<a href="#" class="btn btn--secondary btn-two "><span class="btn-icon mr-2"><i class="far fa-info-circle"></i></span> Get info</a>
</div>
</div>
</div>
</div>
</div>
<!--========== Call to Action Area End ============-->

</div>



</div>
@endsection