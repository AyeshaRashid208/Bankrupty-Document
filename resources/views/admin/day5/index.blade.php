@extends('layouts.admin')
@section('content')
<div class="content-body">
    <div class="dashboard-sec">
    @can('day5_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.days5-7.create') }}">
                    Add New
                </a>
            </div>
        </div>
    @endcan

    <div class="card">
        <div class="card-header">
            5-7 Days Processing Time
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover datatable datatable-User"  id="table-1">
                    <thead>
                        <tr>    
                            <th>
                                Sr.
                            </th>
                            <th>
                                Heading
                            </th>
                            <th>
                                Description
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($day5 as $index=> $item)
                            <tr>
                                <td>
                                    {{ $index+1 }}
                                </td>
                                <td>
                                    {{ $item->heading??'' }}
                                </td>
                                <td>
                                    {{ substr($item->description, 0,  40) ??''}}
                                </td>
                                
                                <td>
                                    @can('day5_show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.days5-7.show', $item->id) }}">
                                            View
                                        </a>
                                    @endcan
                                    @can('day5_edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.days5-7.edit', $item->id) }}">
                                            Edit
                                        </a>
                                    @endcan
                                    @can('day5_delete')
                                        <a class="btn btn-xs btn-danger"
                                            onclick="day5Delete{{ $item->id }}({{ $item->id }})">
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
@foreach ($day5 as $item)
<script>
    function day5Delete{{$item->id}}(id){
        swal({
            title: "Are You Sure Want To Delete 5-7 Days Processing Time?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                var url = '{{ route("admin.deleteDays5-7", ":id") }}';
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

