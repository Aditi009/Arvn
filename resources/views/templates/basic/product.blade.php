@extends($activeTemplate . 'layouts.master')

@push('css')
    <link rel="stylesheet" id="jkit-elements-main-css" href="{{ asset('textilary/css/about.css') }}" type="text/css"
        media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <style>
        .preview {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        @media screen and (max-width: 996px) {
            .preview {
                margin-bottom: 20px;
            }
        }

        .preview-pic {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .preview-thumbnail.nav-tabs {
            border: none;
            margin-top: 15px;
        }

        .preview-thumbnail.nav-tabs li {
            width: 18%;
            margin-right: 2.5%;
        }

        .preview-thumbnail.nav-tabs li img {
            max-width: 100%;
            display: block;
        }

        .preview-thumbnail.nav-tabs li a {
            padding: 0;
            margin: 0;
        }

        .preview-thumbnail.nav-tabs li:last-of-type {
            margin-right: 0;
        }

        .tab-content {
            overflow: hidden;
        }

        .tab-content img {
            width: 100%;
            -webkit-animation-name: opacity;
            animation-name: opacity;
            -webkit-animation-duration: .3s;
            animation-duration: .3s;
        }

        .card {
            margin-top: 50px;
            background: #eee;
            padding: 3em;
            line-height: 1.5em;
        }

        @media screen and (min-width: 997px) {
            .wrapper {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
            }
        }

        .details {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .colors {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .product-title,
        .price,
        .sizes,
        .colors {
            text-transform: UPPERCASE;
            font-weight: bold;
        }

        .checked,
        .price span {
            color: #ff9f1a;
        }

        .product-title,
        .rating,
        .product-description,
        .price,
        .vote,
        .sizes {
            margin-bottom: 15px;
        }

        .product-title {
            margin-top: 0;
        }

        .size {
            margin-right: 10px;
        }

        .size:first-of-type {
            margin-left: 40px;
        }

        .color {
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
            height: 2em;
            width: 2em;
            border-radius: 2px;
        }

        .color:first-of-type {
            margin-left: 20px;
        }

        .add-to-cart,
        .like {
            background: #ff9f1a;
            padding: 1.2em 1.5em;
            border: none;
            text-transform: UPPERCASE;
            font-weight: bold;
            color: #fff;
            -webkit-transition: background .3s ease;
            transition: background .3s ease;
        }

        .add-to-cart:hover,
        .like:hover {
            background: #b36800;
            color: #fff;
        }

        .not-available {
            text-align: center;
            line-height: 2em;
        }

        .not-available:before {
            font-family: fontawesome;
            content: "\f00d";
            color: #fff;
        }

        .orange {
            background: #ff9f1a;
        }

        .green {
            background: #85ad00;
        }

        .blue {
            background: #0076ad;
        }

        .tooltip-inner {
            padding: 1.3em;
        }

        @-webkit-keyframes opacity {
            0% {
                opacity: 0;
                -webkit-transform: scale(3);
                transform: scale(3);
            }

            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes opacity {
            0% {
                opacity: 0;
                -webkit-transform: scale(3);
                transform: scale(3);
            }

            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        /*# sourceMappingURL=style.css.map */
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
                                                    {{ $products->name }}
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
            <div class="card">
                <div class="container-fliud">
                    <div class="wrapper row">
                        <div class="preview col-md-6">

                            <div class="preview-pic tab-content">
                                <div class="tab-pane active" id="pic-1">


                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100"
                                                    src="http://placekitten.com/400/252"alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img
                                                    class="d-block w-100"src="http://placekitten.com/400/252"alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="http://placekitten.com/400/252"
                                                    alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                               
                            </div>
                            <ul class="preview-thumbnail get-details nav nav-tabs">
                                @foreach ($products->getProduct as $item)
                                    <li class="active" data-id="{{ $item }}"><a data-target="#pic-1"
                                            data-toggle="tab"><img
                                                src="{{ asset('assets/images/product/' . $item->getProductImages[0]->image_url) }}"
                                                title="{{ $item->name }}" /></a></li>
                                @endforeach
                            </ul>

                        </div>
                        <div class="details col-md-6">
                            <h3 class="product-title"></h3>
                            <div class="rating" hidden>
                                <div class="stars" hidden>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <span class="review-no">41 reviews</span>
                            </div>
                            <p class="product-description"></p>
                            <h4 class="price">current price:
                                <span>{{ number_format((float) $products->price, 2, '.', '') }}</span><span
                                    class="currency-addon addon">{{ $general->cur_text }}</span>
                            </h4>
                            <p class="vote"><strong>{{count($reviews)}}</strong> Ratings</p>
                                    {{-- {{ route('user.deposit.insert') }} --}}
                            <form action="{{ route('order.placed') }}" method="post">
                                <h5 class="sizes">sizes:
                                    <input class="form-control" placeholder="Enter size" type="text"
                                        name="size" />
                                </h5>

                                <div class="action">

                                    @csrf
                                    <h4 class="text-danger depositLimit"></h4>
                                    <h4 class="text-danger depositCharge"></h4>
                                    <div class="form-group">
                                        <input type="hidden" name="currency" class="edit-currency"
                                            value="{{ $data->currency }}">
                                        <input type="hidden" name="method_code" class="edit-method-code"
                                            value="{{ $data->method_code }}">
                                    </div>
                                    <div class="form-group">
                                        <label>@lang('Amount to pay'):</label>
                                        <div class="input-group">
                                            <input id="amount" type="text" class="form-control form-control-lg"
                                                value="{{ number_format((float) $products->price, 2, '.', '') }}"
                                                name="amount" placeholder="0.00" readonly>
                                            <div class="input-group-append">
                                                <span
                                                    class="input-group-text currency-addon addon">{{ $general->cur_text }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <input value="{{$plan_id}}" type="hidden" name="plan_id">

                                    {{-- <button class="add-to-cart btn btn-default" type="submit">Buy Now</button> --}}
                                    <button class="btn btn-default" type="submit">Buy Order</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            form .rating {
                --dir: right;
                --fill: gold;
                --fillbg: rgba(100, 100, 100, 0.15);
                --heart: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 21.328l-1.453-1.313q-2.484-2.25-3.609-3.328t-2.508-2.672-1.898-2.883-0.516-2.648q0-2.297 1.57-3.891t3.914-1.594q2.719 0 4.5 2.109 1.781-2.109 4.5-2.109 2.344 0 3.914 1.594t1.57 3.891q0 1.828-1.219 3.797t-2.648 3.422-4.664 4.359z"/></svg>');
                --star: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 17.25l-6.188 3.75 1.641-7.031-5.438-4.734 7.172-0.609 2.813-6.609 2.813 6.609 7.172 0.609-5.438 4.734 1.641 7.031z"/></svg>');
                --stars: 5;
                --starsize: 3rem;
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

           form .rating::-moz-range-track {
                background: linear-gradient(to var(--dir), var(--fill) 0 var(--x), var(--fillbg) 0 var(--x));
                block-size: 100%;
                mask: repeat left center/var(--starsize) var(--symbol);
            }

            form .rating-heading{
                text-align: center;
            }
            form .rating::-webkit-slider-runnable-track {
                background: linear-gradient(to var(--dir), var(--fill) 0 var(--x), var(--fillbg) 0 var(--x));
                block-size: 100%;
                mask: repeat left center/var(--starsize) var(--symbol);
                -webkit-mask: repeat left center/var(--starsize) var(--symbol);
            }

            form .rating::-moz-range-thumb {
                height: var(--starsize);
                opacity: 0;
                width: var(--starsize);
            }

            form .rating::-webkit-slider-thumb {
                height: var(--starsize);
                opacity: 0;
                width: var(--starsize);
                -webkit-appearance: none;
            }

            form .rating,
            .rating-label {
                display: block;
                font-family: ui-sans-serif, system-ui, sans-serif;
            }

            form .rating{
                border: 0px !important;
                background: transparent !important;
            }
           form .rating-label {
                margin-block-end: 1rem;
            }

            /* NO JS */
            form .rating--nojs::-moz-range-track {
                background: var(--fillbg);
            }

           form .rating--nojs::-moz-range-progress {
                background: var(--fill);
                block-size: 100%;
                mask: repeat left center/var(--starsize) var(--star);
            }

           form .rating--nojs::-webkit-slider-runnable-track {
                background: var(--fillbg);
            }

           form .rating-form{
                padding: 16px;
                border: 1px solid lightgrey;
            }
           form .rating--nojs::-webkit-slider-thumb {
                background-color: var(--fill);
                box-shadow: calc(0rem - var(--w)) 0 0 var(--w) var(--fill);
                opacity: 1;
                width: 1px;
            }

            [dir="rtl"] .rating--nojs::-webkit-slider-thumb {
                box-shadow: var(--w) 0 0 var(--w) var(--fill);
            }
        </style>
        <section>
            <div class="container pb-5">
                <div>
                    <h2 class="rating-heading">Rating & Reviews</h2>
                    <div class="row">
                        <div class="col-md-8">
                            @foreach($reviews as $review)
                            <div class="container p-2 m-1" style="border-bottom:1px solid grey;">
                             <div class="rating">
                                <div class="stars">
                                    <span class="fa fa-star {{$review->rating >= 1 ? 'checked': '' }}"></span>
                                    <span class="fa fa-star {{$review->rating >= 2 ? 'checked': '' }}"></span>
                                    <span class="fa fa-star {{$review->rating >= 3 ? 'checked': '' }}"></span>
                                    <span class="fa fa-star {{$review->rating >= 4 ? 'checked': '' }}"></span>
                                    <span class="fa fa-star {{$review->rating >= 5 ? 'checked': '' }}"></span>
                                </div>
                            </div>
                           @php
                              $name = \App\Models\User::find($review->user_id); 
                           @endphp
                            <p style="font-weight: 900">{{$name?$name->firstname .' '.$name->lastname : '' }}</p>
                            <p>{{$review->review}}</p>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-md-4 rating-form">
                            @guest
                                <h4>Login to review</h4>
                            @else
                            <form method="POST" action="{{ route('store.rating') }}" >
                                @csrf
                                <input value="{{$plan_id}}" type="hidden" name="plan_id">
                                <div class="container">
                                    <label class="rating-label">Rating
                                        <input class="rating rating--nojs" max="5" step="1" type="range"
                                            value="3" style="padding:0" name="range">
                                    </label>
                                    <label>Feedback</label>
                                    <textarea class="form-control" name="review"></textarea>
                                    <button class="btn btn-default mt-2" type="submit">Submit Review</button>
                                </div>
                            </form>
                            @endguest


                        </div>
                    </div>
                </div>
        </section>
    </div>

    </div>
    <script>
        $(document).ready(function() {
            $('.get-details').on('click', 'li', function() {
                const data = $(this).attr('data-id');
                const product = JSON.parse(data);
                const url = "{{asset('/')}}";
                $('.product-title').html(product.name);
                $('.product-description').html(product.desc);
                $('.carousel-inner').html('');
                var corousel_html = '';
                product.get_product_images.forEach(function(item,index,arr){
                if(index == 0)
                {
                corousel_html += '<div class="carousel-item active"><img class="d-block w-100" src="'+url+'assets/images/product/'+item.image_url+'"alt="First slide"></div>';
                }else{
                corousel_html += '<div class="carousel-item"><img class="d-block w-100" src="'+url+'assets/images/product/'+item.image_url+'"alt="First slide"></div>';
                }
                });
                $('.carousel-inner').html(corousel_html);
            })
        })
    </script>
    <link rel="stylesheet" href="{{ asset('assets/admin/css/iziToast.min.css') }}">
    <script src="{{ asset('assets/admin/js/iziToast.min.js') }}"></script>
    
    @if(session()->has('notify'))
        @foreach(session('notify') as $msg)
            <script>
                'use strict';
                iziToast.{{ $msg[0] }}({message:"{{ $msg[1] }}", position: "topRight"});
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
        function notify(status,message) {
            iziToast[status]({
                message: message,
                position: "topRight"
            });
        }
    </script>
    
@endsection
