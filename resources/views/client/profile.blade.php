@extends('layouts.client')
@section('content')
    <div class="col-xl-9 col-md-8">
        <div class="dashboard-sec">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row">

                <div class="col-xl-4">
                    <div class="card">
                        <grammarly-extension data-grammarly-shadow-root="true"
                            style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="cGcvT">
                        </grammarly-extension>

                        <div class="card-header">
                            <h4 class="card-title mb-0">My Profile</h4>
                            <div class="card-options"><a class="card-options-collapse" href="javascript:;"
                                    data-bs-toggle="card-collapse" data-bs-original-title="" title=""><i
                                        class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="javascript:;"
                                    data-bs-toggle="card-remove" data-bs-original-title="" title=""><i
                                        class="fe fe-x"></i></a></div>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="profile-title">
                                    <div class="media ad-profile2-img">
                                        <img alt=""
                                            src="{{ asset(Auth()->user()->image ?? 'assets/img/img-04.jpg') }}" style="width: 100px;
                                            height: 100px;
                                            border-radius: 50%;">
                                        <div class="media-body">
                                            <h5 class="mb-1">{{ Auth()->user()->username }}
                                                {{ Auth()->user()->name }}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <b>Email-Address</b>
                                    <p>{{ Auth()->user()->email }}</p>
                                </div>
                                <div class="mb-3">
                                    <b>Address</b>
                                    <p>{{ Auth()->user()->address ?? 'No Address' }}</p>
                                </div>
                                {{-- <div class="form-footer">
                            <button class="btn btn-primary squer-btn" data-bs-original-title="" title="">Save</button>
                        </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <form class="card" method="POST"
                        action="{{ route('profile.update', Auth()->user()->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title mb-0">Edit Profile</h4>
                            <div class="card-options"><a class="card-options-collapse" href="javascript:;"
                                    data-bs-toggle="card-collapse" data-bs-original-title="" title=""><i
                                        class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="javascript:;"
                                    data-bs-toggle="card-remove" data-bs-original-title="" title=""><i
                                        class="fe fe-x"></i></a></div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                {{-- <div class="col-md-5">
                            <div class="mb-3">
                                <label class="form-label">Company</label>
                                <input class="form-control" type="text" placeholder="Company" data-bs-original-title=""
                                    title="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input class="form-control" type="text" placeholder="Username" data-bs-original-title=""
                                    title="">
                            </div>
                        </div> --}}
                                {{-- <div class="col-sm-6 col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input class="form-control" type="email" placeholder="Email" data-bs-original-title=""
                                    title="">
                            </div>
                        </div> --}}
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <input class="form-control" type="text" name="username"
                                            value="{{ Auth()->user()->username ?? '' }}" disabled placeholder="First Name"
                                            data-bs-original-title="" title="">
                                        
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input class="form-control" type="text" name="name"
                                            value="{{ Auth()->user()->name ?? '' }}" placeholder="Full Name"
                                            data-bs-original-title="" title="">
                                        {!! $errors->first('name', "<span class='text-danger'>:message</span>") !!}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input class="form-control" type="email" disabled
                                            value="{{ Auth()->user()->email ?? '' }}" placeholder="E-Mail"
                                            data-bs-original-title="" title="">

                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Image <small>(optional)</small></label>
                                        <input class="form-control" name="image" type="file" data-bs-original-title=""
                                            title="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <input class="form-control" type="text" name="address"
                                            value="{{ Auth()->user()->address ?? '' }}" placeholder="Home Address"
                                            data-bs-original-title="" title="">
                                        {!! $errors->first('address', "<span class='text-danger'>:message</span>") !!}
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary squer-btn" type="submit" data-bs-original-title=""
                                title="">Update
                                Profile</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
