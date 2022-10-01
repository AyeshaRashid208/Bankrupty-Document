@extends('layouts.app')

@section('content')

    <!-- Page Content -->
    <div class="account-page">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <!-- Register Tab Content -->
                        <div class="account-content">
                            <div class="align-items-center justify-content-center">
                                <div class="login-right">
                                    <div class="login-header text-center">

                                        <h3>Join Lawtrolley</h3>
                                        <p>Make the most of your professional life</p>
                                    </div>
                                    <nav class="user-tabs mb-4">
                                        <ul role="tablist" class="nav nav-pills nav-justified">
                                            <li class="nav-item">
                                                <a href="#developer" data-bs-toggle="tab"
                                                    class="nav-link active">FREELANCER</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#company" data-bs-toggle="tab" class="nav-link">COMPANY</a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <div class="tab-content pt-0">
                                        <div role="tabpanel" id="developer" class="tab-pane fade active show">
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
												<input type="hidden" name="company" value="0">
                                                <div class="form-group form-focus">
                                                    <input type="text" name="username" required value="{{ old('username') }}" class="form-control floating">
                                                    <label class="focus-label">User Name</label>
                                                </div>
                                                <div class="form-group form-focus">
                                                    <input type="email" name="email" required value="{{ old('email') }}" class="form-control floating">
                                                    <label class="focus-label">Email </label>
                                                </div>
                                                <div class="form-group form-focus">
                                                    <input type="password" name="password" required class="form-control floating">
                                                    <label class="focus-label">Password</label>
                                                </div>
                                                <div class="form-group form-focus mb-0">
                                                    <input type="password" name="password_confirmation"  required class="form-control floating">
                                                    <label class="focus-label">Confirm Password</label>
                                                </div>
                                                <div class="dont-have">
                                                    <label class="custom_check">
                                                        <input type="checkbox" name="rem_password" required>
                                                        <span class="checkmark"></span> You agree to the Lawtrolley <a
                                                            href="#">User Agreement, Privacy Policy,</a>
                                                        and <a href="#">Cookie Policy</a>.
                                                    </label>
                                                </div>
                                                <button class="btn btn-primary btn-block btn-lg login-btn"
                                                    type="submit">Agree TO JOIN</button>
                                                <div class="login-or">
                                                    <p>Or login with</p>
                                                </div>
                                                <div class="row social-login">
                                                    <div class="col-4">
                                                        <a href="#" class="btn btn-twitter btn-block"> Twitter</a>
                                                    </div>
                                                    <div class="col-4">
                                                        <a href="#" class="btn btn-facebook btn-block"> Facebook</a>
                                                    </div>
                                                    <div class="col-4">
                                                        <a href="#" class="btn btn-google btn-block"> Google</a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 text-start">
                                                        <a class="forgot-link" href="{{ route('password.request') }}">Forgot
                                                            Password ?</a>
                                                    </div>
                                                    <div class="col-6 text-end dont-have">Already on Lawtrolley <a
                                                            href="{{route('login')}}">Click here</a></div>
                                                </div>
                                            </form>
                                        </div>
                                        <div role="tabpanel" id="company" class="tab-pane fade">
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
												<input type="hidden" name="company" value="1">
                                                <div class="form-group form-focus">
                                                    <input type="text" name="username" required value="{{ old('username') }}" class="form-control floating">
                                                    <label class="focus-label">User Name</label>
                                                </div>
                                                <div class="form-group form-focus">
                                                    <input type="email" name="email" required value="{{ old('email') }}" class="form-control floating">
                                                    <label class="focus-label">Email </label>
                                                </div>
                                                <div class="form-group form-focus">
                                                    <input type="password" name="password" required class="form-control floating">
                                                    <label class="focus-label">Password</label>
                                                </div>
                                                <div class="form-group form-focus mb-0">
                                                    <input type="password" name="password_confirmation"  required class="form-control floating">
                                                    <label class="focus-label">Confirm Password</label>
                                                </div>
                                                <div class="dont-have">
                                                    <label class="custom_check">
                                                        <input type="checkbox" name="rem_password" required>
                                                        <span class="checkmark"></span> You agree to the Lawtrolley <a
                                                            href="#">User Agreement, Privacy Policy,</a>
                                                        and <a href="#">Cookie Policy</a>.
                                                    </label>
                                                </div>
                                                <button class="btn btn-primary btn-block btn-lg login-btn"
                                                    type="submit">Agree TO JOIN</button>
                                                <div class="login-or">
                                                    <p>Or login with</p>
                                                </div>
                                                <div class="row social-login">
                                                    <div class="col-4">
                                                        <a href="#" class="btn btn-twitter btn-block"> Twitter</a>
                                                    </div>
                                                    <div class="col-4">
                                                        <a href="#" class="btn btn-facebook btn-block"> Facebook</a>
                                                    </div>
                                                    <div class="col-4">
                                                        <a href="#" class="btn btn-google btn-block"> Google</a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 text-start">
                                                        <a class="forgot-link" href="{{ route('password.request') }}">Forgot
                                                            Password ?</a>
                                                    </div>
                                                    <div class="col-6 text-end dont-have">Already on Lawtrolley <a
                                                            href="{{route('login')}}">Click here</a></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Register Tab Content -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->

@endsection
