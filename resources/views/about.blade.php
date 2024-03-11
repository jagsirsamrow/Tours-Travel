@extends('layouts.app')
@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">About Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->


<!-- content-wraper start -->
<div class="content-wraper">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-us-img">
                    <img src="assets/images/about/ABOUT US.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-info-wrapper">
                    <h2>Welcome to TOURS & TRVAEL</h2>
                    <p>
                        At TOURS & TRVAEL, we believe that travel is not just about reaching a destination; it's about the enriching experiences and lifelong memories created along the way. Established with a passion for
                         exploration and a commitment to exceptional service, we strive to be your trusted travel companion.!</p>
                    <p>Founded in 2020, TOURS & TRVAEL was born out of a shared love for travel and a desire to share the world's wonders with others. What started as a small endeavor has evolved into a dynamic and innovative travel company,
                         known for crafting immersive experiences and fostering a global community of passionate explorers.</p>
                         
                    <div class="read-more-btn">
                        {{-- <a href="#">read more</a> --}}
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Our Team Aare Start -->
        <div class="our-team-area section-ptb">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title start -->
                    <div class="section-title">
                        <h2>Team Members</h2>
                        <p>Most Trendy 2018 Clother</p>
                    </div>
                    <!-- section-title end -->
                </div>
            </div>
            <div class="row">
                @foreach ($data as $item )
                    
                
                <div class="col-lg-3 col-md-6">
                    <div class="single-team mt--30">
                        <div class="team-imgae">
                            <img src="{{asset('storage/'.$item->banner)}}" alt="">
                            <div class="social-link">
                                <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                                <a class="vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                            </div>
                        </div>
                        <div class="team-info">
                            <h3>{{$item->name}}</h3>
                            <p>{{$item->post}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                
                
            </div>
        </div>
        <!-- Our Team Aare End -->
        
        <!-- Our Brand Area Start -->
        {{-- <div class="our-brand-area my-4">
            <div class="row">
                <div class="col">
                    <div class="section-pt border-t-one">
                    <div class="row our-brand-active text-center">
                        <div class="col-12">
                            <div class="single-brand">
                                <a href="#"><img src="{assets/images/brand/1.png}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="single-brand">
                                <a href="#"><img src="assets/images/brand/2.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="single-brand">
                                <a href="#"><img src="assets/images/brand/3.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="single-brand">
                                <a href="#"><img src="assets/images/brand/4.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="single-brand">
                                <a href="#"><img src="assets/images/brand/5.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="single-brand">
                                <a href="#"><img src="assets/images/brand/6.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div> --}}
        <!-- Our Brand Area End -->
    </div>
</div>
<!-- content-wraper end -->
@endsection