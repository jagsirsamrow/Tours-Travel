@php
    $CompanyData = \Helper::CompanyData();
@endphp
@extends('layouts.app')
@section('content')
    <div class="container-box-inner">
        <!-- Hero Slider start -->
        <div class="hero-slider-box">

            <div class="hero-slider hero-slider-eight">
                @foreach ($data as $key => $item)
                    <div class="single-slide" style="background-image: url({{ asset('storage/' . $item->banner) }})">
                        <!-- Hero Content One Start -->
                        <div class="hero-content-one container">
                            <div class="row">
                                <div class="col">
                                    <div class="slider-text-info">
                                        <h1 style="color: yellow">{{$item->s_heading}}</h1>
                                        {{-- <h1>Street Style</h1> --}}
                                        <p>{{$item->s_content}}</p>
                                        <a href="tel:{{ $CompanyData->c_mobile }}" style="color: rgb(0, 0, 0)"class="genric-btn primary circle ">
                                            <button class="add-to-cart" title="Book Your Taxi"><strong><i class="fa fa-phone"></i> Call Now</strong>
                                            </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hero Content One End -->
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Hero Slider end -->
  <!-- Our Services Area Start -->
        <div class="our-services-area section-pt-70">
            <div class="container">
                <div class="row">
                    <div class="section-title ">
                        <h2>What Make's Us Different</h2>
                        {{-- <p>There are latest blog posts</p> --}}
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!-- single-service-item start -->
                        <div class="single-service-item">
                            <div class="our-service-icon">
                                <i class="fa fa-car"></i>
                            </div>
                            <div class="our-service-info">
                                <h3 >Safety and Security</h3>
                                <p> background-checked drivers
                                     or 
                                     real-time tracking.</p>
                            </div>
                        </div>
                        <!-- single-service-item end -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!-- single-service-item start -->
                        <div class="single-service-item">
                            <div class="our-service-icon">
                                <i class="fa fa-support"></i>
                            </div>
                            <div class="our-service-info">
                                <h3>Support 24/7</h3>
                                <p>Contact us 24 hours a day, 7 days a week</p>
                            </div>
                        </div>
                        <!-- single-service-item end -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!-- single-service-item start -->
                        <div class="single-service-item">
                            <div class="our-service-icon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <div class="our-service-info">
                                <h3>User-Friendly Technology</h3>
                                <p>Easy booking processes or Seamless payment options.</p>
                            </div>
                        </div>
                        <!-- single-service-item end -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!-- single-service-item start -->
                        <div class="single-service-item">
                            <div class="our-service-icon">
                                <i class="fa fa-database"></i>
                            </div>
                            <div class="our-service-info">
                                <h3>Local Knowledge and Expertise</h3>
                                <p>Drivers are well-trained and have excellent knowledge of the local area.</p>
                            </div>
                        </div>
                        <!-- single-service-item end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Services Area End -->
<!-- Cars Area Start -->
<div class="product-area section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- section-title start -->
                <div class="section-title section-bg-2">
                    <h2>Available Cars</h2>
                    {{-- <p>Most Trendy 2018 Clother</p> --}}
                </div>
                <!-- section-title end -->
            </div>
        </div>
        <!-- product-wrapper start -->
        <div class="product-wrapper">
            <div class="product-slider">
                <!-- single-product-wrap start -->
                @foreach ($cars as $item )
                <div class="single-product-wrap">
                   
                    <div class="product-image">
                        <a href="{{route('allcabs',$item->id)}}"><img src="{{asset('storage/'.$item->banner)}}" alt=""></a>
                        <span class="label-product label-new">{{$item->name}}</span>
                        {{-- <span class="label-product label-sale">-9%</span> --}}
                        <div class="quick_view">
                            {{-- <a href="#" title="quick view" class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a> --}}
                        </div>
                        
                    </div>
                    <div class="product-content">
                        <h3><a href="product-details.html">{{$item->model}}</a></h3>
                        <div class="price-box">
                            <i class="fa fa-rupee" ></i>
                            {{-- <span class="new-price">{{$item->price}}</span><br> --}}
                            <i class="fa fa-child" ></i>
                            <span class="new-price">{{$item->passenger}}</span><br>
                            <i class="fa fa-rupee" ></i>

                            <span class="new-price">{{$item->per_kilo_m .'/Extra Per Kilometers'}}</span>
                            {{-- <span class="old-price">$58.49</span> --}}
                        </div>
                        <div class="product-action">
                            <a class="genric-btn primary circle"
                          target="_blank" href="https://api.whatsapp.com/send/?phone={{$CompanyData['c_mobile']}}&amp;text=Hello+Sir+%2C%0A+Book+a+{{$item->name}}+Give+me+information+about+your+Route+Plans.&amp;app_absent=0">
                                <button class="add-to-cart" style="color: green"><i class="fa fa-phone"></i> Whats'app
                                </button></a>
                                <a href="tel:{{ $CompanyData->c_mobile }}" style="color: rgb(0, 0, 0)"class="genric-btn primary circle ">
                                <button class="add-to-cart" title="Book Your Taxi"><i class="fa fa-phone"></i> Call Now
                                </button></a>
                        </div>
                    </div>
                  
                </div>
                @endforeach
            </div>
        </div>
        <!-- product-wrapper end -->
    </div>
</div>
<!-- Cars Area End -->
        <!-- Banner area start -->
        {{-- <div class="banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <!-- single-banner start -->
                        <div class="single-banner mt--30">
                            <a href="shop.html"><img src="{{ asset('assets/images/banner/1.jpg') }}" alt=""></a>
                        </div>
                        <!-- single-banner end -->
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <!-- single-banner start -->
                        <div class="single-banner mt--30">
                            <a href="shop.html"><img src="{{ asset('assets/images/banner/2.jpg') }}" alt=""></a>
                        </div>
                        <!-- single-banner end -->
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <!-- single-banner start -->
                        <div class="single-banner mt--30">
                            <a href="shop.html"><img src="{{ asset('assets/images/banner/3.jpg') }}" alt=""></a>
                        </div>
                        <!-- single-banner end -->
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Banner area end -->

        <!-- Product Area Start -->
        <div class="product-area section-pt section-pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-title start -->
                        <div class="section-title">
                            <h2>New Arrivals Packages </h2>
                            {{-- <p>Most Trendy 2018 Clother</p> --}}
                        </div>
                        <!-- section-title end -->
                    </div>
                </div>
                <!-- product-wrapper start -->
                <div class="product-wrapper">
                    <div class="product-slider">
                        {{-- <div class="col-12"> --}}
     
                            @foreach ($packages as $item )
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                               
                                <div class="product-image">
                                    <a href="{{route('allcabs',$item->id)}}"><img src="{{ asset('storage/'.$item->banner) }}"
                                            alt=""></a>
                                    <span class="label-product label-new"></span>
                                    {{-- <span class="label-product label-sale">{{-7%}}</span> --}}
                                    {{-- <div class="quick_view">
                                        <a href="#" title="quick view" class="quick-view-btn" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>
                                    </div> --}}
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-details.html">{{$item->route_plan}}</a></h3>
                                    <h3><a href="product-details.html">{{$item->type}}</a></h3>
                                    <div class="price-box">
                                        <span class="new-price"><i class="fa fa-rupee"></i>{{' '.$item->price}}</span>
                                        {{-- <span class="old-price">$54.49</span> --}}
                                    </div>
                                    <div class="product-action">
                                        <a href="{{route('allcabs',$item->id)}}">
                                        <button class="add-to-cart" title="Add to cart"><i class="fa fa-plus"></i> Book Your Route Plan</button></a>
                                        <div class="star_content">
                                            <ul class="d-flex">
                                                <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a class="star-o" href="#"><i class="fa fa-star-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            @endforeach
                            
                        {{-- </div> --}}
                        
                    </div>
                </div>
                <!-- product-wrapper end -->
            </div>
        </div>
        <!-- Product Area End -->

        <!-- Banner area start -->
        {{-- <div class="banner-area-two">
            <div class="container-fluid plr-40">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <!-- single-banner start -->
                        <div class="single-banner-two mt--30">
                            <a href="shop.html"><img src="{{ asset('assets/images/banner/bg4.jpg') }}"
                                    alt=""></a>
                        </div>
                        <!-- single-banner end -->
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <!-- single-banner start -->
                        <div class="single-banner-two mt--30">
                            <a href="shop.html"><img src="{{ asset('assets/images/banner/bg3.jpg') }}"
                                    alt=""></a>
                        </div>
                        <!-- single-banner end -->
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Banner area end -->
        <!-- Product Area Start -->
    {{-- <div class="product-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title start -->
                    <div class="section-title">
                        <h2>New Arrivals </h2>
                        <p>Most Trendy 2018 Clother</p>
                    </div>
                    <!-- section-title end -->
                </div>
            </div>
            <!-- product-wrapper start -->
            <div class="product-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- single-banner-three start -->
                                <div class="single-banner-three">
                                    <a href="#"><img src="assets/images/banner/bg9.jpg" alt=""></a>
                                    <!-- banner-three-inner start -->
                                    <div class="banner-three-inner">
                                        <a href="#"><img src="assets/images/banner/hover_bg.png" alt=""></a>
                                    </div>
                                    <!-- banner-three-inner end -->
                                </div>
                                <!-- single-banner-three end -->
                            </div>
                        </div>
                        <!-- deals-product-active start -->
                        <div class="row deals-product-active">
                            <div class="col-12">
                                <div class="daily-deals-wrap">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="product-details.html"><img src="assets/images/product/1.jpg" alt=""></a>
                                            <span class="label-product label-new">new</span>
                                            <span class="label-product label-sale">-7%</span>
                                            <div class="quick_view">
                                                <a href="#" title="quick view" class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="product-details.html">Printed Summer Dress</a></h3>
                                            <div class="price-box">
                                                <span class="new-price">$51.27</span>
                                                <span class="old-price">$54.49</span>
                                            </div>
                                            <div class="product-action">
                                                <button class="add-to-cart" title="Add to cart"><i class="fa fa-plus"></i> Add to cart</button>
                                                <div class="star_content">
                                                    <ul class="d-flex">
                                                        <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a class="star-o" href="#"><i class="fa fa-star-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="daily-deals-wrap">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="product-details.html"><img src="assets/images/product/3.jpg" alt=""></a>
                                            <span class="label-product label-new">new</span>
                                            <span class="label-product label-sale">-20%</span>
                                            <div class="quick_view">
                                                <a href="#" title="quick view" class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="product-details.html">Printed Dress1</a></h3>
                                            <div class="price-box">
                                                <span class="new-price">$72.10</span>
                                                <span class="old-price">$67.27</span>
                                            </div>
                                            <div class="product-action">
                                                <button class="add-to-cart" title="Add to cart"><i class="fa fa-plus"></i> Add to cart</button>
                                                <div class="star_content">
                                                    <ul class="d-flex">
                                                        <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a class="star-o" href="#"><i class="fa fa-star-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="daily-deals-wrap">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="product-details.html"><img src="assets/images/product/5.jpg" alt=""></a>
                                            <span class="label-product label-new">new</span>
                                            <span class="label-product label-sale">-9%</span>
                                            <div class="quick_view">
                                                <a href="#" title="quick view" class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="product-details.html">New Look Material</a></h3>
                                            <div class="price-box">
                                                <span class="new-price">$51.27</span>
                                                <span class="old-price">$54.49</span>
                                            </div>
                                            <div class="product-action">
                                                <button class="add-to-cart" title="Add to cart"><i class="fa fa-plus"></i> Add to cart</button>
                                                <div class="star_content">
                                                    <ul class="d-flex">
                                                        <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a class="star-o" href="#"><i class="fa fa-star-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                            </div>                        
                        </div>
                        <!-- deals-product-active end -->
                    </div>
                    <div class="col-lg-6">
                        <!-- deals-product-active start -->
                        <div class="row deals-product-active">
                            <div class="col-12">
                                <div class="daily-deals-wrap">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="product-details.html"><img src="assets/images/product/10.jpg" alt=""></a>
                                            <span class="label-product label-new">new</span>
                                            <span class="label-product label-sale">-7%</span>
                                            <div class="quick_view">
                                                <a href="#" title="quick view" class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="product-details.html">Printed Summer Dress</a></h3>
                                            <div class="price-box">
                                                <span class="new-price">$51.27</span>
                                                <span class="old-price">$54.49</span>
                                            </div>
                                            <div class="product-action">
                                                <button class="add-to-cart" title="Add to cart"><i class="fa fa-plus"></i> Add to cart</button>
                                                <div class="star_content">
                                                    <ul class="d-flex">
                                                        <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a class="star-o" href="#"><i class="fa fa-star-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="daily-deals-wrap">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="product-details.html"><img src="assets/images/product/7.jpg" alt=""></a>
                                            <span class="label-product label-new">new</span>
                                            <span class="label-product label-sale">-20%</span>
                                            <div class="quick_view">
                                                <a href="#" title="quick view" class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="product-details.html">Printed Dress1</a></h3>
                                            <div class="price-box">
                                                <span class="new-price">$72.10</span>
                                                <span class="old-price">$67.27</span>
                                            </div>
                                            <div class="product-action">
                                                <button class="add-to-cart" title="Add to cart"><i class="fa fa-plus"></i> Add to cart</button>
                                                <div class="star_content">
                                                    <ul class="d-flex">
                                                        <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a class="star-o" href="#"><i class="fa fa-star-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="daily-deals-wrap">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="product-details.html"><img src="assets/images/product/8.jpg" alt=""></a>
                                            <span class="label-product label-new">new</span>
                                            <span class="label-product label-sale">-9%</span>
                                            <div class="quick_view">
                                                <a href="#" title="quick view" class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="product-details.html">New Look Material</a></h3>
                                            <div class="price-box">
                                                <span class="new-price">$51.27</span>
                                                <span class="old-price">$54.49</span>
                                            </div>
                                            <div class="product-action">
                                                <button class="add-to-cart" title="Add to cart"><i class="fa fa-plus"></i> Add to cart</button>
                                                <div class="star_content">
                                                    <ul class="d-flex">
                                                        <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a class="star-o" href="#"><i class="fa fa-star-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                            </div>                        
                        </div>
                        <!-- deals-product-active end -->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- single-banner-three start -->
                                <div class="single-banner-three">
                                    <a href="#"><img src="assets/images/banner/bg10.jpg" alt=""></a>
                                    <!-- banner-three-inner start -->
                                    <div class="banner-three-inner">
                                        <a href="#"><img src="assets/images/banner/hover_bg.png" alt=""></a>
                                    </div>
                                    <!-- banner-three-inner end -->
                                </div>
                                <!-- single-banner-three end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- product-wrapper end -->
        </div>
    </div> --}}
    <!-- Product Area End -->
        <!-- Latest Blog Posts Area start -->
        <div class="latest-blog-post-area section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-title start -->
                        <div class="section-title section-bg-3">
                            <h2>Latest Blog Posts </h2>
                            <p>There are latest blog posts</p>
                        </div>
                        <!-- section-title end -->
                    </div>
                </div>
                <div class="latest-blog-slider">
                    <!-- single-latest-blog start -->
                    @foreach ($blogs as $items )
                    <div class="single-latest-blog mt--30">
                    <div class="latest-blog-image">
                            <a href="{{route('blogdetails',$items->id)}}">
                                <img src="{{ asset('storage/'.$items->banner) }}" alt="">
                            </a>
                        </div>
                        <div class="latest-blog-content">
                            <h4><a href="{{route('blogdetails',$items->id)}}">{{$items->name}}</a></h4>
                            <div class="post_meta">
                                <span class="meta_date"><span> <i class="fa fa-calendar"></i></span>{{$items->date}}</span>
                                <span class="meta_author"><span></span>{{$items->category}}</span>
                            </div>
                            <p>{{$items->short_description}}.</p>
                        </div>
                        
                    </div>
                    @endforeach
                    <!-- single-latest-blog end -->
             </div>
            </div>
        </div>
        <!-- Latest Blog Posts Area End -->

        <!-- Our Brand Area Start -->
        {{-- <div class="our-brand-area mb--30 my-4">
            <div class="container">
                <div class="row our-brand-active text-center">
                    <div class="col-12">
                        <div class="single-brand">
                            <a href="#"><img src="{{ asset('assets/images/brand/1.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="single-brand">
                            <a href="#"><img src="{{ asset('assets/images/brand/2.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="single-brand">
                            <a href="#"><img src="{{ asset('assets/images/brand/3.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="single-brand">
                            <a href="#"><img src="{{ asset('assets/images/brand/4.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="single-brand">
                            <a href="#"><img src="{{ asset('assets/images/brand/5.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="single-brand">
                            <a href="#"><img src="{{ asset('assets/images/brand/6.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Our Brand Area End -->
        <!-- Client Testimonials Area Start -->
    <div class="client-testimonials-area text-black  section-pb my-4">
        <div class="container">
           <div class="row">
                <div class="col-lg-12">
                    <!-- section-title start -->
                    <div class="section-title section-bg-2">
                        <h2>Client Testimonials</h2>
                        <p>What they say</p>
                    </div>
                    <!-- section-title end -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 m-auto">
                    <div class="testimonial-slider">
                        <!-- testimonial-content start -->
                        @foreach ($testimonial as $item )
                            
                      
                        <div class="testimonial-content text-center">
                            <p class="des_testimonial">{{$item->message}}</p>
                            <div class="content_author">
                                <div class="author-image">
                                    <img style="width: 35px" src="{{asset('assets/images/user/user.png')}}" alt="">
                                </div>
                            </div>
                            <p class="des_namepost">{{$item->name}}</p>
                        </div>
                        @endforeach
                        <!-- testimonial-content end -->
                      
                       
                </div>
            </div>
        </div>
    </div>
    <!-- Client Testimonials Area End -->

    </div>
    </div>
@endsection
