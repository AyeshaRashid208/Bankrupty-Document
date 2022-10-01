@extends('layouts.admin')
@section('content')
<div class="content-body">
    <div class="dashboard-sec">
    @can('team_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.chapter13.create') }}">
                    Add New
                </a>
            </div>
        </div>
    @endcan

    <div class="card">
        <div class="card-header">
           Chapter 13
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
<<<<<<< HEAD
                                Number
=======
                                Name
>>>>>>> 757fa7d4f146e625ced69d2ac0756a803e822a01
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
<<<<<<< HEAD
                                    <a href="{{ $item->file??'' }}" class="btn btn-primary"><i class="ti-download"></i> Download</a>
=======
                                    <a href="{{ $item->file??'' }}" download class="btn btn-primary"><i class="ti-download"></i> Download</a>
>>>>>>> 757fa7d4f146e625ced69d2ac0756a803e822a01
                                </td>
                                
                                <td>
                                    @can('team_edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.chapter13.edit', $item->id) }}">
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
            title: "Are You Sure Want To Delete Chapter 13?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                var url = '{{ route("admin.deleteChapter13", ":id") }}';
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

