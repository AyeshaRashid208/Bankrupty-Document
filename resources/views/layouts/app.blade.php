@php
$media = media();
$data = content();
@endphp
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Mean Menu CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
    <!-- Box Icons CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/boxicons.min.css')}}">
    <!-- Owl Carousel JS -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <!-- Flat Icons CSS -->
    <link rel="stylesheet" href="{{asset('assets/fonts/flaticon.css')}}">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.min.css')}}">
    <!-- Popup CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <title>BankRupty</title>
    @yield('style')
    <!-- <link rel="icon" type="image/png" href={{asset('assets/img/favicon.png')}}"> -->
</head>

<body>
    <!-- Preloader -->
    <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Header -->
    <div class="header-area">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="left">
                        <ul>
                            <li>
                                <i class='bx bx-location-plus'></i>
                                <a href="#">
                                    {{ $data['#header_address']['heading'] ?? '' }}
                                </a>
                            </li>
                            <li>
                                <i class='bx bx-mail-send'></i>
                                <a href="mailto:{{ $data['#header_email']['heading'] ?? '' }}"><span
                                        class="__cf_email__">{{ $data['#header_email']['heading'] ?? '' }}</span></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="right">
                        <ul>
                            @foreach ($media as $item)
                                <li>
                                    <a href="{{ $item->link ?? '' }}" title="{{ $item->name ?? '' }}"
                                        target="_blank">
                                        <i class='{{ $item->icon ?? '' }}'></i>
                                    </a>
                                </li>
                            @endforeach
                            {{-- <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-pinterest-alt'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li> --}}
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Header -->

    <!-- Navbar -->
    <div class="navbar-area sticky-top">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset($data['#logo']['image'] ??'assets/img/logo.png') }}" alt="Logo">
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset($data['#logo']['image'] ??'assets/img/logo.png') }}" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{url('/')}}" class="nav-link active">Home </a>

                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">About Us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    ABOUT BANKRUPTCY (BK)
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                  <li><a class="dropdown-item" href="{{url('chapter-7-bankruptcy')}}">Chapter 7</a></li>
                                  <li><a class="dropdown-item" href="{{url('chapter-13-bankruptcy')}}">Chapter 13</a></li>
                                  <li><a class="dropdown-item" href="{{url('5-7-days-processing-time')}}">5-7 Days Processing Time</a></li>
                                  <li><a class="dropdown-item" href="{{url('2-3-days-processing-time')}}">2-3 Days Processing Time</a></li>
                                  <li><a class="dropdown-item" href="{{url('1-day-processing-time')}}">1 Day Processing Time</a></li>
                                  <li><a class="dropdown-item" href="{{url('order-procedure')}}">Order Procedures</a></li>
                                </ul>
                            </li>
                            
                            <li class="nav-item">
                                <a href="{{url('contact-us')}}" class="nav-link">CONTACT US</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('membership')}}" class="nav-link">BECOME A MEMBER</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">PRICING </a>
                            </li>
                        </ul>
                        <div class="side-nav">
                            @auth
                                <a class="consultant-btn" href="{{ url('home') }}">
                                    Dashboard
                                </a>
                                <a class="consultant-btn" href="javascript:void(0);"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();"><span class="ms-2">Logout </span></a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                @else
                                <a class="consultant-btn" href="{{ route('login') }}">
                                    Login
                                </a>
                                <a class="consultant-btn" href="{{ route('register') }}">
                                    Sign-up
                                </a>
                            @endauth
                            
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar -->



    @yield('content')

    <!-- Footer -->
    <footer class="footer-area pt-100 pb-70">
        <div class="container">
            <div class="row">

                <div class="col-sm-6 col-lg-4">
                    <div class="footer-item">
                        <div class="footer-logo">
                            <a class="logo" href="{{url('/')}}">
                                <img src="{{ asset($data['#logo']['image'] ??'assets/img/logo.png') }}" alt="Logo">
                            </a>
                            <p>{!!$data['#logo']['description']??''!!}</p>
                            <ul>
                                <li>
                                    <i class='bx bx-phone-call'></i>
                                    <span>{{$data['#footer_phone']['heading']}}</span>
                                    <a href="tel:{!!$data['#footer_phone']['description']!!}">{!!$data['#footer_phone']['description']!!}</a>
                                </li>
                                <li>
                                    <i class='bx bx-mail-send'></i>
                                    <span>{{$data['#footer_email']['heading']}}</span>
                                    <a href="mailto:{!!$data['#footer_email']['description']!!}">{!!$data['#footer_email']['description']!!}</a>
                                </li>
                                <li>
                                    <i class='bx bx-current-location'></i>
                                    <span>{{$data['#footer_address']['heading']}}</span>
                                    <a href="#">{!!$data['#footer_address']['description']!!}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-2">
                    <div class="footer-item">
                        <div class="footer-links">
                            <h3>{{$data['#quick_link']['heading']}}</h3>
                            <ul>
                                <li>
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <a href="#">Services</a>
                                </li>
                                <li>
                                    <a href="#">Projects</a>
                                </li>
                                <li>
                                    <a href="#">FAQ</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <h3>{{$data['#newsletter']['heading']}}</h3>
                        <div class="footer-newsletter">
                            <p>{!!$data['#newsletter']['description']!!}</p>

                            <form action="{{ route('Newsletter') }}" method="POST">
                                @csrf
                                <input type="email" class="form-control" placeholder="Enter email address"
                                    name="email" required style="height: 50px;
                                    margin-bottom: 5px;
                                    border-radius: 0px;">

                                <button class="form-control btn common-btn" type="submit" style="height: 50px;
                                margin-bottom: 5px;
                                border-radius: 0px;">
                                    Subscribe
                                    <span></span>
                                </button>
                                {!! $errors->first('email', "<span class='text-danger'>:message</span>") !!}
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-links">
                            <h3>{{$data['#what_we_do']['heading']}}</h3>
                            <ul>
                                <li>
                                    <a href="#">Financial Advice</a>
                                </li>
                                <li>
                                    <a href="#">Planning Strategies</a>
                                </li>
                                <li>
                                    <a href="#">Investment Trending</a>
                                </li>
                                <li>
                                    <a href="#">Wealth Commitment</a>
                                </li>
                                <li>
                                    <a href="#">Our Services</a>
                                </li>
                                <li>
                                    <a href="#">States Element</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- End Footer -->



    <!-- Go Top -->
    <div class="go-top">
        <i class='bx bxs-up-arrow'></i>
        <i class='bx bxs-up-arrow'></i>
    </div>
    <!-- End Go Top -->


    <!-- Essential JS -->
    {{-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script> --}}
    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- Form Validator JS -->
    <script src="{{asset('assets/js/form-validator.min.js')}}"></script>
    <!-- Contact JS -->
    {{-- <script src="{{asset('assets/js/contact-form-script.js')}}"></script> --}}
    <!-- Ajax Chip JS -->
    <script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <!-- Mean Menu JS -->
    <script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <!-- Wow JS -->
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <!-- Odometer JS -->
    <script src="{{asset('assets/js/odometer.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.appear.min.js')}}"></script>
    <!-- Nice Select JS -->
    <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <!-- Popup JS -->
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Custom JS -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
    @yield('script')
</body>


</html>
