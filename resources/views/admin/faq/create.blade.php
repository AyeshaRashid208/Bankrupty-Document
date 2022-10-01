@extends('layouts.admin')
@section('content')

<div class="content-body">
    <div class="dashboard-sec">
<div class="card">
    <div class="card-header">
        Create FAQ
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.faq.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="heading">Heading</label>
                <input class="form-control" type="text" name="heading" id="heading" value="{{ old('heading') }}">
                {!!$errors->first("heading", "<span class='text-danger'>:message</span>")!!}
            </div>
            <div class="form-group">
                <label class="required" for="description">Description</label>
                <textarea id="div_editor1" class="form-control" type="text" name="description" >{{ old('description') }}</textarea>
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