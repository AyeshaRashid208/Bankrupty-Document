@extends('layouts.admin')
@section('content')
<div class="content-body">
    <div class="dashboard-sec">
<div class="card">
    <div class="card-header">
        Update 1 Day Processing Time
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.day1.update",$day1->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="required" for="heading">Heading</label>
                <input class="form-control" type="text" name="heading" id="heading" value="{{ $day1->heading??'' }}">
            </div>
            <div class="form-group">
                <label class="required" for="icon">Description</label>
                <textarea class="form-control" type="text" name="description" style="min-height: 50px;" id="description">{{ $day1->description??'' }}</textarea>
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