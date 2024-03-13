@extends('layouts.app')
@section('content')

<div class="container">
      <!-- product-wrapper start -->
      <div class="product-wrapper">
        <div class="row">
            <div class="col-lg-12">
       <!-- deals-product-active start -->
                <div class="row ">
                    @foreach ($packages as $item)
                    <div class="col-6">
                        <div class="">
                            <!-- single-product-wrap start -->
                           
                            <div class="single-product-wrap"> <div class="product-image">
                                    <a href="{{route('allcabs',$item->id)}}"><img src="{{'storage/'.$item->banner}}" alt=""></a>
                                    <span class="label-product label-new">{{$item->from}}</span>
                                    {{-- <span class="label-product label-n">-7%</span> --}}
                                    <div class="quick_view">
                                        <a href="#" title="quick view" class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="{{route('allcabs',$item->id)}}">{{$item->route_plan}}</a></h3>
                                    <div class="price-box">
                                        <span class="new-price">{{$item->type}}</span>
                                        <span class="old-price"><i class="fa fa-rupee"></i>{{$item->price}}</span>
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
                          
                            <!-- single-product-wrap end -->
                        </div>
                    </div>
                   
                    @endforeach         
                </div>
                <!-- deals-product-active end -->
            </div>
            
        </div>
    </div>
    <!-- product-wrapper end -->
</div>
@endsection