@extends('layouts.admin')
@section('content')
    <div class="content-body">
        <div class="dashboard-sec">
            <div style="margin-bottom: 10px;" class="row">
                <div class="col-lg-12">
                    <a class="btn btn-success" href="{{ route('admin.chapter7-form.create') }}">
                        Add New
                    </a>
                </div>
            </div>
            {{-- <div style="margin-bottom: 10px;" class="row">
                <div class="col-lg-12">
                    <button class="btn btn-success" onclick="myFunction()">
                        Copy Link
                    </button>
                    <input type="text" hidden value="{{ url('chapter-7-form') }}" id="myInput">
                </div>
            </div> --}}
            <div class="card">
                <div class="card-header">
                    Chapter 7 Form Data
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
                                        Debtor 1 First Name
                                    </th>
                                    <th>
                                        Debtor 1 Middle Name
                                    </th>
                                    <th>
                                        Debtor 1 Last Name
                                    </th>
                                    <th>
                                        Debtor 2 First Name
                                    </th>
                                    <th>
                                        Debtor 2 Middle Name
                                    </th>
                                    <th>
                                        Debtor 2 Last Name
                                    </th>
                                    <th>
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($part1 as $index => $item)
                                    <tr>
                                        <td>
                                            {{ $index + 1 }}
                                        </td>
                                        <td>
                                            {{ $item->first_name1 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $item->middle_name1 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $item->last_name1 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $item->first_name2 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $item->middle_name2 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $item->last_name2 ?? '' }}
                                        </td>
                                        <td>
                                            @can('chapter7_form_show')
                                                <a class="btn btn-xs btn-info"
                                                    href="{{ route('admin.chapter7-form.show', $item->id) }}">
                                                    View
                                                </a>
                                            @endcan
                                            @can('chapter7_form_edit')
                                                <a class="btn btn-xs btn-warning"
                                                    href="{{ route('admin.chapter7-form.edit', $item->id) }}">
                                                    Edit
                                                </a>
                                            @endcan
                                            @can('chapter7_form_delete')
                                                <a class="btn btn-xs btn-danger"
                                                    onclick="Chapter7_formDelete{{ $item->id }}({{ $item->id }})">
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
    @foreach ($part1 as $item)
        <script>
            function Chapter7_formDelete{{ $item->id }}(id) {
                swal({
                    title: "Are You Sure Want To Delete chapter 7 Form Data?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        var url = '{{ route('admin.deleteChapter7Form', ':id') }}';
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
        <script>
            function myFunction() {
                /* Get the text field */
                var copyText = document.getElementById("myInput");

                /* Select the text field */
                copyText.select();
                copyText.setSelectionRange(0, 99999); /* For mobile devices */

                /* Copy the text inside the text field */
                navigator.clipboard.writeText(copyText.value);

                /* Alert the copied text */
                alert("Copy Link ");
            }
        </script>
    @endforeach
@endsection
