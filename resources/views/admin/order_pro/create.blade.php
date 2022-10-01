@extends('layouts.admin')
@section('content')
<div class="content-body">
    <div class="dashboard-sec">
<div class="card">
    <div class="card-header">
        Create Order Procedure
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.order-procedure.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="heading">Heading</label>
                <input class="form-control" type="text" name="heading" id="heading" value="{{ old('heading') }}">
            </div>
            <div class="form-group">
                <label class="required" for="icon">Description</label>
                <textarea class="form-control" name="description" id="description">{{old('description')}}</textarea>
                
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