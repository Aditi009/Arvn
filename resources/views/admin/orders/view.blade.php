@extends('admin.layouts.app')

@section('panel')
    <style>
        .ship-to {
            padding: 10px;
            font-weight: 900;
        }

        .ship {
            flex-direction: column;
            display: flex;
            padding: 15px;
        }

        .ship p {
            line-height: 10px;
            font-weight: 500
}
        table{
            width: 70%;
    margin-left: 20px;
    /* padding: 20px; */
    border: 1px solid;
    padding: 10px;
    border: 1px solid;
        }
        tr{
            border: 1px solid;

        }
        th{
            border: 1px solid;

        }
        td{
            border: 1px solid;

        }
        @media print {
            body * {
                visibility: hidden;
            }

            .printBtn {
                display: none;
            }

            #section * {
                visibility: visible;
            }
        }
    </style>
    <div class="row">
        <div class="col-lg-12">
            <div class="card" id="section">
                <div class="col-md-12 ship-to">Ship To</div>
                <div class="ship">
                    <label class="ship-l">
                        <p>{{ $shipping_name }}</p>
                    </label>
                    <label class="ship-l">
                        <p>{{ $shipping_full_address }}</p>
                    </label>
                    <label class="ship-l">
                        <p>{{ $shipping_city }}</p>
                    </label>
                    <label class="ship-l">
                        <p>{{ $shipping_state }}</p>
                    </label>
                    <label class="ship-l">
                        <p>{{ $shipping_zipcode }}</p>
                    </label>
                    <label class="ship-l">
                        <p>Contact &nbsp; : &nbsp;{{ $user->mobile }}</p>
                    </label>

                </div>
                <div class="col-md-12 ship-to">Order Contains</div>
                    <table>
                        <tr>
                          <th>S No</th>
                          <th>Name</th>
                        </tr>
                        @foreach($products as $id=>$product )
                        <tr>
                          <td>{{$id+1}}</td>
                          <td>{{$product->name}}</td>
                        </tr>
                        @endforeach
                      </table>
            </div>
            </div>
            <button class="printBtn" onclick="window.print()">Print this page</button>
        </div>
    </div>


    {{--    edit modal --}}
    <div id="edit-plan" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('Edit Order')</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <form method="post" action="{{ route('admin.order.update-status') }}">
                    @csrf
                    <div class="modal-body">

                        <input class="form-control order_id" type="hidden" name="id">

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold"> Status :</label>
                                <select class="form-control status" name="status">
                                    <option value="Placed">Placed</option>
                                    <option value="Pending">Pending</option>
                                    <option value="confirmed">confirmed</option>
                                    <option value="Dispatched">Dispatched</option>
                                    <option value="Delivered">Delivered</option>

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
        (function($) {
            $('.edit').on('click', function() {
                var modal = $('#edit-plan');
                var status = $(this).data('status');
                modal.find('.order_id').val($(this).data('id'));

                $(".status > option").each(function() {
                    if ($(this).text() == status)
                        $(this).attr("selected", "selected");
                });

                modal.find('input[name=id]').val($(this).data('id'));
                modal.modal('show');
            });

            $('.add-plan').on('click', function() {
                var modal = $('#add-plan');
                modal.modal('show');
            });
        })(jQuery);
    </script>
@endpush
