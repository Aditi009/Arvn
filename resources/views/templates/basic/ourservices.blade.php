@extends($activeTemplate.'layouts.master')

@push('css')
<link rel="stylesheet" id="jkit-elements-main-css" href="{{asset('textilary/css/about.css')}}" type="text/css"
    media="all">

@endpush

@section('content')
@php
$serviceCaption = getContent('service.content',true);
$services = getContent('service.element');
@endphp



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
                                                @lang('Our Products')
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

    <div class="elementor-widget-wrap elementor-element-populated">
    
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-59af778 elementor-section-full_width animated-slow elementor-section-height-default elementor-section-height-default elementor-invisible"
                        data-id="59af778" data-element_type="section"
                        data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-c517134 animated-slow elementor-invisible"
                                data-id="c517134" data-element_type="column"
                                data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:40}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-9f88dc0 elementor-widget elementor-widget-jkit_team"
                                        data-id="9f88dc0" data-element_type="widget"
                                        data-widget_type="jkit_team.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-team style-overlay overlay-bottom jeg_module_17_23_635d0b1188908">
                                                <div class="profile-card proile-card-image"><img
                                                        src="{{url('assets/images/logoIcon/bermuda.jpg')}}"
                                                        alt="BERMUDA">
                                                 
                                                    <div class="hover-area alignment-bottom">
                                                        <a href="/products/bermuda">
                                                        <div class="profile-body">
                                                            <h2 class="profile-title">BERMUDA</h2>
                                                            <p class="profile-designation"></p>
                                                            <p class="profile-content  text-justify" style="padding:20px;font-size:14px;color:#cacfd9;">

                                                                Trendy casuals having a new, current look made shockingly better 
                                                                with breathable plan produced using mercerized brushed cotton texture , 
                                                                the product is fundamentally known as BERMUDA with ultrasoft and solid 
                                                                internal belt alongside contrast channeling on the two sets.
                                                                It is exceptionally agreeable and simple to wear.

                                                            </p>
                                                            <ul class="social-list"></ul>
                                                        </div>
                                                        </a>
                                                    </div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-003918b animated-slow elementor-invisible"
                                data-id="003918b" data-element_type="column"
                                data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:80}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-c696beb elementor-widget elementor-widget-jkit_team"
                                        data-id="c696beb" data-element_type="widget"
                                        data-widget_type="jkit_team.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-team style-overlay overlay-bottom jeg_module_17_24_635d0b1190426">
                                                <div class="profile-card proile-card-image"><img
                                                    src="{{url('assets/images/logoIcon/longe.jpg')}}"
                                                    alt="LONGE & ATHLEISURE">
                                                    <div class="hover-area alignment-bottom">
                                                        <a href="/products/longe">
                                                        <div class="profile-body">
                                                            <h2 class="profile-title">LONGE & ATHLEISURE
                                                            </h2>
                                                            <p class="profile-designation"></p>
                                                            <p class="profile-content  text-justify" style="padding:20px;font-size:14px;color:#cacfd9;">
                                                                Lounge & Athleisure are in huge demand and proper sportswear helps the player
                                                                to perform all the tasks in the most efficient way, without having to strain
                                                                themselves. Sportswear for Men come with so many accessories like training shoes,
                                                                headbands, wristbands, helmets which make it possible for them to play effectively
                                                                without having the tension about harming any of the body parts.
                                                            </p>
                                                            <ul class="social-list"></ul>
                                                        </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-162fc5a animated-slow elementor-invisible"
                                data-id="162fc5a" data-element_type="column"
                                data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:120}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-eafe4c7 elementor-widget elementor-widget-jkit_team"
                                        data-id="eafe4c7" data-element_type="widget"
                                        data-widget_type="jkit_team.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-team style-overlay overlay-bottom jeg_module_17_25_635d0b119858d">
                                                <div class="profile-card proile-card-image"><img
                                                        src="{{url('assets/images/logoIcon/shorts.jpg')}}"
                                                        alt="SHORTS">
                                                    <div class="hover-area alignment-bottom">
                                                        <a href="/products/shorts">
                                                        <div class="profile-body">
                                                            <h2 class="profile-title">SHORTS</h2>
                                                            <p class="profile-designation"></p>
                                                            <p class="profile-content  text-justify" style="padding:20px;font-size:14px;color:#cacfd9;">
                                                                Men's shorts have a clear history of being a fighter's clothing
                                                                to a school children's uniform. Today, they are depicted as a man's
                                                                quintessential design decision by numerous shorts internet shopping locales.
                                                            </p>
                                                            <ul class="social-list"></ul>
                                                        </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-fe62800 animated-slow elementor-invisible"
                                data-id="fe62800" data-element_type="column"
                                data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:160}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-488a3eb elementor-widget elementor-widget-jkit_team"
                                        data-id="488a3eb" data-element_type="widget"
                                        data-widget_type="jkit_team.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-team style-overlay overlay-bottom jeg_module_17_26_635d0b11a04c3">
                                                <div class="profile-card proile-card-image"><img
                                                        src="{{url('assets/images/logoIcon/joggers.jpg')}}"
                                                        alt="JOGGERS">
                                                    <div class="hover-area alignment-bottom ">
                                                        <a href="/products/joggers">
                                                        <div class="profile-body proile-card-image">
                                                            <h2 class="profile-title">JOGGERS</h2>
                                                            <p class="profile-designation"></p>
                                                            <p class="profile-content  text-justify" style="padding:20px;font-size:14px;color:#cacfd9;">
                                                                Aarbin India joggers are designed to provide best comfort.
                                                                The Knitted fabric is soft, stretchable, and comfortable.
                                                                You can laze at home in these joggers or break a sweat at the gym;
                                                                these versatile pants are ideal for modern men who prefer clothes
                                                                that blend style and comfort.
                                                            </p>
                                                            <ul class="social-list"></ul>
                                                        </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
    </div>

    @php
    $serviceCaption = getContent('service.content',true);
    $services = getContent('service.element');
    @endphp
    @if($services)

    <section class="how-to-section padding-bottom padding-top section-bg">
        <div class="container">
            <div class="section-header">
                <p>@lang(@$serviceCaption->data_values->sub_heading)</p>
            </div>
            <div class="row justify-content-center mb-30-none how-wrapper">
                @foreach($services as $k => $data)
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="how-item">
                        <div class="how-thumb">
                            <?php echo @$data->data_values->icon ?>
                        </div>
                        <div class="how-content">
                            <h5 class="title">{{__(@$data->data_values->title)}}</h5>
                            <p>{{__(@$data->data_values->description)}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif


</div>

@endsection