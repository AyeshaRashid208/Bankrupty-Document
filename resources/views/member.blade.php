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
                        <h2>Membership</h2>
                        <ul>
                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>
                                <span>Membership</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Contact -->
    <div class="contact-area ptb-100">
        <div class="container">
            <form id="contactForm" action="{{ route('Membership') }}" method="POST">
                @csrf
                <div class="section-title">
                    <h2 class="text-dark">Become a Member Now For Only $49.99!</h2>
                </div>
                <div class="row">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="first_name" required class="form-control" placeholder=" Fisrt Name*"
                                required data-error=" Name">

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="last_name" required class="form-control" placeholder="Last Name*"
                                required data-error="Please enter your name">

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="date" name="dob" required class="form-control" placeholder="Date Of Birth*"
                                required data-error="Please enter your name">

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="address" required class="form-control" placeholder="Address*"
                                required data-error="Please enter your name">

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" name="city" class="form-control" placeholder="City*" required
                                data-error="Please enter your name">

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" name="state" class="form-control" placeholder="State*" required
                                data-error="Please enter your name">

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" name="zipcode" class="form-control" placeholder="Zip Code*" required
                                data-error="Please enter your name">

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email*" required
                                data-error="Please enter your email">

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="phone" placeholder="Phone*" required
                                data-error="Please enter your number" class="form-control">

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Subject*" required
                                data-error="Please enter your subject">

                        </div>
                    </div>
                    <div class="col-lg-12">
                        <h5>Membership Fee </h5>
                        <input type="hidden" name="fee" value="49.99">
                        <p>Price: $ 49.99</p>
                        <p>Become a Member and gain access to resources for credit repair and funding resources.</p>
                    </div>

                </div>
                <button type="submit" class="btn btn-danger">Submit</button>

            </form>
        </div>
    </div>
    <h5 class="my-4 text-center text-danger">Process your payment with the “Add to Cart” button below to activate your
        membership.</h5>

    <div class="container">
        <hr>
        <div class="row my-4">
            <div class="col-12 col-md-6 text-center">
                <h6>YourFileBK Membership Package </h6>
            </div>
            <div class="col-12 col-md-6 text-center">
                <button class="btn btn-danger mr-3">Add To cart</button>
                <button class="btn btn-danger mr-3">View Cart</button>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <div class="row">
            <div class="col-12 col-md-9 mx-auto">
                <div class="card p-5">
                    <h5>All Memberships Include:</h5>
                    <ul class="p-0">
                        <li>10% Discount on the Preparation of Bankruptcy Forms</li>
                        <li>Resources to Credit Repair</li>
                        <li>Resources to Rebuilding Credit</li>
                        <li>Resources to Consumer and Business Loans</li>
                        <li>Referral Bonus for every YouFileBK Client that you refer and they accept service</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->
@endsection
