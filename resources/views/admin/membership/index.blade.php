@extends('layouts.admin')
@section('content')
    <div class="content-body">
        <div class="dashboard-sec">

            <div class="card">
                <div class="card-header">
                    Membership
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
                                        First Name
                                    </th>
                                    <th>
                                        Last Name
                                    </th>
                                    <th>
                                        Date of Birth
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Phone No.
                                    </th>
                                    <th>
                                        Subject
                                    </th>
                                    <th>
                                        Address
                                    </th>
                                    <th>
                                        City
                                    </th>
                                    <th>
                                        State
                                    </th>
                                    <th>
                                        Zipcode
                                    </th>
                                    <th>
                                        Fee
                                    </th>
                                    <th>
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($membership as $index => $item)
                                    <tr>
                                        <td>
                                            {{ $index + 1 }}
                                        </td>
                                        <td>
                                            {{ $item->first_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $item->last_name ?? '' }}
                                        </td>
                                        
                                        <td>
                                            {{ $item->dob ?? '' }}
                                        </td>
                                        <td>
                                            {{ $item->email ?? '' }}
                                        </td>
                                        <td>
                                            {{ $item->phone ?? '' }}
                                        </td>
                                        <td>
                                            {{ $item->subject ?? '' }}
                                        </td>
                                        <td>
                                            {{ $item->address ?? '' }}
                                        </td>
                                        <td>
                                            {{ $item->city ?? '' }}
                                        </td>
                                        <td>
                                            {{ $item->state ?? '' }}
                                        </td>
                                        <td>
                                            {{ $item->zipcode ?? '' }}
                                        </td>
                                        <td>
                                            {{$item->fee ??''}}
                                            </td>
                                        <td>
                                            
                                            @can('membership_delete')
                                                <a class="btn btn-xs btn-danger"
                                                    onclick="membershipDelete{{ $item->id }}({{ $item->id }})">
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
    @foreach ($membership as $item)
        <script>
            function membershipDelete{{ $item->id }}(id) {
                swal({
                    title: "Are You Sure Want To Delete Member?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        var url = '{{ route('admin.deleteMembership', ':id') }}';
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
