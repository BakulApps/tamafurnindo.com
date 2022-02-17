<div class="footer-area">
    <div class="footer-container">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <!-- Start single blog -->
                    <div class="col-md-6 col-lg-3 mb-md-30px mb-lm-30px">
                        <div class="single-wedge">
                            <div class="footer-logo">
                                <a href="{{route('home')}}"><img src="{{asset('storage/images/'. $setting->value('setting_logo_footer'))}}" alt=""></a>
                            </div>
                            <p class="about-text">{{$company->company_desc}}</p>
                            <ul class="link-follow">
                                <li><a class="m-0" title="Facebook" target="_blank" rel="noopener noreferrer" href="{{$company->company_facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a title="Tumblr" target="_blank" rel="noopener noreferrer" href="{{$company->company_tumblr}}"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
                                <li><a title="Twitter" target="_blank" rel="noopener noreferrer" href="{{$company->company_twitter}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a title="Instagram" target="_blank" rel="noopener noreferrer" href="{{$company->company_instagram}}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <!-- Start single blog -->
                    <div class="col-md-6 col-lg-3 col-sm-6 mb-lm-30px pl-lg-60px">
                        <div class="single-wedge">
                            <h4 class="footer-herading">Services</h4>
                            <div class="footer-links">
                                <div class="footer-row">
                                    <ul class="align-items-center">
                                        <li class="li"><a class="single-link" href="#">My Account</a></li>
                                        <li class="li"><a class="single-link" href="#">Contact</a></li>
                                        <li class="li"><a class="single-link" href="#">Shopping cart</a></li>
                                        <li class="li"><a class="single-link" href="#">Shop</a></li>
                                        <li class="li"><a class="single-link" href="#">Services Login</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <!-- Start single blog -->
                    <div class="col-md-6 col-lg-3 col-sm-6 mb-lm-30px pl-lg-40px">
                        <div class="single-wedge">
                            <h4 class="footer-herading">My Account</h4>
                            <div class="footer-links">
                                <div class="footer-row">
                                    <ul class="align-items-center">
                                        <li class="li"><a class="single-link" href="#">My Account</a></li>
                                        <li class="li"><a class="single-link" href="#">Contact</a></li>
                                        <li class="li"><a class="single-link" href="#">Shopping cart</a></li>
                                        <li class="li"><a class="single-link" href="#">Shop</a></li>
                                        <li class="li"><a class="single-link" href="#">Services Login</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <!-- Start single blog -->
                    <div class="col-md-6 col-lg-3 col-sm-12">
                        <div class="single-wedge">
                            <h4 class="footer-herading">Contact Info</h4>
                            <div class="footer-links">
                                <!-- News letter area -->
                                <p class="address">Address: {{$company->company_address}}</p>
                                <p class="phone">Phone/Fax:<a href="tel:0123456789"> {{$company->company_phone}}</a></p>
                                <p class="mail">Email:<a href="mailto:{{$company->company_email}}"> {{$company->company_email}}</a></p>
                                <p class="mail"><a href="https://{{$company->company_website}}"> {{$company->company_website}}</a></p>
                                <!-- News letter area  End -->
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="line-shape-top line-height-1">
                    <div class="row flex-md-row-reverse align-items-center">
                        <div class="col-md-6 text-center text-md-end">
                            <div class="payment-mth"><a href="#"><img class="img img-fluid" src="{{asset('assets/images/icons/payment.png')}}" alt="payment-image"></a></div>
                        </div>
                        <div class="col-md-6 text-center text-md-start">
                            <p class="copy-text"> © 2021 <strong>{{$company->company_name}}</strong> design <i class="fa fa-heart" aria-hidden="true"></i> By <a class="company-name" href="https://limitasi.my.id"><strong> Limitless Com </strong></a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
