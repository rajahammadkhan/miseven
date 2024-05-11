<style>
.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: Black;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
  
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

@media (max-width: 800px) {
    .switch {
      position: absolute;
      display: inline;
      top: 200;
      width: 60px;
      height: 34px;
      right: 1rem;
      top: 3rem;
    }
    .header-lower{
        background-color: #0d1927;
    }
    .mobile-menu .menu-box{
       background-color: #0d1927; 
    }

    .night-mode-button{
        margin-top: -370px;
    }
    #form-shape{
        visibility: visible;
    }
    #desktop{
       visibility: hidden; 
    }
    #mobile{
       visibility: visible; 
       width: 100%; 
       margin-top: -22px;
    }
    .main-header .outer-box .logo-box {
      position: relative;
      padding: 25px 0px 0px 0px;
    }
}


@media (min-device-width: 1250px) and (max-device-width: 1599px) {
    .switch {
      position: fixed;
      display: inline;
      top: 200;
      width: 60px;
      height: 34px;
      right: 22.5rem;
    }
    #form-shape{
        visibility: hidden;
    }
    .header-lower{
        background-color: transparent;
    }
    #desktop{
       visibility: visible; 
    }
    #mobile{
       visibility: hidden; 
       width: 100%; 
       margin-top: -285px;
    }
}

@media (min-device-width: 1600px) and (max-device-width: 2400px) {
    .switch {
      position: fixed;
      display: inline;
      top: 200;
      width: 60px;
      height: 34px;
      right: 40.5rem;
    }
    #form-shape{
        visibility: hidden;
    }
    .header-lower{
        background-color: transparent;
    }
    #desktop{
       visibility: visible; 
    }
    #mobile{
       visibility: hidden; 
       width: 100%; 
       margin-top: -285px;
    }
}  

.label1 {
    background-color: white;
    display: flex;
    height: 30px;
    border-radius: 50px;
    width: 60px;
    justify-content: space-between;
    align-items: center;
    position: relative;
    padding: 0 15px;
    transition: all .5s ease-in-out;
    cursor: pointer;
    border: 2px solid black;
    padding-left: 8px;
    padding-right: 8px;
}
.label1 .fa-moon {
    color: grey;
}
.label1 .fa-sun {
    color: rgb(243, 188, 36);
}
.blob {
    position: absolute;
    left: 50%;
    width: 40%;
    height: 85%;
    background: black;
    border-radius: 50px;
    transition: .5s ease all;
}
.checkbox1 {
    opacity: 0;
    position: absolute;
}
.checkbox1:checked + .label1 .blob {
    left: 5px;
    background: white;
}
.checkbox1:checked + .label1 {
    background-color: black;
}
#icon1{
    color: white;
}
#icon1:hover{
    color: #29aae3;
}

</style>
        <!-- main header -->
        <header class="main-header style-four">
            <!-- header-top -->
            <!-- <div class="header-top" style="background-color: #0d1927;">
                <div class="auto-container">
                    <div class="top-inner">
                        <div class="info-list clearfix">
                            
                        </div>
                        <div class="right-column clearfix">
                            <ul class="social-links clearfix">
                                <li><a href="{{getSettings('social_facebook')}}"><i class="fab fa-facebook-f" style="color: white;"></i></a></li>
                                <li><a href="{{getSettings('social_instagram')}}"><i class="fab fa-instagram" style="color: white;"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                            </ul>
                            <div class="sign-in"><a href="signup.html" style="color: white;"><i class="fas fa-map-marker-alt"></i>2604 Churchill Tower, Business Bay, Dubai</a></div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box" >
                            <figure class="logo"><a href="{{ route('home') }}"><img src="{{url('')}}/assets/images/logo2.png" alt="Header Logo Mi7" ></a></figure>                            
                        </div>
                        <div class="menu-area">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler" style="top: -5rem;">
                                <i class="icon-bar" style="background-color: white;"></i>
                                <i class="icon-bar" style="background-color: white;"></i>
                                <i class="icon-bar" style="background-color: white;"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">                                    
                                    <ul class="navigation clearfix">
                                        <li><a style="color: white" href="{{ route('home') }}">Home</a></li>
                                        <li><a style="color: white" href="{{ route('about_us') }}">About Us</a></li>
                                        <li class="current dropdown"><a style="color: white" href="{{ route('all_vehicles') }}">All Vehicles</a>
                                            <ul style="max-height: 200px; overflow-y: scroll;">
                                                @foreach(getVehicleBrands() as $brand)
                                                    <li><a href="{{route('get_vehicles_against_brand',$brand->slug)}}">{{$brand->name}}</a></li>
                                                @endforeach 
                                            </ul>
                                        </li>  
                                        <li><a style="color: white" href="{{ route('gallery') }}">Gallery</a></li>
                                        <li><a style="color: white" href="{{ route('blogs') }}">Blogs</a></li>
                                        <li><a style="color: white" href="{{ route('contact_us') }}">Contact Us</a></li> 
                                        <li class="current dropdown"><a style="color: white" href="#"><img src="{{url('')}}/assets/images/english.png" alt="English" ></a>
                                            <ul>
                                                <li><a href="#"><img src="{{url('')}}/assets/images/english.png" alt="English" > English</a></li>
                                                <li><a href="#"><img src="{{url('')}}/assets/images/arabic.png" alt="Arabic" > Arabic </a></li>
                                                <li><a href="#"><img src="{{url('')}}/assets/images/french.png" alt="French" > French </a></li>
                                            </ul>
                                        </li>  
                                        <li >  
                                             <div class="night-mode-button">
                                              <!-- <input type="checkbox" class="checkbox1" id="dark-mode-toggle"> -->
                                              <input type="checkbox" class="checkbox1 dark-mode-toggle" id="dark-mode-toggle">
                                              <label for="dark-mode-toggle" class="label1">
                                                <i class="fas fa-moon"></i>
                                                <i class="fas fa-sun"></i>
                                                <div class="blob"></div>
                                              </label>
                                            </div>                                          
                                        </li> 
                                    </ul>
                                </div>
                            </nav>

                        </div>
                        <!-- <label class="switch" style="z-index: 1000; ">
                          <input type="checkbox" id="dark-mode-toggle" checked>
                          <span class="slider round"></span>
                        </label> -->
                        <div class="btn-box" style="display:flex;" id="desktop">
                            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
                            <style type="text/css">
                                .theme-btn-one::before{
                                    border: 0px solid;
                                }
                            </style>
                               <!--  <a href="https://wa.me/+971585201010" class="theme-btn-one" style="padding: 10px; background-color: #23d465; border: 1px solid; border-color: #23d465; box-shadow: none;">
                                    <span><i class="fa fa-whatsapp" style="font-size: 19px; margin-left: 6px; margin-right: 6px;"> </i> Chat</span>
                                </a> -->
                                <div style="margin-right: 15px; margin-top: 5%;">
                                    <a href="{{getSettings('social_facebook')}}"style="padding: 6px;position: relative;">
                                        <i class="fab fa-facebook-f" id="icon1" style="font-size: 18px;" ></i>
                                    </a>
                                    
                                    <a href="{{getSettings('social_instagram')}}"style="padding: 6px; position: relative;">
                                        <i class="fab fa-instagram" id="icon1" style="font-size: 18px;" ></i>
                                    </a>  

                                    <a href="{{getSettings('social_tiktok')}}"style="padding: 6px;position: relative;">
                                        <i class="fab fa-tiktok" id="icon1" style="font-size: 18px;" ></i>
                                    </a>
                                    
                                    <a href="{{getSettings('social_youtube')}}"style="padding: 6px; position: relative;">
                                        <i class="fab fa-youtube" id="icon1" style="font-size: 18px;" ></i>
                                    </a> 
                                </div>

                            <a href="tel:{{getSettings('contact_no')}}" class="theme-btn-one" style="padding: 15px; background-color: #29aae3; border: 1px solid; border-color: #29aae3; box-shadow: none; display: inline-table;">
                                <span> <i class="fa fa-phone" style="font-size: 19px; margin-left: 6px; margin-right: 6px;"> </i>Call Now</span>
                            </a>
                            <!-- <a style="display: inline;position: absolute;margin-top: -20px;margin-left: 10px;">
                                
                            </a> -->                                                     
                        </div>    

                        <div class="btn-box" id="mobile">
                            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
                            <style type="text/css">
                                .theme-btn-one::before{
                                    border: 0px solid;
                                }
                            </style>
                                

                            <a href="tel:{{getSettings('contact_no')}}" class="theme-btn-one" style="padding: 15px; background-color: #29aae3; border: 2px solid; border-color: #29aae3; box-shadow: none; width: 100%; color: white;">
                                <span> <i class="fa fa-phone" style="font-size: 19px; margin-left: 6px; margin-right: 6px;"> </i>Call Now</span>
                            </a>
                            <a href="https://wa.me/{{getSettings('whatsapp_link')}}" class="theme-btn-one" style="padding: 15px; background-color: #25d366; border: 2px solid; border-color: #25d366; box-shadow: none; width: 100%; color: white;">
                                <span> <i class="fa fa-whatsapp" style="font-size: 19px; margin-left: 6px; margin-right: 6px;"> </i>Whatsapp Chat</span>
                            </a>
                            <a href="mailto:{{getSettings('site_email')}}" class="theme-btn-one" style="padding: 15px; background-color: #E94C3D; border: 2px solid; border-color: #E94C3D; box-shadow: none; width: 100%; color: white;">
                                <span> <i class="fa fa-envelope" style="font-size: 19px; margin-left: 6px; margin-right: 6px;"> </i>Email</span>
                            </a>
                                  <center>
                                       <div style="margin-top: 5%;">
                                    <a href="{{getSettings('social_facebook')}}"style="padding: 6px;position: relative;">
                                        <i class="fab fa-facebook-f" id="icon1" style="font-size: 20px;" ></i>
                                    </a>
                                    
                                    <a href="{{getSettings('social_instagram')}}"style="padding: 6px; position: relative;">
                                        <i class="fab fa-instagram" id="icon1" style="font-size: 20px;" ></i>
                                    </a>  

                                    <a href="{{getSettings('social_tiktok')}}"style="padding: 6px;position: relative;">
                                        <i class="fab fa-tiktok" id="icon1" style="font-size: 20px;" ></i>
                                    </a>
                                    
                                    <a href="{{getSettings('social_youtube')}}"style="padding: 6px; position: relative;">
                                        <i class="fab fa-youtube" id="icon1" style="font-size: 20px;" ></i>
                                    </a> 
                                </div>  
                                  </center>                                           
                        </div>                    
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header"  style="background-color: #0d1927;">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="{{ route('home') }}"><img src="{{url('')}}/assets/images/logo2.png" alt="Header Logo Mi7"></a></figure>
                        </div>
                        <div class="menu-area">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="btn-box" style="display:flex;">
                            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
                            <style type="text/css">
                                .theme-btn-one::before{
                                    border: 0px solid;
                                }
                            </style>
                            <!--  <a href="https://wa.me/+971585201010" class="theme-btn-one" style="padding: 10px; background-color: #23d465; border: 1px solid; border-color: #23d465; box-shadow: none;">
                                <span><i class="fa fa-whatsapp" style="font-size: 19px; margin-left: 6px; margin-right: 6px;"> </i> Chat</span>
                            </a> -->
                            <div style="margin-right: 15px; margin-top: 5%;">
                                <a href="{{getSettings('social_facebook')}}"style="padding: 6px;position: relative;">
                                    <i class="fab fa-facebook-f" id="icon1" style="font-size: 18px;"></i>
                                </a>
                                
                                <a href="{{getSettings('social_instagram')}}"style="padding: 6px; position: relative;">
                                    <i class="fab fa-instagram" id="icon1" style="font-size: 18px;"></i>
                                </a>  
                                <a href="{{getSettings('social_tiktok')}}"style="padding: 6px;position: relative;">
                                    <i class="fab fa-tiktok" id="icon1" style="font-size: 18px;"></i>
                                </a>
                                
                                <a href="{{getSettings('social_youtube')}}"style="padding: 6px; position: relative;">
                                    <i class="fab fa-youtube" id="icon1" style="font-size: 18px;"></i>
                                </a> 
                            </div>

                            <a href="tel:{{getSettings('contact_no')}}" class="theme-btn-one" style="padding: 15px; background-color: #29aae3; border: 1px solid; border-color: #29aae3; box-shadow: none; display: inline-table;">
                                <span> <i class="fa fa-phone" style="font-size: 19px; margin-left: 6px; margin-right: 6px;"> </i>Call Now</span>
                            </a>                               
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->
            <!-- Mobile Menu  -->
            <div class="mobile-menu" style="background-color: #0d1927;">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><i class="fas fa-times"></i></div>
                
                <nav class="menu-box">
                    <div class="nav-logo"><a href="{{ route('home') }}"><img src="{{url('')}}/assets/images/logo2.png" alt="Header Logo Mi7" title=""></a></div>
                    <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                    <div class="contact-info">
                        <h4>Contact Info</h4>
                        <ul>
                            <li>Mon - Sat  9.00 - 18.00</li>
                            <li><a href="tel:{{getSettings('contact_no')}}">{{getSettings('contact_no')}}</a></li>
                            <li><a href="mailto:{{getSettings('site_email')}}">{{getSettings('site_email')}}</a></li>
                        </ul>
                    </div>
                    <div class="social-links">
                        <ul class="clearfix">
                            <li><a href="{{getSettings('social_facebook')}}"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="{{getSettings('social_instagram')}}"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="{{getSettings('social_tiktok')}}"><span class="fab fa-tiktok"></span></a></li>
                            <li><a href="{{getSettings('social_youtube')}}"><span class="fab fa-youtube"></span></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- End Mobile Menu -->