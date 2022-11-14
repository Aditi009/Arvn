@extends($activeTemplate . 'user.layouts.app')

@section('panel')
<div class="row mb-none-30">
    <div class="col-xl-9 col-lg-7 col-md-7 mb-30">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-50 border-bottom pb-2">{{auth()->user()->fullname}} @lang('KYC Detail Information')</h5>

                <form action="{{route('user.addkyc')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="form-control-label font-weight-bold">@lang('Bank Name') <span
                                        class="text-danger">*</span></label>
                                <input class="form-control form-control-lg" type="text" name="bank_name"
                                    value="{{$kycdetail->bank_name??''}}" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label  font-weight-bold">@lang('Account Number') <span
                                        class="text-danger">*</span></label>
                                <input class="form-control form-control-lg" type="number" name="account_no"
                                    value="{{$kycdetail->account_no??''}}" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="form-control-label font-weight-bold">@lang('IFSC Code')<span
                                        class="text-danger">*</span></label>
                                <input class="form-control form-control-lg" name="ifsc_code" type="text"
                                    value="{{$kycdetail->ifsc_code??''}}" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label  font-weight-bold">@lang('Branch')<span
                                        class="text-danger">*</span></label>
                                <input class="form-control form-control-lg" name="branch" type="text"
                                    value="{{$kycdetail->branch??''}}" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label  font-weight-bold">@lang('Passbook Image')</label>
                                <input class="form-control form-control-lg" type="file" accept="image/*"
                                     name="passbook_img">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label class="form-control-label font-weight-bold">@lang('ID Number') </label>
                                <input class="form-control form-control-lg" type="text" name="photo_id_no"
                                    value="{{$kycdetail->photo_id_no??''}}">
                                <small class="form-text text-muted"><i class="las la-info-circle"></i>@lang('Aadhar Card, Pancard')
                                </small>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label  font-weight-bold">@lang('ID Image')</label>
                                <input class="form-control form-control-lg" type="file" accept="image/*"
                                    onchange="loadFile(event)" name="id_image">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label font-weight-bold">@lang('UPI')(optional)</label>
                                <input class="form-control form-control-lg" type="text" name="upi"
                                    value="{{$kycdetail->upi??''}}">
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