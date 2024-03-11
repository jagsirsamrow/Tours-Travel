@php
    $CompanyData = \Helper::CompanyData();
@endphp
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Voxo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Voxo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('admin-assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('admin-assets/images/favicon.png')}}" type="image/x-icon">
    <title>T&T Dashboard</title>

    <!-- Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="{{asset('admin-assets/css/linearicon.css')}}">

    <!-- fontawesome css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/vendors/font-awesome.css')}}">

    <!-- Themify icon css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/vendors/themify.css')}}">

    <!-- ratio css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/ratio.css')}}">

    <!-- Feather icon css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/vendors/feather-icon.css')}}">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/vendors/scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/vendors/animate.css')}}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/vendors/bootstrap.css')}}">

    <!-- vector map css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/vector-map.css')}}">

    <!-- slick slider css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/slick-theme.css')}}">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/style.css')}}">

    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/responsive.css')}}">
</head>
<body>
    <div class="page-wrapper compact-wrapper dark-sidebar" id="pageWrapper">
        <!-- Page Header Start-->
    <div class="page-header">
        <div class="header-wrapper row m-0">
            <div class="header-logo-wrapper col-auto p-0">
                <div class="logo-wrapper">
                    <a href="{{route('admin./')}}">
                        <img class="img-fluid main-logo" src="{{asset('storage/'.$CompanyData->c_fevi)}}" alt="logo">
                        <img class="img-fluid white-logo" src="{{asset('admin-assets/images/logo/logo-white.png')}}" alt="logo">
                    </a>
                </div>
                <div class="toggle-sidebar">
                    <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                </div>
            </div>

            <form class="form-inline search-full col" action="">
              
                <div class="form-group w-100">
                    
                            <input class="demo-input Typeahead-input form-control-plaintext w-100" type="search"
                                placeholder="Search By Name " name="search" >
                            {{-- <i class="close-search" data-feather="x"></i> --}}
                            
                            <button type="submit" class="btn btn-primary mr-4">search</button>
                     
                </div>
            </form>
            <div class="nav-right col-4 pull-right right-header p-0">
                <ul class="nav-menus">
                    <li>
                        <span class="header-search">
                            <span class="lnr lnr-magnifier"></span>
                        </span>
                    </li>
                    <li class="onhover-dropdown">
                        <div class="notification-box">
                            <span class="lnr lnr-alarm"></span>
                            <span class="badge rounded-pill badge-theme">4</span>
                        </div>
                        <ul class="notification-dropdown onhover-show-div">
                            <li>
                                <span class="lnr lnr-alarm"></span>
                                <h6 class="f-18 mb-0">Notitications</h6>
                            </li>
                            <li>
                                <p>
                                    <i class="fa fa-circle-o me-3 font-primary"></i>Delivery processing <span
                                        class="pull-right">10
                                        min.</span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <i class="fa fa-circle-o me-3 font-success"></i>Order Complete<span
                                        class="pull-right">1 hr</span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <i class="fa fa-circle-o me-3 font-info"></i>Tickets Generated<span
                                        class="pull-right">3 hr</span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <i class="fa fa-circle-o me-3 font-danger"></i>Delivery Complete<span
                                        class="pull-right">6 hr</span>
                                </p>
                            </li>
                            <li>
                                <a class="btn btn-primary" href="javascript:void(0)">Check all notification</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <div class="mode">
                            <span class="lnr lnr-moon"></span>
                        </div>
                    </li>

                    <li class="onhover-dropdown">
                        <span class="lnr lnr-bubble"></span>
                        <ul class="chat-dropdown onhover-show-div">
                            <li>
                                <span class="lnr lnr-bubble"></span>
                                <h6 class="f-18 mb-0">Message Box</h6>
                            </li>
                            <li>
                                <div class="media">
                                    <img class="img-fluid rounded-circle me-3" src="{{asset('admin-assets/images/user/1.jpg')}}"
                                        alt="user1">
                                    <div class="status-circle online"></div>
                                    <div class="media-body">
                                        <span>Erica Hughes</span>
                                        <p>Lorem Ipsum is simply dummy...</p>
                                    </div>
                                    <p class="f-12 font-success">58 mins ago</p>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <img class="img-fluid rounded-circle me-3" src="{{asset('admin-assets/images/user/2.png')}}"
                                        alt="user2">
                                    <div class="status-circle online"></div>
                                    <div class="media-body">
                                        <span>Kori Thomas</span>
                                        <p>Lorem Ipsum is simply dummy...</p>
                                    </div>
                                    <p class="f-12 font-success">1 hr ago</p>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <img class="img-fluid rounded-circle me-3" src="{{asset('admin-assets/images/user/3.png')}}"
                                        alt="user3">
                                    <div class="status-circle offline"></div>
                                    <div class="media-body">
                                        <span>Ain Chavez</span>
                                        <p>Lorem Ipsum is simply dummy...</p>
                                    </div>
                                    <p class="f-12 font-danger">32 mins ago</p>
                                </div>
                            </li>
                            <li class="text-center">
                                <a class="btn btn-primary" href="javascript:void(0)">View All</a>
                            </li>
                        </ul>
                    </li>

                    <li class="maximize">
                        <a class="text-dark" href="javascript:void(0)!" onclick="javascript:toggleFullScreen()">
                            <span class="lnr lnr-frame-expand"></span>
                        </a>
                    </li>
                    <li class="profile-nav onhover-dropdown pe-0 me-0">
                        <div class="media profile-media">
                            <img class="user-profile rounded-circle" src="{{asset('admin-assets/images/users/4.jpg')}}" alt="">
                            <div class="user-name-hide media-body">
                                <span>Emay Walter</span>
                                <p class="mb-0 font-roboto">Admin<i class="middle fa fa-angle-down"></i></p>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div">
                            <li>
                                <a href="{{route('admin.profile.edit')}}">
                                    <i data-feather="users"></i>
                                    <span>Users</span>
                                </a>
                            </li>
                            <li>
                                <a href="order-list.html">
                                    <i data-feather="archive"></i>
                                    <span>Orders</span>
                                </a>
                            </li>
                            <li>
                                <a href="support-ticket.html">
                                    <i data-feather="phone"></i>
                                    <span>Spports Tickets</span>
                                </a>
                            </li>
                            <li>
                                <a href="profile-setting.html">
                                    <i data-feather="settings"></i>
                                    <span>Settings</span>
                                </a>
                            </li>
                            <li>
                                
                                <a data-bs-toggle="modal" data-bs-target="{{route('logout')}}"
                                    href="{{route('logout')}}">
                                    <i data-feather="log-out"></i>
                                    <span>Log out</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Header Ends-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
            <div>
                <div class="logo-wrapper logo-wrapper-center">
                    <a href="index.html" data-bs-original-title="" title="">
                        <img class="img-fluid for-dark" src="{{asset('storage/'.$CompanyData->c_logo)}}" alt="">
                    </a>
                    <div class="back-btn">
                        <i class="fa fa-angle-left"></i>
                    </div>
                    <div class="toggle-sidebar">
                        <i class="status_toggle middle sidebar-toggle" data-feather="grid"></i>
                    </div>
                </div>
                <div class="logo-icon-wrapper">
                    <a href="index.html">
                        <img class="img-fluid main-logo" src="{{asset('admin-assets/images/logo/logo.png')}}" alt="logo">
                    </a>
                </div>
                <nav class="sidebar-main">
                    <div class="left-arrow" id="left-arrow">
                        <i data-feather="arrow-left"></i>
                    </div>

                    <div id="sidebar-menu">
                        <ul class="sidebar-links" id="simple-bar">
                            <li class="back-btn"></li>
                            <li class="sidebar-main-title sidebar-main-title-3">
                                <div>
                                    <h6 class="lan-1">General</h6>
                                    <p class="lan-2">Dashboards &amp; Users.</p>
                                </div>
                            </li>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="{{route('admin.company')}}">
                                    <i data-feather="briefcase"></i>
                                    <span>Company Data</span>
                                </a>
                            </li>
                            


                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="{{route('admin./')}}">
                                    <i data-feather="home"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="{{route('admin.team.index')}}">
                                    <i data-feather="users"></i>
                                    <span>Team</span>
                                </a>
                            </li>
                          

                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                    <i data-feather="users"></i>
                                    <span>Users</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href="{{route('admin.alluser')}}">All users</a>
                                    </li>
                                  
                                    <li >
                                        <a  href="{{route('admin.register')}}">
                                            
                                          Register User
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-main-title sidebar-main-title-2">
                                <div>
                                    <h6 class="lan-1">Application</h6>
                                    <p class="lan-2">Ready To Use Apps</p>
                                </div>
                            </li>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="{{route('admin.cars.index')}}">
                                    <i data-feather="cars"></i>
                                    <span>Cars</span>
                                </a>
                            </li>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="{{route('admin.sliders.index')}}">
                                    <i data-feather="sliders"></i>
                                    <span>Slider</span>
                                </a>
                            </li>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="{{route('admin.blogs.index')}}">
                                    <i data-feather="sliders"></i>
                                    <span>Blogs</span>
                                </a>
                            </li>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="{{route('admin.testimonial.index')}}">
                                    <i data-feather="sliders"></i>
                                    <span>Testimonial</span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="right-arrow" id="right-arrow">
                        <i data-feather="arrow-right"></i>
                    </div>
                </nav>
            </div>
        </div>
        @section('content')
    <div class="alert alert-danger hidden message">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
    </div>
    <h1>Content Here</h1>
    @show
        <!-- Page Sidebar Ends-->
    </div>
    
    </div>
    
                   
                    <!-- latest js -->
    <script src="{{asset('admin-assets/js/jquery-3.6.0.min.js')}}"></script>

    <!-- Bootstrap js -->
    <script src="{{asset('admin-assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>

    <!-- feather icon js -->
    <script src="{{asset('admin-assets/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/icons/feather-icon/feather-icon.js')}}"></script>

    <!-- scrollbar simplebar js -->
    <script src="{{asset('admin-assets/js/scrollbar/simplebar.js')}}"></script>
    <script src="{{asset('admin-assets/js/scrollbar/custom.js')}}"></script>

    <!-- Sidebar jquery -->
    <script src="{{asset('admin-assets/js/config.js')}}"></script>

    <!-- tooltip init js -->
    <script src="{{asset('admin-assets/js/tooltip-init.js')}}"></script>

    <!-- Plugins JS -->
    <script src="{{asset('admin-assets/js/sidebar-menu.js')}}"></script>
    <script src="{{asset('admin-assets/js/notify/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/notify/index.js')}}"></script>

    <!-- Apexchar js -->
    <script src="{{asset('admin-assets/js/chart/apex-chart/apex-chart1.js')}}"></script>
    <script src="{{asset('admin-assets/js/chart/apex-chart/moment.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/chart/apex-chart/apex-chart.js')}}"></script>
    <script src="{{asset('admin-assets/js/chart/apex-chart/stock-prices.js')}}"></script>
    <script src="{{asset('admin-assets/js/chart/apex-chart/chart-custom1.js')}}"></script>

    <!-- customizer js -->
    <script src="{{asset('admin-assets/js/customizer.js')}}"></script>

    <!-- ratio js -->
    <script src="{{asset('admin-assets/js/ratio.js')}}"></script>

    <!-- Theme js -->
    <script src="{{asset('admin-assets/js/script.js')}}"></script>

    @yield('script')
</body>
</html>