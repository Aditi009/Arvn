@extends('admin.layouts.app')

@section('panel')
<style>
    .rating {
        --dir: right;
        --fill: gold;
        --fillbg: rgba(100, 100, 100, 0.15);
        --heart: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 21.328l-1.453-1.313q-2.484-2.25-3.609-3.328t-2.508-2.672-1.898-2.883-0.516-2.648q0-2.297 1.57-3.891t3.914-1.594q2.719 0 4.5 2.109 1.781-2.109 4.5-2.109 2.344 0 3.914 1.594t1.57 3.891q0 1.828-1.219 3.797t-2.648 3.422-4.664 4.359z"/></svg>');
        --star: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 17.25l-6.188 3.75 1.641-7.031-5.438-4.734 7.172-0.609 2.813-6.609 2.813 6.609 7.172 0.609-5.438 4.734 1.641 7.031z"/></svg>');
        --stars: 5;
        --starsize: 1rem;
        --symbol: var(--star);
        --value: 1;
        --w: calc(var(--stars) * var(--starsize));
        --x: calc(100% * (var(--value) / var(--stars)));
        block-size: var(--starsize);
        inline-size: var(--w);
        position: relative;
        touch-action: manipulation;
        -webkit-appearance: none;
    }

    [dir="rtl"] .rating {
        --dir: left;
    }

    .rating::-moz-range-track {
        background: linear-gradient(to var(--dir), var(--fill) 0 var(--x), var(--fillbg) 0 var(--x));
        block-size: 100%;
        mask: repeat left center/var(--starsize) var(--symbol);
    }

    .rating-heading{
        text-align: center;
    }
    .rating::-webkit-slider-runnable-track {
        background: linear-gradient(to var(--dir), var(--fill) 0 var(--x), var(--fillbg) 0 var(--x));
        block-size: 100%;
        mask: repeat left center/var(--starsize) var(--symbol);
        -webkit-mask: repeat left center/var(--starsize) var(--symbol);
    }

    .rating::-moz-range-thumb {
        height: var(--starsize);
        opacity: 0;
        width: var(--starsize);
    }

    .rating::-webkit-slider-thumb {
        height: var(--starsize);
        opacity: 0;
        width: var(--starsize);
        -webkit-appearance: none;
    }

    .rating,
    .rating-label {
        display: block;
        font-family: ui-sans-serif, system-ui, sans-serif;
    }

    .rating{
        border: 0px !important;
        background: transparent !important;
    }
    .rating-label {
        margin-block-end: 1rem;
    }

    /* NO JS */
    .rating--nojs::-moz-range-track {
        background: var(--fillbg);
    }

    .rating--nojs::-moz-range-progress {
        background: var(--fill);
        block-size: 100%;
        mask: repeat left center/var(--starsize) var(--star);
    }

    .rating--nojs::-webkit-slider-runnable-track {
        background: var(--fillbg);
    }

    .rating-form{
        padding: 16px;
        border: 1px solid lightgrey;
    }
    .rating--nojs::-webkit-slider-thumb {
        background-color: var(--fill);
        box-shadow: calc(0rem - var(--w)) 0 0 var(--w) var(--fill);
        opacity: 1;
        width: 1px;
    }
    .red{
        background: red;
    }

    [dir="rtl"] .rating--nojs::-webkit-slider-thumb {
        box-shadow: var(--w) 0 0 var(--w) var(--fill);
    }
</style>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive--md table-responsive">
                        <table class="table table--light style--two">
                            <thead>
                               
                            <tr>
                                <th scope="col">@lang('Sl')</th>
                                <th scope="col">Rating</th>
                                <th scope="col">Review</th>
                                <th scope="col">Approved</th>
                                <th scope="col">@lang('Action')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($products as $key => $plan)
                                <tr>
                                    <td data-label="@lang('Sl')">{{$key+1}}</td>
                                    <td data-label="@lang('Bv')">
                                        <input class="rating rating--nojs" max="5" step="1" type="range"
                                        value="{{$plan->rating}}" readonly style="padding:0" name="range">
                                    </td>
                                    <td data-label="@lang('Bv')">{{ $plan->review }}</td>
                                    <td>
                                    @if($plan->approved)
                                    <a href="{{ route('admin.review.disapproved', $plan->id) }}" class="icon-btn ml-1 red" data-toggle="tooltip" data-original-title="@lang('Dispprove')">
                                        Disapprove
                                    </a>
                                    @else
                                    <a href="{{ route('admin.review.approved', $plan->id) }}" class="icon-btn ml-1" data-toggle="tooltip" data-original-title="@lang('Approve')">
                                        Approve
                                    </a>
                                    {{-- comment --}}
                                    
                                    @endif
                                </td>

                                    {{-- <td data-label="@lang('Referral Commission')"> {{ getAmount($plan->ref_com) }} {{$general->cur_text}}</td> --}}

                                    <td data-label="@lang('Action')">
                
                                        <a href="{{ route('admin.review.delete', $plan->id) }}" class="icon-btn ml-1" data-toggle="tooltip" data-original-title="@lang('Details')">
                                            <i class="la la-trash text--shadow"></i>
                                        </a>
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
                    {{ $products->links('admin.partials.paginate') }}
                </div>
            </div>
        </div>
    </div>


{{--    edit modal--}}
    <div id="edit-plan" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('Edit Plan')</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <form method="post" action="{{route('admin.plan.update')}}">
                    @csrf
                    <div class="modal-body">

                        <input class="form-control plan_id" type="hidden" name="id">

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold"> @lang('Name') :</label>
                                <input class="form-control name" name="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold"> @lang('Price') </label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span
                                            class="input-group-text">{{$general->cur_sym}} </span></div>
                                    <input type="text" class="form-control  price" name="price" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold"> @lang('Business Volume (IPs)')</label>
                            <input class="form-control bv" name="bv" required>
                            <small class="text--red">@lang('When someone buys this plan, all of his ancestors will get this value which will be used for a matching bonus.')</small>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">@lang('Referral Commission')</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span
                                    class="input-group-text">{{$general->cur_sym}} </span></div>
                                    <input type="text" class="form-control  ref_com" name="ref_com"
                                    required>
                                    <small class="text--red">@lang('If a user who subscribed to this plan, refers someone and if the referred user buys a plan, then he will get this amount.')</small>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="font-weight-bold">@lang('Tree Commission')</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">{{$general->cur_sym}} </span></div>
                                <input type="text" class="form-control  tree_com" name="tree_com"
                                    required>
                            </div>
                            <small class="small text--red">@lang('When someone buys this plan, all of his ancestors will get this amount.')</small>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label class="font-weight-bold">@lang('Status')</label>
                                <input type="checkbox" data-width="100%" data-onstyle="-success" data-offstyle="-danger" data-toggle="toggle" data-on="@lang('Active')" data-off="@lang('Inactive')" name="status" checked>
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

    <div id="add-plan" class="modal  fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('Add New Product')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{route('admin.product.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">

                        <input class="form-control plan_id" type="hidden" name="id">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold"> @lang('Name') :</label>
                                <input type="text" class="form-control " name="name"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold"> @lang('Size') </label>
                                <div class="input-group">
                                    
                                    <input type="text" class="form-control  " name="size" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold"> @lang('Description')</label>
                            <input class="form-control " type="text" min="0"  name="desc" required>

                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold"> @lang('Plan')</label>
                            <select class="form-control" name="plan">
                                @foreach($plans as $selectKey => $options)
                                    <option value="{{ $options->id }}">{{ $options->name }}</option>
                                @endforeach
                            </select>
                        </div>
                      
                        <div class="form-group">
                            <label class="font-weight-bold"> @lang('Images')</label>
                            <input class="form-control " type="file" id="files" name="files[]" accept="image/*" multiple>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn-block btn btn--primary">@lang('Submit')</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


@endsection



@push('breadcrumb-plugins')
    {{-- <a href="javascript:void(0)" class="btn btn-sm btn--success add-plan"><i class="fa fa-fw fa-plus"></i>@lang('Add New')</a> --}}

@endpush

@push('script')
    <script>
        "use strict";
        (function ($) {
            $('.edit').on('click', function () {
                var modal = $('#edit-plan');
                modal.find('.name').val($(this).data('name'));
                modal.find('.price').val($(this).data('price'));
                modal.find('.bv').val($(this).data('bv'));
                modal.find('.ref_com').val($(this).data('ref_com'));
                modal.find('.tree_com').val($(this).data('tree_com'));
                modal.find('input[name=daily_ad_limit]').val($(this).data('daily_ad_limit'));

                if($(this).data('status')){
                    modal.find('.toggle').removeClass('btn--danger off').addClass('btn--success');
                    modal.find('input[name="status"]').prop('checked',true);

                }else{
                    modal.find('.toggle').addClass('btn--danger off').removeClass('btn--success');
                    modal.find('input[name="status"]').prop('checked',false);
                }

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

