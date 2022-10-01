@php
$data = content();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> Dashboard</title>
    <!-- Favicon icon -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png')}}"> -->
    <link href="{{ asset('dash-assets/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('dash-assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="../../../cdn.lineicons.com/2.0/LineIcons.css')}}" rel="stylesheet">

    <!-- Style Css -->

    <link href="{{ asset('dash-assets/css/style.css') }}" rel="stylesheet">
    @yield('style')

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="" class="brand-logo">
                <img class="" src="{{ asset($data['#logo']['image'] ?? 'dash-assets/images/logo.png') }}">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span
                        class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->


        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="javascript:;" role="button"
                                    data-bs-toggle="dropdown">
                                    <svg width="25" height="25" viewBox="0 0 26 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.75 14.8385V12.0463C21.7471 9.88552 20.9385 7.80353 19.4821 6.20735C18.0258 4.61116 16.0264 3.61555 13.875 3.41516V1.625C13.875 1.39294 13.7828 1.17038 13.6187 1.00628C13.4546 0.842187 13.2321 0.75 13 0.75C12.7679 0.75 12.5454 0.842187 12.3813 1.00628C12.2172 1.17038 12.125 1.39294 12.125 1.625V3.41534C9.97361 3.61572 7.97429 4.61131 6.51794 6.20746C5.06159 7.80361 4.25291 9.88555 4.25 12.0463V14.8383C3.26257 15.0412 2.37529 15.5784 1.73774 16.3593C1.10019 17.1401 0.751339 18.1169 0.75 19.125C0.750764 19.821 1.02757 20.4882 1.51969 20.9803C2.01181 21.4724 2.67904 21.7492 3.375 21.75H8.71346C8.91521 22.738 9.45205 23.6259 10.2331 24.2636C11.0142 24.9013 11.9916 25.2497 13 25.2497C14.0084 25.2497 14.9858 24.9013 15.7669 24.2636C16.548 23.6259 17.0848 22.738 17.2865 21.75H22.625C23.321 21.7492 23.9882 21.4724 24.4803 20.9803C24.9724 20.4882 25.2492 19.821 25.25 19.125C25.2486 18.117 24.8998 17.1402 24.2622 16.3594C23.6247 15.5786 22.7374 15.0414 21.75 14.8385ZM6 12.0463C6.00232 10.2113 6.73226 8.45223 8.02974 7.15474C9.32723 5.85726 11.0863 5.12732 12.9212 5.125H13.0788C14.9137 5.12732 16.6728 5.85726 17.9703 7.15474C19.2677 8.45223 19.9977 10.2113 20 12.0463V14.75H6V12.0463ZM13 23.5C12.4589 23.4983 11.9316 23.3292 11.4905 23.0159C11.0493 22.7026 10.716 22.2604 10.5363 21.75H15.4637C15.284 22.2604 14.9507 22.7026 14.5095 23.0159C14.0684 23.3292 13.5411 23.4983 13 23.5ZM22.625 20H3.375C3.14298 19.9999 2.9205 19.9076 2.75644 19.7436C2.59237 19.5795 2.50014 19.357 2.5 19.125C2.50076 18.429 2.77757 17.7618 3.26969 17.2697C3.76181 16.7776 4.42904 16.5008 5.125 16.5H20.875C21.571 16.5008 22.2382 16.7776 22.7303 17.2697C23.2224 17.7618 23.4992 18.429 23.5 19.125C23.4999 19.357 23.4076 19.5795 23.2436 19.7436C23.0795 19.9076 22.857 19.9999 22.625 20Z"
                                            fill="#36C95F" />
                                    </svg>
                                    <span class="badge light text-white bg-primary">12</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380">
                                        <ul class="timeline">
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2">
                                                        <img alt="image" width="50"
                                                            src={{ asset('dash-assets/images/avatar/1.jpg') }}">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-info">
                                                        KG
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Resport created successfully</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-success">
                                                        <i class="fa fa-home"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2">
                                                        <img alt="image" width="50"
                                                            src={{ asset('dash-assets/images/avatar/1.jpg') }}">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-danger">
                                                        KG
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Resport created successfully</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-primary">
                                                        <i class="fa fa-home"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="all-notification" href="javascript:;">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>


                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:;" role="button" data-bs-toggle="dropdown">
                                    <img src="{{ asset(Auth()->user()->image ?? 'dash-assets/images/profile/12.png') }}"
                                        width="20" alt="" />
                                    <div class="header-info">
                                        <span>Hello,<strong> {{ Auth()->user()->name ?? '' }}</strong></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ms-2">Profile </span>
                                    </a>
                                    <a href="" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path
                                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                            </path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        <span class="ms-2">Inbox </span>
                                    </a>
                                    <!-- <a href="" class="dropdown-item ai-icon" onclick="event.preventDefault();document.getElementById('logout-form').submit();>
                                        
                                        <span class="ms-2">Logout </span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form> -->
                                    <a class="dropdown-item" href="javascript:void(0);"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();"><span
                                            class="ms-2">Logout </span></a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a class=" ai-icon" href="{{ url('admin/admin') }}" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>

                    </li>
                    @if (Auth()->user()->is_admin)
                        <li><a class=" ai-icon" href="{{ url('admin/bankrupty') }}" aria-expanded="false">
                                <i class="flaticon-381-networking"></i>
                                <span class="nav-text">BANKRUPTCY DOCUMENTS</span>
                            </a>

                        </li>
                        <li><a class=" ai-icon" href="{{ url('admin/chapter7') }}" aria-expanded="false">
                                <i class="flaticon-381-networking"></i>
                                <span class="nav-text">CHAPTER7</span>
                            </a>

                        </li>
                    @can('chapter7_form_access')
                        <li><a class=" ai-icon" href="{{ url('admin/chapter7-form') }}" aria-expanded="false">
                                <i class="flaticon-381-networking"></i>
                                <span class="nav-text">CHAPTER7 Form</span>
                            </a>
                        </li>
                        <li><a class=" ai-icon" href="{{ url('admin/bankruptycourt') }}" aria-expanded="false">
                                <i class="flaticon-381-networking"></i>
                                <span class="nav-text">Bankrupty Court</span>
                            </a>
                        </li>
                        <li><a class=" ai-icon" href="{{ url('admin/financial') }}" aria-expanded="false">
                                <i class="flaticon-381-networking"></i>
                                <span class="nav-text">Financial Affair</span>
                            </a>
                        </li>
                    @endcan

                    <li><a class=" ai-icon" href="{{ url('admin/chapter13') }}" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">CHAPTER 13</span>
                        </a>

                    </li>
                    @can('questionaire_access')
                        <li><a class=" ai-icon" href="{{ url('admin/questionaire') }}" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Questionaire</span>
                        </a>
                    </li>
                    @endcan
                    @can('order_pro_access')
                        <li><a class=" ai-icon" href="{{ url('admin/order-procedure') }}" aria-expanded="false">
                                <i class="flaticon-381-networking"></i>
                                <span class="nav-text">Order Procedures</span>
                            </a>
                        @endcan
                        
                        @can('day5_access')
                        <li><a class=" ai-icon" href="{{ url('admin/days5-7') }}" aria-expanded="false">
                                <i class="flaticon-381-networking"></i>
                                <span class="nav-text">5-7 Days Processing Time</span>
                            </a>
                        @endcan
                        @can('day2_access')
                        <li><a class=" ai-icon" href="{{ url('admin/days2-3') }}" aria-expanded="false">
                                <i class="flaticon-381-networking"></i>
                                <span class="nav-text">2-3 Days Processing Time</span>
                            </a>
                        @endcan
                        @can('day1_access')
                        <li><a class=" ai-icon" href="{{ url('admin/day1') }}" aria-expanded="false">
                                <i class="flaticon-381-networking"></i>
                                <span class="nav-text">1 Day Processing Time</span>
                            </a>
                        @endcan
                    <li><a class=" ai-icon" href="{{ url('admin/paid-users') }}" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Members</span>
                        </a>

                    </li>
                    @can('membership_access')
                        <li><a class=" ai-icon" href="{{ url('admin/membership') }}" aria-expanded="false">
                                <i class="flaticon-381-networking"></i>
                                <span class="nav-text">Memberships</span>
                            </a>
						</li>
                        @endcan
                        @can('questionaire_access')
                        <li><a class=" ai-icon" href="{{ url('admin/questionaire') }}" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Questionaire</span>
                        </a>
                    </li>
                    @endcan
                    <li><a href="javascript:void(0);" class="ai-icon has-arrow" aria-expanded="false">
                            <i class="flaticon-381-id-card-4"></i>
                            <span class="nav-text">User Management</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('admin/permissions') }}">Permission</a></li>
                            <li><a href="{{ url('admin/roles') }}">Roles</a></li>
                            <li><a href="{{ url('admin/users') }}">Users</a></li>
                        </ul>
                    </li>



                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-notepad"></i>
                            <span class="nav-text">CMS</span>
                        </a>
                        <ul aria-expanded="false">

                            @can('content_access')
                                <li> <a href="{{ url('admin/content') }}">Website Content</a> </li>
                            @endcan
                            @can('service_access')
                                <li> <a href="{{ url('admin/service') }}">Services</a> </li>
                            @endcan
                            @can('team_access')
                                <li> <a href="{{ url('admin/team') }}">Team Member</a> </li>
                            @endcan
                            {{-- @can('news_access')
                                            <li> <a href="{{url('admin/news')}}">News</a> </li>
                                            @endcan --}}
                            @can('faq_access')
                                <li> <a href="{{ url('admin/faq') }}">FAQs</a> </li>
                            @endcan
                            @can('slider_access')
                                <li> <a href="{{ url('admin/slider') }}">Slider</a> </li>
                            @endcan
                            @can('media_access')
                                <li> <a href="{{ url('admin/media') }}">Social Media</a> </li>
                            @endcan
                            @can('review_access')
                                <li> <a href="{{ url('admin/review') }}">Reviews</a> </li>
                            @endcan
                            @can('contact_access')
                                <li> <a href="{{ url('admin/contact') }}">Contact Mail</a> </li>
                            @endcan
                            @can('newsletter_access')
                                <li> <a href="{{ url('admin/newsletter') }}">Newsletters</a> </li>
                            @endcan
                        </ul>
                    </li>
					@else


                    <li><a class=" ai-icon" href="{{ url('bankrupty') }}" aria-expanded="false">
                                <i class="flaticon-381-networking"></i>
                                <span class="nav-text">BANKRUPTCY DOCUMENTS</span>
                            </a>

                        </li>
                        
                        <li><a class=" ai-icon" href="{{ url('chapter7') }}" aria-expanded="false">
                                <i class="flaticon-381-networking"></i>
                                <span class="nav-text">CHAPTER7</span>
                            </a>

                        </li>
                        <li><a class=" ai-icon" href="{{ url('chapter7-form') }}" aria-expanded="false">
                                <i class="flaticon-381-networking"></i>
                                <span class="nav-text">Chapter 7 Form</span>
                            </a>
						</li>
                        
                        <li><a class=" ai-icon" href="{{ url('bankruptycourt') }}" aria-expanded="false">
                                <i class="flaticon-381-networking"></i>
                                <span class="nav-text">Bankrupty Court</span>
                            </a>
                        </li>
                        <li><a class=" ai-icon" href="{{ url('financial') }}" aria-expanded="false">
                                <i class="flaticon-381-networking"></i>
                                <span class="nav-text">Financial Affair</span>
                            </a>
                        </li>
                        
                        <li><a class=" ai-icon" href="{{ url('chapter13') }}" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">CHAPTER 13</span>
                        </a>
                        @can('user_questionaire_access')
                        <li><a class=" ai-icon" href="{{ url('questionaire') }}" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Questionaire</span>
                        </a>
                        </li>

                        @endcan
                        
                        
                        
                        
                        
                        

                    </li>
                    @endif

                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
        @yield('content')



    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('dash-assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('dash-assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('dash-assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('dash-assets/vendor/owl-carousel/owl.carousel.js') }}"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('dash-assets/vendor/apexchart/apexchart.js') }}"></script>

    <!-- Dashboard 1 -->
    <script src="{{ asset('dash-assets/js/dashboard/dashboard-1.js') }}"></script>
    <script src="{{ asset('dash-assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('dash-assets/js/deznav-init.js') }}"></script>
    <script src="{{ asset('dash-assets/js/demo.js') }}"></script>
    @yield('script')
    <script>
        function assignedDoctor() {

            /*  testimonial one function by = owl.carousel.js */
            jQuery('.assigned-doctor').owlCarousel({
                loop: false,
                margin: 30,
                nav: true,
                autoplaySpeed: 3000,
                navSpeed: 3000,
                paginationSpeed: 3000,
                slideSpeed: 3000,
                smartSpeed: 3000,
                autoplay: false,
                dots: false,
                navText: ['<i class="fa fa-caret-left"></i>', '<i class="fa fa-caret-right"></i>'],
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 2
                    },
                    767: {
                        items: 3
                    },
                    991: {
                        items: 2
                    },
                    1200: {
                        items: 3
                    },
                    1600: {
                        items: 4
                    },
                    1920: {
                        items: 5
                    }
                }
            })
        }

        jQuery(window).on('load', function() {
            setTimeout(function() {
                assignedDoctor();
            }, 1000);
        });
    </script>

</body>

</html>