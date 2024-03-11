@extends('layouts.app')
@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Blog Details</li>
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
            <div class="col-lg-3 order-2 order-lg-1">
                <!-- shop-sidebar-wrap start -->
                <div class="blog-sidebar-wrap">
                   
                    <!-- shop-sidebar start -->
                    <div class="blog-sidebar mb--30">
                        <h4 class="title">Search</h4>
                        <div class="search-post">
                            <form  action="#" class="search-blog">
                                <input type="text" placeholder="Enter Keywords...">
                                <button class=" btn-search" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- shop-sidebar end -->
                    
                    <!-- shop-sidebar start -->
                    <div class="blog-sidebar mb--30">
                        <h4 class="title">CATEGORIES</h4>
                        <ul>  
                            @foreach ($category as $item )
                                
                            
                            <li><a href="{{route('blogcat',$item->id)}}">{{$item->name}} </a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- shop-sidebar end -->
                    
                    
                    
                   
                </div>
                <!-- shop-sidebar-wrap end -->
            </div>
            <div class="col-lg-9 order-lg-2 order-1">
                <!-- blog-details-wrapper start -->
                <div class="blog-details-wrapper">
                    <div class="blog-details-image">
                        <img src="{{asset('storage/'.$blogsdetails->banner)}}" alt="">
                    </div>
                    <div class="postinfo-wrapper">
                        <div class="latest-blog-content  my-4">
                            <h4><strong>{{$blogsdetails->name}}</strong></h4>
                            
                           
                        </div>
                        <div class="post-info my-4">
                            {{-- <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut lectus fermentum eleifend. Pellentesque faucibus sem ante, non malesuada odio varius nec. Suspendisse potenti. </p>
                            <blockquote class="blockquote-inner">
                                <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p>
                            </blockquote>
                            <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis
                                 quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p> --}}
                            <p>{{$blogsdetails->description}}</p>
                            
                        </div>
                       
                      
                    </div>
                </div>
                <!-- blog-details-wrapper end -->
            </div>
        </div>
    </div>
</div>
<!-- content-wraper end -->
@endsection