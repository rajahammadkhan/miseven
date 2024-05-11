<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    @php
      $route = Route::getCurrentRoute()->getName();
      $currentMenu = getCurrentMenu($route);

      if($currentMenu == null){
        $explodedPath = explode('/',Request::getPathInfo());
        
      }

      if($route == 'more_info'){
        $name = 'More Information';
      }else{
        $name = 'Blogs';
      }
        $abc= 'Mi7'
    @endphp
    
    <title>@yield('title'){{$currentMenu->meta_title ?? $currentService->meta_title ?? $currentBlog->meta_title ?? $blog->meta_title ??  $abc ?? null}}</title>


  <meta name="description" content="@yield('description'){{$currentMenu->meta_description ?? $currentService->meta_description ?? $currentBlog->meta_description ?? null}}">
  <meta name="keywords" content="@yield('keywords'){{$currentMenu->keywords ?? $currentService->keywords ?? $currentBlog->keywords ?? null}}">
  

    <!-- Fav Icon -->
    <link rel="icon" href="{{url('')}}/assets/images/favicon.webp" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{url('')}}/assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="{{url('')}}/assets/css/flaticon.css" rel="stylesheet">
    <link href="{{url('')}}/assets/css/owl.css" rel="stylesheet">
    <link href="{{url('')}}/assets/css/bootstrap.css" rel="stylesheet">
    <link href="{{url('')}}/assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="{{url('')}}/assets/css/animate.css" rel="stylesheet">
    <link href="{{url('')}}/assets/css/nice-select.css" rel="stylesheet">
    <link href="{{url('')}}/assets/css/color.css" rel="stylesheet">
    <link href="{{url('')}}/assets/css/style.css" rel="stylesheet">
    <link href="{{url('')}}/assets/css/responsive.css" rel="stylesheet">
    <style type="text/css">
    .float{
        position:fixed;
        width:50px;
        height:50px;
        bottom:40px;
        left:30px;
        background-color:#25d366;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        font-size:30px;
        /*box-shadow: 2px 2px 3px #999;*/
        z-index:1000;
    }

    .float:hover{
        color: white;
    }

    .my-float{
        margin-top:11px;
    }
    .header-lower{
        background-color: #0d1927 !important;
    }

    @media (max-width: 800px) {
        #div_1{
            visibility: hidden;
            margin-top: -50px;
        }
        #image_connect_desktop{
            display: none;
        }
        #header_logo{
            width: 70%; 
            min-height: 0px; 
        }
        .page-title.style-two{
            padding: 20px;
        }
        #phone{
            background-image: url('{{url('')}}/assets/images/icon/phone.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: left 20px;
            background-size: 30px;
        }
        #whatsapp{
            background-image: url('{{url('')}}/assets/images/icon/whatsapp.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: left 20px;
            background-size: 30px;
        }
        #facebook{
            background-image: url('{{url('')}}/assets/images/icon/facebook.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: left 20px;
            background-size: 30px;
        }
        #instagram{
            background-image: url('{{url('')}}/assets/images/icon/instagram.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: left 20px;
            background-size: 30px;
        }
        #tiktok{
            background-image: url('{{url('')}}/assets/images/icon/tiktok.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: left 20px;
            background-size: 30px;
        }
        #youtube{
            background-image: url('{{url('')}}/assets/images/icon/youtube.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: left 20px;
            background-size: 30px;
        }
        #linkedin{
            background-image: url('{{url('')}}/assets/images/icon/linkedin.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: left 20px;
            background-size: 30px;
        }
        #email{
            background-image: url('{{url('')}}/assets/images/icon/email.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: left 20px;
            background-size: 30px;
        }
        #logo2{
            background-image: url('{{url('')}}/assets/images/logo2.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: left 10px;
            background-size: 50px;
        }
        #map{
            background-image: url('{{url('')}}/assets/images/icon/map.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: left 20px;
            background-size: 30px;
        }
    }
    @media (min-device-width: 801px) and (max-device-width: 1249px) {
        #image_connect_desktop{
            display: none;
        }
        #header_logo{
            width: 15%; 
            min-height: 0px; 
            margin-top: 30px;
        }
        #phone{
            background-image: url('{{url('')}}/assets/images/icon/phone.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 80px;
            padding-top: 10px;
            background-size: 50px;
            height: 50px;
        }
        #whatsapp{
            background-image: url('{{url('')}}/assets/images/icon/whatsapp.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 80px;
            padding-top: 10px;
            background-size: 50px;
            height: 50px;
        }
        #facebook{
            background-image: url('{{url('')}}/assets/images/icon/facebook.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 80px;
            padding-top: 10px;
            background-size: 50px;
            height: 50px;
        }
        #instagram{
            background-image: url('{{url('')}}/assets/images/icon/instagram.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 80px;
            padding-top: 10px;
            background-size: 50px;
            height: 50px;
        }
        #tiktok{
            background-image: url('{{url('')}}/assets/images/icon/tiktok.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 80px;
            padding-top: 10px;
            background-size: 50px;
            height: 50px;
        }
        #youtube{
            background-image: url('{{url('')}}/assets/images/icon/youtube.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 80px;
            padding-top: 10px;
            background-size: 50px;
            height: 50px;
        }
        #linkedin{
            background-image: url('{{url('')}}/assets/images/icon/linkedin.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 80px;
            padding-top: 10px;
            background-size: 50px;
            height: 50px;
        }
        #email{
            background-image: url('{{url('')}}/assets/images/icon/email.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 80px;
            padding-top: 10px;
            background-size: 50px;
            height: 50px;
        }
        #logo2{
            background-image: url('{{url('')}}/assets/images/logo2.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 70px;
           padding-top: 10px;
            background-size: 70px;
            height: 50px;
        }
        #map{
            background-image: url('{{url('')}}/assets/images/icon/map.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 80px;
            padding-top: 10px;
            background-size: 50px;
            height: 50px;
        }
    }
    @media (min-device-width: 1250px) and (max-device-width: 1599px) {
        #image_connect_desktop{
            display: none;
        }
        #header_logo{
            width: 15%; 
            min-height: 0px; 
            margin-top: 30px;
        }
        #phone{
            background-image: url('{{url('')}}/assets/images/icon/phone.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 150px;
            padding-top: 10px;
            background-size: 50px;
            height: 50px;
        }
        #whatsapp{
            background-image: url('{{url('')}}/assets/images/icon/whatsapp.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 150px;
            padding-top: 10px;
            background-size: 50px;
            height: 50px;
        }
        #facebook{
            background-image: url('{{url('')}}/assets/images/icon/facebook.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 150px;
            padding-top: 10px;
            background-size: 50px;
            height: 50px;
        }
        #instagram{
            background-image: url('{{url('')}}/assets/images/icon/instagram.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 150px;
            padding-top: 10px;
            background-size: 50px;
            height: 50px;
        }
        #tiktok{
            background-image: url('{{url('')}}/assets/images/icon/tiktok.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 150px;
            padding-top: 10px;
            background-size: 50px;
            height: 50px;
        }
        #youtube{
            background-image: url('{{url('')}}/assets/images/icon/youtube.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 150px;
            padding-top: 10px;
            background-size: 50px;
            height: 50px;
        }
        #linkedin{
            background-image: url('{{url('')}}/assets/images/icon/linkedin.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 150px;
            padding-top: 10px;
            background-size: 50px;
            height: 50px;
        }
        #email{
            background-image: url('{{url('')}}/assets/images/icon/email.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 150px;
            padding-top: 10px;
            background-size: 50px;
            height: 50px;
        }
        #logo2{
            background-image: url('{{url('')}}/assets/images/logo2.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 140px;
           padding-top: 10px;
            background-size: 70px;
            height: 50px;
        }
        #map{
            background-image: url('{{url('')}}/assets/images/icon/map.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 150px;
            padding-top: 10px;
            background-size: 50px;
            height: 50px;
        }
    }

    @media (min-device-width: 1600px) and (max-device-width: 9999px) {
        #image_connect_desktop{
            display: none;
        }
        #header_logo{
            width: 15%; 
            min-height: 0px; 
            margin-top: 30px;
        }

        #phone{
            background-image: url('{{url('')}}/assets/images/icon/phone.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 180px;
            padding-top: 10px;
            background-size: 50px;
            height: 50px;
        }
        #whatsapp{
            background-image: url('{{url('')}}/assets/images/icon/whatsapp.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 180px;
            padding-top: 10px;
            background-size: 50px;
            height: 50px;
        }
        #facebook{
            background-image: url('{{url('')}}/assets/images/icon/facebook.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 180px;
            padding-top: 10px;
            background-size: 50px;
            height: 50px;
        }
        #instagram{
            background-image: url('{{url('')}}/assets/images/icon/instagram.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 180px;
            padding-top: 10px;
            background-size: 50px;
            height: 50px;
        }
        #tiktok{
            background-image: url('{{url('')}}/assets/images/icon/tiktok.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 180px;
            padding-top: 10px;
            background-size: 50px;
            height: 50px;
        }
        #youtube{
            background-image: url('{{url('')}}/assets/images/icon/youtube.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 180px;
            padding-top: 10px;
            background-size: 50px;
            height: 50px;
        }
        #linkedin{
            background-image: url('{{url('')}}/assets/images/icon/linkedin.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 180px;
            padding-top: 10px;
            background-size: 50px;
            height: 50px;
        }
        #email{
            background-image: url('{{url('')}}/assets/images/icon/email.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 180px;
            padding-top: 10px;
            background-size: 50px;
            height: 50px;
        }
        #logo2{
            background-image: url('{{url('')}}/assets/images/logo2.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 170px;
           padding-top: 10px;
            background-size: 70px;
            height: 50px;
        }
        #map{
            background-image: url('{{url('')}}/assets/images/icon/map.png');
            background-repeat: no-repeat;
            background-position-y: center;
            background-position-x: 180px;
            padding-top: 10px;
            background-size: 50px;
            height: 50px;
        }
    }
    </style>
    
</head>
<!-- page wrapper -->
<body>
    <div class="boxed_wrapper" style="padding-right:0px ;">
        <!-- preloader -->
        <div class="preloader"></div>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- <a href="https://wa.me/{{getSettings('whatsapp_link')}}" class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a> -->
        <!-- preloader -->

<!-- Page Title -->
        <section class="page-title style-two">
            <div class="auto-container">
                <div class="content-box centred mr-0">
                    <div class="title">
                         <img src="{{url('')}}/assets/images/logo2.png" alt="" id="header_logo">
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- End Page Title -->
        <hr style="border-top-color: rgba(41, 170, 227,0.1);">


        <!-- news-section -->
        <section class="news-section sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">

                    <h2>Connect</h2>
                </div>
                <div class="row clearfix" id="image_connect_desktop">
                   
                    <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                        <a href="tel:+971585201010">
                            <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="margin: 15px 0px;">
                                <div class="inner-box">
                                     <center>                                 
                                    <div class="lower-content" style="padding:  10px 10px 10px 10px;">
                                        <h3 style=" margin-bottom: 0px;"><img src="{{url('')}}/assets/images/icon/phone.png" alt="" style="width: 10%; min-height: 0px; margin-right: 30px;">Call Now</h3>
                                    </div>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>
                    

                    <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                        <a href="https://wa.me/+971585201010">
                            <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="margin: 15px 0px;">
                                <div class="inner-box">
                                     <center>                                 
                                    <div class="lower-content" style="padding:  10px 10px 10px 10px;">
                                        <h3 style=" margin-bottom: 0px;"><img src="{{url('')}}/assets/images/icon/whatsapp.png" alt="" style="width: 10%; min-height: 0px; margin-right: 30px;">WhatsApp</h3>
                                    </div>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                        <a href="https://www.facebook.com/mi7cars/">
                            <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="margin: 15px 0px;">
                                <div class="inner-box">
                                     <center>                                 
                                    <div class="lower-content" style="padding:  10px 10px 10px 10px;">
                                        <h3 style=" margin-bottom: 0px;"><img src="{{url('')}}/assets/images/icon/facebook.png" alt="" style="width: 10%; min-height: 0px; margin-right: 30px;">Facebook</h3>
                                    </div>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                        <a href="https://www.instagram.com/mi7cars/">
                            <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="margin: 15px 0px;">
                                <div class="inner-box">
                                     <center>                                 
                                    <div class="lower-content" style="padding:  10px 10px 10px 10px;">
                                        <h3 style=" margin-bottom: 0px;"><img src="{{url('')}}/assets/images/icon/instagram.png" alt="" style="width: 10%; min-height: 0px; margin-right: 30px;">Instagram</h3>
                                    </div>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                        <a href="#">
                            <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="margin: 15px 0px;">
                                <div class="inner-box">
                                     <center>                                 
                                    <div class="lower-content" style="padding:  10px 10px 10px 10px;">
                                        <h3 style=" margin-bottom: 0px;"><img src="{{url('')}}/assets/images/icon/tiktok.png" alt="" style="width: 10%; min-height: 0px; margin-right: 30px;">Tiktok</h3>
                                    </div>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                        <a href="#">
                            <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="margin: 15px 0px;">
                                <div class="inner-box">
                                     <center>                                 
                                    <div class="lower-content" style="padding:  10px 10px 10px 10px;">
                                        <h3 style=" margin-bottom: 0px;"><img src="{{url('')}}/assets/images/icon/youtube.png" alt="" style="width: 10%; min-height: 0px; margin-right: 30px;">Youtube</h3>
                                    </div>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                        <a href="#">
                            <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="margin: 15px 0px;">
                                <div class="inner-box">
                                     <center>                                 
                                    <div class="lower-content" style="padding:  10px 10px 10px 10px;">
                                        <h3 style=" margin-bottom: 0px;"><img src="{{url('')}}/assets/images/icon/linkedin.png" alt="" style="width: 10%; min-height: 0px; margin-right: 30px;">Linkedin</h3>
                                    </div>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                        <a href="mailto:info@mi7.ae">
                            <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="margin: 15px 0px;">
                                <div class="inner-box">
                                     <center>                                 
                                    <div class="lower-content" style="padding:  10px 10px 10px 10px;">
                                        <h3 style=" margin-bottom: 0px;"><img src="{{url('')}}/assets/images/icon/email.png" alt="" style="width: 10%; min-height: 0px; margin-right: 30px;">Email</h3>
                                    </div>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-1 news-block" id="div_1">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="margin: 15px 0px;">
                            <div class="inner-box">
                                 <center>                                 
                                
                                </center>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                        <a href="https://mi7.ae">
                            <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="margin: 15px 0px;">
                                <div class="inner-box">
                                     <center>                                 
                                    <div class="lower-content" style="padding:  10px 10px 10px 10px;">
                                        <h3 style=" margin-bottom: 0px;"><img src="{{url('')}}/assets/images/logo2.png" alt="" style="width: 18%; min-height: 0px; margin-right: 30px;">Website</h3>
                                    </div>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-1 news-block" id="div_1">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="margin-top: 20px;">
                            <div class="inner-box">
                                 <center>                                 
                                
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix" id="image_connect_mobile">
                   
                    <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                        <a href="tel:+971585201010">
                            <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="margin-top: 20px;">
                                <div class="inner-box">
                                    <center>                                 
                                        <div class="lower-content" style="padding:  10px 10px 10px 10px;">
                                            <h3 style=" margin-bottom: 0px;" id="phone">Call Now</h3>
                                        </div>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>
                    

                    <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                        <a href="https://wa.me/+971585201010">
                            <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="margin-top: 20px;">
                                <div class="inner-box">
                                     <center>                                 
                                    <div class="lower-content" style="padding:  10px 10px 10px 10px;">
                                        <h3 style=" margin-bottom: 0px;" id="whatsapp">WhatsApp</h3>
                                    </div>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                        <a href="https://www.facebook.com/mi7cars/">
                            <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="margin-top: 20px;">
                                <div class="inner-box">
                                     <center>                                 
                                    <div class="lower-content" style="padding:  10px 10px 10px 10px;">
                                        <h3 style=" margin-bottom: 0px;" id="facebook">Facebook</h3>
                                    </div>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                        <a href="https://www.instagram.com/mi7cars/">
                            <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="margin-top: 20px;">
                                <div class="inner-box">
                                     <center>                                 
                                    <div class="lower-content" style="padding:  10px 10px 10px 10px;">
                                        <h3 style=" margin-bottom: 0px;" id="instagram">Instagram</h3>
                                    </div>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                        <a href="#">
                            <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="margin-top: 20px;">
                                <div class="inner-box">
                                     <center>                                 
                                    <div class="lower-content" style="padding:  10px 10px 10px 10px;">
                                        <h3 style=" margin-bottom: 0px;" id="tiktok">Tiktok</h3>
                                    </div>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                        <a href="#">
                            <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="margin-top: 20px;">
                                <div class="inner-box">
                                     <center>                                 
                                    <div class="lower-content" style="padding:  10px 10px 10px 10px;">
                                        <h3 style=" margin-bottom: 0px;" id="youtube">Youtube</h3>
                                    </div>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                        <a href="#">
                            <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="margin-top: 20px;">
                                <div class="inner-box">
                                     <center>                                 
                                    <div class="lower-content" style="padding:  10px 10px 10px 10px;">
                                        <h3 style=" margin-bottom: 0px;" id="linkedin">Linkedin</h3>
                                    </div>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                        <a href="mailto:info@mi7.ae">
                            <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="margin-top: 20px;">
                                <div class="inner-box">
                                     <center>                                 
                                    <div class="lower-content" style="padding:  10px 10px 10px 10px;">
                                        <h3 style=" margin-bottom: 0px;" id="email">Email</h3>
                                    </div>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- <div class="col-lg-3 col-md-6 col-sm-1 news-block" id="div_1">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="margin-top: 20px;">
                            <div class="inner-box">
                                 <center>                                 
                                
                                </center>
                            </div>
                        </div>
                    </div> -->

                    <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                        <a href="https://mi7.ae">
                            <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="margin-top: 20px;">
                                <div class="inner-box">
                                     <center>                                 
                                    <div class="lower-content" style="padding:  10px 10px 10px 10px;">
                                        <h3 style=" margin-bottom: 0px;" id="logo2">Website</h3>
                                    </div>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                        <a href="https://www.google.com/maps?ll=25.181282,55.262166&z=15&t=m&hl=en&gl=US&mapclient=embed&cid=17424979930363765039">
                            <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="margin-top: 20px;">
                                <div class="inner-box">
                                     <center>                                 
                                    <div class="lower-content" style="padding:  10px 10px 10px 10px;">
                                        <h3 style=" margin-bottom: 0px;" id="map">Location</h3>
                                    </div>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- <div class="col-lg-3 col-md-6 col-sm-1 news-block" id="div_1">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="margin-top: 20px;">
                            <div class="inner-box">
                                 <center>                                 
                                
                                </center>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- news-section end -->
<!--Scroll to top-->
    </div>

    <!-- jequery plugins -->
    <script src="{{url('')}}/assets/js/jquery.js"></script>
    <script src="{{url('')}}/assets/js/popper.min.js"></script>
    <script src="{{url('')}}/assets/js/bootstrap.min.js"></script>
    <script src="{{url('')}}/assets/js/owl.js"></script>
    <script src="{{url('')}}/assets/js/wow.js"></script>
    <script src="{{url('')}}/assets/js/validation.js"></script>
    <script src="{{url('')}}/assets/js/jquery.fancybox.js"></script>
    <script src="{{url('')}}/assets/js/appear.js"></script>
    <script src="{{url('')}}/assets/js/scrollbar.js"></script>
    <script src="{{url('')}}/assets/js/jquery.nice-select.min.js"></script>
     <script src="{{url('')}}/assets/js/bxslider.js"></script>

    <!-- main-js -->
    <script src="{{url('')}}/assets/js/script.js"></script>
    
<script type="text/javascript">
    // check for saved 'darkMode' in localStorage
let darkMode = localStorage.getItem("darkMode");

const darkModeToggle = document.querySelector("#dark-mode-toggle");

const enableDarkMode = () => {
  // 1. Add the class to the body
  document.body.classList.add("darkmode");
  $('.dark-mode-toggle').prop('checked', true);
  // 2. Update darkMode in localStorage
  localStorage.setItem("darkMode", "enabled");
};

const disableDarkMode = () => {
  // 1. Remove the class from the body
  document.body.classList.remove("darkmode");
  $('.dark-mode-toggle').prop('checked', false);
  // 2. Update darkMode in localStorage
  localStorage.setItem("darkMode", " ");
};

// If the user already visited and enabled darkMode
// start things off with it on
if (darkMode == "enabled") {
  enableDarkMode();
}

// When someone clicks the button
darkModeToggle.addEventListener("click", () => {
  // get their darkMode setting
  darkMode = localStorage.getItem("darkMode");

  // if it not current enabled, enable it
  if (darkMode !== "enabled") {
    enableDarkMode();
    // if it has been enabled, turn it off
  } else {
    disableDarkMode();
  }
});

</script>
</body><!-- End of .page_wrapper -->
</html>
