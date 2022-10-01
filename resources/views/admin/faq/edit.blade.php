@extends('layouts.admin')
@section('content')

<div class="content-body">
    <div class="dashboard-sec">
<div class="card">
    <div class="card-header">
        Update FAQ
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.faq.update",$faq->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="required" for="heading">Heading</label>
                <input class="form-control" type="text" name="heading" id="heading" value="{{ $faq->heading??'' }}">
                {!!$errors->first("heading", "<span class='text-danger'>:message</span>")!!}
            </div>
            <div class="form-group">
                <label class="required" for="description">Description</label>
                <textarea id="div_editor1" class="form-control" type="text" name="description" >{{ $faq->description??'' }}</textarea>
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