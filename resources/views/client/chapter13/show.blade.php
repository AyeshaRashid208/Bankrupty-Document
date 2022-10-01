@extends('layouts.admin')
@section('content')

<div class="content-body">
    <div class="dashboard-sec">
    <div class="card">
        <div class="card-header">
            Chapter 13
        </div>

        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    
                </div>
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>
                                ID
                            </th>
                            <td>
                                {{ $q->id??'' }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Name
                            </th>
                            <td>
                                {{ $q->name??'' }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Catagory
                            </th>
                            <td>
                                {{$q->category??''}}
                            </td>
                        </tr>
                        
                        <tr>
                            <th>
                                Description
                            </th>
                            <td>
                                {{$q->description??''}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                File
                            </th>
                            <td>
                                    <a href="{{ $item->file??'' }}" class="btn btn-primary"><i class="ti-download"></i> Download</a>
                                </td>
                           
                        </tr>

                               
                        
                    </tbody>
                </table>
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('client.chapter13.index') }}">
                        Back
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
