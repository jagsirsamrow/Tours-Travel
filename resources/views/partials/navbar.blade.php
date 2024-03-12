@php
    $CompanyData = \Helper::CompanyData();
@endphp
<!-- header-area start -->
<div class="header-area">
    <!-- header-top start -->
    <div class="header-top bg-black">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-2 order-lg-1">
                    <div class="top-left-wrap">
                        <ul class="phone-email-wrap"><a href="tel:{{ $CompanyData->c_mobile }}">
                            
                            <li><i class="fa fa-phone"></i> {{ $CompanyData->c_mobile }}</li>
                            </a>
                            <a href="{{route('contact')}}"><li><i class="fa fa-envelope-open-o"></i> {{ $CompanyData->c_email  }}</li></a>
                        </ul>
                        {{-- <ul class="link-top">
                            <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" title="Rss"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#" title="Google"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul> --}}
                    </div>
                </div>
                <div class="col-lg-4 order-2 order-lg-1">
                    <div class="top-left-wrap">
                        {{-- <ul class="phone-email-wrap">
                            <li><i class="fa fa-phone"></i> (08)123 456 7890</li>
                            <li><i class="fa fa-envelope-open-o"></i> yourmail@domain.com</li>
                        </ul> --}}
                        <ul class="link-top">
                            <li><a href="https://twitter.com/JSamrow98982"target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
                            {{-- <li><a href="#" title="Rss"><i class="fa fa-rss"></i></a></li> --}}
                            {{-- <li><a href="#" title="Google"><i class="fa fa-google-plus"></i></a></li> --}}
                            <li><a href="https://www.facebook.com/jagsir.samrow" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/jagsir-singh-5292b2245"><i class="fa fa-linkedin"></i></a></li>

                            <li><a href="https://www.instagram.com/jagsir.samrow/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                
                {{-- <div class="col-lg-4 order-1 order-lg-2">
                    <div class="top-selector-wrapper">
                        <ul class="single-top-selector">
                            <!-- Currency Start -->
                            <li class="currency list-inline-item">
                                <div class="btn-group">
                                    <button class="dropdown-toggle"> USD $ <i class="fa fa-angle-down"></i></button>
                                    <div class="dropdown-menu">
                                        <ul>
                                           <li><a href="#">Euro €</a></li>
                                           <li><a href="#" class="current">USD $</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <!-- Currency End -->
                            <!-- Language Start -->
                            <li class="language list-inline-item">
                                <div class="btn-group">
                                    <button class="dropdown-toggle"><img src="{{asset('assets/images/icon/la-1.jpg')}}" alt="">  English <i class="fa fa-angle-down"></i></button>
                                    <div class="dropdown-menu">
                                        <ul>
                                           <li><a href="#"><img src="{{asset('assets/images/icon/la-1.jpg')}}" alt=""> English</a></li>
                                            <li><a href="#"><img src="{{asset('assets/images/icon/la-2.jpg')}}" alt=""> Français</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <!-- Language End -->
                            <!-- Sanguage Start -->
                            <li class="setting-top list-inline-item">
                                <div class="btn-group">
                                    <button class="dropdown-toggle"><i class="fa fa-user-circle-o"></i> Setting <i class="fa fa-angle-down"></i></button>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a href="my-account.html">My account</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="login-register.html">Sign in</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <!-- Sanguage End -->
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Header-top end -->
    <!-- Header-bottom start -->
    <div class="header-bottom-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-4">
                    <!-- logo start -->
                    <div class="logo">
                        <a href="{{route('/')}}"><img src="{{asset('storage/'.$CompanyData->c_logo)}}" alt=""></a>
                    </div>
                    <!-- logo end -->
                </div>
                <div class="col-lg-7 d-none d-lg-block">
                    <!-- main-menu-area start -->
                    <div class="main-menu-area">
                        <nav class="main-navigation">
                            <ul>
                                <li  class="active"><a href="{{route('/')}}">Home  </a>     
                                </li>
                                {{-- <li><a href="shop.html">Shop </a>
                                    
                                </li> --}}
                                <li><a href="{{route('services')}}">Services </a>
                                </li>
                                <li><a href="{{route('blogpage')}}">Blog </a>
                                    
                                </li>
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="{{route('contact')}}">Contact us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- main-menu-area End -->
                </div>
                <div class="col-lg-3 col-8">
                    <div class="header-bottom-right">
                        <div class="block-search">
                            <div class="trigger-search"><i class="fa fa-search"></i> <span>Search</span></div>
                            <div class="search-box main-search-active">
                                <form action="" class="search-box-inner">
                                    <input type="text" placeholder="Search our Route plan">
                                    <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        {{-- <div class="shoping-cart">
                            <div class="btn-group">
                                <!-- Mini Cart Button start -->
                                <button class="dropdown-toggle"><i class="fa fa-shopping-cart"></i> Cart (2)</button>
                                <!-- Mini Cart button end -->
                                
                                <!-- Mini Cart wrap start -->
                                <div class="dropdown-menu mini-cart-wrap">
                                    <div class="shopping-cart-content">
                                        <ul class="mini-cart-content">
                                            <!-- Mini-Cart-item start -->
                                            <li class="mini-cart-item">
                                                <div class="mini-cart-product-img">
                                                    <a href="#"><img src="{{asset('assets/images/cart/1.jpg')}}" alt=""></a>
                                                    <span class="product-quantity">1x</span>
                                                </div>
                                                <div class="mini-cart-product-desc">
                                                    <h3><a href="#">Printed Summer Dress</a></h3>
                                                    <div class="price-box">
                                                        <span class="new-price">$55.21</span>
                                                    </div>
                                                    <div class="size">
                                                        Size: S
                                                    </div>
                                                </div>
                                                <div class="remove-from-cart">
                                                    <a href="#" title="Remove"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </li>
                                            <!-- Mini-Cart-item end -->
                                            
                                            <!-- Mini-Cart-item start -->
                                            <li class="mini-cart-item">
                                                <div class="mini-cart-product-img">
                                                    <a href="#"><img src="{{asset('assets/images/cart/3.jpg')}}" alt=""></a>
                                                    <span class="product-quantity">1x</span>
                                                </div>
                                                <div class="mini-cart-product-desc">
                                                    <h3><a href="#">Faded Sleeves T-shirt</a></h3>
                                                    <div class="price-box">
                                                        <span class="new-price">$72.21</span>
                                                    </div>
                                                    <div class="size">
                                                        Size: M
                                                    </div>
                                                </div>
                                                <div class="remove-from-cart">
                                                    <a href="#" title="Remove"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </li>
                                            <!-- Mini-Cart-item end -->
                                            
                                            <li>
                                                <!-- shopping-cart-total start -->
                                                <div class="shopping-cart-total">
                                                    <h4>Sub-Total : <span>$127.42</span></h4>
                                                    <h4>Total : <span>$127.42</span></h4>
                                                </div>
                                                <!-- shopping-cart-total end -->
                                            </li>
                                            
                                            <li>   
                                                <!-- shopping-cart-btn start -->
                                                <div class="shopping-cart-btn">
                                                    <a href="checkout.html">Checkout</a>
                                                </div>
                                                <!-- shopping-cart-btn end -->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Mini Cart wrap End -->
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col">
                    <!-- mobile-menu start -->
                    <div class="mobile-menu d-block d-lg-none"></div>
                    <!-- mobile-menu end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Header-bottom end -->
</div>
<!-- Header-area end -->