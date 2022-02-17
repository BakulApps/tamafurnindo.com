<!DOCTYPE html>
<html lang="zxx" dir="ltr">
@include('fronted.layouts.head')
<body>
    <div class="main-wrapper">
        @include('fronted.layouts.header')
    <!-- offcanvas overlay start -->
    <div class="offcanvas-overlay"></div>
    <!-- offcanvas overlay end -->
    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/1.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Modern Smart Phone</a>
                            <span class="quantity-price">1 x <span class="amount">$18.86</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/2.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Bluetooth Headphone</a>
                            <span class="quantity-price">1 x <span class="amount">$43.28</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/3.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Smart Music Box</a>
                            <span class="quantity-price">1 x <span class="amount">$37.34</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons mt-30px">
                    <a href="cart.html" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                    <a href="checkout.html" class="btn btn-outline-dark current-btn">checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->
    <!-- OffCanvas Menu Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <button class="offcanvas-close"></button>
        <div class="user-panel">
            <ul>
                <li><a href="tel:0123456789"><i class="fa fa-phone"></i> {{$company->company_phone}}</a></li>
                <li><a href="mailto:{{$company->company_email}}"><i class="fa fa-envelope-o"></i> {{$company->company_email}}</a></li>
            </ul>
        </div>
        <div class="inner customScroll">
            <div class="offcanvas-menu mb-4">
                <ul>
                    <li><a href="{{route('home')}}"><span class="menu-text">Home</span></a></li>
                    <li><a href="{{ route('profile') }}">Profile</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li><a href="{{ route('order') }}">How to Order</a></li>
                    <li><a href="{{ route('payment') }}">Payment Method</a></li>
                    <li><a href="{{ route('faq') }}">FAQs</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>
            <!-- OffCanvas Menu End -->
            <div class="offcanvas-social mt-auto">
                <ul>
                    <li>
                        <a href="{{$company->company_facebook}}"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="{{$company->company_twitter}}"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="{{$company->company_google}}"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                        <a href="{{$company->company_youtube}}"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="{{$company->company_instagram}}"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- OffCanvas Menu End -->
    <!-- breadcrumb-area start -->
{{--    <div class="breadcrumb-area">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center justify-content-center">--}}
{{--                <div class="col-12 text-center">--}}
{{--                    <h2 class="breadcrumb-title">Product Page</h2>--}}
{{--                    <!-- breadcrumb-list start -->--}}
{{--                    <ul class="breadcrumb-list">--}}
{{--                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>--}}
{{--                        <li class="breadcrumb-item active">Shop</li>--}}
{{--                    </ul>--}}
{{--                    <!-- breadcrumb-list end -->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- breadcrumb-area end -->
    <!-- Shop Page Start  -->
            @yield('content')
    <!-- Shop Page End  -->
    <!-- Footer Area Start -->
            @include('fronted.layouts.footer')
    <!-- Footer Area End -->
</div>
<!-- Modal -->
    @yield('modal')
<!-- Modal end -->
<!-- Global Vendor, plugins JS -->
<!-- JS Files
============================================ -->
<script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/scrollUp.js')}}"></script>
<script src="{{asset('assets/js/plugins/venobox.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/mailchimp-ajax.js')}}"></script>

<!-- Minify Version -->
<!-- <script src="assets/js/vendor.min.js"></script>
<script src="assets/js/plugins.min.js"></script>
<script src="assets/js/main.min.js"></script> -->

<!--Main JS (Common Activation Codes)-->
<script src="{{asset('assets/js/main.js')}}"></script>
@yield('script')
</body>

</html>
