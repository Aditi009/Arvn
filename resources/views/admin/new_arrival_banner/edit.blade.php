@extends('admin.layouts.app')

@section('panel')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body p-0">
                    <form method="post" action="{{route('admin.product.update')}}">
                        @csrf
                        <div class="modal-body">
    
                            <input class="form-control plan_id" type="hidden" name="id" value="{{$products->id}}">
    
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="font-weight-bold"> @lang('Name') :</label>
                                    <input class="form-control name" name="name" required value="{{$products->name}}">  
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="font-weight-bold"> @lang('size') </label>
                                    <div class="input-group">
                                       
                                        <input type="text" class="form-control " name="size" value="{{$products->size}}" required>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group">
                                <label class="font-weight-bold"> @lang('Description')</label>
                                <input class="form-control bv" name="desc"  value="{{$products->desc}}" required>
                            </div>


                            <div class="row justify-content-center">
                                @foreach ($productImage as $item)
                                    <div class="col-md-3">
                                        <img src="{{asset('assets/images/product/'.$item->image_url)}}" height="100px" width="100px"/>
                                    </div>
                                @endforeach
                            </div>
    

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-block btn--primary">@lang('Update')</button>
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

