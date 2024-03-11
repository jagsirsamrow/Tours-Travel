@extends('layouts.app')
@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Blog By Category</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->


<!-- content-wraper start -->
<div class="content-wraper">
    <div class="container">
        <div class="section-title section-bg-3">
            <h2> Blog Posts By Category</h2>
            <p>There are latest blog posts</p>
        </div>
        <div class="row blog-wrap-col-3">
            @foreach ($blogbycat as $item)
            <div class="col-lg-6">
                <!-- single-blog-area start -->
             
                    
              
                <div class="single-blog-area mb--40">
                    <div class="blog-image-slider">
                        <a href="{{route('blogdetails',$item->id)}}"><img src="{{asset('storage/'.$item->banner)}}" alt=""></a>
                       
                    </div>
                    <div class="blog-contend">
                        <h3><a href="{{route('blogdetails',$item->id)}}">{{$item->name}} </a></h3>
                        <div class="blog-date-categori">
                            <ul>
                                <li><a href="#"><i class="fa fa-user"></i> {{$item->category}} </a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> Comments </a></li>
                            </ul>
                        </div>
                        <p>{{$item->short_description}} </p>
                       
                    </div>
                </div>
                
                <!-- single-blog-area end -->
            </div>
            @endforeach
            
           
        </div>
    </div>
</div>
<!-- content-wraper end -->
@endsection