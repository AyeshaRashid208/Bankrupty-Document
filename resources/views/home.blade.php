@extends('layouts.admin')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="form-head d-flex mb-3 mb-md-4 align-items-start">
                <div class="me-auto d-none d-lg-block">
                    <h3 class="text-black font-w600">Welcome to Eres!</h3>
                    <p class="mb-0 fs-18">Hospital Admin Dashboard Template</p>
                </div>

                <div class="input-group search-area ms-auto d-inline-flex">
                    <input type="text" class="form-control" placeholder="Search here">
                    <div class="input-group-append">
                        <button type="button" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card gradient-bx text-white bg-danger rounded">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <p class="mb-1">Total </p>
                                    <div class="d-flex flex-wrap">
                                        <h2 class="fs-40 font-w600 text-white mb-0 me-3">783k</h2>
                                        <div>

                                            <svg width="28" height="19" viewBox="0 0 28 19" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.56244 9.25C6.35869 11.6256 2.26214 16.0091 0.999939 17.5H26.4374V1L16.8124 13.375L8.56244 9.25Z"
                                                    fill="url(#paint0_linear4)" />
                                                <path
                                                    d="M0.999939 17.5C2.26214 16.0091 6.35869 11.6256 8.56244 9.25L16.8124 13.375L26.4374 1"
                                                    stroke="white" stroke-width="2" />
                                                <defs>
                                                    <linearGradient id="paint0_linear4" x1="13.7187" y1="3.0625"
                                                        x2="14.7499" y2="17.5" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="white" stop-opacity="0.73" offset="0.1" />
                                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                            <div class="fs-14">+4%</div>
                                        </div>
                                    </div>
                                </div>
                                <span class="border rounded-circle p-4">
                                    <i class="fas fa-money-check"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card gradient-bx text-white bg-info rounded">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <p class="mb-1">Client</p>
                                    <div class="d-flex flex-wrap">
                                        <h2 class="fs-40 font-w600 text-white mb-0 me-3">76</h2>
                                        <div>
                                            <svg width="28" height="19" viewBox="0 0 28 19" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18.875 9.25C21.0787 11.6256 25.1753 16.0091 26.4375 17.5H1V1L10.625 13.375L18.875 9.25Z"
                                                    fill="url(#paint0_linear1)" />
                                                <path
                                                    d="M26.4375 17.5C25.1753 16.0091 21.0787 11.6256 18.875 9.25L10.625 13.375L1 1"
                                                    stroke="white" stroke-width="2" />
                                                <defs>
                                                    <linearGradient id="paint0_linear1" x1="13.7188" y1="3.0625"
                                                        x2="12.6875" y2="17.5" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="white" stop-opacity="0.73" offset="0.1" />
                                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                            <div class="fs-14">-4%</div>
                                        </div>
                                    </div>
                                </div>
                                <span class="border rounded-circle p-4">
                                    <i class="fa fa-user-plus"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card gradient-bx text-white bg-danger rounded">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <p class="mb-1">Appointment</p>
                                    <div class="d-flex flex-wrap">
                                        <h2 class="fs-40 font-w600 text-white mb-0 me-3">76</h2>
                                        <div>
                                            <svg width="28" height="19" viewBox="0 0 28 19" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18.875 9.25C21.0787 11.6256 25.1753 16.0091 26.4375 17.5H1V1L10.625 13.375L18.875 9.25Z"
                                                    fill="url(#paint0_linear2)" />
                                                <path
                                                    d="M26.4375 17.5C25.1753 16.0091 21.0787 11.6256 18.875 9.25L10.625 13.375L1 1"
                                                    stroke="white" stroke-width="2" />
                                                <defs>
                                                    <linearGradient id="paint0_linear2" x1="13.7188" y1="3.0625"
                                                        x2="12.6875" y2="17.5" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="white" stop-opacity="0.73" offset="0.1" />
                                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                            <div class="fs-14">-4%</div>
                                        </div>
                                    </div>
                                </div>
                                <span class="border rounded-circle p-4">
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card gradient-bx text-white bg-info rounded">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <p class="mb-1"> loan</p>
                                    <div class="d-flex flex-wrap">
                                        <h2 class="fs-40 font-w600 text-white mb-0 me-3">$56k</h2>
                                        <div>
                                            <svg width="28" height="19" viewBox="0 0 28 19" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.56244 9.25C6.35869 11.6256 2.26214 16.0091 0.999939 17.5H26.4374V1L16.8124 13.375L8.56244 9.25Z"
                                                    fill="url(#paint0_linear3)" />
                                                <path
                                                    d="M0.999939 17.5C2.26214 16.0091 6.35869 11.6256 8.56244 9.25L16.8124 13.375L26.4374 1"
                                                    stroke="white" stroke-width="2" />
                                                <defs>
                                                    <linearGradient id="paint0_linear3" x1="13.7187" y1="3.0625"
                                                        x2="14.7499" y2="17.5" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="white" stop-opacity="0.73" offset="0.1" />
                                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                            <div class="fs-14">+4%</div>
                                        </div>
                                    </div>
                                </div>
                                <span class="border rounded-circle p-4">
                                    <i class="fa fa-dollar-sign"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-4 col-lg-4">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h3 class="fs-20 mb-0 text-black">Revenue</h3>
                            <select class="default-select style-1" tabindex="null">
                                <option>2022</option>
                                <option>2021</option>
                                <option>2020</option>
                            </select>
                        </div>
                        <div class="card-body">
                            <div>
                                <span class="text-info fs-26 font-w600 me-3">$41,512k</span>
                                <span class="text-secondary fs-18 font-w400">$25,612k</span>
                            </div>
                            <div id="line-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-xxl-8 col-lg-8">
                    <div class="card">
                        <div class="card-header d-sm-flex d-block border-0 pb-0">
                            <h3 class="fs-20 mb-3 mb-sm-0 text-black">Online Banking & Loans</h3>
                            <div class="card-action card-tabs mt-3 mt-sm-0 mt-3 mt-sm-0">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#monthly" role="tab">
                                            Monthly
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#weekly" role="tab">
                                            Weekly
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#today" role="tab">
                                            Today
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="monthly">
                                    <div id="chartBar"></div>
                                </div>
                                <div class="tab-pane fade" id="weekly">
                                    <div id="chartBar1"></div>
                                </div>
                                <div class="tab-pane fade" id="today">
                                    <div id="chartBar2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-xxl-8 col-lg-7">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h3 class="fs-20 mb-0 text-black">Top Rated</h3>
                            <a href="page-review.html" class="text-primary font-w500">View more >></a>
                        </div>
                        <div class="card-body">
                            <div class="assigned-doctor owl-carousel">
                                <div class="items">
                                    <div class="text-center">
                                        <img src="/dash-assets/images/doctors/5.jpg" alt="">
                                        <div class="dr-star"><i class="las la-star"></i> 4.2</div>
                                        <h5 class="fs-16 mb-1 font-w600"><a class="text-black"
                                                href="page-review.html">Dr. Alexandro Jr.</a></h5>
                                        <span class="text-primary mb-2 d-block">Financial Consultancy</span>
                                        <p class="fs-12">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                        <div class="social-media">
                                            <a href="javascript:void(0);"><i class="lab la-instagram"></i></a>
                                            <a href="javascript:void(0);"><i class="lab la-facebook-f"></i></a>
                                            <a href="javascript:void(0);"><i class="lab la-twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="text-center">
                                        <img src="/dash-assets/images/doctors/1.jpg" alt="">
                                        <div class="dr-star"><i class="las la-star"></i> 4.2</div>
                                        <h5 class="fs-16 mb-1 font-w600"><a class="text-black"
                                                href="page-review.html">Mr. Samantha</a></h5>
                                        <span class="text-primary mb-2 d-block">lorem </span>
                                        <p class="fs-12">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                        <div class="social-media">
                                            <a href="javascript:void(0);"><i class="lab la-instagram"></i></a>
                                            <a href="javascript:void(0);"><i class="lab la-facebook-f"></i></a>
                                            <a href="javascript:void(0);"><i class="lab la-twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="text-center">
                                        <img src="/dash-assets/images/doctors/2.jpg" alt="">
                                        <div class="dr-star"><i class="las la-star"></i> 4.2</div>
                                        <h5 class="fs-16 mb-1 font-w600"><a class="text-black"
                                                href="page-review.html">mr. Aliandro M</a></h5>
                                        <span class="text-primary mb-2 d-block">lorem</span>
                                        <p class="fs-12">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                        <div class="social-media">
                                            <a href="javascript:void(0);"><i class="lab la-instagram"></i></a>
                                            <a href="javascript:void(0);"><i class="lab la-facebook-f"></i></a>
                                            <a href="javascript:void(0);"><i class="lab la-twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="text-center">
                                        <img src="/dash-assets/images/doctors/3.jpg" alt="">
                                        <div class="dr-star"><i class="las la-star"></i> 4.2</div>
                                        <h5 class="fs-16 mb-1 font-w600"><a class="text-black"
                                                href="page-review.html">lorem</a></h5>
                                        <span class="text-primary mb-2 d-block">lorem</span>
                                        <p class="fs-12">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                        <div class="social-media">
                                            <a href="javascript:void(0);"><i class="lab la-instagram"></i></a>
                                            <a href="javascript:void(0);"><i class="lab la-facebook-f"></i></a>
                                            <a href="javascript:void(0);"><i class="lab la-twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="text-center">
                                        <img src="/dash-assets/images/doctors/4.jpg" alt="">
                                        <div class="dr-star"><i class="las la-star"></i> 4.2</div>
                                        <h5 class="fs-16 mb-1 font-w600"><a class="text-black"
                                                href="page-review.html"> Melinda</a></h5>
                                        <span class="text-primary mb-2 d-block">lorem</span>
                                        <p class="fs-12">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                        <div class="social-media">
                                            <a href="javascript:void(0);"><i class="lab la-instagram"></i></a>
                                            <a href="javascript:void(0);"><i class="lab la-facebook-f"></i></a>
                                            <a href="javascript:void(0);"><i class="lab la-twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="text-center">
                                        <img src="/dash-assets/images/doctors/1.jpg" alt="">
                                        <div class="dr-star"><i class="las la-star"></i> 4.2</div>
                                        <h5 class="fs-16 mb-1 font-w600"><a class="text-black"
                                                href="page-review.html"> Alexandro Jr.</a></h5>
                                        <span class="text-primary mb-2 d-block">lorem</span>
                                        <p class="fs-12">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                        <div class="social-media">
                                            <a href="javascript:void(0);"><i class="lab la-instagram"></i></a>
                                            <a href="javascript:void(0);"><i class="lab la-facebook-f"></i></a>
                                            <a href="javascript:void(0);"><i class="lab la-twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="text-center">
                                        <img src="/dash-assets/images/doctors/2.jpg" alt="">
                                        <div class="dr-star"><i class="las la-star"></i> 4.2</div>
                                        <h5 class="fs-16 mb-1 font-w600"><a class="text-black"
                                                href="page-review.html"> Aliandro M</a></h5>
                                        <span class="text-primary mb-2 d-block">lorem</span>
                                        <p class="fs-12">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                        <div class="social-media">
                                            <a href="javascript:void(0);"><i class="lab la-instagram"></i></a>
                                            <a href="javascript:void(0);"><i class="lab la-facebook-f"></i></a>
                                            <a href="javascript:void(0);"><i class="lab la-twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="text-center">
                                        <img src="/dash-assets/images/doctors/3.jpg" alt="">
                                        <div class="dr-star"><i class="las la-star"></i> 4.2</div>
                                        <h5 class="fs-16 mb-1 font-w600"><a class="text-black"
                                                href="page-review.html"> Samuel</a></h5>
                                        <span class="text-primary mb-2 d-block">lorem</span>
                                        <p class="fs-12">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                        <div class="social-media">
                                            <a href="javascript:void(0);"><i class="lab la-instagram"></i></a>
                                            <a href="javascript:void(0);"><i class="lab la-facebook-f"></i></a>
                                            <a href="javascript:void(0);"><i class="lab la-twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-4 col-lg-5">
                    <div class="card border-0 pb-0">
                        <div class="card-header flex-wrap border-0 pb-0">
                            <h3 class="fs-20 mb-0 text-black">Recent user</h3>
                            <a href="patient-list.html" class="text-primary font-w500">View more >></a>
                        </div>
                        <div class="card-body recent-patient">
                            <div id="DZ_W_Todo2" class="widget-media dz-scroll ps ps--active-y height320">
                                <ul class="timeline">
                                    <li>
                                        <div class="timeline-panel flex-wrap">
                                            <div class="media me-3">
                                                <img class="rounded-circle" alt="image" width="50"
                                                    src="dash-assets/images/widget/1.jpg">
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mb-1"><a class="text-black"
                                                        href="patient-details.html">Aziz Bakree</a></h5>
                                                <span class="fs-14">24 Years</span>
                                            </div>
                                            <a href="javascript:void(0);" class="text-warning mt-2">Pending</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-panel flex-wrap">
                                            <div class="media me-3">
                                                <img class="rounded-circle" alt="image" width="50"
                                                    src="dash-assets/images/widget/2.jpg">
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mb-1"><a class="text-black"
                                                        href="patient-details.html">Griezerman</a></h5>
                                                <span class="fs-14">24 Years</span>
                                            </div>
                                            <a href="javascript:void(0);" class="text-info mt-2">On Recovery</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-panel flex-wrap">
                                            <div class="media me-3">
                                                <img class="rounded-circle" alt="image" width="50"
                                                    src="dash-assets/images/widget/3.jpg">
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mb-1"><a class="text-black"
                                                        href="patient-details.html">Oconner</a></h5>
                                                <span class="fs-14">24 Years</span>
                                            </div>
                                            <a href="javascript:void(0);" class="text-danger mt-2">Rejected</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-panel flex-wrap">
                                            <div class="media me-3">
                                                <img class="rounded-circle" alt="image" width="50"
                                                    src="dash-assets/images/widget/5.jpg">
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mb-1"><a class="text-black"
                                                        href="patient-details.html">Uli Trumb</a></h5>
                                                <span class="fs-14">24 Years</span>
                                            </div>
                                            <a href="javascript:void(0);" class="text-primary mt-2">Recovered</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-panel flex-wrap">
                                            <div class="media me-3">
                                                <img class="rounded-circle" alt="image" width="50"
                                                    src="dash-assets/images/widget/1.jpg">
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mb-1"><a class="text-black"
                                                        href="patient-details.html">Aziz Bakree</a></h5>
                                                <span class="fs-14">24 Years</span>
                                            </div>
                                            <a href="javascript:void(0);" class="text-warning mt-2">Pending</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-panel flex-wrap">
                                            <div class="media me-3">
                                                <img class="rounded-circle" alt="image" width="50"
                                                    src="dash-assets/images/widget/2.jpg">
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mb-1"><a class="text-black"
                                                        href="patient-details.html">Aziz Bakree</a></h5>
                                                <span class="fs-14">24 Years</span>
                                            </div>
                                            <a href="javascript:void(0);" class="text-warning mt-2">Pending</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
