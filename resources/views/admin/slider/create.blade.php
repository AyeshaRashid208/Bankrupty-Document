@extends('layouts.admin')
@section('content')
<div class="content-body">
        <div class="dashboard-sec">
            <div class="card">
                <div class="card-header">
                    Create Slider
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.slider.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="required" for="title">Title</label>
                            <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
                            {!! $errors->first('title', "<span class='text-danger'>:message</span>") !!}
                        </div>
                        <div class="form-group">
                            <label class="required" for="sub_title">Sub Title</label>
                            <input class="form-control" type="text" name="sub_title" id="sub_title"
                                value="{{ old('sub_title') }}">
                                {!! $errors->first('sub_title', "<span class='text-danger'>:message</span>") !!}
                        </div>
                        <div class="form-group">
                            <label class="required" for="icon">Image</label>
                            <input class="form-control" type="file" name="image" id="image">
                            {!! $errors->first('image', "<span class='text-danger'>:message</span>") !!}
                        </div>
                        <div class="form-group">
                            <label class="required" for="description">Description</label>
                            <textarea id="div_editor1" class="form-control" type="text" name="description">{{ old('description') }}</textarea>
                            {!! $errors->first('description', "<span class='text-danger'>:message</span>") !!}
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                SAVE
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
