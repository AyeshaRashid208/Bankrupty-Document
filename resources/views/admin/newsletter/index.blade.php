@extends('layouts.admin')
@section('content')
<div class="content-body">
        <div class="dashboard-sec">
            @can('newsletter_email')
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('admin.newsletter.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="margin-bottom: 10px;" class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="">Message</label>
                                <textarea name="description" class="form-control" id="div_editor1" required>{{ old('description') }}</textarea>
                                {!! $errors->first('description', "<span class='text-danger'>:message</span>") !!}
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-dark">Send</button>
                            </div>
                        </div>
                    </div>
                </form>
            @endcan

            <div class="card">
                <div class="card-header">
                    Newsletters
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-User"
                            id="table-1">
                            <thead>
                                <tr>
                                    <th>
                                        Sr.
                                    </th>
                                    <th>
                                        Email
                                    </th>

                                    <th>
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($newsletter as $index => $item)
                                    <tr>
                                        <td>
                                            {{ $index + 1 }}
                                        </td>
                                        <td>
                                            {{ $item->email }}
                                        </td>
                                        <td>
                                            @can('newsletter_delete')
                                                <a class="btn btn-xs btn-danger"
                                                    onclick="newsletterDelete{{ $item->id }}({{ $item->id }})">
                                                    Delete
                                                </a>
                                            @endcan

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.0/tinymce.min.js"></script>
    @foreach ($newsletter as $item)
        <script>
            function newsletterDelete{{ $item->id }}(id) {
                swal({
                    title: "Are You Sure Want To Delete newsletter?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        var url = '{{ route('admin.deleteNewsletter', ':id') }}';
                        url = url.replace(':id', id);
                        $.ajax({
                            type: "POST",
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            url: url,
                            dataType: "json",
                            data: {
                                id: id
                            },
                            success: function(data) {
                                console.log(data);
                                //var data = JSON.parse(response);
                                iziToast.success({
                                    message: data.message,
                                    position: 'topRight'
                                });
                                //Reload page
                                window.location.reload();

                            }
                        });
                    }
                });

            }
        </script>
    @endforeach
@endsection
