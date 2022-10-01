@extends('layouts.admin')
@section('content')
<div class="content-body">
    <div class="dashboard-sec">
<div class="card">
    <div class="card-header">
<<<<<<< HEAD
        Create Chapter 13
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.chapter13.store") }}" enctype="multipart/form-data">
=======
        Create Chapter 7
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.chapter7.store") }}" enctype="multipart/form-data">
>>>>>>> 757fa7d4f146e625ced69d2ac0756a803e822a01
            @csrf
            <div class="form-group">
                <label class="required" for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}" required>
                {!!$errors->first("name", "<span class='text-danger'>:message</span>")!!}
            </div>
            <div class="form-group">
                <label class="required" for="profession">Case No.</label>
                <input class="form-control" type="text" name="number" id="number" value="{{ old('number') }}" required>
                {!!$errors->first("number", "<span class='text-danger'>:message</span>")!!}
            </div>
            <div class="form-group">
                <label class="required" for="profession">Category</label>
                <input class="form-control" type="text" name="category" id="category" value="{{ old('category') }}" required>
                {!!$errors->first("category", "<span class='text-danger'>:message</span>")!!}
            </div>
            <div class="form-group">
                <label class="required" for="icon">File</label>
                <input class="form-control" type="file" name="file" id="file" accept=
"application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
text/plain, application/pdf" required>
                {!!$errors->first("file", "<span class='text-danger'>:message</span>")!!}
            </div>
            <div class="form-group">
                <label class="required" for="icon">Description</label>
                <textarea class="form-control" type="text" name="description" id="description" row="5" required></textarea>
                {!!$errors->first("description", "<span class='text-danger'>:message</span>")!!}
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