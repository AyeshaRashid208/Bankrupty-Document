@extends('layouts.admin')
@section('content')
<div class="content-body">
        <div class="dashboard-sec">
            <div class="card">
                <div class="card-header">
                    Update Slider
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.slider.update', $slider->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="required" for="title">Title</label>
                            <input class="form-control" type="text" name="title" id="title" value="{{ $slider->title }}">
                            {!! $errors->first('title', "<span class='text-danger'>:message</span>") !!}
                        </div>
                        <div class="form-group">
                            <label class="required" for="sub_title">Sub Title</label>
                            <input class="form-control" type="text" name="sub_title" id="sub_title"
                                value="{{ $slider->sub_title }}">
                                {!! $errors->first('sub_title', "<span class='text-danger'>:message</span>") !!}
                        </div>
                        @if ($slider->image != null)
                            <div class="form-group">
                                <label class="required" for="icon">Old Image</label>
                                <img src="{{ asset($slider->image) }}" style="width: 200px; height:200px;" alt="">
                            </div>
                        @endif
                        <div class="form-group">
                            <label class="required" for="icon">New Image</label>
                            <input class="form-control" type="file" name="image" id="image">
                        </div>
                        <div class="form-group">
                            <label class="required" for="description">Description</label>
                            <textarea id="div_editor1" class="form-control" type="text"
                                name="description">{{ $slider->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                UPDATE
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
