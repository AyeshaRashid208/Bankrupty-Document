@php
    $data = content();
@endphp
@extends('layouts.app')
@section('content')
    <!-- Home Banner -->
    <section class="section home-banner row-middle">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 col-lg-7">
                    <div class="banner-content aos" data-aos="fade-up">
                        <div class="rating d-flex">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <h5>{{$data['#banner']['heading']??''}}</h5>
                        </div>
                        {!!$data['#banner']['description']??''!!}
                        <form class="form" name="store" id="store" method="post" action="#">
                            <div class="form-inner">
                                <div class="input-group">
                                    <span class="drop-detail">
                                        <select class="form-control select" name="storeID">
                                            <option value="#">Projects</option>
                                            <option value="#">Freelancers</option>
                                        </select>
                                    </span>
                                    <input type="email" class="form-control" placeholder="Search here">
                                    <button class="btn btn-primary sub-btn" type="submit">Search Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-lg-5">
                    <div class="banner-img aos" data-aos="fade-up">
                        <img src="{{asset($data['#banner']['image']??'')}}" class="img-fluid" alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Home Banner -->

    <!-- Our Feature -->
    <section class="section feature">
        <div class="container">
            <div class="row">

                <!-- Feature Item -->
                <div class="col-md-4">
                    <div class="feature-item freelance-count aos" data-aos="fade-up">
                        <div class="feature-icon">
                            <img src="{{$data['#counter1']['image']??''}}" class="img-fluid" alt="">
                        </div>
                        <div class="feature-content">
                            <h3>{!!$data['#counter1']['description']??''!!}</h3>
                            <p>{{$data['#counter1']['heading']??''}}</p>
                        </div>
                    </div>
                </div>
                <!-- /Feature Item -->

                <!-- Feature Item -->
                <div class="col-md-4">
                    <div class="feature-item aos" data-aos="fade-up">
                        <div class="feature-icon">
                            <img src="{{$data['#counter2']['image']??''}}" class="img-fluid" alt="">
                        </div>
                        <div class="feature-content">
                            <h3>{!!$data['#counter2']['description']??''!!}</h3>
                            <p>{{$data['#counter2']['heading']??''}}</p>
                        </div>
                    </div>
                </div>
                <!-- /Feature Item -->

                <!-- Feature Item -->
                <div class="col-md-4">
                    <div class="feature-item comp-project aos" data-aos="fade-up">
                        <div class="feature-icon">
                            <img src="{{$data['#counter3']['image']??''}}" class="img-fluid" alt="">
                        </div>
                        <div class="feature-content">
                            <h3>{!!$data['#counter3']['description']??''!!}</h3>
                            <p>{{$data['#counter3']['heading']??''}}</p>
                        </div>
                    </div>
                </div>
                <!-- /Feature Item -->

            </div>
        </div>
    </section>
    <!-- /Our Feature -->

    <!--- Developed Project  -->
    <section class="section work">
        <div class="container-fluid">
            <div class="row">

                <!-- Feature Item -->
                <div class="col-md-6 work-box bg1">
                    <div class="work-content aos" data-aos="fade-up">
                        <h2>{{$data['#need_develop']['heading']??''}}</h2>
                        <p>{!!$data['#need_develop']['description']??''!!}</p>
                        <a href="#"><i class="fas fa-long-arrow-alt-right long-arrow"></i></a>
                    </div>
                </div>
                <!-- /Feature Item -->

                <div class="col-md-6 work-box bg2">
                    <div class="work-content aos" data-aos="fade-up">
                        <h2>{{$data['#need_work']['heading']??''}}</h2>
                        <p>{!!$data['#need_work']['description']??''!!}</p>
                        <a href="#"><i class="fas fa-long-arrow-alt-right long-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--- /Developed Project  -->

    <!-- Projects -->
    <section class="section projects">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 mx-auto">
                    <div class="section-header text-center aos" data-aos="fade-up">
                        <div class="section-line"></div>
                        <h2 class="header-title">{!!$data['#get_inspired']['heading']??''!!}</h2>
                        <p>{!!$data['#get_inspired']['description']??''!!}</p>
                    </div>
                </div>
            </div>
            <div class="row">

                <!--- Project Item  -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="project-item aos" data-aos="fade-up">
                        <div class="project-img">
                            <a href="#"><img src="assets/img/project/project-01.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="project-content">
                                <h4>45</h4>
                                <h5><a href="#">ANDROID APPS</a></h5>
                            </div>
                            <div class="pro-icon">
                                <div class="project-icon">
                                </div>
                            </div>
                            <div class="project-content">
                                <h4>20</h4>
                                <h5><a href="#">Developers</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!--- /Project Item  -->

                <!--- Project Item  -->
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="project-item aos" data-aos="fade-up">
                        <div class="project-img">
                            <a href="#"><img src="assets/img/project/project-02.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="project-content">
                                <h4>45</h4>
                                <h5><a href="#">LARAVEL</a></h5>
                            </div>
                            <div class="pro-icon">
                                <div class="project-icon">
                                </div>
                            </div>
                            <div class="project-content">
                                <h4>20</h4>
                                <h5><a href="#">Developers</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!--- /Project Item  -->

                <!--- Project-Item  -->
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="project-item aos" data-aos="fade-up">
                        <div class="project-img">
                            <a href="#"><img src="assets/img/project/project-03.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="project-content">
                                <h4>45</h4>
                                <h5><a href="#">React</a></h5>
                            </div>
                            <div class="pro-icon">
                                <div class="project-icon">
                                </div>
                            </div>
                            <div class="project-content">
                                <h4>20</h4>
                                <h5><a href="#">Developers</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!--- /Project Item  -->

                <!--- Project Item  -->
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="project-item aos" data-aos="fade-up">
                        <div class="project-img">
                            <a href="#"><img src="assets/img/project/project-04.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="project-content">
                                <h4>45</h4>
                                <h5><a href="#">GOLANG</a></h5>
                            </div>
                            <div class="pro-icon">
                                <div class="project-icon">
                                </div>
                            </div>
                            <div class="project-content">
                                <h4>20</h4>
                                <h5><a href="#">Developers</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!--- /Project Item  -->

                <!--- Project Item  -->
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="project-item aos" data-aos="fade-up">
                        <div class="project-img">
                            <a href="#"><img src="assets/img/project/project-01.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="project-content">
                                <h4>45</h4>
                                <h5><a href="#">.NET</a></h5>
                            </div>
                            <div class="pro-icon">
                                <div class="project-icon">
                                </div>
                            </div>
                            <div class="project-content">
                                <h4>20</h4>
                                <h5><a href="#">Developers</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!--- /Project Item  -->

                <!--- Project Item  -->
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="project-item aos" data-aos="fade-up">
                        <div class="project-img">
                            <a href="#"><img src="assets/img/project/project-04.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="project-content">
                                <h4>45</h4>
                                <h5><a href="#">JAVA</a></h5>
                            </div>
                            <div class="pro-icon">
                                <div class="project-icon">
                                </div>
                            </div>
                            <div class="project-content">
                                <h4>20</h4>
                                <h5><a href="#">Developers</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!--- /Project Item  -->

                <!--- Project Item  -->
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="project-item aos" data-aos="fade-up">
                        <div class="project-img">
                            <a href="#"><img src="assets/img/project/project-03.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="project-content">
                                <h4>45</h4>
                                <h5><a href="#">PYTHON</a></h5>
                            </div>
                            <div class="pro-icon">
                                <div class="project-icon">
                                </div>
                            </div>
                            <div class="project-content">
                                <h4>20</h4>
                                <h5><a href="#">Developers</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!--- /Project Item  -->

                <!--- Project-Item  -->
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="project-item aos" data-aos="fade-up">
                        <div class="project-img">
                            <a href="#"><img src="assets/img/project/project-01.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="project-content">
                                <h4>45</h4>
                                <h5><a href="#">ANGULAR</a></h5>
                            </div>
                            <div class="pro-icon">
                                <div class="project-icon">
                                </div>
                            </div>
                            <div class="project-content">
                                <h4>20</h4>
                                <h5><a href="#">Developers</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!--- /Project Item  -->

            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="see-all aos" data-aos="fade-up">
                        <a href="#" class="btn all-btn">SEE ALL PROJECT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Projects -->

    <!-- Subscribe -->
    <section class="section subscribe">
        <div class="container">
            <div class="row align-items-center aos" data-aos="fade-up">
                <div class="col-md-4">
                    <img src="{{asset($data['#newsletter']['image']??'')}}" class="img-fluid" alt="subscribe">
                </div>
                <div class="col-md-6">
                    <h3>{{$data['#newsletter']['heading']??''}}</h3>
                    <p>{!!$data['#newsletter']['description']??''!!}</p>
                    <form action="{{ route('Newsletter') }}" method="POST">
                        @csrf
                        <div class="form-inner">
                            <div class="input-group">
                                <input type="email" class="form-control" name="email" placeholder="Enter Email Address">
                                <button class="btn btn-primary sub-btn" type="submit">Submit</button>
                            </div>
                            
                        </div>
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
    </section>
    <!-- End Subscribe -->

    <!-- Top Instructor -->
    <section class="section developer">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 col-12 mx-auto">
                    <div class="section-header text-center aos" data-aos="fade-up">
                        <div class="section-line"></div>
                        <h2 class="header-title">{{$data['#hired_developer']['heading']??''}}</h2>
                        <p>{!!$data['#hired_developer']['description']??''!!}</p>
                    </div>
                </div>
            </div>
            <div id="developers-slider" class="owl-carousel owl-theme developers-slider aos" data-aos="fade-up">
                <div class="freelance-widget">
                    <div class="freelance-content">
                        <a data-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
                        <div class="freelance-img">
                            <a href="#">
                                <img src="assets/img/user/avatar-1.jpg" alt="User Image">
                                <span class="verified"><i class="fas fa-check-circle"></i></span>
                            </a>
                        </div>
                        <div class="freelance-info">
                            <h3><a href="#">George Wells</a></h3>
                            <div class="freelance-specific">UI/UX Designer</div>
                            <div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Alabama, USA</div>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="average-rating">4.7 (32)</span>
                            </div>
                            <div class="freelance-tags">
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web
                                        Design</span></a>
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI
                                        Design</span></a>
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node
                                        Js</span></a>
                            </div>
                            <div class="freelancers-price">$25 Hourly</div>
                        </div>
                    </div>
                    <div class="cart-hover">
                        <a href="#" class="btn-cart" tabindex="-1">View Profile</a>
                    </div>
                </div>
                <div class="freelance-widget">
                    <div class="freelance-content">
                        <a data-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
                        <div class="freelance-img">
                            <a href="#">
                                <img src="assets/img/user/avatar-2.jpg" alt="User Image">
                                <span class="verified"><i class="fas fa-check-circle"></i></span>
                            </a>
                        </div>
                        <div class="freelance-info">
                            <h3><a href="#">Timothy Smith</a></h3>
                            <div class="freelance-specific">PHP Developer</div>
                            <div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Illinois, USA</div>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="average-rating">3.5 (25)</span>
                            </div>
                            <div class="freelance-tags">
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web
                                        Design</span></a>
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI
                                        Design</span></a>
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node
                                        Js</span></a>
                            </div>
                            <div class="freelancers-price">Free</div>
                        </div>
                    </div>
                    <div class="cart-hover">
                        <a href="#" class="btn-cart" tabindex="-1">View Profile</a>
                    </div>
                </div>
                <div class="freelance-widget">
                    <div class="freelance-content">
                        <a data-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
                        <div class="freelance-img">
                            <a href="#">
                                <img src="assets/img/user/avatar-3.jpg" alt="User Image">
                                <span class="verified"><i class="fas fa-check-circle"></i></span>
                            </a>
                        </div>
                        <div class="freelance-info">
                            <h3><a href="#">Janet Paden</a></h3>
                            <div class="freelance-specific">Graphic Designer</div>
                            <div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>New York, USA</div>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="average-rating">4.1 (30)</span>
                            </div>
                            <div class="freelance-tags">
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web
                                        Design</span></a>
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI
                                        Design</span></a>
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node
                                        Js</span></a>
                            </div>
                            <div class="freelancers-price">$27 Hourly</div>
                        </div>
                    </div>
                    <div class="cart-hover">
                        <a href="#" class="btn-cart" tabindex="-1">View Profile</a>
                    </div>
                </div>
                <div class="freelance-widget">
                    <div class="freelance-content">
                        <a data-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
                        <div class="freelance-img">
                            <a href="#">
                                <img src="assets/img/img-03.jpg" alt="User Image">
                                <span class="verified"><i class="fas fa-check-circle"></i></span>
                            </a>
                        </div>
                        <div class="freelance-info">
                            <h3><a href="#">James Douglas</a></h3>
                            <div class="freelance-specific">iOS Developer</div>
                            <div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Florida, USA</div>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="average-rating">4.3 (31)</span>
                            </div>
                            <div class="freelance-tags">
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web
                                        Design</span></a>
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI
                                        Design</span></a>
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node
                                        Js</span></a>
                            </div>
                            <div class="freelancers-price">$23 Hourly</div>
                        </div>
                    </div>
                    <div class="cart-hover">
                        <a href="#" class="btn-cart" tabindex="-1">View Profile</a>
                    </div>
                </div>
                <div class="freelance-widget">
                    <div class="freelance-content">
                        <a data-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
                        <div class="freelance-img">
                            <a href="#">
                                <img src="assets/img/img-03.jpg" alt="User Image">
                                <span class="verified"><i class="fas fa-check-circle"></i></span>
                            </a>
                        </div>
                        <div class="freelance-info">
                            <h3><a href="#">Richard Wilson</a></h3>
                            <div class="freelance-specific">UI/UX Designer</div>
                            <div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Alabama, USA</div>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="average-rating">4.7 (32)</span>
                            </div>
                            <div class="freelance-tags">
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web
                                        Design</span></a>
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI
                                        Design</span></a>
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node
                                        Js</span></a>
                            </div>
                            <div class="freelancers-price">$25 Hourly</div>
                        </div>
                    </div>
                    <div class="cart-hover">
                        <a href="#" class="btn-cart" tabindex="-1">View Profile</a>
                    </div>
                </div>
                <div class="freelance-widget">
                    <div class="freelance-content">
                        <a data-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
                        <div class="freelance-img">
                            <a href="#">
                                <img src="assets/img/img-03.jpg" alt="User Image">
                                <span class="verified"><i class="fas fa-check-circle"></i></span>
                            </a>
                        </div>
                        <div class="freelance-info">
                            <h3><a href="#">Richard Wilson</a></h3>
                            <div class="freelance-specific">UI/UX Designer</div>
                            <div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Alabama, USA</div>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="average-rating">4.7 (32)</span>
                            </div>
                            <div class="freelance-tags">
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web
                                        Design</span></a>
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI
                                        Design</span></a>
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node
                                        Js</span></a>
                            </div>
                            <div class="freelancers-price">$25 Hourly</div>
                        </div>
                    </div>
                    <div class="cart-hover">
                        <a href="#" class="btn-cart" tabindex="-1">View Profile</a>
                    </div>
                </div>
                <div class="freelance-widget">
                    <div class="freelance-content">
                        <a data-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
                        <div class="freelance-img">
                            <a href="#">
                                <img src="assets/img/img-03.jpg" alt="User Image">
                                <span class="verified"><i class="fas fa-check-circle"></i></span>
                            </a>
                        </div>
                        <div class="freelance-info">
                            <h3><a href="#">Richard Wilson</a></h3>
                            <div class="freelance-specific">UI/UX Designer</div>
                            <div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Alabama, USA</div>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="average-rating">4.7 (32)</span>
                            </div>
                            <div class="freelance-tags">
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web
                                        Design</span></a>
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI
                                        Design</span></a>
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node
                                        Js</span></a>
                            </div>
                            <div class="freelancers-price">$25 Hourly</div>
                        </div>
                    </div>
                    <div class="cart-hover">
                        <a href="#" class="btn-cart" tabindex="-1">View Profile</a>
                    </div>
                </div>
                <div class="freelance-widget">
                    <div class="freelance-content">
                        <a data-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
                        <div class="freelance-img">
                            <a href="#">
                                <img src="assets/img/img-03.jpg" alt="User Image">
                                <span class="verified"><i class="fas fa-check-circle"></i></span>
                            </a>
                        </div>
                        <div class="freelance-info">
                            <h3><a href="#">Richard Wilson</a></h3>
                            <div class="freelance-specific">UI/UX Designer</div>
                            <div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Alabama, USA</div>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="average-rating">4.7 (32)</span>
                            </div>
                            <div class="freelance-tags">
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web
                                        Design</span></a>
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI
                                        Design</span></a>
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node
                                        Js</span></a>
                            </div>
                            <div class="freelancers-price">$25 Hourly</div>
                        </div>
                    </div>
                    <div class="cart-hover">
                        <a href="#" class="btn-cart" tabindex="-1">View Profile</a>
                    </div>
                </div>
                <div class="freelance-widget">
                    <div class="freelance-content">
                        <a data-toggle="modal" href="#rating" class="favourite favourited"><i
                                class="fas fa-star"></i></a>
                        <div class="freelance-img">
                            <a href="#">
                                <img src="assets/img/img-04.jpg" alt="User Image">
                                <span class="verified"><i class="fas fa-check-circle"></i></span>
                            </a>
                        </div>
                        <div class="freelance-info">
                            <h3><a href="#">Richard Wilson</a></h3>
                            <div class="freelance-specific">UI/UX Designer</div>
                            <div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Alabama, USA</div>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="average-rating">4.8 (55)</span>
                            </div>
                            <div class="freelance-tags">
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web
                                        Design</span></a>
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI
                                        Design</span></a>
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node
                                        Js</span></a>
                            </div>
                            <div class="freelancers-price">$25 Hourly</div>
                        </div>
                    </div>
                    <div class="cart-hover">
                        <a href="#" class="btn-cart" tabindex="-1">View Profile</a>
                    </div>
                </div>
                <div class="freelance-widget">
                    <div class="freelance-content">
                        <a data-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
                        <div class="freelance-img">
                            <a href="#">
                                <img src="assets/img/img-03.jpg" alt="User Image">
                                <span class="verified"><i class="fas fa-check-circle"></i></span>
                            </a>
                        </div>
                        <div class="freelance-info">
                            <h3><a href="#">Richard Wilson</a></h3>
                            <div class="freelance-specific">UI/UX Designer</div>
                            <div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Alabama, USA</div>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="average-rating">5.0 (4)</span>
                            </div>
                            <div class="freelance-tags">
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web
                                        Design</span></a>
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI
                                        Design</span></a>
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node
                                        Js</span></a>
                            </div>
                            <div class="freelancers-price">Free</div>
                        </div>
                    </div>
                    <div class="cart-hover">
                        <a href="#" class="btn-cart" tabindex="-1">View Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Developer -->

    <!-- Review -->
    <section class="section testimonial-section review">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header text-center aos" data-aos="fade-up">
                        <div class="section-line"></div>
                        <h2 class="header-title">{{$data['#review']['heading']??''}}</h2>
                        <p>{!!$data['#review']['description']??''!!}</p>
                    </div>
                </div>
            </div>
            <div id="testimonial-slider" class="owl-carousel owl-theme testimonial-slider aos" data-aos="fade-up">

                <!-- Review Widget -->
                @foreach ($review as $item)
                    <div class="review-blog">
                        <div class="review-top d-flex align-items-center">
                            <div class="review-img">
                                <a href="#"><img class="img-fluid" src="assets/img/review/review-01.jpg"
                                        alt="Post Image"></a>
                            </div>
                            <div class="review-info">
                                <h3><a href="#">{{ $item->name ?? '' }}</a></h3>
                                <h5>{{ $item->profession ?? '' }}</h5>
                                <div class="rating">
                                    @for ($i = 0; $i < $item->rating; $i++)
                                        <i class="fas fa-star filled"></i>
                                    @endfor
                                    @for ($i = 0; $i < 5 - $item->rating; $i++)
                                        <i class="fas fa-star"></i>
                                    @endfor
                                    <span class="average-rating">{{ $item->rating ?? '0' }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="review-content">
                            <p>{!! $item->description ?? '' !!}</p>
                        </div>
                    </div>
                @endforeach
                <!-- / Review Widget -->
            </div>
        </div>
    </section>
    <!-- / Review -->

    <!-- News -->
    <section class="section news">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header text-center aos" data-aos="fade-up">
                        <div class="section-line"></div>
                        <h2 class="header-title">{{$data['#news']['heading']??''}}</h2>
                        <p>{!!$data['#news']['description']??''!!}</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="row blog-grid-row">
                    @foreach ($news as $item)
                        <div class="col-md-4">

                            <!-- Blog Post -->
                            <div class="blog grid-blog aos" data-aos="fade-up">
                                <div class="blog-image">
                                    <a href="#"><img class="img-fluid" src="{{ asset($item->image ?? '') }}"
                                            alt="Post Image"></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="#"><img src="{{ asset($item->author_image ?? '') }}"
                                                        alt="Post Author"> <span> {{ $item->author ?? '' }}</span></a>
                                            </div>
                                        </li>
                                        <li><i class="far fa-clock"></i>
                                            {{ date('d M Y', strtotime($item->created_at)) }}</li>
                                    </ul>
                                    <h3 class="blog-title"><a href="#">{{ $item->heading ?? '' }}</a>
                                    </h3>
                                    <p class="mb-0">{!! $item->description ?? '' !!}</p>
                                </div>
                            </div>
                            <!-- /Blog Post -->

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- / News -->
@endsection
