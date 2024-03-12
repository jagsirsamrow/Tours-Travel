@php
    $CompanyData = \Helper::CompanyData();
@endphp
<!-- Footer Aare Start -->
<footer class="footer-area">
    <!-- footer-top start -->
    <div class="footer-top pt--100 section-pb">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                     <!-- footer-info-area start -->
                     <div class="footer-info-area">
                         <div class="footer-logo">
                             <a href="#"><img src="{{asset('assets/images/logo/logo_footer.png')}}" alt=""></a>
                         </div>
                         <div class="desc_footer">
                             <p><i class="fa fa-home"></i> <span> {{$CompanyData->c_address}}</span> </p>
                             <p><i class="fa fa-phone"></i> <span>  {{$CompanyData->c_mobile}}</span> </p>
                             <p><i class="fa fa-envelope-open-o"></i> <span> {{$CompanyData->c_email}}</span> </p>
                             <div class="link-follow-footer">
                                 <ul class="footer-social-share">
                                     <li><a href="https://twitter.com/JSamrow98982" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                     <li><a href="https://www.instagram.com/jagsir.samrow/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                     {{-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li> --}}
                                     <li><a href="https://www.facebook.com/jagsir.samrow" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                     <li><a href="https://www.linkedin.com/in/jagsir-singh-5292b2245"><i class="fa fa-linkedin"></i></a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <!-- footer-info-area end -->
                </div>
                <div class="col-lg-4 col-md-6">
                     <div class="row">
                         <div class="col-lg-6 col-md-6">
                             <!-- footer-info-area start -->
                             <div class="footer-info-area">
                                 <div class="footer-title">
                                     <h3>Pages</h3>
                                 </div>
                                 <div class="desc_footer">
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
                                 </div>
                             </div>
                             <!-- footer-info-area end -->
                         </div>
                         {{-- <div class="col-lg-6 col-md-6">
                             <!-- footer-info-area start -->
                             <div class="footer-info-area">
                                 <div class="footer-title">
                                     <h3>Our company</h3>
                                 </div>
                                 <div class="desc_footer">
                                     <ul>
                                         <li><a href="#">Delivery</a></li>
                                         <li><a href="#">About us</a></li>
                                         <li><a href="#">Contact us</a></li>
                                         <li><a href="#">Sitemap</a></li>
                                         <li><a href="#">Stores</a></li>
                                     </ul>
                                 </div>
                             </div>
                             <!-- footer-info-area end -->
                         </div> --}}
                     </div>
                </div>
                <div class="col-lg-4 col-md-12">
                     <!-- footer-info-area start -->
                     <div class="footer-info-area">
                         <div class="footer-title">
                             <h3>Join Our Newsletter Now </h3>
                         </div>
                         <div class="desc_footer">
                             <div class="input-newsletter">
                                <input name="email" class="input_text" value="" placeholder="Your email address" type="text">
                                <button class="btn-newsletter"><i class="fa fa-paper-plane-o"></i></button>
                             </div>
                             <p>Get E-mail updates about our latest shop and special offers.</p>
                         </div>
                     </div>
                     <!-- footer-info-area end -->
                </div>
            </div>
        </div>
     </div>
     <!-- footer-top end -->
     <!-- footer-buttom start -->
     <div class="footer-buttom">
         <div class="container">
             <div class="row">
                 <div class="col-lg-6 col-md-7">
                     <div class="copy-right">
                         <p>Copyright 2022 <a href="#">Tour & Travel</a>.  All Rights Reserved</p>
                     </div>
                 </div>
                 <div class="col-lg-6 col-md-5">
                    <div class="copy-right">
                        <p>Design and Develop By <a href="https://www.linkedin.com/in/jagsir-singh-5292b2245" target="_blank">Jagsir Samrow</a></p>
                    </div>
                     {{-- <div class="payment">
                         <img src="{{asset('assets/images/icon/1.png')}}" alt="">
                     </div> --}}
                 </div>
             </div>
         </div>
     </div>
     <!-- footer-buttom start -->
 </footer>
 <!-- Footer Aare End -->
 