@extends($activeTemplate . 'layouts.master')

@push('css')
<style>
    
       .mysp h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
       .mysp p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      .mysp i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
            margin-left: 50px;
      }
      .mysp .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    
    </style>
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
                                                    Order Successful
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
        <div class="container row justify-content-center m-0 p-5 mysp">
            <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Success</h1> 
        <p>We received your purchase request; <br/> we'll be in touch shortly!</p>
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
