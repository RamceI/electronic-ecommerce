<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content={{ csrf_token() }}">
    <title>E&E - Electronics eCommerce Bootstrap4 HTML Template</title>
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
                <div class="col mt-10 mb-10">
                    <!-- Header Links Start -->
                    <div class="header-links">
                        {{-- <a href="{{asset('/trackorder')}}"><img src="{{asset('/assets/images/icons/car.png')}}" alt="Car Icon"> <span>Track your order</span></a>
                         <a href="{{asset('/store')}}"><img src="{{asset('/assets/images/icons/marker.png')}}" alt="Car Icon"> <span>Locate Store</span></a>--}}
                    </div><!-- Header Links End -->
                </div>
                <div class="col order-2 order-xs-2 order-lg-12 mt-10 mb-10">
                    <!-- Header Account Links Start -->
                    <div class="header-account-links">
                        <a href="{{asset('/register')}}"><i class="icofont icofont-user-alt-7"></i> <span>my account</span></a>
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

                <!-- Mobile Menu -->
                <div class="mobile-menu order-12 d-block d-lg-none col"></div>

            </div>
        </div>
    </div><!-- Header Bottom End -->

</div><!-- Header Section End -->

<!-- Cart Overlay -->
<div class="cart-overlay"></div>

<!-- Login Section Start -->
<div class="login-section section mt-90 mb-90">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Login -->
            <div class="col-md-5 ">
                <div class="card">
                    <div class="card-header">{{ __('Reset Password') }}</div>
                    <div class="card-body">
                        <div class="ee-email-reset">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                        @endif
                        <!-- Login Form -->
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12 mb-30">
                                        <input id="email" type="email" placeholder="Type your email address"  class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    </div>
                                    <div class="col-12">
                                        <input type="submit" value="Password Reset">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div><!-- Login Section End -->





<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{asset('/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('/assets/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
<!-- Plugins JS -->
<script src="{{asset('/assets/js/plugins.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('/assets/js/main.js')}}"></script>

</body>

</html>
