@extends('layouts.master')

@section('top-styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet"> 
<style type="text/css">
    @media (max-width: 620px){

    .slider-text{
            display: none;
            z-index: 10;
            position: absolute;
            top: 50%;
            text-align: center;
                font-family: 'Russo One', sans-serif;
            font-size: 4rem;
        }

    }
    @media (max-width: 800px) {
        .slider-text{
            display: none;
            z-index: 10;
            position: absolute;
            top: 50%;
            text-align: center;
                font-family: 'Russo One', sans-serif;
            font-size: 4rem;
        }
        #content-box{      
          position: absolute;
          z-index: 100; 
          margin-top: -310px;
        }
        #banner-section{
            padding: 0px 0px 0px 0px;
        }

        .banner-section .form-inner .pattern-layer{
          width: 100%;
        }
        .banner-section.style-two .form-inner{
          width: 100%;
        }
        .sec-pad {
          padding: 0px 0px 0px 0px !important;
        }
        #about-section{
            padding: 430px 0px 20px 0px;
        }
        #form-inner-banner{
            margin-top: 20rem;
        }
        .feature-block-one .inner-box .lower-content .lower-box::before {
          position: absolute;
          content: '';
          background: #edeff2;
          width: 100%;
          height: 1px;
          left: 0px;
          top: 0px;
        }
        #hr1{
            visibility: visible; 
            margin-top: 0rem;
            margin-bottom: 0rem;
        }
        #banner-img{
            opacity: 0.3;
            object-fit: cover;
            height: auto;
            width: 100%;
        }
    }


    @media (min-device-width: 1250px) and (max-device-width: 1599px) {
        #content-box{     
          position: absolute ;
          z-index: 100; 
          margin-top: -365px;
        }
        #banner-section{
            padding: 0px 0px 0px 0px;
        }
        #mySwiper{
            margin-top: -180px;
        }
        #about-section{
            padding: 120px 0px 20px 0px;
        }
        #form-inner-banner{
            margin-top: 15rem;
        }
        #hr1{
            visibility: hidden; 
            margin-top: 0rem;
            margin-bottom: 0rem;
        }
        #banner-img{
            opacity: 0.3; 
            object-fit: cover; 
            height: 620px; 
            width: 100%;
        }
    }

    @media (min-device-width: 1600px) and (max-device-width: 9999px) {
        #content-box{      
          position: absolute ;
          z-index: 100; 
          margin-top: -385px;
        }
        #banner-section{
            padding: 0px 0px 0px 0px;
        }
        #mySwiper{
            margin-top: -180px;
        }
        #about-section{
            padding: 120px 0px 20px 0px;
        }
        #form-inner-banner{
            margin-top: 15rem;
        }
        #hr1{
            visibility: hidden; 
            margin-top: 0rem;
            margin-bottom: 0rem;
        }
        #banner-img{
            opacity: 0.3; 
            object-fit: cover; 
            height: 620px; 
            width: 100%;
        }
    }  
    .hover01 figure img {
        -webkit-transform: scale(1);
        transform: scale(1);
        -webkit-transition: .3s ease-in-out;
        transition: .3s ease-in-out;
    }
    .hover01 figure:hover img {
        -webkit-transform: scale(1.3);
        transform: scale(1.3);
    }
    .banner-section .content-box .input-inner .form-group i{
        display: inline;
    }
    .slider-text{
        z-index: 10;
        position: sticky;
        top: 50%;
        text-align: center;
        font-family: 'Russo One', sans-serif;
        font-size: 4rem;
        color: white;
    }
</style>
@endsection

@section('content')  
        <!-- banner-section -->
        <section class="banner-section style-two style-four centred" id="banner-section" >
            <div class="swiper mySwiper" id="mySwiper" style="background-color: #0d1927; ">
              <div class="swiper-wrapper">
                <div class="swiper-slide" style="width:100%;">
                    <h1 class="slider-text">Luxury Car Rental In <br> Dubai</h1>
                    <img src="{{url('')}}/assets/images/banner1.jpg" id="banner-img">
                </div>
                <div class="swiper-slide" style="width:100%;">
                    <h1 class="slider-text">Wide Range of Luxury &<br>Sports Cars</h1>
                    <img src="{{url('')}}/assets/images/banner2.jpg" id="banner-img">
                </div>
                <div class="swiper-slide" style="width:100%;">
                    <h1 class="slider-text">Rent Your Dream <br> Cars Daily</h1>
                    <img src="{{url('')}}/assets/images/banner3.jpg" id="banner-img">
                </div>
                <div class="swiper-slide" style="width:100%;">
                    <h1 class="slider-text">Drive Your Dream <br> Car With Mi7</h1>
                    <img src="{{url('')}}/assets/images/banner4.jpg" id="banner-img">
                </div>
                <div class="swiper-slide" style="width:100%;">
                    <h1 class="slider-text">Rent Supercar <br> Dubai</h1>
                    <img src="{{url('')}}/assets/images/banner5.jpg" id="banner-img">
                </div>
              </div>
            </div>
            <div class="auto-container" >
                <div class="content-box" id="content-box">
                   <!--  <div class="text">
                        <h1 style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight: 710;">MI7<br />Rent A Car in Dubai</h1>
                        <p>Drive your dream car Daily with MI7.</p>
                    </div> -->
                    <div class="form-inner" id="form-inner-banner">
                        <div class="pattern-layer" style="background-image: url({{url('')}}/assets/images/shape/shape-13.png);"></div>
                        <div id="form-shape">
                            <img src="{{url('')}}/assets/images/shape/about-shape-1.png" style="position: absolute; top: 0; right: 0; width: 30%;">
                            <img src="{{url('')}}/assets/images/shape/about-shape-2.png" style="position: absolute;bottom: 0;left: 0; width: 30%;">
                        </div>
                        <form action="{{route('vehicles.search')}}" method="post">
                            @csrf
                        <ul class="radio-select-box clearfix">
                            <li>
                                <div class="single-checkbox">
                                    <input type="radio" name="ra" value="" id="check1" checked="">
                                    <label for="check1"><span></span>All</label>
                                </div>
                            </li>
                            <li>
                                <div class="single-checkbox">
                                    <input type="radio" name="ra" value="SUV" id="check2">
                                    <label for="check2"><span></span>SUV</label>    
                                </div>
                            </li>
                            <li>
                                <div class="single-checkbox">
                                    <input type="radio" name="ra" value="Luxury" id="check3">
                                    <label for="check3"><span></span>Luxury</label>
                                </div>
                            </li>
                            <li>
                                <div class="single-checkbox">
                                    <input type="radio" name="ra" value="Sports" id="check4">
                                    <label for="check4"><span></span>Sports</label>
                                </div>
                            </li>
                            <li>
                                <div class="single-checkbox">
                                    <input type="radio" name="ra" value="Coupe" id="check5">
                                    <label for="check5"><span></span>Coupe</label>
                                </div>
                            </li>
                            <li>
                                <div class="single-checkbox">
                                    <input type="radio" name="ra" value="Convertible" id="check6">
                                    <label for="check6"><span></span>Convertible</label>
                                </div>
                            </li>
                        </ul>
                        
                            <!--<div class="input-inner clearfix">-->
                            <!--    <div class="form-group">-->
                            <!--        <i class="icon-calendar" style="color: #29aae3;"></i>-->
                            <!--        <input type="text" class="form1" name="start_date" id="txtDate1" placeholder="Start Date" onfocus="(this.type='date')" onblur="(this.type='text')" data-date-inline-picker="true">-->
                            <!--    </div>-->
                            <!--    <div class="form-group">-->
                            <!--        <i class="icon-calendar" style="color: #29aae3;"></i>-->
                            <!--        <input type="text" class="form1" name="end_date" id="txtDate2" placeholder="End Date" onfocus="(this.type='date')" onblur="(this.type='text')" data-date-inline-picker="true">-->
                            <!--    </div>-->
                                
                            <!--    <div class="form-group">-->
                            <!--        <i class="icon-clock" style="color: #29aae3;"></i>-->
                            <!--        <input type="text" class="form1" name="start_time" placeholder="Start Time" onfocus="(this.type='time')" onblur="(this.type='text')">-->
                            <!--    </div>-->
                            <!--    <div class="form-group">-->
                            <!--        <i class="icon-clock" style="color: #29aae3;"></i>-->
                            <!--        <input type="text" class="form1" name="end_time" placeholder="End Time" onfocus="(this.type='time')" onblur="(this.type='text')">-->
                            <!--    </div>-->
                            <!--    <div class="btn-box">-->
                            <!--        <button type="submit"><i class="icon-2"></i>Search Car</button>-->
                            <!--    </div>-->
                            <!--</div>-->
                            
                            <div class="input-inner clearfix">
                                <div class="form-group">
                                    <i class="icon-calendar" style="color: #29aae3;"></i>
                                    <input type="date" class="form1" name="start_date" id="txtDate1" placeholder="Start Date">
                                </div>
                                <hr id="hr1">
                                <div class="form-group">
                                    <i class="icon-calendar" style="color: #29aae3;"></i>
                                    <input type="date" class="form1" name="end_date" id="txtDate2" placeholder="End Date">
                                </div>
                                <hr id="hr1">
                                <div class="form-group">
                                    <i class="icon-clock" style="color: #29aae3;"></i>
                                    <input type="time" class="form1" name="start_time" placeholder="Start Time" >
                                </div>
                                <hr id="hr1">
                                <div class="form-group">
                                    <i class="icon-clock" style="color: #29aae3;"></i>
                                    <input type="time" class="form1" name="end_time" placeholder="End Time">
                                </div>
                                <div class="btn-box">
                                    <button type="submit"><i class="icon-2"></i>Search Car</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </section>
        <!-- banner-section end -->
        
        <br>
        <br>
        <!-- about-section -->
        <section class="about-section" id="about-section">
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

        <!-- category-section -->
        <section class="category-section centred sec-pad" style="padding: 0px 0px 30px 0px;">
            <div class="pattern-layer"></div>
            <div class="auto-container">
                <div class="sec-title">
                    <!-- <span>Categories</span> -->
                    <h2>Vehicle Type</h2>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod tempor incididunt labore <br />dolore magna aliqua enim.</p> -->
                </div>
                <div class="five-item-carousel owl-carousel owl-nav-none">
                    <a href="{{ route('get_vehicles_against_type', 'SUV') }}">
                    <div class="category-block-one">
                        <div class="inner-box">
                            <div class="shape">
                                <div class="shape-1" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                                <div class="shape-2" style="background-image: url(assets/images/shape/shape-2.png);"></div>
                            </div>
                            <div class="icon-box hover01">
                                <figure>
                                    <img src="{{url('')}}/assets/images/type/suv.png" alt="Mi7">
                                </figure>
                            </div>
                            <h5 style="color: white;">SUV</h5>
                            <span>
                                {{ $suvcount }}
                            </span>
                        </div>
                    </div>
                    </a>
                    <a href="{{ route('get_vehicles_against_type', 'Luxury') }}">
                    <div class="category-block-one">
                        <div class="inner-box">
                            <div class="shape">
                                <div class="shape-1" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                                <div class="shape-2" style="background-image: url(assets/images/shape/shape-2.png);"></div>
                            </div>
                            <div class="icon-box hover01">
                                <figure>
                                    <img src="{{url('')}}/assets/images/type/luxury.png" alt="Mi7">
                                </figure>
                            </div>
                            <h5 style="color: white;">Luxury</h5>
                            <span>
                                {{ $luxurycount }}
                            </span>
                        </div>
                    </div>
                    </a>
                    <a href="{{ route('get_vehicles_against_type', 'Sports') }}">
                    <div class="category-block-one">
                        <div class="inner-box">
                            <div class="shape">
                                <div class="shape-1" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                                <div class="shape-2" style="background-image: url(assets/images/shape/shape-2.png);"></div>
                            </div>
                            <div class="icon-box hover01">
                                <figure>
                                    <img src="{{url('')}}/assets/images/type/sport.png" alt="Mi7">
                                </figure>
                            </div>
                            <h5 style="color: white;">Sports</h5>
                            <span>
                                {{ $sportcount }}
                            </span>
                        </div>
                    </div>
                    </a>
                    <a href="{{ route('get_vehicles_against_type', 'Coupe') }}">
                    <div class="category-block-one">
                        <div class="inner-box">
                            <div class="shape">
                                <div class="shape-1" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                                <div class="shape-2" style="background-image: url(assets/images/shape/shape-2.png);"></div>
                            </div>
                            <div class="icon-box hover01">
                                <figure>
                                    <img src="{{url('')}}/assets/images/type/coupe.png" alt="Mi7">
                                </figure>
                            </div>
                            <h5 style="color: white;">Coupe</h5>
                            <span>
                                {{ $coupecount }}
                            </span>
                        </div>
                    </div>
                    </a>
                    <a href="{{ route('get_vehicles_against_type', 'Convertible') }}">
                    <div class="category-block-one">
                        <div class="inner-box">
                            <div class="shape">
                                <div class="shape-1" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                                <div class="shape-2" style="background-image: url(assets/images/shape/shape-2.png);"></div>
                            </div>
                            <div class="icon-box hover01">
                                <figure>
                                    <img src="{{url('')}}/assets/images/type/convertible.png" alt="Mi7">
                                </figure>
                            </div>
                            <h5 style="color: white;">Convertible</h5>
                            <span>
                                {{ $convertiblecount }}
                            </span>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- category-section end --> 

        <!-- feature-style-two -->
        <section class="feature-style-two">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h2>Latest Cars</h2>
                </div>
                <div class="tabs-box">
                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-1">
                            <div class="row clearfix">
                                @foreach($featured_vehicles as $vehicle)
                                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                                        <div class="feature-block-one wow fadeInDown animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image"><a href="{{route('vehicle_detail',$vehicle->slug)}}"><img src="{{config('miseven.file_path').$vehicle->featured_image}}" alt="{{strtoupper($vehicle->name)}}"></a></figure>
                                                    
                                                </div>
                                                    <div style="background-color: #203145; padding-top: 5px; border-radius: 30px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                        <div class="lower-content">
                                                            <div class="author-box">
                                                                <div class="inner">
                                                                    @foreach($brands as $vehicles)
                                                                        @if($vehicles->id === $vehicle->brand_id)
                                                                            <img src="{{config('miseven.file_path').$vehicles->logo}}" alt="{{$vehicles->name}}">                                                           
                                                                            <h6>{{$vehicles->name}}<i class="icon-18"></i></h6>
                                                                        @endif
                                                                    @endforeach
                                                                    <span>{{$vehicle->model_year}}</span>
                                                                </div>
                                                            </div>

                                                            <div class="category"><i class="fas fa-car"></i><p style="color: white;">{{($vehicle->car_type)}}</p></div>
                                                            <h3 ><a href="{{route('vehicle_detail',$vehicle->slug)}}" style="color: white;">{{strtoupper($vehicle->name)}}</a></h3>
                                                            <h3 style="color: black; font-size: 20px;">
                                                                <span style="color: #29aae3;">AED {{number_format($vehicle->price)}}</span>                                                            
                                                            </h3>
                                                            <br>
                                                            <div class="lower-box">
                                                                <div class="row" style="">
                                                                    @foreach($vehicle->features as $feature)
                                                                        <div class="col-3 col-lg-3" style="text-align: center; padding: 10px; "  >
                                                                            <p style="font-weight: 1000; color: white;">{{$feature->value}}</p>
                                                                            <p style="color: white;"><b>{{$feature->name}}</b></p>                                                        
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>                                
                            </div>
                            <center>
                                <div class="more-btn"><a href="{{ route('all_vehicles') }}" class="theme-btn-one">Show More</a></div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-style-two end -->

        <!-- category-section -->
        <section class="category-section centred sec-pad" style="padding: 0px 0px 20px 0px !important;">
            <div class="pattern-layer"></div>
            <div class="auto-container">
                <div class="swiper mySwiper1">
                    <div class="swiper-wrapper">
                        @foreach($brands as $brand)
                            <div class="swiper-slide"><a href="{{ route('get_vehicles_against_brand', $brand->slug) }}"><img src="{{config('miseven.file_path').$brand->color_logo}}" width="140" alt="{{$brand->name}}"></a></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- category-section end -->  

        <!-- place-section -->
        <section class="place-section centred">
            <div class="auto-container">
                <div class="inner-content" style="padding: 0px 0px 90px 0px;">
                    <div class="sec-title centred">
                        <h2>Top Brands</h2>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 place-block">
                            <div class="place-block-one wow fadeInDown animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{url('')}}/assets/images/cars/audi.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <div class="inner">
                                            <h3><a href="{{url('')}}/all-vehicles/audi">Audi</a></h3>
                                            <span>{{ $audicount }} Listing</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 place-block">
                            <div class="place-block-one wow fadeInDown animated animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{url('')}}/assets/images/cars/nissan.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <div class="inner">
                                            <h3><a href="{{url('')}}/all-vehicles/nissan">Nissan</a></h3>
                                            <span>{{ $nissancount }} Listing</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 place-block">
                            <div class="place-block-one wow fadeInDown animated animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{url('')}}/assets/images/cars/rangerover.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <div class="inner">
                                            <h3><a href="{{url('')}}/all-vehicles/range-rover">Range Rover</a></h3>
                                            <span>{{ $rangerovercount }} Listing</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 place-block">
                            <div class="place-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{url('')}}/assets/images/cars/mercedes.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <div class="inner">
                                            <h3><a href="{{url('')}}/all-vehicles/mercedes">Mercedes</a></h3>
                                            <span>{{ $mercedescount }} Listing</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 place-block">
                            <div class="place-block-one wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{url('')}}/assets/images/cars/lamborghini.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <div class="inner">
                                            <h3><a href="{{url('')}}/all-vehicles/lamborghani">Lamborghini</a></h3>
                                            <span>{{ $lamborghinicount }} Listing</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- place-section end -->

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

        <!-- news-section -->
        <section class="news-section sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h2>Blogs</h2>
                </div>
                <div class="row clearfix">
                    @foreach($blogs as $blog)
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="{{config('miseven.file_path').$blog->image}}" alt="{{$blog->name}}">
                                        <a href="{{route('blog_detail',$blog->slug)}}"><i class="fas fa-link"></i></a>
                                    </figure>
                                    <div class="lower-content">
                                        <h3 style="height: 40px;"><a href="{{route('blog_detail',$blog->slug)}}">{{$blog->name}}</a></h3>
                                        <hr style="border-top-color: rgba(41, 170, 227, 0.2);">
                                        <p style="height: 210px;">{{$blog->short_description}}</p>
                                        <span class="post-info">{{date('F d, Y',strtotime($blog->date))}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <br>
                <center>
                    <div class="more-btn"><a href="{{ route('blogs') }}" class="theme-btn-one">Show More</a></div>
                </center>
            </div>
        </section>
        <!-- news-section end -->
@endsection

@section('bottom-mid-scripts')
@endsection

@section('bottom-bot-scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript">
              $(function(){
        var dtToday = new Date();
        
        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var maxday = dtToday.getDate() + 1;
        var year = dtToday.getFullYear();
        if(month < 10)
            month = '0' + month.toString();
        if(day < 10)
            day = '0' + day.toString();
        if(maxday < 10)
            maxday = '0' + maxday.toString();
        
        var minDate= year + '-' + month + '-' + day;
        var maxDate= year + '-' + month + '-' + maxday;
        
        $('#txtDate1').attr('min', minDate);
        $('#txtDate2').attr('min', maxDate);
    });
    </script>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 0,
        centeredSlides: true,
        loop: true,
        autoplay: {
          delay: 7500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
    <script type="text/javascript">
        var mySwiper = new Swiper ('.mySwiper1', 
        {
        speed:900,
        autoplay: 
        {
          delay: 2000,
        },
        loop: true,
        slidesPerView: 6,
        spaceBetween: 10,
        slidesPerGroup: 1,
        breakpoints: {
          // when window width is >= 320px
          0: {
            slidesPerView: 2,
          },
          // when window width is >= 480px
          576: {
            slidesPerView: 2,
          },
          // when window width is >= 640px
          768: {
            slidesPerView: 2,
          },
          992: {
            slidesPerView: 6,
          },
        },
        }); 
    </script>
@endsection