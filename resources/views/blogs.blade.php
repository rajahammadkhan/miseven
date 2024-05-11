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
                        <h1>Blogs</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li> <a href="{{ route('home') }}">Home</a></li>
                        <li> Blogs</li>
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
                    <h2>Blogs</h2>
                </div>
                <div class="row clearfix">
                    @foreach($blogs as $blog)
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="{{config('miseven.file_path').$blog->image}}" alt="">
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
            </div>
        </section>
        <!-- news-section end -->
@endsection

@section('bottom-mid-scripts')
@endsection

@section('bottom-bot-scripts')
@endsection