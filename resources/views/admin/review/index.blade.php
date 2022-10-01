@extends('layouts.admin')
@section('content')
<div class="content-body">
        <div class="dashboard-sec">
            @can('review_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('admin.review.create') }}">
                            Add New
                        </a>
                    </div>
                </div>
            @endcan

            <div class="card">
                <div class="card-header">
                    Client Review's
                </div>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-User"
                            id="table-1">
                            <thead>
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Client Name
                                    </th>
                                    <th>
                                        Client Profession
                                    </th>
                                    <th>
                                        Client Image
                                    </th>
                                    <th>
                                        Permission
                                    </th>
                                    <th>
                                        Review Description
                                    </th>
                                    <th>
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($review as $item)
                                    <tr>
                                        <td>
                                            {{ $item->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $item->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $item->profession ?? '' }}
                                        </td>
                                        <td>
                                            <img src="{{ asset($item->image) }}" style="width:60px; height:60px;" alt="">
                                        </td>
                                        <td>
                                            @if ($item->permission == 0)
                                                <span class="badge badge-success">Yes</span>
                                            @else
                                                <span class="badge badge-danger">No</span>
                                            @endif
                                        </td>
                                        <td>
                                            {{ $item->description ?? '' }}
                                        </td>
                                        <td>
                                            @can('review_show')
                                                <a class="btn btn-xs btn-info"
                                                    href="{{ route('admin.review.show', $item->id) }}">
                                                    Show
                                                </a>
                                            @endcan
                                            @can('review_edit')
                                                <a class="btn btn-xs btn-warning"
                                                    href="{{ route('admin.review.edit', $item->id) }}">
                                                    Edit
                                                </a>
                                            @endcan

                                            @can('review_delete')
                                                <a class="btn btn-xs btn-danger"
                                                    onclick="reviewDelete{{ $item->id }}({{ $item->id }})">
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
    @foreach ($review as $item)
        <script>
            function reviewDelete{{ $item->id }}(id) {
                swal({
                    title: "Are You Sure Want To Delete Review?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        var url = '{{ route('admin.deleteReview', ':id') }}';
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
