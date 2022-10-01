@extends('layouts.admin')
@section('content')
<div class="content-body">
    <div class="dashboard-sec">
<div class="card">
    <div class="card-header">
        Update Chapter 7
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("client.chapter7.update",$team->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="required" for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name" value="{{ $team->name??'' }}">
                {!!$errors->first("name", "<span class='text-danger'>:message</span>")!!}
            </div>
            <div class="form-group">
                <label class="required" for="profession">Case No.</label>
                <input class="form-control" type="text" name="number" id="number" value="{{ $team->number??'' }}" required>
                {!!$errors->first("number", "<span class='text-danger'>:message</span>")!!}
            </div>
            <div class="form-group">
                <label class="required" for="profession">Category</label>
                <input class="form-control" type="text" name="category" id="category" value="{{ $team->category??'' }}" required>
                {!!$errors->first("category", "<span class='text-danger'>:message</span>")!!}
            </div>
            <div class="form-group">
                <label class="required" for="icon">File</label>
                <input class="form-control" type="file" name="file" id="file" accept=
"application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
text/plain, application/pdf" required value="{{ $team->file??'' }}">
                {!!$errors->first("file", "<span class='text-danger'>:message</span>")!!}
            </div>
            <div class="form-group">
                <label class="required" for="icon">Description</label>
                <textarea class="form-control" type="text" name="description" id="description" row="5" required value="{{ $team->description??'' }}">{{ $team->description??'' }}</textarea>
                {!!$errors->first("description", "<span class='text-danger'>:message</span>")!!}
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