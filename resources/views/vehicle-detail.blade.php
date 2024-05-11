@extends('layouts.master')

@php
    $explodedName = explode(" ", $vehicle->name);
    $first = preg_replace('/\W\w+\s*(\W*)$/', '$1', $vehicle->name);
@endphp
@section('title') {{$first}} {{$explodedName[count($explodedName)-1]}} | @endsection

@section('top-styles')
<style type="text/css">
    @media (max-width: 800px) {
        #space{
          visibility: hidden;
        }

        #img-ca{      
          width: 100% !important;
          height: 280px;
          object-fit: cover;
        }
        
        #img-caa{      
          width: 100% !important;
          height: 95px;
          object-fit: cover;
        }
        #right-side{
        }
        #left-side{
        }
    }

    @media (min-device-width: 1250px) and (max-device-width: 1599px) {
        #img-ca{     
          width: 100% !important;
          height: 530px;
          object-fit: cover;
        }
        
        #img-caa{      
          width: 100% !important;
          height: 100px;
          object-fit: cover;
        }
        #right-side{
            padding-right: 15px; 
            padding-left: 5px;
        }
        #left-side{
            padding-right: 5px; 
            padding-left: 15px;
        }
      }

    @media (min-device-width: 1600px) and (max-device-width: 2400px) {
        #img-ca{      
          width: 100% !important;
          height: 530px;
          object-fit: cover;
        }
        
        #img-caa{      
          width: 100% !important;
          height: 100px;
          object-fit: cover;
        }
        #right-side{
            padding-right: 15px; 
            padding-left: 5px;
        }
        #left-side{
            padding-right: 5px; 
            padding-left: 15px;
        }
    } 
    .header-lower{
        background-color: #0d1927 !important;
    }
</style>
@endsection

@section('content')
@php
    $explodedName = explode(" ", $vehicle->name);
    $first = preg_replace('/\W\w+\s*(\W*)$/', '$1', $vehicle->name);
@endphp
<!-- Page Title -->
        <section class="page-title style-two">
            <div class="auto-container">
                <div class="content-box centred mr-0">
                    <div class="title">
                        <h1>{{$first}} {{$explodedName[count($explodedName)-1]}}</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li> Home</li>                        
                        <li> <a href="{{ route('all_vehicles') }}">Vehicles List</a></li>
                        <li> {{$first}} {{$explodedName[count($explodedName)-1]}}</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->
        <hr style="border-top-color: rgba(41, 170, 227,0.1);">  
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

        <!-- browse-add-details -->
        <section class="browse-add-details bg-color-2">
            <div class="auto-container">
                <div class="sec-title" style="margin-bottom: 0px;">
                    <h2>{{$vehicle->name}}</h2>
                </div>
                <div class="row clearfix">                    
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="add-details-content">
                            
                            <div class="content-two single-box">
                                <div class="bxslider">
                                    @foreach($vehicle->gallery_images as $gallery)
                                        <div class="slider-content">
                                            <div class="product-image">                                            
                                                <figure class="image"><img src="{{config('miseven.file_path').$gallery->image}}" id="img-ca" alt=""></figure>                                            
                                            </div>
                                            <div class="slider-pager">
                                                <ul class="thumb-box clearfix">                                               
                                                    @foreach($vehicle->gallery_images as $key=>$gallery)
                                                        <li style="display: inline; float: none; background: transparent;">                                                        
                                                            <a data-slide-index="{{ $key++ }}" href="#">
                                                                <figure style="display: inline;"><img src="{{config('miseven.file_path').$gallery->image}}" alt="" style="width: 20%"></figure>
                                                            </a>                                                        
                                                        </li>
                                                    @endforeach                                               
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="content-one single-box">
                                <div class="text">
                                    <h3 style="color: #29aae3;">Car Description:</h3>
                                    <p>{!! $vehicle->description !!}</p>
                                </div>
                            </div>
                            <div class="content-three single-box">
                                <div class="text">
                                    <h3 style="color: #29aae3;">Features:</h3>
                                    <ul class="list-item clearfix">
                                        @foreach($vehicle->features as $feature)
                                            <li>
                                                {{$feature->name}} 
                                                @if($feature->name == 'Security Amount' || $feature->name == 'Price' || $feature->name == 'Deposit' )
                                                    <span style="float: right;">{{number_format($feature->value)}}</span></li>
                                                @else
                                                    <span style="float: right;">{{$feature->value}}</span>
                                                @endif
                                            </li>
                                        @endforeach                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="sec-title" style="margin-bottom: 0px;">
                            <h2 style="font-weight: 800; font-size: 30px; line-height: 50px; margin-bottom: 0">{{$vehicle->name}}</h2>
                            <h2 style="font-weight: 800; font-size: 30px; line-height: 50px;">AED: 
                                <span style="color: #29aae3 !important; display: inline; font-weight: 800; font-size: 35px; line-height: 50px;">{{number_format($vehicle->price)}}</span> / Day
                            </h2>
                        </div>
                        <div class="default-sidebar category-sidebar">
                            <div class="price-filter sidebar-widget">
                                <form action="{{route('booking_form.store')}}" method="post" class="needs-validation">
                                @csrf
                                <div class="price-range">
                                    @if(isset($data['noOfDays']))
                                    <div class="widget-title">
                                        <h3 style="color: #29aae3;">Booking Form:</h3>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12 col-sm-12 form-group" id="left-side">
                                            <label style="color: black; margin-bottom: 0rem; font-weight: 600;">Start Date:</label> <b style="color:  #29aae3;float: right;">{{date('d-M-Y',strtotime($data['start_date']))}}</b>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 form-group" id="right-side">
                                            <label style="color: black; margin-bottom: 0rem; font-weight: 600;">End Date:</label> <b style="color:  #29aae3;float: right;">{{date('d-M-Y',strtotime($data['end_date']))}}</b>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 form-group" id="left-side">
                                            <label style="color: black; margin-bottom: 0rem; font-weight: 600;">Start Time:</label> <b style="color:  #29aae3;float: right;">{{date('h:i A',strtotime($data['start_time']))}}</b>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 form-group" id="right-side">
                                            <label style="color: black; margin-bottom: 0rem; font-weight: 600;">End Time:</label> <b style="color:  #29aae3;float: right;">{{date('h:i A',strtotime($data['end_time']))}}</b> 
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 form-group" id="left-side">
                                            <label style="color: black; margin-bottom: 0rem; font-weight: 600;">Days:</label> <b style="color:  #29aae3;float: right;">{{$data['noOfDays']}}</b>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 form-group" id="right-side">
                                            <label style="color: black; margin-bottom: 0rem; font-weight: 600;">Total Amount:</label> <b style="color:  #29aae3;float: right;">AED {{number_format($data['total_amount'])}}</b>
                                        </div>
                                            <input type="hidden" name="start_date" value="{{$data['start_date']}}">
                                            <input type="hidden" name="end_date" value="{{$data['end_date']}}">
                                            <input type="hidden" name="start_time" value="{{$data['start_time']}}">
                                            <input type="hidden" name="end_time" value="{{$data['end_time']}}">
                                            <input type="hidden" name="total_amount" value="{{$data['total_amount']}}">
                                            <input type="hidden" name="no_of_days" value="{{$data['noOfDays']}}">
                                    </div>

                                    @else
                                    <div class="widget-title">
                                        <h3 style="color: #29aae3;">Booking Form:</h3>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12 col-sm-12 form-group" id="left-side">
                                            <label style="color: black; margin-bottom: 0rem; font-weight: 600;" for="c-start">Start Date</label>
                                            <input type="text" id="booking" class="bookingform" name="start_date" placeholder="Start Date" onfocus="(this.type='date')" onblur="(this.type='text')" required>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 form-group" id="right-side">
                                            <label style="color: black; margin-bottom: 0rem; font-weight: 600;" for="c-end">End Date</label>                                            
                                            <input type="text" id="booking" class="bookingform" name="end_date" placeholder="End Date" onfocus="(this.type='date')" onblur="(this.type='text')" required>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 form-group" id="left-side">
                                            <label style="color: black; margin-bottom: 0rem; font-weight: 600;" for="c-time-start">Start Time</label>
                                            <input type="text" id="booking" class="bookingform" name="start_time" placeholder="Start Time" onfocus="(this.type='time')" onblur="(this.type='text')" required>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 form-group" id="right-side">
                                            <label style="color: black; margin-bottom: 0rem; font-weight: 600;" for="c-time-end">End Time</label>                                            
                                            <input type="text" id="booking" class="bookingform" name="end_time" placeholder="End Time" onfocus="(this.type='time')" onblur="(this.type='text')" required>
                                        </div>
                                    </div>
                                    @endif

                                        <hr style="border-top-color: rgba(41, 170, 227,0.1);">
                                        <div class="widget-title">
                                            <h3 style="color: #29aae3;">Personal Information:</h3>
                                        </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12 col-sm-12 form-group" id="left-side">
                                            <label style="color: black; margin-bottom: 0rem; font-weight: 600;" for="c-first-name">First Name</label>
                                            <input type="text" id="booking" class="bookingform" name="first_name" placeholder="First Name" required>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 form-group" id="right-side">
                                            <label style="color: black; margin-bottom: 0rem; font-weight: 600;" for="c-last-name">Last Name</label>                                            
                                            <input type="text" id="booking" class="bookingform" name="last_name" placeholder="Last Name" required>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 form-group" id="left-side">
                                            <label style="color: black; margin-bottom: 0rem; font-weight: 600;" for="c-email">Email</label>
                                            <input type="email" id="booking" class="bookingform" name="email1" placeholder="Email" required>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 form-group" id="right-side">
                                            <label style="color: black; margin-bottom: 0rem; font-weight: 600;" for="c-number">Contact Number</label>                                            
                                            <input type="text" id="booking" class="bookingform" name="contact_no" placeholder="Contact Number" required>
                                        </div>
                                        <input type="hidden" name="car_name" value="{{$vehicle->name}}">
                                        <input type="hidden" name="vehicle_id" value="{{$vehicle->id}}">
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <button type="submit" class="theme-btn-one">Book Now</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <hr style="border-top-color: rgba(41, 170, 227,0.1);">

                <h6 style="color: lightgrey;">
                    <span>
                        Published: <strong>{{ Carbon\Carbon::parse($vehicle->created_at)->format('F jS, Y') }}</strong>
                    </span>
                    <span style="float: right;">
                        Location: <strong>{{$vehicle->location}}</strong>
                    </span>
                </h6>
            </div>
        </section>

        <!-- browse-add-details end -->

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
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var minDate= year + '-' + month + '-' + day;
    
    $('#c-start').attr('min', minDate);
    $('#c-end').attr('min', minDate);
});
</script>

<script type="text/javascript">
      $("#aler").show();
        setTimeout(function() { $("#aler").hide(); }, 3000);
</script>
@endsection