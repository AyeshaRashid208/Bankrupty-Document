@extends('layouts.admin')
@section('content')
<div class="content-body">
    <div class="dashboard-sec">
<div class="card">
    <div class="card-header">
        Update 5-7 Days Processing Time
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.days5-7.update",$day5->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="required" for="heading">Heading</label>
                <input class="form-control" type="text" name="heading" id="heading" value="{{ $day5->heading??'' }}">
            </div>
            <div class="form-group">
                <label class="required" for="icon">Description</label>
                <textarea class="form-control" type="text" name="description" style="min-height: 50px;" id="description">{{ $day5->description??'' }}</textarea>
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