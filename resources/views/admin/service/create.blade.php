@extends('layouts.admin')
@section('content')
    <div class="content-body">
        <div class="dashboard-sec">
            <div class="card">
                <div class="card-header">
                    Create Service
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.service.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="required" for="name">Service Name</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', '') }}"
                                required>
                            {!! $errors->first('name', "<span class='text-danger'>:message</span>") !!}
                        </div>
                        <div class="form-group">
                            <label class="required" for="name">Service Icon</label>
                            <input class="form-control" type="text" name="icon" id="icon" required>
                            {!! $errors->first('icon', "<span class='text-danger'>:message</span>") !!}
                        </div>
                        <div class="form-group">
                            <label class="required" for="name">Service Description</label>
                            <textarea id="div_editor1" class="form-control" style="height: 150px;" name="description" required>{{ old('description') }}</textarea>
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
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.2/tinymce.min.js"
        integrity="sha512-MbhLUiUv8Qel+cWFyUG0fMC8/g9r+GULWRZ0axljv3hJhU6/0B3NoL6xvnJPTYZzNqCQU3+TzRVxhkE531CLKg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        tinymce.init({
            selector: '#myTextarea'
        });
    </script>
@endsection
