@extends($activeTemplate . 'user.layouts.app')

@section('panel')
    <div class="row">
        <div class="col-lg-12">
            <div class="card b-radius--10 overflow-hidden">
                <div class="card-body p-0">
                    <div class="table-responsive--sm">
                        <table class="table table--light style--two">
                            <thead>
                            <tr>
                                <th scope="col">@lang('Paid left')</th>
                                <th scope="col">@lang('Paid right')</th>
                                <th scope="col">@lang('Free left')</th>
                                <th scope="col">@lang('Free right')</th>
                                <th scope="col">@lang('IP left')</th>
                                <th scope="col">@lang('IP right')</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td data-label="@lang('Paid left')">{{$logs->paid_left}}</td>
                                <td data-label="@lang('Paid right')">{{$logs->paid_right}}</td>
                                <td data-label="@lang('Free left')">{{$logs->free_left}}</td>
                                <td data-label="@lang('Free right')">{{$logs->free_right}}</td>
                                <td data-label="@lang('IP left')">{{getAmount($logs->bv_left)}}</td>
                                <td data-label="@lang('IP right')">{{getAmount($logs->bv_right)}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
