@extends('layouts.admin')
@section('content')
    <div class="content-body">
        <div class="dashboard-sec">
            <div class="card">
                <div class="card-header">
                    Contact Mail
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                            <thead>
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Phone
                                    </th>
                                    <th>
                                        Type
                                    </th>
                                    <th>
                                        Message
                                    </th>
                                    <th>
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contact as $index => $item)
                                    <tr>
                                        <td>
                                            {{ $index + 1 }}
                                        </td>
                                        <td>
                                            {{ $item->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $item->email ?? '' }}
                                        </td>
                                        <td>
                                            {{ $item->phone ?? '' }}
                                        </td>
                                        <td>
                                            {{ $item->type ?? '' }}
                                        </td>
                                        <td>
                                            {{ $item->message ?? '' }}
                                        </td>
                                        <td>
                                            @can('contact_reply')
                                                <a class="btn btn-xs btn-info"
                                                    href="{{ route('admin.contact.edit', $item->id) }}">
                                                    Reply
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
