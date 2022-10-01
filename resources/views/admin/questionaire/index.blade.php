@extends('layouts.admin')
@section('content')
    <div class="content-body">
        <div class="dashboard-sec">
            @can('questionaire_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('admin.questionaire.create') }}">
                            Add New
                        </a>
                    </div>
                </div>
            @endcan

            <div class="card">
                <div class="card-header">
                    Questionaires
                </div>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover datatable datatable-User" id="table-1">
                            <thead>
                                <tr>
                                    <th>
                                        Sr.
                                    </th>
                                    <th>
                                        Full Name
                                    </th>
                                    <th>
                                        Social Security Number
                                    </th>
                                    <th>
                                        Date of birth
                                    </th>
                                    <th>
                                        List any other names
                                    </th>
                                    <th>
                                        Spouse’s full name
                                    </th>
                                    <th>
                                        Spouse’s Social Security Number
                                    </th>
                                    <th>
                                        Spouse’s Date of Birth
                                    </th>
                                    <th>
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($questionaire as $index => $item)
                                    <tr>
                                        <td>
                                            {{ $index + 1 }}
                                        </td>
                                        <td>
                                            {{ $item->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $item->security_no ?? '' }}
                                        </td>
                                        <td>
                                            {{ $item->dob ?? '' }}
                                        <td>
                                            {{ $item->list_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $item->spouse_security_no ?? '' }}
                                        </td>
                                        <td>
                                            {{ $item->spouse_security_no ?? '' }}
                                        </td>
                                        <td>
                                            {{ $item->spouse_dob ?? '' }}
                                        </td>
                                        <td>
                                            @can('questionaire_show')
                                                <a class="btn btn-xs btn-info"
                                                    href="{{ route('admin.questionaire.show', $item->id) }}">
                                                    View
                                                </a>
                                            @endcan
                                            @can('questionaire_delete')
                                                <a class="btn btn-xs btn-danger"
                                                    onclick="questionaireDelete{{ $item->id }}({{ $item->id }})">
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
    @foreach ($questionaire as $item)
        <script>
            function questionaireDelete{{ $item->id }}(id) {
                swal({
                    title: "Are You Sure Want To Delete Questionaire?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        var url = '{{ route('admin.deleteQuestionaire', ':id') }}';
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
