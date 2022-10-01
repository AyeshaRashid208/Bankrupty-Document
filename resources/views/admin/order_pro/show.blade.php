@extends('layouts.admin')
@section('content')
<div class="content-body">
        <div class="dashboard-sec">
            <div class="card">
                <div class="card-header">
                    Show Order Procedure
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.order-procedure.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.user.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $order_pro->id??'' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Heading
                                    </th>
                                    <td>
                                        {{ $order_pro->heading??'' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Description
                                    </th>
                                    <td>
                                        {!! $order_pro->description??'' !!}
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.order-procedure.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
