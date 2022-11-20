@extends($activeTemplate . 'layouts.master')

@push('css')
@endpush

@section('content')
    <div data-elementor-type="wp-page" data-elementor-id="347" class="elementor elementor-347">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-f50aa79 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="f50aa79" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2c57a0a"
                    data-id="2c57a0a" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-76a48d5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="76a48d5" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-a728b9f"
                                    data-id="a728b9f" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-cd08c63 elementor-widget elementor-widget-heading"
                                            data-id="cd08c63" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">
                                                    Payment
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="card m-5" >
                <div class="row">
                    <div class="col-md-6 offset-3 col-md-offset-6">
                        <div class="card card-default">
                            <div class="card-header">
                                Proceed to pay
                            </div>

                            <div class="card-body text-center">
                                <form action="{{ route('razorpay.payment.store') }}" method="POST">
                                <input type="text" name="order_id" value="{{$order->id}}" hidden/>
                                    @csrf
                                    <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="{{ env('RAZORPAY_KEY') }}" data-amount="{{$amount}}"
                                        data-buttontext="Pay {{$amount/100}} INR" data-name="AARBIN" data-description="Rozerpay"
                                        data-image="https://laraveltuts.com/wp-content/uploads/2022/08/laraveltuts-rounde-logo.png" data-prefill.name="{{$name}}"
                                        data-prefill.email="{{$email}}" data-theme.color="#ff7529"></script>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <link rel="stylesheet" href="{{ asset('assets/admin/css/iziToast.min.css') }}">
    <script src="{{ asset('assets/admin/js/iziToast.min.js') }}"></script>

    @if (session()->has('notify'))
        @foreach (session('notify') as $msg)
            <script>
                'use strict';
                iziToast.{{ $msg[0] }}({
                    message: "{{ $msg[1] }}",
                    position: "topRight"
                });
            </script>
        @endforeach
    @endif

    @if ($errors->any())
        <script>
            'use strict';
            @foreach ($errors->all() as $error)
                iziToast.error({
                    message: '{{ $error }}',
                    position: "topRight"
                });
            @endforeach
        </script>
    @endif
    <script>
        'use strict';

        function notify(status, message) {
            iziToast[status]({
                message: message,
                position: "topRight"
            });
        }
    </script>

@endsection
