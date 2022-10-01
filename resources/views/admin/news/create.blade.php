@extends('layouts.admin')
@section('content')
<div class="content-body">
        <div class="dashboard-sec">
            <div class="card">
                <div class="card-header">
                    Create News
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.news.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="required" for="autor">Author</label>
                            <input class="form-control" type="text" name="author" id="author" value="{{ old('author') }}"
                                required>
                            {!! $errors->first('author', "<span class='text-danger'>:message</span>") !!}
                        </div>
                        <div class="form-group">
                            <label class="required" for="author_image">Author Image</label>
                            <input class="form-control" type="file" name="author_image" id="author_image" required>
                            {!! $errors->first('author_image', "<span class='text-danger'>:message</span>") !!}
                        </div>
                        <div class="form-group">
                            <label class="required" for="heading">News Heading</label>
                            <input class="form-control" type="text" name="heading" id="heading"
                                value="{{ old('heading') }}" required>
                            {!! $errors->first('heading', "<span class='text-danger'>:message</span>") !!}
                        </div>
                        <div class="form-group">
                            <label class="required" for="icon">News Image</label>
                            <input class="form-control" type="file" name="image" id="image" required>
                            {!! $errors->first('image', "<span class='text-danger'>:message</span>") !!}
                        </div>
                        <div class="form-group">
                            <label class="required" for="description">Description</label>
                            <textarea id="div_editor1" class="form-control" type="text" name="description"
                                required>{{ old('description') }}</textarea>
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
