@extends('layouts.master')

@section('top-styles')
<style type="text/css">
    .header-lower{
        background-color: #0d1927 !important;
    }
</style>
@endsection

@section('content')

<!-- Page Title -->
        <section class="page-title style-two">
            <div class="auto-container">
                <div class="content-box centred mr-0">
                    <div class="title">
                        <h1>Contact Us</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li> <a href="{{ route('home') }}">Home</a></li>
                        <li> Contact Us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->
        <hr style="border-top-color: rgba(41, 170, 227,0.1);">
        
        <!-- contact-section -->
        <section class="contact-section bg-color-2">
            <div class="auto-container">
                @if(isset($success))
                        <div class="row success-msg" id="aler">
                          <div class="col-md-12 mb20">
                            <center>  
                              <h3 class="text-center" style="font-size: 35px; line-height: 48px; color: #29aae3; font-weight: 900;">THANK YOU!</h3>
                                <h5 class="text-center" style="font-size: 30px; line-height: 48px; color: white; font-weight: 700;">{{$success}}</h5>
                            </center>
                            <br><br>
                              
                          </div>
                        </div>
                    @endif
                <div class="row clearfix">

                    <div class="col-lg-6 col-md-12 col-sm-12 info-column">
                        <div class="contact-info-inner">
                            <div class="sec-title">
                                <h2 style="color: #29aae3;">Contact Information</h2>
                                <p>{{getSettings('footer_about')}}</p>
                            </div>
                            <div class="single-box">
                                <h3 style="color: #29aae3;">Opening hours</h3>
                                <ul class="list clearfix"> 
                                    <li>Mon - Sat 9.00 - 18.00</li>
                                    <li>Sunday & Holidays: Closed</li>
                                </ul>
                            </div>
                            <div class="single-box">
                                <h3 style="color: #29aae3;">Contact info</h3>
                                <ul class="list clearfix"> 
                                    <li>
                                        <i class="fas fa-map-marker-alt" style="color: #29aae3;"></i>
                                        &emsp; {{getSettings('address')}}
                                    </li>
                                    <li>
                                        <i class="fas fa-envelope" style="color: #29aae3;"></i>
                                        <a href="mailto:{{getSettings('site_email')}}">&emsp;{{getSettings('site_email')}}</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-phone" style="color: #29aae3;"></i>
                                        <a href="tel:{{getSettings('contact_no')}}">&emsp;{{getSettings('contact_no')}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                        <div class="form-inner">
                            <!-- <h2>Get in Touch</h2> -->
                            <form id='contact-form' action="{{route('send.message')}}" method="post" name="contactform" class="default-form" novalidate>
                            @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="name">Full Name *</label>
                                        <input type="text" name="your_name" placeholder="Full Name" id="name" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="phone">Your Phone *</label>
                                        <input type="text" name="your_phone" placeholder="Your Phone" id="phone" required>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label for="email">Your Email *</label>
                                        <input type="email" name="your_email" placeholder="Your Email" id="email" required>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label for="msg">Your Message *</label>
                                        <textarea name="your_text" placeholder="Your Message ..." id="msg" required></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button class="theme-btn-one" type="submit" name="submit-form" style="float: right;">Submit Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->


        <!-- google-map-section -->
        <section class="google-map-section">
            <div class="contact-map">
                <iframe src="{!! getSettings('google_location') !!}"></iframe>
            </div>
        </section>
        <!-- google-map-section end -->
@endsection

@section('bottom-mid-scripts')
@endsection

@section('bottom-bot-scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
      $("#aler").show();
        setTimeout(function() { $("#aler").hide(); }, 3000);
</script>
@endsection