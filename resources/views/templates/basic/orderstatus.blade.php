@extends($activeTemplate . 'layouts.master')

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <style>
        .card {
            z-index: 0;
            background-color: #ECEFF1;
            padding-bottom: 20px;
            margin-top: 90px;
            margin-bottom: 90px;
            border-radius: 10px;
        }

        .top {
            padding-top: 40px;
            padding-left: 13% !important;
            padding-right: 13% !important;
        }

        /*Icon progressbar*/
        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: #455A64;
            padding-left: 0px;
            margin-top: 30px;
        }

        #progressbar li {
            list-style-type: none;
            font-size: 13px;
            width: 25%;
            float: left;
            position: relative;
            font-weight: 400;
        }

        #progressbar .step0:before {
            font-family: FontAwesome;
            content: "\f10c";
            color: #fff;
        }

        #progressbar li:before {
            width: 40px;
            height: 40px;
            line-height: 45px;
            display: block;
            font-size: 20px;
            background: #C5CAE9;
            border-radius: 50%;
            margin: auto;
            padding: 0px;
        }

        /*ProgressBar connectors*/
        #progressbar li:after {
            content: '';
            width: 100%;
            height: 12px;
            background: #C5CAE9;
            position: absolute;
            left: 0;
            top: 16px;
            z-index: -1;
        }

        #progressbar li:last-child:after {
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            position: absolute;
            left: -50%;
        }

        #progressbar li:nth-child(2):after,
        #progressbar li:nth-child(3):after {
            left: -50%;
        }

        #progressbar li:first-child:after {
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            position: absolute;
            left: 50%;
        }

        #progressbar li:last-child:after {
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        #progressbar li:first-child:after {
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        /*Color number of the step and the connector before it*/
        #progressbar li.active:before,
        #progressbar li.active:after {
            background: #651FFF;
        }

        #progressbar li.active:before {
            font-family: FontAwesome;
            content: "\f00c";
        }

        .icon {
            width: 60px;
            height: 60px;
            margin-right: 15px;
        }

        .icon-content {
            padding-bottom: 20px;
        }

        @media screen and (max-width: 992px) {
            .icon-content {
                width: 50%;
            }
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
                                                    Order Status
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
        
        @if($order)
        <input data-id="{{$order}}" id="orderdata" hidden/>
            <div class="container px-1 px-md-4 py-5 mx-auto">

                <!-- Add class 'active' to progress -->
                <div class="row d-flex justify-content-center">
                    <div class="col-12">
                        <ul id="progressbar" class="text-center">
                            <li class="step0 processed"></li>
                            <li class="step0 confirmed"></li>
                            <li class="step0 shipped"></li>
                            <li class="step0 delivered"></li>
                        </ul>
                    </div>
                </div>
                <div class="row justify-content-between top">
                    <div class="row d-flex icon-content">
                        <img class="icon" src="{{asset('assets/images/pending.png')}}">
                        <div class="d-flex flex-column">
                            <p class="font-weight-bold">Order<br>Processed/Placed</p>
                        </div>
                    </div>
                    <div class="row d-flex icon-content">
                        <img class="icon" src="{{asset('assets/images/confirmed.png')}}">
                        <div class="d-flex flex-column">
                            <p class="font-weight-bold">Order<br>Confirmed</p>
                        </div>
                    </div>
                    <div class="row d-flex icon-content">
                        <img class="icon" src="{{asset('assets/images/shipped.png')}}">
                        <div class="d-flex flex-column">
                            <p class="font-weight-bold">Order<br>Shipped</p>
                        </div>
                    </div>
                    <div class="row d-flex icon-content">
                        <img class="icon" src="{{asset('assets/images/delivered.png')}}">
                        <div class="d-flex flex-column">
                            <p class="font-weight-bold">Order<br>Delivered</p>
                        </div>
                    </div>
                </div>
            </div>
        @else
                <div class="card">
<h1 class="p-5"> Not order found !</h1>
                </div>
        @endif
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
$( document ).ready(function() {
    const data = $('#orderdata').attr('data-id');
    const odata = JSON.parse(data);
    const status = odata.status;
    if(status == "Pending"){
    $('.processed').addClass("active");
   
    }

     if(status == "confirmed"){
     $('.processed').addClass("active");
     $('.confirmed').addClass("active");
    
    }

     if(status == "Dispatched"){
     $('.processed').addClass("active");
     $('.confirmed').addClass("active");
     $('.shipped').addClass("active");
    
    }

     if(status == "Delivered"){
     $('.processed').addClass("active");
     $('.confirmed').addClass("active");
     $('.shipped').addClass("active");
     $('.delivered').addClass("active");
    }
    
    console.log( odata.status);
});
    </script>

@endsection
