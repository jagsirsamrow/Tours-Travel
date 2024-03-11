@php
    $CompanyData = \Helper::CompanyData();
@endphp
@extends('layouts.app')
@section('content')
    <!-- Service area start -->
    <div class="services-area">
        <div class="container">
            <div class="section-title section-bg-2">
                <h2>Our Services</h2>
                {{-- <p>Most Trendy 2018 Clother</p> --}}
            </div>
            <div class="row services-area my-4">
                <div class="col-lg-4 col-md-4">
                    <!-- single-Service start -->
                    <div class="single-service mt--30">
                        <div class="row">
                            <div class="col">

                                <div class="">
                                    <h3>Airport Services</h3>

                                    <p style="font-size: 12px">
                                        Our airport taxi service provides reliable and timely transportation to and from the
                                        airport.
                                        With our professional drivers and modern vehicles, we ensure a stress-free and
                                        comfortable ride
                                        to your destination. Contact us today to book your next airport transfer. 
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- single-Service end -->
                </div>
                <div class="col-lg-4 col-md-4">
                    <!-- single-Service start -->
                    <div class="single-service mt--30">
                        <div class="row">
                            <div class="col">

                                <div class="">
                                    <h3>Taxi Booking</h3>

                                    <p style="font-size: 12px">
                                        Our taxi service offers reliable and efficient transportation for individuals and
                                        groups. With
                                        our experienced drivers and modern vehicles, we provide a comfortable and safe ride
                                        to your
                                        destination. Contact us today to book your next ride and experience the convenience
                                        of our taxi
                                        service. </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- single-Service end -->
                </div>
                <div class="col-lg-4 col-md-4">
                    <!-- single-Service start -->
                    <div class="single-service mt--30">
                        <div class="row">
                            <div class="col">

                                <div class="">
                                    <h3>Tour Package</h3>
                                    <p style="font-size: 12px">
                                        Our taxi tour packages offer a convenient and hassle-free way to explore popular
                                        destinations in
                                        the region. With customizable itineraries and experienced drivers, we ensure a
                                        memorable and
                                        enjoyable travel experience. Contact us today to learn more about our tour packages.
                                        </p>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- single-Service end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Service area end -->
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
                            {{-- <i class="fa fa-rupee" ></i> --}}
                            {{-- <span class="new-price">{{$item->price}}</span><br> --}}
                            <i class="fa fa-child" ></i>
                            <span class="new-price">{{$item->passenger}}</span><br>
                            {{-- <i class="fa fa-rupee" ></i> --}}

                            {{-- <span class="new-price">{{$item->per_kilo_m .'/Per Kilometers'}}</span> --}}
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
                                        <button class="add-to-cart" title="Add to cart"><i class="fa fa-plus"></i> Book Your Taxi</button></a>
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
    </div>
</div>
<!-- Cars Area End -->
@endsection
