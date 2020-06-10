<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>E-commerce Shop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/assets/images/favicon.ico')}}">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/icon-font.min.css')}}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/plugins.css')}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">

    <!-- Modernizer JS -->
    <script src="{{asset('/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>

<!-- Header Section Start -->
<div class="header-section section">

    <!-- Header Top Start -->
    <div class="header-top header-top-one header-top-border pt-10 pb-10">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col order-2 order-xs-2 order-lg-12 mt-10 mb-10">
                    <!-- Header Account Links Start -->
                    <div class="header-account-links">
                        <!-- Right Side Of Navbar -->
                        <nav>
                        <ul class="ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="menu-item-has-children">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="menu-item-has-children">
                                        <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="menu-item-has-children ">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                        </nav>
                    </div><!-- Header Account Links End -->
                </div>

            </div>
        </div>
    </div><!-- Header Top End -->

    <!-- Header Bottom Start -->
    <div class="header-bottom header-bottom-one header-sticky">
        <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col mt-15 mb-15">
                    <!-- Logo Start -->
                    <div class="header-logo">
                        <a href="{{asset('/')}}">
                            <img src="{{asset('/assets/images/logo.png')}}" alt="E&E - Electronics eCommerce Bootstrap4 HTML Template">
                            <img class="theme-dark" src="{{asset('/assets/images/logo-light.png')}}" alt="E&E - Electronics eCommerce Bootstrap4 HTML Template">
                        </a>
                    </div><!-- Logo End -->
                </div>
                <!-- Mobile Menu -->
                <div class="mobile-menu order-12 d-block d-lg-none col"></div>

            </div>
        </div>
    </div><!-- Header Bottom End -->

</div><!-- Header Section End -->

<!-- Cart Overlay -->
<div class="cart-overlay"></div>

<!-- Hero Section Start -->

<!-- Banner Section Start -->
<div class="banner-section section mb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif
                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}" class="font-weight-bold">{{ __('click here to request another') }}</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- Banner Section End -->

<!-- Footer Section Start -->
{{--
<div class="footer-section section bg-ivory">

    <!-- Footer Top Section Start -->
    <div class="footer-top-section section pt-90 pb-50">
        <div class="container">

            <!-- Footer Widget Start -->
            <div class="row">
                <div class="col mb-90">
                    <div class="footer-widget text-center">
                        <div class="footer-logo">
                            <img src="{{asset('/assets/images/logo.png')}}" alt="E&E - Electronics eCommerce Bootstrap4 HTML Template">
                            <img class="theme-dark" src="{{asset('/assets/images/logo-light.png')}}" alt="E&E - Electronics eCommerce Bootstrap4 HTML Template">
                        </div>
                        <p>Electronics product actual teachings of  he great explorer of the truth, the malder of human happiness. No one rejects</p>
                    </div>
                </div>
            </div><!-- Footer Widget End -->

            <div class="row">

                <!-- Footer Widget Start -->
                <div class="col-lg-3 col-md-6 col-12 mb-40">
                    <div class="footer-widget">

                        <h4 class="widget-title">CONTACT INFO</h4>

                        <p class="contact-info">
                            <span>Address</span>
                            You address will be here <br>
                            Lorem Ipsum text                        </p>

                        <p class="contact-info">
                            <span>Phone</span>
                            <a href="tel:01234567890">01234 567 890</a>
                            <a href="tel:01234567891">01234 567 891</a>
                        </p>

                        <p class="contact-info">
                            <span>Web</span>
                            <a href="mailto:info@example.com">info@example.com</a>
                            <a href="#">www.example.com</a>
                        </p>

                    </div>
                </div><!-- Footer Widget End -->

                <!-- Footer Widget Start -->
                <div class="col-lg-3 col-md-6 col-12 mb-40">
                    <div class="footer-widget">

                        <h4 class="widget-title">CUSTOMER CARE</h4>

                        <ul class="link-widget">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Cart</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>

                    </div>
                </div><!-- Footer Widget End -->

                <!-- Footer Widget Start -->
                <div class="col-lg-3 col-md-6 col-12 mb-40">
                    <div class="footer-widget">

                        <h4 class="widget-title">INFORMATION</h4>

                        <ul class="link-widget">
                            <li><a href="#">Track your order</a></li>
                            <li><a href="#">Locate Store</a></li>
                            <li><a href="#">Online Support</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Payment</a></li>
                            <li><a href="#">Shipping & Returns</a></li>
                            <li><a href="#">Gift coupon</a></li>
                            <li><a href="#">Special coupon</a></li>
                        </ul>

                    </div>
                </div><!-- Footer Widget End -->

                <!-- Footer Widget Start -->
                <div class="col-lg-3 col-md-6 col-12 mb-40">
                    <div class="footer-widget">

                        <h4 class="widget-title">LATEST TWEET</h4>

                        <div class="footer-tweet"></div>

                    </div>
                </div><!-- Footer Widget End -->

            </div>

        </div>
    </div><!-- Footer Bottom Section Start -->

    <!-- Footer Bottom Section Start -->
    <div class="footer-bottom-section section">
        <div class="container">
            <div class="row">

                <!-- Footer Copyright -->
                <div class="col-lg-6 col-12">
                    <div class="footer-copyright"><p>&copy; Copyright, 2018 All Rights Reserved by <a href="https://freethemescloud.com/">Free themes Cloud</a></p></div>
                </div>

                <!-- Footer Payment Support -->
                <div class="col-lg-6 col-12">
                    <div class="footer-payments-image"><img src="{{asset('/assets/images/payment-support.png')}}" alt="Payment Support Image"></div>
                </div>

            </div>
        </div>
    </div><!-- Footer Bottom Section Start -->

</div><!-- Footer Section End -->
--}}

<!-- Popup Subscribe Section Start -->
{{--
<div class="popup-subscribe-section section bg-gray pt-55 pb-55" data-modal="popup-modal">

    <!-- Popup Subscribe Wrap Start -->
    <div class="popup-subscribe-wrap">

        <button class="close-popup">X</button>

        <!-- Popup Subscribe Banner -->
        <div class="popup-subscribe-banner banner">
            <a href="#"><img src="assets/images/banner/banner-7.jpg" alt="Banner"></a>
        </div>

        <!-- Popup Subscribe Form Wrap Start -->
        <div class="popup-subscribe-form-wrap">

            <h1>SUBSCRIBE <br>OUR NEWSLETTER</h1>
            <h4>Get latest product update...</h4>

            <!-- Newsletter Form -->
            <form action="#" method="post" class="popup-subscribe-form validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                    <label for="popup_subscribe" class="d-none">Subscribe to our mailing list</label>
                    <input type="email" value="" name="EMAIL" class="email" id="popup_subscribe" placeholder="Enter your email here" required>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                    <button type="submit" name="subscribe" id="" class="button">subscribe</button>
                </div>
            </form>

            <p>Be the first in the by getting special deals and offers send directly to your inbox.</p>

        </div><!-- Popup Subscribe Form Wrap End -->

    </div><!-- Popup Subscribe Wrap End -->

</div><!-- Popup Subscribe Section End -->
--}}


<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Plugins JS -->
<script src="{{asset('assets/js/plugins.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
