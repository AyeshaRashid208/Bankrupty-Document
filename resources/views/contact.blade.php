@php
$data = content();
@endphp
@extends('layouts.app')
@section('content')
    <!-- Page Title -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>Contuct Us</h2>
                        <ul>
                            <li>
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li>
                                <span>Contuct Us </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Contact Info -->
    <div class="contact-info-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-9 mx-auto">
                    <h1 class="text-center">{{$data['#contact_us']['heading']??''}}</h1>
                    <p class="text-center">{!!$data['#contact_us']['description']??''!!}</p>
                </div>
            </div>
            <div class="row">

                <div class="col-sm-6 col-lg-4">
                    <div class="contact-info-item">
                        <img src="assets/img/contact-info-shape.png" alt="Shape">
                        <i class='bx bx-location-plus'></i>
                        <h3>{{$data['#contact_address']['heading']??''}}</h3>
                        <a href="#">{!!$data['#contact_address']['description']??''!!}</a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="contact-info-item">
                        <img src="assets/img/contact-info-shape.png" alt="Shape">
                        <i class='bx bx-phone-call'></i>
                        <h3>{{$data['#contact_phone']['heading']??''}}</h3>
                        <ul>
                            <li>
                                <a href="tel:{!!$data['#contact_phone']['description']??''!!}">{!!$data['#contact_phone']['description']??''!!}</a>
                            </li>
                            <li>
                                <a href="tel:{{$data['#contact_phone']['sub_title']??''}}">{{$data['#contact_phone']['sub_title']??''}}</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                    <div class="contact-info-item">
                        <img src="assets/img/contact-info-shape.png" alt="Shape">
                        <i class='bx bx-mail-send'></i>
                        <h3>{{$data['#contact_email']['heading']??''}}</h3>
                        <ul>
                            <li>
                                <a
                                    href="https://templates.envytheme.com/cdn-cgi/l/email-protection#d0b8b5bcbcbf90b6b9bebfbefeb3bfbd"><span
                                        class="__cf_email__">{!!$data['#contact_email']['description']??''!!}</span></a>
                            </li>
                            <li>
                                <a
                                    href="https://templates.envytheme.com/cdn-cgi/l/email-protection#7b12151d143b1d1215141555181416"><span
                                        class="__cf_email__"
                                        data-cfemail="96fff8f0f9d6f0fff8f9f8b8f5f9fb">{{$data['#contact_email']['sub_title']??''}}</span></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Contact Info -->

    <!-- Contact -->
    <div class="contact-area  contact-us ptb-100">
        <div class="container">
            <form id="contactForm" action="{{ route('contact-us') }}" method="POST">
                @csrf
                <div class="section-title">
                    <h2>Get In Touch</h2>
                </div>

                <div class="row">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name*" required
                                data-error="Please enter your name">

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email*" required
                                data-error="Please enter your email">

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="phone" id="phone" placeholder="Phone*" required
                                data-error="Please enter your number" class="form-control">

                        </div>
                    </div>

                    <div class="col-lg-12 mb-4">
                        <h6 class="font-weight-bold text-white">What type of bankruptcy are you filing?</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" id="type1" value="Chapter 7 Bankruptcy"
                                checked>
                            <label class="form-check-label text-white" for="type1">
                                Chapter 7 Bankruptcy
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" id="type2"
                                value="Chapter 13 Bankruptcy">
                            <label class="form-check-label text-white" for="type2">
                                Chapter 13 Bankruptcy
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" id="type3"
                                value="Emergency Bankruptcy">
                            <label class="form-check-label text-white" for="type3">
                                Emergency Bankruptcy
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" id="type3"
                                value="5-7 Days Processing Time">
                            <label class="form-check-label text-white" for="type3">
                                5-7 Days Processing Time
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" id="type3"
                                value="2-3 Days Processing Time">
                            <label class="form-check-label text-white" for="type3">
                                2-3 Days Processing Time
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" id="type3"
                                value="1 Day Processing Time">
                            <label class="form-check-label text-white" for="type3">
                                1 Day Processing Time
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" id="type3"
                                value="Order Procedures">
                            <label class="form-check-label text-white" for="type3">
                                Order Procedures
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="8" placeholder="Write message" required
                                data-error="Write your message"></textarea>

                        </div>
                    </div>

                    <div class="col-lg-12">
                        <button type="submit" class="btn common-btn">
                            Send Message
                            <span></span>
                        </button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Map -->
    <div class="map-area">
        <div class="container-fluid p-0">
            <iframe id="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59843174.53779284!2d62.17507173408573!3d23.728204508550373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3663f18a24cbe857%3A0xa9416bfcd3a0f459!2sAsia!5e0!3m2!1sen!2sbd!4v1601881198928!5m2!1sen!2sbd"
                allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
    <!-- End Map -->
@endsection
