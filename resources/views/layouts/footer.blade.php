    <!-- subscribe-section -->
        <section class="subscribe-section">
            <div class="pattern-layer" style="background-image: url({{url('')}}/assets/images/shape/shape-9a.png);"></div>
                <div id="form-shape">
                    <img src="{{url('')}}/assets/images/shape/about-shape-1.png" style="position: absolute; top: 0; right: 0; width: 30%;">
                    <img src="{{url('')}}/assets/images/shape/about-shape-2.png" style="position: absolute;bottom: 0;left: 0; width: 30%;">
                </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                        <div class="text">
                            <div class="icon-box"><i class="icon-25"></i></div>
                            <h2>Subscribe to Newsletter</h2>
                            <p>and receive new ads in inbox</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-column">
                        <form action="#" method="post" class="subscribe-form">
                            <div class="form-group" id="sub-form-group">
                                <input type="email" name="email" id="subscribe-form" placeholder="Input your email address">
                                <button type="submit" class="theme-btn-one" id="subscribe-btn">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe-section end -->
        
        <!-- main-footer -->
        <footer class="main-footer">
            <div class="footer-top" style="background-image: url({{url('')}}/assets/images/background/footer-1.jpg); padding: 60px 0px 0px 0px;">
                <div class="container">
                    <div class="widget-section">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget logo-widget">
                                    <!-- <figure class="footer-logo"><a href="{{ route('home') }}"><img src="{{config('miseven.file_path').getSettings('site_logo_footer')}}" alt="MiSe7en" style="width: 150%; max-width: 150%;"></a></figure> -->
                                    <figure class="footer-logo"><a href="{{ route('home') }}"><img src="{{url('')}}/assets/images/logo2.png" alt="MiSe7en" style="width: 150%; max-width: 150%;"></a></figure>
                                    <div class="text">
                                        <p>{{getSettings('footer_about')}}</p>
                                    </div>
                                    <ul class="social-links clearfix">
                                        <li><a href="{{getSettings('social_facebook')}}"><i class="fab fa-facebook-f"></i></a></li>
                                        <!-- <li><a href="#"><i class="fab fa-twitter"></i></a></li> -->
                                        <li><a href="{{getSettings('social_instagram')}}"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-tiktok"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget links-widget ml-70">
                                    <div class="widget-title">
                                        <h3>Brands</h3>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="links-list clearfix">
                                            <li><a href="{{ route('all_vehicles') }}"><i class="fas fa-arrow-alt-circle-right"></i>&emsp; All Vehicles</a></li>
                                             @foreach(getVehicleBrandsfooter() as $brand)
                                                <li><a href="{{route('get_vehicles_against_brand',$brand->slug)}}"><i class="fas fa-arrow-alt-circle-right"></i>&emsp; {{$brand->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget links-widget ml-70">
                                    <div class="widget-title">
                                        <h3>About</h3>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="links-list clearfix">
                                            <li><a href="{{ route('home') }}"><i class="fas fa-arrow-alt-circle-right"></i>&emsp; Home</a></li>
                                            <li><a href="{{ route('about_us') }}"><i class="fas fa-arrow-alt-circle-right"></i>&emsp; About Us</a></li>
                                            <li><a href="{{ route('gallery') }}"><i class="fas fa-arrow-alt-circle-right"></i>&emsp; Gallery</a></li>
                                            <li><a href="{{ route('blogs') }}"><i class="fas fa-arrow-alt-circle-right"></i>&emsp; Blogs</a></li>
                                            <li><a href="{{ route('contact_us') }}"><i class="fas fa-arrow-alt-circle-right"></i>&emsp; Contact Us</a></li>
                                            <li><a href="{{ route('faqs') }}"><i class="fas fa-arrow-alt-circle-right"></i>&emsp; Faqs</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget contact-widget">
                                    <div class="widget-title">
                                        <h3>Get In Touch</h3>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="info-list clearfix">
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i>
                                                <p style="color: #aeb1b8;margin-left: 15px;">{{getSettings('address')}}</p>
                                            </li>
                                            <li>
                                                <i class="fas fa-phone"></i>
                                                <a style="color: #aeb1b8;margin-left: 15px;" href="tel:{{getSettings('contact_no')}}">{{getSettings('contact_no')}}</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-envelope"></i>
                                                <a style="color: #aeb1b8;margin-left: 15px;" href="mailto:{{getSettings('site_email')}}">{{getSettings('site_email')}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="footer-inner clearfix">
                        <div class="copyright pull-left"><p><a href="#">Mi7 Rent A Car</a> &copy; Copyright 2022. All Rights Reserved</p></div>
                        <ul class="footer-nav pull-right clearfix">
                            <li><a href="{{ route('termsandcondition') }}">Terms And Condition</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->