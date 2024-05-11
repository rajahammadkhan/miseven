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
                        <h1>{{$blog->name}}</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li> Home</li>
                        <li> <a href="{{ route('blogs') }}">Blogs</a></li>
                        <li> {{$blog->name}}</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->
        <hr style="border-top-color: rgba(41, 170, 227,0.1);">

        <!-- sidebar-page-container -->
        <section class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                        <div class="blog-details-content">
                            <div class="news-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="{{config('miseven.file_path').$blog->image}}" alt="{{$blog->name}}" style="height: 500px; object-fit: cover;">
                                    </figure>
                                    <div class="lower-content">
                                        <span class="post-info">{{date('F d, Y',strtotime($blog->date))}}</span>
                                        <div class="text">
                                            <p>{!! $blog->description !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- sidebar-page-container end -->
@endsection

@section('bottom-mid-scripts')
@endsection

@section('bottom-bot-scripts')
@endsection