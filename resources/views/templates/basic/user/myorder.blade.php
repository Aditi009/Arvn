@extends($activeTemplate . 'user.layouts.app')

@section('panel')
    <div class="row">
        <div class="col-lg-12">
            <div class="card b-radius--10 ">
                <div class="card-body p-0">
                    <div class="table-responsive--sm table-responsive">
                        <table class="table table--light style--two">
                            <thead>
                            <tr>
                                <th scope="col">@lang('Sl')</th>
                                <th scope="col">@lang('Name')</th>
                                <th scope="col">Email</th>
                                <th scope="col">Plan</th>
                                <th scope="col">Amount</th>
                                <th scope="col">@lang('Status')</th>
                                <th scope="col">@lang('Action')</th> 
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($plans) >0)
                                @foreach($plans as $key=>$plan)
                                   <tr>
                                    <td data-label="@lang('Sl')">{{$key+1}}</td>
                                    <td data-label="@lang('Name')">{{ $plan->firstname.' '.$plan->lastname }}</td>
                                    <td data-label="Email">{{ $plan->email }}</td>
                                    <td data-label="Plan">{{ $plan->name }}</td>
                                    <td data-label="@lang('Referral Commission')"> {{$plan->delivery_charge}}</td>

                                    <td data-label="@lang('Status')">
                                       
                                            <span class="text--small badge font-weight-normal badge--success">{{$plan->status}}</span>
                                       
                                    </td>

                                    <td data-label="@lang('Action')">
                                        <a href="{{route('order.status',$plan->id)}}" type="button" class="icon-btn view" data-toggle="tooltip"
                                        data-id="{{ $plan->id }}"
                                        data-name="{{ $plan->name }}"
                                        data-status="{{ $plan->status }}"
                                        data-original-title="View">
                                            <i class="la la-eye"></i>
                                        </a>
                                       
                                    </td>
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="100%" class="text-center"> @lang('No results found')!</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer py-4">
                </div>
            </div>
        </div>
    </div>

    {{-- APPROVE MODAL --}}
    <div id="approveModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('Details')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <li class="list-group-item ">@lang('Amount') : <span class="withdraw-amount "></span></li>
                        <li class="list-group-item ">@lang('Charge') : <span class="withdraw-charge "></span></li>
                        <li class="list-group-item ">@lang('After Charge') : <span class="withdraw-after_charge"></span>
                        </li>
                        <li class="list-group-item ">@lang('Conversion Rate') : <span class="withdraw-rate"></span></li>
                        <li class="list-group-item ">@lang('Payable Amount') : <span class="withdraw-payable"></span>
                        </li>
                    </ul>
                    <ul class="list-group withdraw-detail mt-1">
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn--dark" data-dismiss="modal">@lang('Close')</button>
                </div>
            </div>
        </div>
    </div>


    {{-- Detail MODAL --}}
    <div id="detailModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('Details')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="@lang('Close')">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="withdraw-detail"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn--danger" data-dismiss="modal">@lang('Close')</button>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('script')
    <script>
        "use strict";
        (function ($) {
            $('.approveBtn').on('click', function () {
                var modal = $('#approveModal');
                modal.find('.withdraw-amount').text($(this).data('amount'));
                modal.find('.withdraw-charge').text($(this).data('charge'));
                modal.find('.withdraw-after_charge').text($(this).data('after_charge'));
                modal.find('.withdraw-rate').text($(this).data('rate'));
                modal.find('.withdraw-payable').text($(this).data('payable'));
                var list = [];
                var details = Object.entries($(this).data('info'));

                var ImgPath = "{{url(imagePath()['verify']['deposit']['path'])}}/";
                var singleInfo = '';
                for (var i = 0; i < details.length; i++) {
                    if (details[i][1].type == 'file') {
                        singleInfo += `<li class="list-group-item">
                                    <span class="font-weight-bold "> ${details[i][0].replaceAll('_', " ")} </span> : <img src="${ImgPath}/${details[i][1].field_name}" alt="..." class="w-100">
                                </li>`;
                    } else {
                        singleInfo += `<li class="list-group-item">
                                    <span class="font-weight-bold "> ${details[i][0].replaceAll('_', " ")} </span> : <span class="font-weight-bold ml-3">${details[i][1].field_name}</span>
                                </li>`;
                    }
                }

                if (singleInfo) {
                    modal.find('.withdraw-detail').html(`<br><strong class="my-3">@lang('Payment Information')</strong>  ${singleInfo}`);
                } else {
                    modal.find('.withdraw-detail').html(`${singleInfo}`);
                }
                modal.modal('show');
            });

            $('.detailBtn').on('click', function () {
                var modal = $('#detailModal');
                var feedback = $(this).data('admin_feedback');
                modal.find('.withdraw-detail').html(`<p> ${feedback} </p>`);
                modal.modal('show');
            });

        })(jQuery);
    </script>
@endpush

@push('breadcrumb-plugins')
    <form action="" method="GET" class="form-inline float-sm-right bg--white">
        <div class="input-group has_append">
            <input type="text" name="search" class="form-control" placeholder="@lang('Search by TRX')" value="{{ @$search }}">
            <div class="input-group-append">
                <button class="btn btn--primary" type="submit"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </form>
@endpush


