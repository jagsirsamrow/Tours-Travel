@php
    $CompanyData = \Helper::CompanyData();
@endphp
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tour and Travel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('storage/'.$CompanyData->c_fevi)}}">
    
    <!-- CSS 
    ========================= -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    
    <!-- Font CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
    <!-- Modernizer JS -->
    <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<body class="box-body">
     <!-- ====== start loading page ====== -->
     <div id="preloader">
    </div>
    <!-- ====== end loading page ====== -->
    @include('partials.navbar') 

    <!-- Content Wrapper -->
    <!-- Begin Page Content -->
    @section('content')
    <div class="alert alert-danger hidden message">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
    </div>
    <h1>Content Here</h1>
    @show

    @include('partials.footer') 
    @section('footer')
    <a  class="whatsapp-button" style="font-size:48px;" target="_blank" href="https://api.whatsapp.com/send/?phone={{$CompanyData['c_mobile']}}&amp;text=Hello+Sir+%2C%0A+Give+me+information+about+your+Route+Plans.&amp;app_absent=0">
        <i class="fa fa-whatsapp"></i>
    </a>
    <!-- ====== start to top button ====== -->
    <a href="#" class="to_top bg-gray rounded-circle icon-40 d-inline-flex align-items-center justify-content-center">
        <i class="bi bi-chevron-up fs-6 text-dark"></i>
    </a>
    <!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{asset('assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Plugins JS -->
<script src="{{asset('assets/js/plugins.js')}}"></script>
<!-- Ajax Mail -->
<script src="{{asset('assets/js/ajax-mail.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>
