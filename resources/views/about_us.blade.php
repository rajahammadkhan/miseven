@extends('layouts.master')

@section('top-styles')
<style type="text/css">
    .header-lower{
        background-color: #0d1927 !important;
    }
    .hover01 figure img{
        -webkit-transform: scale(1);
        transform: scale(1);
        -webkit-transition: .3s ease-in-out;
        transition: .3s ease-in-out;
    }
    .hover01 figure:hover img {
        -webkit-transform: scale(1.3);
        transform: scale(1.3);
    }
</style>
@endsection

@section('content')

<!-- Page Title -->
        <section class="page-title style-two">
            <div class="auto-container">
                <div class="content-box centred mr-0">
                    <div class="title">
                        <h1>About Us</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li> <a href="{{ route('home') }}">Home</a></li>
                        <li> About Us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->
        <hr style="border-top-color: rgba(41, 170, 227,0.1);">

        <!-- about-section -->
        <section class="about-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                        <div class="content_block_3">
                            <div class="content-box">
                                <div class="sec-title">
                                    <!-- <span>About</span> -->
                                    <h2 style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">WELCOME TO 
                                        <em style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #29aae3; text-align: center; font-size: 50px; font-weight: 900;"> MI7</em>
                                    </h2>
                                </div>
                                <div class="text">
                                    <p>Mi7 is a car rental company with a network of over 15 associated car rental offices, showrooms and a wide variety of other services. We together with our partners manage over 120 new, luxuriously equipped cars. We cater to companies and individuals who appreciate the highest quality of assistance and require a fast and professional car rental service, whether it be for business or leisure. In order to meet the ever-changing needs of our customers, we are continuously improving the quality of our fleet and service.</p>
                                    <h3 style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">OUR VISION</h3>
                                    <p>“To be the most preferred car rental provider in the regions we operate”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                        <div class="image_block_1">
                            <div class="image-box">
                                <div class="image-pattern">
                                    <div class="pattern-1" style="background-image: url({{url('')}}/assets/images/shape/shape-16.png);"></div>
                                    <div class="pattern-2" style="background-image: url({{url('')}}/assets/images/shape/shape-16.png);"></div>
                                </div>
                                <figure class="image"><img src="{{url('')}}/assets/images/resource/about-1.jpg" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->
        
        
        <!-- process-section -->
        <section class="process-section centred sec-pad">
            <div class="pattern-layer"></div>
            <div class="auto-container">
                <div class="sec-title centred">
                    <h2>WHY CHOOSE US</h2>
                </div>
                <div class="inner-content">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 process-block">
                            <div class="process-block-one">
                                <div class="inner-box">
                                    <span class="count wow fadeInDown animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">01</span><!-- 
                                    <div class="text wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">

                                        <div class="icon-box"><i class="fas fa-taxi"></i></div>
                                        <h3 style="color: black;">First Class Service</h3>
                                        <p style="color: black;">We offer services, easy booking and instant delivery</p>
                                    </div> -->
                                    <div class="category-block-one">
                                        <div class="inner-box" style="padding: 35px 15px; max-width: none; height: 250px;">
                                            <div class="shape">
                                                <div class="shape-1" style="background-image: url(assets/images/shape/about-shape-1.png);"></div>
                                                <div class="shape-2" style="background-image: url(assets/images/shape/about-shape-1.png);"></div>
                                            </div>
                                            <div class="icon-box hover01">
                                                <figure>
                                                    <div class="icon-box"><img src="assets/images/icons/First-Class-Service.png" style="width: 20%;"></div>
                                                    <!-- <div class="icon-box"><i class="fas fa-taxi" style="color: white"></i></div> -->
                                                </figure>
                                            </div>
                                            <h3 style="display: block; font-size: 22px; line-height: 30px; font-weight: 800; margin-bottom: 14px;">First Class Service</h3>
                                        <p style="line-height: 28px;">We offer services, easy booking and instant delivery</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 process-block">
                            <div class="process-block-one">
                                <div class="inner-box">
                                    <span class="count wow fadeInDown animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">02</span>
                                    <!-- <div class="text wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <div class="icon-box"><i class="fas fa-users-cog"></i></div>
                                        <h3 style="color: black;">Pick & Drop</h3>
                                        <p style="color: black;">Free pickup and delivery across Dubai</p>
                                    </div> -->

                                    <div class="category-block-one">
                                        <div class="inner-box" style="padding: 35px 15px; max-width: none; height: 250px;">
                                            <div class="shape">
                                                <div class="shape-1" style="background-image: url(assets/images/shape/about-shape-1.png);"></div>
                                                <div class="shape-2" style="background-image: url(assets/images/shape/about-shape-1.png);"></div>
                                            </div>
                                            <div class="icon-box hover01">
                                                <figure>
                                                    <div class="icon-box"><img src="assets/images/icons/Pick-&-Drop.png" style="width: 20%;"></div>
                                                    <!-- <div class="icon-box"><i class="fas fa-users-cog" style="color: white"></i></div> -->
                                                </figure>
                                            </div>
                                            <h3 style="display: block; font-size: 22px; line-height: 30px; font-weight: 800; margin-bottom: 14px;">Pick & Drop</h3>
                                        <p style="line-height: 28px;">Free pickup and delivery across Dubai</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 process-block">
                            <div class="process-block-one">
                                <div class="inner-box">
                                    <span class="count wow fadeInDown animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">03</span>
                                    <!-- <div class="text wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                        <div class="icon-box"><i class="fas fa-luggage-cart"></i></div>
                                        <h3 style="color: black;">Extra Services</h3>
                                        <p style="color: black;">We can help you with hotel bookings, leisure and yachts services.</p>
                                    </div> -->

                                    <div class="category-block-one">
                                        <div class="inner-box" style="padding: 35px 15px; max-width: none; height: 250px;">
                                            <div class="shape">
                                                <div class="shape-1" style="background-image: url(assets/images/shape/about-shape-1.png);"></div>
                                                <div class="shape-2" style="background-image: url(assets/images/shape/about-shape-1.png);"></div>
                                            </div>
                                            <div class="icon-box hover01">
                                                <figure>
                                                    <div class="icon-box"><img src="assets/images/icons/Extra-Services.png" style="width: 20%;"></div>
                                                    <!-- <div class="icon-box"><i class="fas fa-luggage-cart" style="color: white"></i></div> -->
                                                </figure>
                                            </div>
                                            <h3 style="display: block; font-size: 22px; line-height: 30px; font-weight: 800; margin-bottom: 14px;">Extra Services</h3>
                                        <p style="line-height: 28px;">We can help you with hotel bookings, leisure and yachts services.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="inner-content">
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-6 col-sm-12 process-block"></div>

                        <div class="col-lg-4 col-md-6 col-sm-12 process-block">
                            <div class="process-block-one">
                                <div class="inner-box">
                                    <span class="count wow fadeInDown animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">04</span>
                                    <!-- <div class="text wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                        <div class="icon-box"><i class="fas fa-headset"></i></div>
                                        <h3 style="color: black;">Car Support</h3>
                                        <p style="color: black;">24/7 roadside assistance</p>
                                    </div> -->

                                    <div class="category-block-one">
                                        <div class="inner-box" style="padding: 35px 15px; max-width: none; height: 250px;">
                                            <div class="shape">
                                                <div class="shape-1" style="background-image: url(assets/images/shape/about-shape-1.png);"></div>
                                                <div class="shape-2" style="background-image: url(assets/images/shape/about-shape-1.png);"></div>
                                            </div>
                                            <div class="icon-box hover01">
                                                <figure>
                                                    <div class="icon-box"><img src="assets/images/icons/24-7-Roadside-Assistance.png" style="width: 20%;"></div>
                                                    <!-- <div class="icon-box"><i class="fas fa-headset" style="color: white"></i></div> -->
                                                </figure>
                                            </div>
                                            <h3 style="display: block; font-size: 22px; line-height: 30px; font-weight: 800; margin-bottom: 14px;">24/7 Roadside Assistance</h3>
                                        <p style="line-height: 28px;">Clients can call us directly if they have any issues with their vehicle, our support team will assist them instantly.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 process-block">
                            <div class="process-block-one">
                                <div class="inner-box">
                                    <span class="count wow fadeInDown animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">05</span>
                                    <!-- <div class="text wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                        <div class="icon-box"><i class="fas fa-headset"></i></div>
                                        <h3 style="color: black;">Car Support</h3>
                                        <p style="color: black;">24/7 roadside assistance</p>
                                    </div> -->

                                    <div class="category-block-one">
                                        <div class="inner-box" style="padding: 35px 15px; max-width: none; height: 250px;">
                                            <div class="shape">
                                                <div class="shape-1" style="background-image: url(assets/images/shape/about-shape-1.png);"></div>
                                                <div class="shape-2" style="background-image: url(assets/images/shape/about-shape-1.png);"></div>
                                            </div>
                                            <div class="icon-box hover01">
                                                <figure>
                                                    <div class="icon-box"><img src="assets/images/icons/trust.webp" style="width: 20%;"></div>
                                                </figure>
                                            </div>
                                            <h3 style="display: block; font-size: 22px; line-height: 30px; font-weight: 800; margin-bottom: 14px;">Trusted</h3>
                                        <p style="line-height: 28px;">Our company is well known for Quality assurance and customer satisfaction.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 col-sm-12 process-block"></div>                        
                    </div>
                </div>
            </div>
        </section>
        <!-- process-section end -->
@endsection

@section('bottom-mid-scripts')
@endsection

@section('bottom-bot-scripts')
@endsection