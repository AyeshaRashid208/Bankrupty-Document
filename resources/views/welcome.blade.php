
@php
    $data = content();
@endphp
@extends('layouts.app')
@section('content')
<!-- Banner -->
<div class="banner-area banner-bg-one">
            <div class="banner-shape">
                <img src="{{asset('assets/img/banner/banner-shape1.jpg')}}" alt="Shape">
            </div>
            <div class="banner-slider owl-theme owl-carousel">
                @foreach ($slider as $item)
                <div class="banner-item">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="container">
                                <div class="banner-content">
                                    <span>{{$item->sub_title??''}}</span>
                                    <h1>{{$item->title??''}}</h1>
                                    <p>{!!$item->description??''!!}</p>
                                    <div class="banner-btn-area">
                                        <a class="banner-btn common-btn" href="#">
                                            Get Started
                                            <span></span>
                                        </a>
                                        <a class="common-btn" href="#">
                                            Contact Us
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="banner-slider-img">
                                    <img src="{{asset($item->image??'assets/img/banner/banner-main1.png')}}" alt="Banner">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                    {{-- <div class="banner-item">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="container">
                                    <div class="banner-content">
                                        <span>Your Financial Status Is Good Hands</span>
                                        <h1>Drowning in Debt? We’re Here to HelpYou Get the Relief You Need.</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do e et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo </p>
                                        <div class="banner-btn-area">
                                            <a class="banner-btn common-btn" href="apply.html">
                                                Get Started
                                                <span></span>
                                            </a>
                                            <a class="common-btn" href="contact.html">
                                                Contact Us
                                                <span></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="banner-slider-img two">
                                        <img src="assets/img/banner/banner-main2.png" alt="Banner">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="banner-item">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="container">
                                    <div class="banner-content">
                                        <span>Your Financial Status Is Good Hands</span>
                                        <h1>Drowning in Debt? We’re Here to HelpYou Get the Relief You Need.</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do e et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo </p>
                                        <div class="banner-btn-area">
                                            <a class="banner-btn common-btn" href="apply.html">
                                                Get Started
                                                <span></span>
                                            </a>
                                            <a class="common-btn" href="contact.html">
                                                Contact Us
                                                <span></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="banner-slider-img three">
                                        <img src="assets/img/banner/banner-main3.png" alt="Banner">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

            </div>
        </div>
        <!-- End Banner -->

        <!-- About -->
        <div class="about-area ptb-100">
            <div class="about-shape">
                <img src="{{asset('assets/img/about/about-shape1.png')}}" alt="Shape">
            </div>
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-5 left-padding">
                        <div class="about-img">
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="one">
                                        <img src="{{asset($data['#home_about']['image']??'assets/img/about/about1.jpg')}}" alt="About">
                                        <img src="{{asset('assets/img/about/about-shape4.png')}}" alt="Shape">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6">
                                    <div class="three">
                                        <img src="{{asset('assets/img/about/about3.jpg')}}" alt="About">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6">
                                    <div class="two">
                                        <img src="assets/img/about/about2.jpg" alt="About">
                                    </div>
                                </div>

                            </div>
                        </div>  
                    </div>

                    <div class="col-lg-7">
                        <div class="about-content">
                            <div class="section-title">
                               
                                <h2> {{$data['#home_about']['heading']??''}} </h2>
                            </div>
                            <div class="middle">
                                {!!$data['#home_about']['description']??''!!}
                                
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        <i class="flaticon-workflow"></i>
                                        <h3>
                                            <span class="odometer" data-count="{{$data['#counter1']['description']??''}}">00</span>
                                        </h3>
                                        <p>{{$data['#counter1']['heading']??''}}</p>
                                    </li>
                                    <li>
                                        <i class="flaticon-project"></i>
                                        <h3>
                                            <span class="odometer" data-count="{{$data['#counter2']['description']??''}}">00</span>
                                        </h3>
                                        <p>{{$data['#counter2']['heading']??''}}</p>
                                    </li>
                                    <li>
                                        <i class="flaticon-team"></i>
                                        <h3>
                                            <span class="odometer" data-count="{{$data['#counter3']['description']??''}}">00</span>
                                        </h3>
                                        <p>{{$data['#counter3']['heading']??''}}</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="years">
                                <ul class="align-items-center">
                                    <li>
                                        <div class="years-inner">
                                            <span>{{$data['#experience']['sub_title']??''}}</span>
                                            <h4>{{$data['#experience']['heading']??''}}</h4>
                                            <i class="flaticon-handshake"></i>
                                            <img src="{{asset('assets/img/about/about-shape5.png')}}" alt="Shape">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="video-wrap">
                                            <a href="{!!$data['#home_video']['description']??''!!}" class="popup-youtube">
                                                <i class='bx bx-play'></i>
                                            </a>
                                            <span>{{$data['#home_video']['heading']??''}}</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End About -->

        <!-- Services -->
        <section class="services-area pt-100 pb-70">
            <div class="services-shape">
                <img src="{{asset('assets/img/services/services-shape1.png')}}" alt="Shape">
                <img src="{{asset('assets/img/services/services-shape2.png')}}" alt="Shape">
            </div>
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">{{$data['#home_service']['sub_title']??''}}</span>
                    <h2>{{$data['#home_service']['heading']??''}}</h2>
                    <p>{!!$data['#home_service']['description']??''!!}</p>
                </div>
                <div class="row">
                    @foreach ($service as $item)
                    <div class="col-sm-6 col-lg-4">
                        <div class="services-item">
                            <i class="icon {{$item->icon??''}}"></i>
                            <h3>
                                <a href="#">{{$item->name??''}}</a>
                            </h3>
                            <p>{{$item->description??''}}</p>
                            <div class="services-btn">
                                <i class='bx bx-right-arrow-alt'></i>
                                <a href="#">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    {{-- <div class="col-sm-6 col-lg-4">
                        <div class="services-item">
                            <i class="flaticon-loan icon"></i>
                            <h3>
                                <a href="service-details.html">Financial Consultancy</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore  dolore magna</p>
                            <div class="services-btn">
                                <i class='bx bx-right-arrow-alt'></i>
                                <a href="service-details.html">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="services-item">
                            <i class="flaticon-online-banking icon"></i>
                            <h3>
                                <a href="service-details.html">Online Banking & Loans</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore  dolore magna</p>
                            <div class="services-btn">
                                <i class='bx bx-right-arrow-alt'></i>
                                <a href="service-details.html">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="services-item">
                            <i class="flaticon-education-cost icon"></i>
                            <h3>
                                <a href="service-details.html">Education Loans</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore  dolore magna</p>
                            <div class="services-btn">
                                <i class='bx bx-right-arrow-alt'></i>
                                <a href="service-details.html">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="services-item">
                            <i class="flaticon-loan-1 icon"></i>
                            <h3>
                                <a href="service-details.html">House Loans</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore  dolore magna</p>
                            <div class="services-btn">
                                <i class='bx bx-right-arrow-alt'></i>
                                <a href="service-details.html">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="services-item">
                            <i class="flaticon-consulting icon"></i>
                            <h3>
                                <a href="service-details.html">Consultancy</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore  dolore magna</p>
                            <div class="services-btn">
                                <i class='bx bx-right-arrow-alt'></i>
                                <a href="service-details.html">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </section>
        <!-- End Services -->

        <!-- Works -->
        <section class="works-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">{{$data['#home_work']['sub_title']??''}}</span>
                    <h2>{{$data['#home_work']['heading']??''}}</h2>
                </div>
                <div class="row">

                    <div class="col-sm-6 col-lg-4">
                        <div class="works-item">
                            <i class="flaticon-accounting"></i>
                            <h3><a href="#">{{$data['#step1']['heading']??''}}</a></h3>
                            <p>{!!$data['#step1']['description']??''!!}</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="works-item">
                            <i class="flaticon-personal-information"></i>
                            <h3><a href="#">{{$data['#step2']['heading']??''}}</a></h3>
                            <p>{!!$data['#step2']['description']??''!!}</p>
                        </div>
                    </div>

                    <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                        <div class="works-item">
                            <i class="flaticon-contract"></i>
                            <h3><a href="#">{{$data['#step3']['heading']??''}}</a></h3>
                            <p>{!!$data['#step3']['description']??''!!}</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Works -->

        <!-- Book -->
        <div class="book-area ptb-100">
            <div class="container">
                <div class="book-content">
                    <div class="book-shape">
                        <img src="{{asset('assets/img/book-shape1.png')}}" alt="Shape">
                        <img src="{{asset('assets/img/book-shape2.png')}}" alt="Shape">
                    </div>
                    <h2>{{$data['#appointment']['heading']??''}}</h2>
                    {!!$data['#appointment']['description']??''!!}
                    
                    <a class="common-btn" href="#">
                        Read More
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
        <!-- End Book -->

       

        <!-- Team -->
        <section class="team-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">{{$data['#team']['sub_title']??''}}</span>
                    <h2>{{$data['#team']['heading']??''}}</h2>
                </div>
                <div class="team-slider owl-theme owl-carousel">
                    @foreach ($team as $item)
                    <div class="team-item">
                        <div class="top">
                            <img src="{{asset($item->image??'')}}" alt="Team">
                            <ul>
                                <li>
                                    <a href="{{$item->facebook??'#'}}" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$item->twitter??'#'}}" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$item->printin??'#'}}" target="_blank">
                                        <i class='bx bxl-pinterest-alt'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$item->linkedin??'#'}}" target="_blank">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="bottom">
                            <h3>{{$item->name??''}}</h3>
                            <span>{{$item->profession??''}}</span>
                            <img src="assets/img/team/team-shape1.png" alt="Shape">
                        </div>
                    </div>
                    @endforeach

                    {{-- <div class="team-item">
                        <div class="top">
                            <img src="assets/img/team/team2.jpg" alt="Team">
                            <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
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
                                </li>
                            </ul>
                        </div>
                        <div class="bottom">
                            <h3>Digo Mera</h3>
                            <span>Manager</span>
                            <img src="assets/img/team/team-shape1.png" alt="Shape">
                        </div>
                    </div>

                    <div class="team-item">
                        <div class="top">
                            <img src="assets/img/team/team3.jpg" alt="Team">
                            <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
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
                                </li>
                            </ul>
                        </div>
                        <div class="bottom">
                            <h3>Mackob Testa</h3>
                            <span>Consultant</span>
                            <img src="assets/img/team/team-shape1.png" alt="Shape">
                        </div>
                    </div>

                    <div class="team-item">
                        <div class="top">
                            <img src="assets/img/team/team4.jpg" alt="Team">
                            <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
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
                                </li>
                            </ul>
                        </div>
                        <div class="bottom">
                            <h3>Tom Henry</h3>
                            <span>Engineer</span>
                            <img src="assets/img/team/team-shape1.png" alt="Shape">
                        </div>
                    </div>

                    <div class="team-item">
                        <div class="top">
                            <img src="assets/img/team/team5.jpg" alt="Team">
                            <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
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
                                </li>
                            </ul>
                        </div>
                        <div class="bottom">
                            <h3>Jac Jacson</h3>
                            <span>Engineer</span>
                            <img src="assets/img/team/team-shape1.png" alt="Shape">
                        </div>
                    </div>

                    <div class="team-item">
                        <div class="top">
                            <img src="assets/img/team/team6.jpg" alt="Team">
                            <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
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
                                </li>
                            </ul>
                        </div>
                        <div class="bottom">
                            <h3>Micheal Smith</h3>
                            <span>Staff</span>
                            <img src="assets/img/team/team-shape1.png" alt="Shape">
                        </div>
                    </div> --}}

                </div>
            </div>
        </section>
        <!-- End Team -->

        <!-- Plan -->
        <div class="plan-area mb-100" style="background-image: url({{asset($data['#home_plan']['image']??'img/plan-bg.jpg')}});">
            <div class="container-fluid">

                <div class="plan-content">
                    <div class="plan-shape">
                        <img src="{{asset('assets/img/plan-shape1.png')}}" alt="Shape">
                        <img src="{{asset('assets/img/plan-shape2.png')}}" alt="Shape">
                    </div>
                    <div class="section-title">
                        <h2>{{$data['#home_plan']['heading']??''}}</h2>
                    </div>
                    <p>{!!$data['#home_plan']['description']!!}</p>
                    <div class="skill-wrap">
                        <div class="skill">
                            <h3>{{$data['#plan1']['heading']??''}}</h3>
                            <div class="skill-bar skill1 wow fadeInLeftBig" style="width:{!!$data['#plan1']['description']??''!!};">
                                <span class="skill-count1">{!!$data['#plan1']['description']??''!!}</span>
                            </div>
                        </div>
                        <div class="skill">
                            <h3>{{$data['#plan2']['heading']??''}}</h3>
                            <div class="skill-bar skill2 wow fadeInLeftBig" style="width:{!!$data['#plan2']['description']??''!!};">
                                <span class="skill-count2">{!!$data['#plan2']['description']??''!!}</span>
                            </div>
                        </div>
                        <div class="skill">
                            <h3>{{$data['#plan13']['heading']??''}}</h3>
                            <div class="skill-bar skill3 wow fadeInLeftBig" style="width:{!!$data['#plan3']['description']??''!!};">
                                <span class="skill-count3">{!!$data['#plan3']['description']??''!!}</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Plan -->

        <!-- FAQ -->
        <section class="faq-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="section-title">
                            <span class="sub-title">{{$data['#home_faq']['sub_title']??''}}</span>
                            <h2>{{$data['#home_faq']['heading']??''}}</h2>
                            <p>{!!$data['#home_faq']['description']??''!!}</p>
                        </div>
                        <div class="faq-item">
                            <ul class="accordion">
                                @foreach ($faq as $item)
                                <li>
                                    <a>
                                        {{$item->heading??''}}
                                        <i class='bx bx-plus'></i>
                                        <i class="bx bx-minus two"></i>
                                    </a>
                                    <p>{!!$item->description??''!!}</p>
                                </li>
                                @endforeach
                                {{-- <li>
                                    <a>
                                        How we help you for your business
                                        <i class='bx bx-plus'></i>
                                        <i class="bx bx-minus two"></i>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ultrices grad </p>
                                </li>
                                <li>
                                    <a>
                                        What is Firewall and why it is used?
                                        <i class='bx bx-plus'></i>
                                        <i class="bx bx-minus two"></i>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ultrices grad </p>
                                </li>
                                <li>
                                    <a>
                                        What steps will you take to remove risk of finance
                                        <i class='bx bx-plus'></i>
                                        <i class="bx bx-minus two"></i>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ultrices grad </p>
                                </li> --}}
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="faq-img">
                            <img src="{{asset($data['#home_faq']['image']??'assets/img/faq-main.png')}}" alt="FAQ">
                            <img src="{{asset('assets/img/faq-shape.png')}}" alt="Shape">
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End FAQ -->

        <!-- Testimonials -->
        <section class="testimonials-area pt-100">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">{{$data['#review']['sub_title']??''}}</span>
                    <h2>{{$data['#review']['heading']??''}}</h2>
                </div>
                <div class="testimonials-slider owl-theme owl-carousel">
                    @foreach ($review as $item)
                    <div class="testimonials-item">
                        <img src="{{asset($item->image??'')}}" alt="Testimonial">
                        <div class="inner">
                            <h2>{!!$item->description??''!!}</h2>
                            <h3>{{$item->name??''}}</h3>
                            <span>{{$item->profession??''}}</span>
                            <i class='bx bxs-quote-alt-left bx-flip-horizontal'></i>
                        </div>
                    </div>
                    @endforeach

                    {{-- <div class="testimonials-item">
                        <img src="assets/img/testimonials2.png" alt="Testimonial">
                        <div class="inner">
                            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum </h2>
                            <h3>Tom Henry</h3>
                            <span>Manager</span>
                            <i class='bx bxs-quote-alt-left bx-flip-horizontal'></i>
                        </div>
                    </div> --}}

                </div>
            </div>
        </section>
        <!-- End Testimonials -->
    @endsection    