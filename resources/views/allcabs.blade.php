@php
    $CompanyData = \Helper::CompanyData();
@endphp
@extends('layouts.app')
@section('content')
<div class="container my-4">
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
    <div class="product-wrapper">
        <div class="product-slider">
            
            @foreach ($data as $item)
            
                <div class="single-product-wrap">

                    <div class="product-image">
                        <a href="product-details.html"><img src="{{ asset('storage/' . $item->banner) }}" alt=""></a>
                        <span class="label-product label-new">{{ $item->name }}</span>
                        {{-- <span class="label-product label-sale">-9%</span> --}}
                        <div class="quick_view">
                            {{-- <a href="#" title="quick view" class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a> --}}
                        </div>

                    </div>
                    <div class="product-content">
                        <h3>{{ $package->route_plan }}</h3>
                        <div class="price-box">
                            {{-- <i class="fa fa-rupee"></i> --}}
                            <span class="">{{$item->model}}</span><br>
                            <i class="fa fa-child"></i>
                            <span class="new-price">{{ $item->passenger }}</span><br>
                            <i class="fa fa-rupee"></i>

                            <span class="new-price">{{ $item->per_kilo_m . '/ Extra Per Kilometers' }}</span>
                            {{-- <span class="old-price">$58.49</span> --}}
                        </div>
                        <div class="product-action">
                            <a href="{{route('whatsppmes',[$package->id,$item->name])}}">
                            <button class="add-to-cart" style="color: green" title="Book Your Taxi"><i class="fa fa-phone"></i> Whats'app
                            </button></a><a href="tel:{{ $CompanyData->c_mobile }}" style="color: rgb(0, 0, 0)"class="genric-btn primary circle ">
                            
                            <button class="add-to-cart" title="Book Your Taxi"><i class="fa fa-phone"></i> Call Now
                            </button></a>
                        </div>
                    </div>

               
            </div>
            @endforeach
       
        </div>
    </div>
</div>
@endsection
