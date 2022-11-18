@extends('admin.layouts.app')

@section('panel')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row table-responsive--md table-responsive">
                        
                            @forelse($products as $key => $plan)
                                <div class="col-md-4">
                                   
                                   <img src="{{asset('assets/images/product/'.$plan->data_values)}}" width="300px"/>
                                    <td data-label="@lang('Action')">
                                        <a href="{{ route('admin.banner.delete', $plan->id) }}" class="icon-btn ml-1" data-toggle="tooltip" data-original-title="@lang('Details')">
                                            <i class="la la-trash text--shadow"></i>
                                        </a>
                                    </td>
                                </div>
                            @empty
                                <div class="col justify-content-center">
                                    <td class="text-muted text-center" colspan="100%">{{ __($empty_message) }}</td>
                                </div>
                            @endforelse

                           <!-- table end -->
                    </div>
                </div>
                <div class="card-footer py-4">
                </div>
            </div>
        </div>
    </div>


{{--    edit modal--}}
 
    <div id="add-plan" class="modal  fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('Add New Banner')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{route('admin.banner.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                       
                        <div class="form-group">
                            <label class="font-weight-bold"> @lang('Image')</label>
                            <input class="form-control " type="file" id="files" name="file" accept="image/*" multiple>

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
    <a href="javascript:void(0)" class="btn btn-sm btn--success add-plan"><i class="fa fa-fw fa-plus"></i>@lang('Add New')</a>

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

