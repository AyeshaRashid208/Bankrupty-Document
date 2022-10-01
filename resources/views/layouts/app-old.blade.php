@php
	$media = media();
	$data = content();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>Lawtrolley</title>

    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}')}}" type="image/x-icon"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

    <!-- Aos CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/aos/aos.css') }}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('style')
</head>

<body class="home-page">

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Start Navigation -->
        <!-- Header -->
        <header class="header">
            <nav class="navbar navbar-expand-lg header-nav">
                <div class="navbar-header">
                    <a id="mobile_btn" href="javascript:void(0);">
                        <span class="bar-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </a>
                    <a href="{{ url('/') }}" class="navbar-brand logo">
                        <img src="{{ asset($data['#logo']['image']??'') }}" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="{{ url('/') }}" class="menu-logo">
                            <img src="{{ asset($data['#logo']['image']??'') }}" class="img-fluid" alt="Logo">
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <ul class="main-nav">
                        <li class="active has-submenu">
                            <a href="{{ url('/') }}">Home</a>

                        </li>
                        <li class="has-submenu">
                            <a href="#">About us</a>

                        </li>
                        <li class="has-submenu">
                            <a href="#">Conatct US</a>

                        </li>

                        <li class="has-submenu">
                            <a href="#">Blog</a>

                        </li>
                        <li>
                            <a href="#" target="_blank">Admin</a>
                        </li>
                    </ul>
                </div>
                <ul class="nav header-navbar-rht">
                    @auth
                        @if (Auth()->user()->is_admin)
                            <li><a href="{{ url('admin/admin') }}" class="reg-btn"><i class="fas fa-home"></i>
                                    Dashboard</a></li>
                        @else
						<li><a href="{{ url('home') }}" class="reg-btn"><i class="fas fa-home"></i>
							Dashboard</a></li>
                        @endif
                        <li><a class="reg-btn" href="javascript:void(0);"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fas fa-lock"></i> Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @else
                        <li><a href="{{ route('register') }}" class="reg-btn"><i class="fas fa-user"></i>
                                Register</a></li>
                        <li><a href="{{ route('login') }}" class="log-btn"><i class="fas fa-unlock"></i> Login</a>
                        </li>
                    @endauth

                    <li><a href="#" class="login-btn">Post a Project </a></li>
                </ul>
            </nav>
        </header>
        <!-- /Header -->

        @yield('content')
        <!-- Footer -->
        <footer class="footer">
            <div class="footer-top aos" data-aos="fade-up">
                <div class="container">

                    <div class="row">
                        <div class="col-md-3">
                            <h2 class="footer-title">{{$data['#address']['heading']??''}}</h2>
                            <div class="footer-address">
                                <div class="off-address">
									{!!$data['#address']['description']??''!!}
                                    
                                    <p>{{$data['#phone']['heading']??''}}: <a href="tel:{!!$data['#phone']['description']??''!!}"><u>{!!$data['#phone']['description']??''!!}</u> (Toll-free)</a> </p>
                                </div>
                                <div class="off-address">
                                    {!!$data['#address1']['description']??''!!}
                                    
                                    <p>{{$data['#phone1']['heading']??''}}: <a href="tel:{!!$data['#phone1']['description']??''!!}"><u>{!!$data['#phone1']['description']??''!!}</u> (Toll-free)</a> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">{{$data['#usefull']['heading']??''}}</h2>
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Login</a></li>
                                    <li><a href="#">Register</a></li>
                                    <li><a href="#">Forgot Password</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">{{$data['#help&support']['heading']??''}}</h2>
                                <ul>
                                    <li><a href="#">Chat</a></li>
                                    <li><a href="#">Faq</a></li>
                                    <li><a href="#">Reviews</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms of use</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">{{$data['#other_link']['heading']??''}}</h2>
                                <ul>
                                    <li><a href="#">Freelancers</a></li>
                                    <li><a href="#">Freelancer Details</a></li>
                                    <li><a href="#">Project</a></li>
                                    <li><a href="#">Project Details</a></li>
                                    <li><a href="#">Post Project</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">{{$data['#mobile_application']['heading']??''}}</h2>
                                <p>{!!$data['#mobile_application']['description']??''!!}</p>
                                <div class="row g-2">
                                    <div class="col">
                                        <a href="{!!$data['#application1']['description']??''!!}"><img class="img-fluid"
                                                src="{{ asset($data['#application1']['image']??'') }}" alt="app-store"></a>
                                    </div>
                                    <div class="col">
                                        <a href="{!!$data['#application2']['description']??''!!}"><img class="img-fluid"
                                                src="{{ asset($data['#application2']['image']??'') }}" alt="google-play"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Footer Top -->

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">

                    <!-- Copyright -->
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="copyright-text">
                                    <p class="mb-0">&copy; 2022 All Rights Reserved</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 right-text">
                                <div class="social-icon">
                                    <ul>
										@foreach ($media as $item)
                                        <li><a href="{{$item->link??''}}" class="icon" target="_blank"><i
                                                    class="{{$item->icon??''}}"></i> </a></li>
													@endforeach
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Copyright -->
                </div>
            </div>
            <!-- /Footer Bottom -->
        </footer>
        <!-- /Footer -->

    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    <!-- Bootstrap Bundle JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Owl Carousel -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

    <!-- Aos -->
    <script src="{{ asset('assets/plugins/aos/aos.js') }}"></script>

    <!-- Select2 JS -->
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

    <!-- Slick JS -->
    <script src="{{ asset('assets/js/slick.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    @yield('script')
</body>

</html>
