@extends($activeTemplate . 'user.layouts.app')

@section('panel')
<div class="row mb-none-30">
    <div class="col-xl-9 col-lg-7 col-md-7 mb-30">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-50 border-bottom pb-2">{{auth()->user()->fullname}} @lang('Shipping Address Detail Information')</h5>

                <form action="{{route('user.addshiping')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="form-control-label font-weight-bold">@lang('Name') <span
                                        class="text-danger">*</span></label>
                                <input class="form-control form-control-lg" type="text" name="name"
                                    value="{{$shipping_name == '' ? auth()->user()->fullname : $shipping_name }}" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label  font-weight-bold">@lang('Zip Code') <span
                                        class="text-danger">*</span></label>
                                <input class="form-control form-control-lg" type="number" name="zip_code"
                                    value="{{$shipping_zipcode ??''}}" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="form-control-label font-weight-bold">@lang('City')<span
                                        class="text-danger">*</span></label>
                                <input class="form-control form-control-lg" name="city" type="text"
                                    value="{{$shipping_city??''}}" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label  font-weight-bold">@lang('State')<span
                                        class="text-danger">*</span></label>
                                <input class="form-control form-control-lg" name="state" type="text"
                                    value="{{$shipping_state??''}}" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label  font-weight-bold">@lang('Full Address')</label>
                                <textarea class="form-control form-control-lg" 
                                     name="full_address">{{$shipping_full_address ?? ''}}</textarea>
                            </div>
                        </div>
                    </div>
                   

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn--primary btn-block btn-lg">@lang('Save
                                    Changes')</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
"use strict";
(function($) {
    $('.deposit').on('click', function() {
        var id = $(this).data('id');
        var result = $(this).data('resource');
        var minAmount = $(this).data('min_amount');
        var maxAmount = $(this).data('max_amount');
        var baseSymbol = "{{ $general->cur_text }}";
        var fixCharge = $(this).data('fix_charge');
        var percentCharge = $(this).data('percent_charge');

        var depositLimit = `@lang('Deposit Limit:') ${minAmount} - ${maxAmount}  ${baseSymbol}`;
        $('.depositLimit').text(depositLimit);
        var depositCharge =
            `@lang('Charge:') ${fixCharge} ${baseSymbol}  ${(0 < percentCharge) ? ' + ' +percentCharge + ' % ' : ''}`;
        $('.depositCharge').text(depositCharge);
        $('.method-name').text(`@lang('Payment By ') ${result.name}`);
        $('.currency-addon').text(baseSymbol);
        $('.edit-currency').val(result.currency);
        $('.edit-method-code').val(result.method_code);
    });
})(jQuery);
</script>
@endpush