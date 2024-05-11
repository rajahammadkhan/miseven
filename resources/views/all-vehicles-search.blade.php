@extends('layouts.master')

@section('title')@if(request()->segment(2)) {{ ucfirst(request()->segment(1)) .' '.ucfirst(request()->segment(2)) }} | @endif @endsection

@section('top-styles')
<style type="text/css">
    .header-lower{
        background-color: #0d1927 !important;
    }
    @media (max-width: 800px) {
        .feature-block-one .inner-box .lower-content .lower-box::before {
          position: absolute;
          content: '';
          background: #edeff2;
          width: 100%;
          height: 1px;
          left: 0px;
          top: 0px;
        }
    }
</style>
@endsection

@section('content')

<!-- Page Title -->
        <section class="page-title style-two">
            <div class="auto-container">
                <div class="content-box centred mr-0">
                    <div class="title">
                        <h1>Vehicles List</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Vehicles List</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->
        <hr style="border-top-color: rgba(41, 170, 227,0.1);">

        <!-- feature-style-two -->
        <section class="feature-style-two">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h2>Vehicles List</h2>
                </div>
                <div class="tabs-box">
                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-1">
                            <div class="row clearfix">
                                @foreach($vehicles as $vehicle)
                                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                                        <form action="{{route('vehicles.form.post')}}" method="post">
                                        @csrf
                                        <div class="feature-block-one wow fadeInDown animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image"><a><button href="" class="btn btn-green form-post" ><img src="{{config('miseven.file_path').$vehicle->featured_image}}" alt="{{strtoupper($vehicle->name)}}"></button></a></figure>
                                                    
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
                                                    @php
                                                        $totalAmount = $vehicle->price * $noOfDays; 
                                                    @endphp
                                                    <input type="hidden" name="total_amount" value="{{$totalAmount}}">
                                                    <input type="hidden" name="no_of_days" value="{{$noOfDays}}">
                                                    <input type="hidden" name="start_date" value="{{$start_date}}">
                                                    <input type="hidden" name="end_date" value="{{$end_date}}">
                                                    <input type="hidden" name="start_time" value="{{$start_time}}">
                                                    <input type="hidden" name="end_time" value="{{$end_time}}">
                                                    <input type="hidden" name="vehicle_id" value="{{$vehicle->id}}">
                                                    
                                                        <div class="category"><i class="fas fa-car"></i><p style="color: white;">{{($vehicle->car_type)}}</p></div>
                                                        <button href="" class="btn btn-green form-post" ><h3><a style="color: white;">{{strtoupper($vehicle->name)}}</a></h3></button>
                                                        <h3 style="color: black; font-size: 20px;">
                                                            <span style="color: #29aae3;">AED {{number_format($totalAmount)}}</span>                                                             
                                                            <span style="color: #29aae3; float: right;">Days : <span> {{$noOfDays}}</span></span>                                                             
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
                                    </form>
                                    </div>
                                @endforeach 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-style-two end -->
@endsection

@section('bottom-mid-scripts')
@endsection

@section('bottom-bot-scripts')

@endsection