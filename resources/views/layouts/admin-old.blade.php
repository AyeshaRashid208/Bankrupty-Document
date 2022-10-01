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
    <!-- <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('style')
</head>

<body class="dashboard-page">

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Start Navigation -->
        <!-- Header -->
        <header class="header header-bg">
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
                        <li class="has-submenu">
                            <a href="{{ url('/') }}">Home </a>

                        </li>



                        <li class="has-submenu">
                            <a href="#">Blog</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/admin') }}" target="_blank">Admin</a>
                        </li>
                    </ul>
                </div>
                <ul class="nav header-navbar-rht">
                    <!-- User Menu -->
                    <li class="nav-item dropdown has-arrow main-drop account-item">
                        <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                            <span class="user-img">
                                <img src="{{ asset(Auth()->user()->image??'assets/img/img-04.jpg') }}" alt="">
                            </span>
                            <span>{{ Auth()->user()->name ?? '' }}</span>
                        </a>
                        <div class="dropdown-menu emp">
                            <div class="drop-head">Account Details</div>
                            <a class="dropdown-item" href="{{url('admin/profile')}}"><i class="material-icons">verified_user</i> View
                                profile</a>
                            <div class="drop-head">Projects Settings</div>
                            <a class="dropdown-item" href="#"><i class="material-icons">business_center</i> Projects</a>
                            <a class="dropdown-item" href="#"><i class="material-icons">local_play</i> Favourites</a>
                            <a class="dropdown-item" href="#"><i class="material-icons">pie_chart</i> Reviews</a>
                            <div class="drop-head">Account Details</div>
                            <a class="dropdown-item" href="#"> <i class="material-icons">settings</i> Profile
                                Settings</a>
                            <a class="dropdown-item" href="javascript:void(0);"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                                    class="material-icons">power_settings_new</i> Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <!-- /User Menu -->
                    <li>
                        <a class="login-btn" href="javascript:void(0);"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                                class="material-icons">power_settings_new</i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>
        </header>
        <!-- /Header -->

        <!-- Breadcrumb -->
        <div class="bread-crumb-bar">
            <div class="container">
                <div class="row align-items-center inner-banner">
                    <div class="col-md-12 col-12 text-center">
                        <div class="breadcrumb-list">
                            <nav aria-label="breadcrumb" class="page-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}"><img
                                                src="{{ asset('assets/img/home-icon.svg') }}" alt="Post Author">
                                            Home</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Employee</li>
                                    <li class="breadcrumb-item" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Breadcrumb -->

        <!-- Page Content -->
        <div class="content content-page">
            <div class="container-fluid">
                <div class="row">

                    <!-- sidebar -->
                    <div class="col-xl-3 col-md-4 theiaStickySidebar">
                        <div class="settings-widget">
                            <div
                                class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
                                <a href="#"><img alt="profile image" src="{{ asset('assets/img/img-04.jpg') }}"
                                        class="avatar-lg rounded-circle"></a>
                                <div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
                                    <p class="mb-2">Welcome,</p>
                                    <a href="#">
                                        <h3 class="mb-0">{{ Auth()->user()->name ?? '' }}</h3>
                                    </a>
                                    <p class="mb-0">{{ Auth()->user()->email ?? '' }}</p>
                                </div>
                            </div>
                            <div class="settings-menu">
                                
                                <ul>
                                    <li class="nav-item">
                                        <a href="{{ url('admin/admin') }}" class="nav-link active">
                                            <i class="material-icons">home</i> Dashboard
                                        </a>
                                    </li>
                                    <li  class="nav-item">
                                        <a href="#" class='sidebar-link'> <i class="material-icons">verified_user</i> <span>Users Management</span> </a>
                                        <ul class="submenu ">
                                            <li class="submenu-item "> <a href="{{url('admin/permissions')}}">Permissions</a> </li>
                                            <li class="submenu-item "> <a href="{{url('admin/roles')}}">Roles</a> </li>
                                            <li class="submenu-item "> <a href="{{url('admin/users')}}">Users</a> </li>
                                           
                                        </ul>
                                    </li>
                                    <li  class="nav-item">
                                        <a href="{{url('admin/paid-users')}}"  class="nav-link"><i class="material-icons">business_center</i> <span>Paid User</span> </a>
                                    </li>
                                    <li  class="nav-item">
                                        <a href="#"  class="nav-link"> <i class="material-icons">settings</i> <span>Settings</span> </a>
                                        <ul class="submenu ">
                                            @can('content_access')
                                            <li class="submenu-item "> <a href="{{url('admin/content')}}">Website Content</a> </li>
                                            @endcan
                                            @can('news_access')
                                            <li class="submenu-item "> <a href="{{url('admin/news')}}">News</a> </li>
                                            @endcan
                                            @can('media_access')
                                            <li class="submenu-item "> <a href="{{url('admin/media')}}">Social Media</a> </li>
                                            @endcan
                                            @can('review_access')
                                            <li class="submenu-item "> <a href="{{url('admin/review')}}">Reviews</a> </li>
                                            @endcan
                                            @can('newsletter_access')
                                            <li class="submenu-item "> <a href="{{url('admin/newsletter')}}">Newsletters</a> </li>
                                            @endcan
                                           
                                        </ul>
                                    </li>
                                    {{--<li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="material-icons">business_center</i> Projects
                                        </a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="material-icons">local_play</i> Favourites
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="material-icons">record_voice_over</i> Reviews
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="material-icons">chat</i> Messages
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="material-icons">person_add</i> Membership
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="material-icons">pie_chart</i> Milestones
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="material-icons">person_pin</i> Verify Identity
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="material-icons">wifi_tethering</i> Payments
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="material-icons">settings</i> Settings
                                        </a>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:void(0);"
                                            onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                                                class="material-icons">power_settings_new</i> Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /sidebar -->
                    @yield('content')
                </div>
            </div>
            <!-- /Page Content -->

            <!-- Footer -->
            <footer class="footer">
                <div class="footer-top aos" data-aos="fade-up">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-3">
                                <h2 class="footer-title">{{ $data['#address']['heading'] ?? '' }}</h2>
                                <div class="footer-address">
                                    <div class="off-address">
                                        {!! $data['#address']['description'] ?? '' !!}

                                        <p>{{ $data['#phone']['heading'] ?? '' }}: <a
                                                href="tel:{!! $data['#phone']['description'] ?? '' !!}"><u>{!! $data['#phone']['description'] ?? '' !!}</u>
                                                (Toll-free)</a> </p>
                                    </div>
                                    <div class="off-address">
                                        {!! $data['#address1']['description'] ?? '' !!}

                                        <p>{{ $data['#phone1']['heading'] ?? '' }}: <a
                                                href="tel:{!! $data['#phone1']['description'] ?? '' !!}"><u>{!! $data['#phone1']['description'] ?? '' !!}</u>
                                                (Toll-free)</a> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="footer-widget footer-menu">
                                    <h2 class="footer-title">{{ $data['#usefull']['heading'] ?? '' }}</h2>
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
                                    <h2 class="footer-title">{{ $data['#help&support']['heading'] ?? '' }}</h2>
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
                                    <h2 class="footer-title">{{ $data['#other_link']['heading'] ?? '' }}</h2>
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
                                    <h2 class="footer-title">{{ $data['#mobile_application']['heading'] ?? '' }}</h2>
                                    <p>{!! $data['#mobile_application']['description'] ?? '' !!}</p>
                                    <div class="row g-2">
                                        <div class="col">
                                            <a href="{!! $data['#application1']['description'] ?? '' !!}"><img class="img-fluid"
                                                    src="{{ asset($data['#application1']['image'] ?? '') }}"
                                                    alt="app-store"></a>
                                        </div>
                                        <div class="col">
                                            <a href="{!! $data['#application2']['description'] ?? '' !!}"><img class="img-fluid"
                                                    src="{{ asset($data['#application2']['image'] ?? '') }}"
                                                    alt="google-play"></a>
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
                                                <li><a href="{{ $item->link ?? '' }}" class="icon"
                                                        target="_blank"><i class="{{ $item->icon ?? '' }}"></i> </a>
                                                </li>
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

        <!-- Chart JS -->
        <script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/apexchart/chart-data.js') }}"></script>

        <!-- Sticky Sidebar JS -->
        <script src="{{ asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
        <script src="{{ asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>

        <!-- Custom JS -->
        <script src="{{ asset('assets/js/script.js') }}"></script>
        @yield('script')
</body>

</html>
