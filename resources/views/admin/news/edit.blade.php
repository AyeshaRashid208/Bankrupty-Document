@extends('layouts.admin')
@section('content')
<div class="content-body">
        <div class="dashboard-sec">
            <div class="card">
                <div class="card-header">
                    Update News
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.news.update', $news->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="required" for="heading">News Heading</label>
                            <input class="form-control" type="text" name="heading" id="heading"
                                value="{{ $news->heading }}">
                            {!! $errors->first('heading', "<span class='text-danger'>:message</span>") !!}
                        </div>
                        <div class="form-group">
                            <label class="required" for="author">Author</label>
                            <input class="form-control" type="text" name="author" id="author"
                                value="{{ $news->author }}">
                            {!! $errors->first('author', "<span class='text-danger'>:message</span>") !!}
                        </div>
                        <div class="form-group">
                            <label class="required" for="icon">Author Old Image</label>
                            <img src="{{ asset($news->author_image) }}" style="width: 200px; height:200px;" alt="">
                        </div>
                        <div class="form-group">
                            <label class="required" for="author_image">New Author Image</label>
                            <input class="form-control" type="file" name="author_image" id="image">
                        </div>
                        <div class="form-group">
                            <label class="required" for="icon">Old Image</label>
                            <img src="{{ asset($news->image) }}" style="width: 200px; height:200px;" alt="">
                        </div>
                        <div class="form-group">
                            <label class="required" for="icon">New Image</label>
                            <input class="form-control" type="file" name="image" id="image">
                        </div>
                        <div class="form-group">
                            <label class="required" for="description">Description</label>
                            <textarea id="div_editor1" class="form-control" type="text" name="description">{{ $news->description }}</textarea>
                            {!! $errors->first('description', "<span class='text-danger'>:message</span>") !!}
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
