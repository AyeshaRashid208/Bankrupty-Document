@php
$data = content();
@endphp
@section('style')
<style>
    .blur-condtion{
    position: absolute;
    padding: 50px;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 3;
    backdrop-filter: blur(5px);
}
</style>
@endsection


@extends('layouts.admin')
@section('content')
<div class="content-body">
    <div class="dashboard-sec">
<div class="card">
    <div class="card-header">
        Create Bankrupty Document 
    </div>

    <div class="card-body">
         @if(auth::user()->subscription==null)
            <a href="/stripe" class="blur-condtion"></a>
            @endif
        <form method="POST" action="{{ route("client.bankrupty.store") }}" enctype="multipart/form-data">
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