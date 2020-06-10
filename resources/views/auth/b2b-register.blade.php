<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content={{ csrf_token() }}">
    <title>E&E - Electronics eCommerce Bootstrap4 HTML Templa</title>
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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/9.0.6/css/intlTelInput.css'>
    <link rel='stylesheet' href='{{asset('/assets/css/demo.css')}}'>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <!-- Modernizer JS -->
    <script src="{{asset('/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <style>
        #showField{
            width: 100%;
            border: 1px solid #999999;
            line-height: 28px;
            border-radius: 50px;
            padding: 10px 30px;
            color: #444444;
            font-size: 14px;
            background-color: transparent;
        }

        .lightBg{
            background-color: #e5e5e5;
        }
        .box{
            float: left;
            border: 1px solid #999999;
            line-height: 28px;
            border-radius: 50px;
            padding: 7px 30px;
            color: #444444;
            font-size: 14px;
        }
        .p-right, .box.p-right, .col.p-right, .btn.p-right{
            padding-right: 0;
        }
        .intl-tel-input {
            position: relative;
            display: inline-block;
            width: 100%;
        }
        input {
            height: 41px;
            margin: 0;
            padding: 6px 12px;
            border-radius: 2px;
            font-family: inherit;
            font-size: 100%;
            color: inherit;
        }
        /* .row::before, .row::after {
             content: '';
             display: table;
         }
         .row::after {
             clear: both;
         }*/
    </style>
</head>

<body>

<!-- Header Section Start -->
<div class="header-section section">

    <!-- Header Top Start -->
    <div class="header-top header-top-one header-top-border pt-10 pb-10">
        <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col mt-10 mb-10">
                    <!-- Header Links Start -->
                    <div class="header-links">
                        <a href="{{asset('/trackorder')}}"><img src="{{asset('/assets/images/icons/car.png')}}" alt="Car Icon"> <span>Track your order</span></a>
                    </div><!-- Header Links End -->
                </div>

                <div class="col order-12 order-xs-12 order-lg-2 mt-10 mb-10">
                    <!-- Header Advance Search Start -->
                    <div class="header-advance-search">

                        <form action="#">
                            <div class="input"><input type="text" placeholder="Search your product"></div>
                            <div class="select">
                                <select class="nice-select">
                                    <option>All Categories</option>
                                    <option>Mobile</option>
                                    <option>Computer</option>
                                    <option>Laptop</option>
                                    <option>Camera</option>
                                </select>
                            </div>
                            <div class="submit"><button><i class="icofont icofont-search-alt-1"></i></button></div>
                        </form>

                    </div><!-- Header Advance Search End -->
                </div>

                <div class="col order-2 order-xs-2 order-lg-12 mt-10 mb-10">
                    <!-- Header Account Links Start -->
                    <div class="header-account-links">
                        <a href="{{asset('/b2b/register')}}"><i class="icofont icofont-user-alt-7"></i> <span>B2B Register</span></a>
                        <a href="{{asset('/register')}}"><i class="icofont icofont-user-alt-7"></i> <span>B2C Register</span></a>
                        <a href="{{asset('/login')}}"><i class="icofont icofont-login d-none"></i> <span>Login</span></a>
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

                <div class="col order-12 order-lg-2 order-xl-2 d-none d-lg-block">
                    <!-- Main Menu Start -->
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li class="active"><a href="{{asset('/')}}">HOME</a></li>
                                <li class="menu-item-has-children"><a href="shop-grid.html">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children"><a href="shop-grid.html">shop grid</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop-grid.html">shop grid</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="single-product.html">Single Product</a>
                                            <ul class="sub-menu">
                                                <li><a href="single-product.html">Single Product 1</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">PAGES</a>
                                    <ul class="mega-menu three-column">
                                        <li><a href="#">Column One</a>
                                            <ul>
                                                <li><a href="about-us.html">About us</a></li>
                                                <li><a href="best-deals.html">Best Deals</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Column Two</a>
                                            <ul>
                                                <li><a href="compare.html">Compare</a></li>
                                                <li><a href="faq.html">Faq</a></li>
                                                <li><a href="feature.html">Feature</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="register.html">Register</a></li>
                                                <li><a href="store.html">Store</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Column Three</a>
                                            <ul>
                                                <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                                                <li><a href="track-order.html">Track Order</a></li>

                                                <li><a href="wishlist.html">Wishlist</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="blog-1-column-left-sidebar.html">BLOG</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-1-column-left-sidebar.html">Blog 1 Column Left Sidebar</a></li>
                                        <li><a href="single-blog-left-sidebar.html">Single Blog Left Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">CONTACT</a></li>
                            </ul>
                        </nav>
                    </div><!-- Main Menu End -->
                </div>

                <div class="col order-2 order-lg-12 order-xl-12">
                    <!-- Header Shop Links Start -->
                    <div class="header-shop-links">

                        <!-- Compare -->
                        <a href="compare.html" class="header-compare"><i class="ti-control-shuffle"></i></a>
                        <!-- Wishlist -->
                        <a href="wishlist.html" class="header-wishlist"><i class="ti-heart"></i> <span class="number">3</span></a>
                        <!-- Cart -->
                        <a href="cart.html" class="header-cart"><i class="ti-shopping-cart"></i> <span class="number">3</span></a>

                    </div><!-- Header Shop Links End -->
                </div>

                <!-- Mobile Menu -->
                <div class="mobile-menu order-12 d-block d-lg-none col"></div>

            </div>
        </div>
    </div><!-- Header Bottom End -->

</div><!-- Header Section End -->

<!-- Mini Cart Wrap Start -->
<div class="mini-cart-wrap">

    <!-- Mini Cart Top -->
    <div class="mini-cart-top">

        <button class="close-cart">Close Cart<i class="icofont icofont-close"></i></button>

    </div>

    <!-- Mini Cart Products -->
    <ul class="mini-cart-products">
        <li>
            <a class="image"><img src="{{asset('/assets/images/product/product-1.png')}}" alt="Product"></a>
            <div class="content">
                <a href="single-product.html" class="title">Waxon Note Book Pro 5</a>
                <span class="price">Price: $295</span>
                <span class="qty">Qty: 02</span>
            </div>
            <button class="remove"><i class="fa fa-trash-o"></i></button>
        </li>
        <li>
            <a class="image"><img src="{{asset('/assets/images/product/product-2.png')}}" alt="Product"></a>
            <div class="content">
                <a href="single-product.html" class="title">Aquet Drone D 420</a>
                <span class="price">Price: $275</span>
                <span class="qty">Qty: 01</span>
            </div>
            <button class="remove"><i class="fa fa-trash-o"></i></button>
        </li>
        <li>
            <a class="image"><img src="{{asset('/assets/images/product/product-3.png')}}" alt="Product"></a>
            <div class="content">
                <a href="single-product.html" class="title">Game Station X 22</a>
                <span class="price">Price: $295</span>
                <span class="qty">Qty: 01</span>
            </div>
            <button class="remove"><i class="fa fa-trash-o"></i></button>
        </li>
    </ul>

    <!-- Mini Cart Bottom -->
    <div class="mini-cart-bottom">

        <h4 class="sub-total">Total: <span>$1160</span></h4>

        <div class="button">
            <a href="checkout.html">CHECK OUT</a>
        </div>

    </div>

</div><!-- Mini Cart Wrap End -->

<!-- Cart Overlay -->
<div class="cart-overlay"></div>

<!-- Page Banner Section Start -->
<div class="page-banner-section section">
    <div class="page-banner-wrap row row-0 d-flex align-items-center ">

        <!-- Page Banner -->
        <div class="col-lg-4 col-12 order-lg-2 d-flex align-items-center justify-content-center">
            <div class="page-banner">
                <h1>Register</h1>
                <p>similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita</p>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">Register</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Banner -->
        <div class="col-lg-4 col-md-6 col-12 order-lg-1">
            <div class="banner"><a href="#"><img src="{{asset('/assets/images/banner/banner-15.jpg')}}" alt="Banner"></a></div>
        </div>

        <!-- Banner -->
        <div class="col-lg-4 col-md-6 col-12 order-lg-3">
            <div class="banner"><a href="#"><img src="{{asset('/assets/images/banner/banner-14.jpg')}}" alt="Banner"></a></div>
        </div>

    </div>
</div><!-- Page Banner Section End -->

<!-- Register Section Start -->
<div class="register-section section mt-90 mb-90">
    <div class="container">
        <div class="row">
            <!-- Register -->
            <div class="col-md-12 col-12 d-flex">
                <div class="ee-register">

                    <h3>We will need for your registration</h3>
                    <p>E&E provide how all this mistaken idea of denouncing pleasure and sing pain born an will give you a complete account of the system, and expound</p>

                    <!-- Register Form -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> Please correct errors and try again!.
                                <br/>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col col-6 p-right">
                                <div class="row">
                                    <div class="col-12  mb-30">
                                        <input id="name" type="text" placeholder="Your name here" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autofocus>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="col-12 mb-30">
                                        <input id="surname" type="text" placeholder="Your surname here" class="@error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}"  >
                                        @error('surname')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                    <div class="col-12 mb-30">
                                        <select name="gender" class="browser-default custom-select ">
                                            <option selected>Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>

                                    <div class="col-12 mb-30">
                                        <input id="phone" type="tel" placeholder="Your phonenumber here" class="@error('phonenumber') is-invalid @enderror " name="phonenumber" value="{{ old('phonenumber') }}" >
                                    </div>

                                    <div class="col-12 mb-30">
                                        <input id="email" type="email" placeholder="Your email here" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" >
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                    <div class="col-12 mb-30">
                                        <input id="autocomplete" placeholder="Enter your address"
                                               onFocus="geolocate()" type="text" name="address" class="form-control">
                                    </div>

                                    <div class="col-12 mb-30">
                                        <input id="locality" type="text" placeholder="Your city here" class="@error('locality') is-invalid @enderror " name="city" value="{{ old('locality') }}" >
                                    </div>

                                </div>
                            </div>

                            <div class="col col-6 p-right">
                                <div class="row">
                                    <div class="col-12 mb-30">
                                        <input id="state" type="text" placeholder="Your state here" class="@error('state') is-invalid @enderror " name="state" value="{{ old('state') }}" >
                                    </div>

                                    <div class="col-12 mb-30">
                                        <input id="country" type="text" placeholder="Your country here" class="@error('country') is-invalid @enderror " name="country" value="{{ old('country') }}" >
                                    </div>

                                    <div class="col-12 mb-30">
                                        <input id="zip" type="text" placeholder="Your zip here" class="@error('zip') is-invalid @enderror " name="zip" value="{{ old('zip') }}" >
                                    </div>

                                    <div class="col-12 mb-30">
                                        <input id="tax" type="text" placeholder="Your tax here" class="@error('tax') is-invalid @enderror " name="tax" value="{{ old('tax') }}" >
                                    </div>

                                    <div class="col-12 mb-30">
                                        <input id="company" type="text" placeholder="Your company here" class="@error('company') is-invalid @enderror " name="company" value="{{ old('company') }}" >
                                    </div>

                                    <div class="col-12 mb-30 buttonInside">
                                        <input id="password" type="password" placeholder="Enter password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        <button type="button" class="showPassword" id="showPassword"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                        <button type="button" class="generatePassword" onclick="randomPassword(8)"><i class="fa fa-key" aria-hidden="true"></i></button>

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                    <div class="col-12 mb-30">
                                        <input id="password-confirm" type="password" placeholder="Confirm password" name="password_confirmation"  autocomplete="new-password">
                                    </div>
                                    <div class="col-12 mb-15">
                                        <input type="checkbox" name="remember_me" id="remember_me" >
                                        <label for="remember_me" >Aceept
                                            <a target="_blank" class="terms-conditions" href="{{asset('/terms')}}">Terms and conditions</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--Button-->
                            <div class="col-12"><input type="submit" value="register"></div>

                            <div class="col-12 mb-30">
                                <input id="role" type="hidden" value="1" name="role" >
                            </div>
                            <!--End Button-->
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div><!-- Register Section End -->

<!-- Brands Section Start -->
<div class="brands-section section mb-90">
    <div class="container">
        <div class="row">

            <!-- Brand Slider Start -->
            <div class="brand-slider col">
                <div class="brand-item col"><img src="{{asset('/assets/images/brands/brand-1.png')}}" alt="Brands"></div>
                <div class="brand-item col"><img src="{{asset('/assets/images/brands/brand-2.png')}}" alt="Brands"></div>
                <div class="brand-item col"><img src="{{asset('/assets/images/brands/brand-3.png')}}" alt="Brands"></div>
                <div class="brand-item col"><img src="{{asset('/assets/images/brands/brand-4.png')}}" alt="Brands"></div>
                <div class="brand-item col"><img src="{{asset('/assets/images/brands/brand-5.png')}}" alt="Brands"></div>
            </div><!-- Brand Slider End -->

        </div>
    </div>
</div><!-- Brands Section End -->

<!-- Subscribe Section Start -->
<div class="subscribe-section section bg-gray pt-55 pb-55">
    <div class="container">
        <div class="row align-items-center">

            <!-- Mailchimp Subscribe Content Start -->
            <div class="col-lg-6 col-12 mb-15 mt-15">
                <div class="subscribe-content">
                    <h2>SUBSCRIBE <span>OUR NEWSLETTER</span></h2>
                    <h2><span>TO GET LATEST</span> PRODUCT UPDATE</h2>
                </div>
            </div><!-- Mailchimp Subscribe Content End -->


            <!-- Mailchimp Subscribe Form Start -->
            <div class="col-lg-6 col-12 mb-15 mt-15">

                <form class="subscribe-form" action="#">
                    <input type="email" autocomplete="off" placeholder="Enter your email here" />
                    <button >subscribe</button>
                </form>
                <!-- mailchimp-alerts Start -->
                <div class="mailchimp-alerts text-centre">
                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                </div><!-- mailchimp-alerts end -->

            </div><!-- Mailchimp Subscribe Form End -->

        </div>
    </div>
</div><!-- Subscribe Section End -->

<!-- Footer Section Start -->
<div class="footer-section section bg-ivory">

    <!-- Footer Top Section Start -->
    <div class="footer-top-section section pt-90 pb-50">
        <div class="container">

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
<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Popper JS -->
<script src="{{asset('/assets/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
<!-- Plugins JS -->
<script src="{{asset('/assets/js/plugins.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('/assets/js/main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/10.0.2/js/intlTelInput.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"></script>
<script src="{{asset('js/phone.js')}}"></script>
<script src="{{asset('/assets/js/showAndHidePassword.js')}}"></script>
<script src="{{asset('/assets/js/randomPassword.js')}}"></script>
<script src="{{asset('/assets/js/autocomplete-address.js')}}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAC4ytZ3JPqMTua0juP0yMzO60Qseb2jtg&libraries=places&callback=initAutocomplete"></script>
</body>

</html>
