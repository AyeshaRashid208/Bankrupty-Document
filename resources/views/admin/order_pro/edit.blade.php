@extends('layouts.admin')
@section('content')
<div class="content-body">
    <div class="dashboard-sec">
<div class="card">
    <div class="card-header">
        Update Order Procedure
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.order-procedure.update",$order_pro->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="required" for="heading">Heading</label>
                <input class="form-control" type="text" name="heading" id="heading" value="{{ $order_pro->heading??'' }}">
            </div>
            <div class="form-group">
                <label class="required" for="icon">Description</label>
                <textarea class="form-control" type="text" name="description" style="min-height: 50px;" id="description">{{ $order_pro->description??'' }}</textarea>
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