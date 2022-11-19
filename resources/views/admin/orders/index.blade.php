@extends('admin.layouts.app')

@section('panel')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive--md table-responsive">
                        <table class="table table--light style--two">
                            <thead>
                            <tr>
                                <th scope="col">@lang('Sl')</th>
                                <th scope="col">@lang('Name')</th>
                                <th scope="col">Email</th>
                                <th scope="col">Plan</th>
                                <th scope="col">Delivery Fee</th>
                                <th scope="col">@lang('Status')</th>
                                <th scope="col">@lang('Action')</th> 
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($orders as $key => $plan)
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
                                        <button type="button" class="icon-btn edit" data-toggle="tooltip"
                                                data-id="{{ $plan->id }}"
                                                data-name="{{ $plan->name }}"
                                                data-status="{{ $plan->status }}"
                                                data-original-title="Edit">
                                            <i class="la la-pencil"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-muted text-center" colspan="100%">{{ __($empty_message) }}</td>
                                </tr>
                            @endforelse

                            </tbody>
                        </table><!-- table end -->
                    </div>
                </div>
                <div class="card-footer py-4">
                    {{ $orders->links('admin.partials.paginate') }}
                </div>
            </div>
        </div>
    </div>


{{--    edit modal--}}
    <div id="edit-plan" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('Edit Order')</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <form method="post" action="{{route('admin.order.update-status')}}">
                    @csrf
                    <div class="modal-body">

                        <input class="form-control order_id" type="hidden" name="id">

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold"> Status :</label>
                                <select class="form-control status" name="status">
                                    <option value="Placed">Placed</option>
                                    <option value="confirmed">confirmed</option>
                                    <option value="Placed">Pending</option>

                                </select>
                            </div>
                
                        </div>
               
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-block btn--primary">@lang('Update')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection



@push('breadcrumb-plugins')

@endpush

@push('script')
    <script>
        "use strict";
        (function ($) {
            $('.edit').on('click', function () {
                var modal = $('#edit-plan');
                var status = $(this).data('status');
                modal.find('.order_id').val($(this).data('id'));

                $(".status > option").each(function() {
                    if ($(this).text() == status)
                    $(this).attr("selected","selected");
                    });
              
                modal.find('input[name=id]').val($(this).data('id'));
                modal.modal('show');
            });

            $('.add-plan').on('click', function () {
                var modal = $('#add-plan');
                modal.modal('show');
            });
        })(jQuery);
    </script>
@endpush

