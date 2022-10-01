@extends('layouts.app')

@section('content')

  <!-- Page Title -->
  <div class="page-title-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="title-content">
                            <h2>Sign Up</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <span>Sign Up</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- User Form -->
        <div class="user-form-area ptb-100">
            <div class="container">
                <div class="form-item">
                    <form action="{{ route('register') }}" method="POST">
                    @csrf
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                        <h2>Sign Up</h2>
                        <input type="hidden" name="company" value="0">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="username" required value="{{ old('username') }}" class="form-control" placeholder="Username">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" required value="{{ old('email') }}" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="password" name="password" required class="form-control" placeholder="password">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="password" name="password_confirmation"  required class="form-control" placeholder=" c_Password">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <button type="submit" class="btn common-btn">
                                    Sign Up
                                    <span></span>
                                </button>
                            </div>

                        </div>
                    </form>
                    <div class="user-btn">
                        <h3>Already have an account?<a href="/login">Sign In</a></h3>
                        <span>Or Sign Up With</span>
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
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li><li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-pinterest-alt'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End User Form -->


@endsection