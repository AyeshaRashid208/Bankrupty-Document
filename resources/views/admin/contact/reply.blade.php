@extends('layouts.admin')
@section('content')
    <div class="content-body">
        <div class="dashboard-sec">
            <div class="card">
                <div class="card-header">
                    <b>Contact Mail Reply</b>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.contact.update', $contact->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label class="required" for="image">Reply <span style="color:red;">*</span> </label>
                            <textarea class="form-control {{ $errors->has('reply_message') ? 'is-invalid' : '' }}" name="reply_message"
                                required>{{ old('reply_message') }}</textarea>
                            {!! $errors->first('name', "<span class='text-danger'>:message</span>") !!}
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                SEND
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
