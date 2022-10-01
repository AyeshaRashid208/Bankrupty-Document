@extends('layouts.admin')
@section('content')
<div class="content-body">
        <div class="dashboard-sec">
            @can('content_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-primary" href="{{ route('admin.content.create') }}">
                            Add New
                        </a>
                    </div>
                </div>
            @endcan

            <div class="card">
                <div class="card-header">
                    Website Content
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
                                        Sr.
                                    </th>
                                    <th>
                                        Page
                                    </th>
                                    <th>
                                        Heading
                                    </th>
                                    <th>
                                        Sub Title
                                    </th>
                                    <th>
                                        Key
                                    </th>
                                    <th>
                                        Image
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
                                @foreach ($content as $index => $item)
                                    <tr>
                                        <td>
                                            {{ $index + 1 }}
                                        </td>
                                        <td>
                                            {{ $item->page ?? 'Null' }}
                                        </td>
                                        <td>
                                            {{ $item->heading ?? 'Null' }}
                                        </td>
                                        <td>
                                            {{ $item->sub_title ?? 'Null' }}
                                        </td>
                                        <td>
                                            {{ $item->key }}
                                        </td>
                                        <td>
                                            @if ($item->image != null)
                                                <img src="{{ asset($item->image) }}" style="width:100px; height:100px;"
                                                    alt="">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>
                                            {!! $item->description ?? 'Null' !!}
                                        </td>
                                        <td>
                                            @can('content_edit')
                                                <a class="btn btn-xs btn-info"
                                                    href="{{ route('admin.content.edit', $item->id) }}">
                                                    Edit
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
