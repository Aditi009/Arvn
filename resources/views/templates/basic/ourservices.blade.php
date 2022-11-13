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
                                                @lang(@$serviceCaption->data_values->heading)
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
                        class="elementor-section elementor-inner-section elementor-element elementor-element-7a1b32d elementor-section-full_width animated-slow elementor-section-height-default elementor-section-height-default elementor-invisible"
                        data-id="7a1b32d" data-element_type="section"
                        data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-b2c9e3b animated-slow elementor-invisible"
                                data-id="b2c9e3b" data-element_type="column"
                                data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:40}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-77a55f7 elementor-widget elementor-widget-jkit_team"
                                        data-id="77a55f7" data-element_type="widget"
                                        data-widget_type="jkit_team.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-team style-overlay overlay-bottom jeg_module_17_20_635d0b1174ba3">
                                                <div class="profile-card "><img
                                                        src="{{asset('textilary/images/the-woman-chooses-the-fabric-on-the-sofa-textile-industry-background-tissue-catalog-e1627088629379.jpg')}}"
                                                        alt="Satin Fabric">
                                                    <div class="hover-area alignment-bottom">
                                                        <div class="profile-body">
                                                            <h3 class="profile-title">Satin Fabric</h3>
                                                            <p class="profile-designation"></p>
                                                            <p class="profile-content">Lorem ipsum dolor sit amet,
                                                                consec adipiscing elit, sed do eiusmod tempor incididunt
                                                                ut labore</p>
                                                            <ul class="social-list"></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4e3a8d1 animated-slow elementor-invisible"
                                data-id="4e3a8d1" data-element_type="column"
                                data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:120}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-a0c14b3 elementor-widget elementor-widget-jkit_team"
                                        data-id="a0c14b3" data-element_type="widget"
                                        data-widget_type="jkit_team.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-team style-overlay overlay-bottom jeg_module_17_21_635d0b1179ca0">
                                                <div class="profile-card "><img
                                                        src="{{asset('textilary/images/beautiful-fashion-designer-thoughtfully-working-with-new-textile-e1627088530666.jpg')}}"
                                                        alt="Fashion Project">
                                                    <div class="hover-area alignment-bottom">
                                                        <div class="profile-body">
                                                            <h2 class="profile-title">Fashion Project</h2>
                                                            <p class="profile-designation"></p>
                                                            <p class="profile-content">Lorem ipsum dolor sit amet,
                                                                consec adipiscing elit, sed do eiusmod tempor incididunt
                                                                ut labore</p>
                                                            <ul class="social-list"></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-a4b0d29 animated-slow elementor-invisible"
                                data-id="a4b0d29" data-element_type="column"
                                data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:160}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-3e658a7 elementor-widget elementor-widget-jkit_team"
                                        data-id="3e658a7" data-element_type="widget"
                                        data-widget_type="jkit_team.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-team style-overlay overlay-bottom jeg_module_17_22_635d0b11806bf">
                                                <div class="profile-card "><img
                                                        src="{{asset('textilary/images/pretty-young-seamstress-sitting-by-sewing-machine-and-processing-blue-textile-e1627088678669.jpg')}}"
                                                        alt="Blue Textile">
                                                    <div class="hover-area alignment-bottom">
                                                        <div class="profile-body">
                                                            <h2 class="profile-title">Blue Textile</h2>
                                                            <p class="profile-designation"></p>
                                                            <p class="profile-content">Lorem ipsum dolor sit amet,
                                                                consec adipiscing elit, sed do eiusmod tempor incididunt
                                                                ut labore</p>
                                                            <ul class="social-list"></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
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
                                                <div class="profile-card "><img
                                                        src="{{asset('textilary/images/textile-shop-e1627088637487.jpg')}}"
                                                        alt="Cotton Fabric">
                                                    <div class="hover-area alignment-bottom">
                                                        <div class="profile-body">
                                                            <h2 class="profile-title">Cotton Fabric</h2>
                                                            <p class="profile-designation"></p>
                                                            <p class="profile-content">Lorem ipsum dolor sit amet,
                                                                consec adipiscing elit, sed do eiusmod tempor incididunt
                                                                ut labore</p>
                                                            <ul class="social-list"></ul>
                                                        </div>
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
                                                <div class="profile-card "><img
                                                        src="{{asset('textilary/images/seamstress-takes-zipper-in-textile-workshop-e1627088665186.jpg')}}"
                                                        alt="Zipper Textile">
                                                    <div class="hover-area alignment-bottom">
                                                        <div class="profile-body">
                                                            <h2 class="profile-title">Zipper Textile</h2>
                                                            <p class="profile-designation"></p>
                                                            <p class="profile-content">Lorem ipsum dolor sit amet,
                                                                consec adipiscing elit, sed do eiusmod tempor incididunt
                                                                ut labore</p>
                                                            <ul class="social-list"></ul>
                                                        </div>
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
                                                <div class="profile-card "><img
                                                        src="{{asset('textilary/images/colorful-fabric-textile-on-showcase-in-store-e1627088652788.jpg')}}"
                                                        alt="Colorful Fabric">
                                                    <div class="hover-area alignment-bottom">
                                                        <div class="profile-body">
                                                            <h2 class="profile-title">Colorful Fabric</h2>
                                                            <p class="profile-designation"></p>
                                                            <p class="profile-content">Lorem ipsum dolor sit amet,
                                                                consec adipiscing elit, sed do eiusmod tempor incididunt
                                                                ut labore</p>
                                                            <ul class="social-list"></ul>
                                                        </div>
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
                                                <div class="profile-card "><img
                                                        src="{{asset('textilary/images/worker-at-the-textile-factory-that-arranges-the-spools-of-yarn-e1627088520913.jpg')}}"
                                                        alt="Linen Fabric Project">
                                                    <div class="hover-area alignment-bottom">
                                                        <div class="profile-body">
                                                            <h2 class="profile-title">Linen Fabric Project</h2>
                                                            <p class="profile-designation"></p>
                                                            <p class="profile-content">Lorem ipsum dolor sit amet,
                                                                consec adipiscing elit, sed do eiusmod tempor incididunt
                                                                ut labore</p>
                                                            <ul class="social-list"></ul>
                                                        </div>
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