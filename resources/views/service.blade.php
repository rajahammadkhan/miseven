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
                        <h1>Our Service</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li> <a href="{{ route('home') }}">Home</a></li>
                        <li> Our Service</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->
        <hr style="border-top-color: rgba(41, 170, 227,0.1);">

        <!-- news-section -->
        <section class="news-section sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h2>Our Service</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{url('')}}/assets/images/bg1.jpg" alt="">
                                    <a href="{{ route('contact_us') }}" id="btnservice">Book Now</a>

                                </figure>
                                <div class="lower-content">
                                    <h3><a href="#">DESERT SAFARI</a></h3>
                                    <p style="height: 260px;">Desert safari in Dubai is one of the most thrilling activities for anyone. The mi7 crew is available to help you with desert safari discounts and packages. We have served hundreds of consumers and provided amazing services that have won their hearts. The desert is a must-do activity in Dubai, and we will make it an even more interesting and adventurous experience for you.</p>
                                    <span class="post-info">September 02, 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{url('')}}/assets/images/bg2.jpg" alt="">                                    
                                    <a href="{{ route('contact_us') }}" id="btnservice">Book Now</a>
                                </figure>
                                <div class="lower-content">
                                    <h3><a href="#">HOTEL BOOKING</a></h3>
                                    <p style="height: 260px;">We are passionate to provide you best tour services as a whole. Luxury hotel bookings can sort this thing out. Mi7 professional team can assist you with making hotel reservations. So, when it comes to finding the ideal hotel, we've got your back. We hope to inspire millions of people throughout the world with kind gestures and extraordinary services.</p>
                                    <span class="post-info">September 02, 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{url('')}}/assets/images/bg3.jpg" alt="">                                    
                                    <a href="{{ route('contact_us') }}" id="btnservice">Book Now</a>
                                </figure>
                                <div class="lower-content">
                                    <h3><a href="#">Yachts</a></h3>
                                    <p style="height: 260px;">We can assist you in arranging luxury yachts for guests, couples, and business party to experience a very memorable sail along Dubai’s spectacular coastline. A luxury yacht by mi7 is a once-in-a-lifetime experience. Relax in the sun and give peace to your soul with breathtaking views of the dubai skyline as you sail across the shimmering waters.</p>
                                    <span class="post-info">September 02, 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section end -->
@endsection

@section('bottom-mid-scripts')
@endsection

@section('bottom-bot-scripts')
@endsection