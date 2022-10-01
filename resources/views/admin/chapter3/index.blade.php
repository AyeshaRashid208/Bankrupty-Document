@extends('layouts.admin')
@section('content')
<div class="content-body">
    <div class="dashboard-sec">
    @can('team_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.chapter7.create') }}">
                    Add New
                </a>
            </div>
        </div>
    @endcan

    <div class="card">
        <div class="card-header">
           Chapter 7
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

                                Name

                            </th>
                            <th>
                                Cas No.
                            </th>
                            <th>
                                category
                            </th>
                            <th>
                                Description
                            </th>
                            <th>
                                Doc File
                            </th>
                            
                            <th>
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($team as $index=> $item)
                            <tr>
                                <td>
                                    {{ $index+1 }}
                                </td>
                                <td>
                                    {{ $item->name??'' }}
                                </td>
                                <td>
                                    {{ $item->number??'' }}
                                </td>
                                <td>
                                {{ $item->category??'' }}
                                </td>
                                <td>
                                    {{ substr($item->description, 0,  40) ??''}}
                                </td>
                                <td>

                                    <a href="{{ $item->file??'' }}" download class="btn btn-primary"><i class="ti-download"></i> Download</a>

                                </td>
                                
                                <td>
                                    @can('team_edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.chapter7.edit', $item->id) }}">
                                            Edit
                                        </a>
                                    @endcan
                                    @can('team_delete')
                                        <a class="btn btn-xs btn-danger"
                                            onclick="teamDelete{{ $item->id }}({{ $item->id }})">
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
@foreach ($team as $item)
<script>
    function teamDelete{{$item->id}}(id){
        swal({
            title: "Are You Sure Want To Delete chapter 7?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                var url = '{{ route("admin.deleteChapter7", ":id") }}';
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

