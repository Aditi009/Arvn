@extends($activeTemplate.'layouts.master')

@section('content')
@php
$sliders = getContent('slider.element');
@endphp

<div data-elementor-type="wp-page" data-elementor-id="17" class="elementor elementor-17">
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-f91d9de elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="f91d9de" data-element_type="section" data-settings='{
    "background_background": "slideshow",
    "background_slideshow_gallery": [
        {
            "id": 41,
            "url": "{{getImage("assets/images/frontend/slider/" . @$sliders[0]->data_values->background_image, "1920x850")}}"
        },
        {
            "id": 39,
            "url": "{{getImage("assets/images/frontend/slider/" . @$sliders[1]->data_values->background_image, "1920x850")}}"
        },
        {
            "id": 36,
            "url": "{{getImage("assets/images/frontend/slider/" . @$sliders[2]->data_values->background_image, "1920x850")}}"
        },
        {
            "id": 27,
            "url": "{{getImage("assets/images/frontend/slider/" . @$sliders[3]->data_values->background_image, "1920x850")}}"
        },
        {
            "id": 37,
            "url": "{{getImage("assets/images/frontend/slider/" . @$sliders[4]->data_values->background_image, "1920x850")}}"
        },
        {
            "id": 33,
            "url": "{{getImage("assets/images/frontend/slider/" . @$sliders[5]->data_values->background_image, "1920x850")}}"
        }
    ],
    "background_slideshow_ken_burns": "yes",
    "background_slideshow_loop": "yes",
    "background_slideshow_slide_duration": 5000,
    "background_slideshow_slide_transition": "fade",
    "background_slideshow_transition_duration": 500,
    "background_slideshow_ken_burns_zoom_direction": "in"
}'>
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c46eab4"
                data-id="c46eab4" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-45a2db2 animated-slow elementor-invisible elementor-widget elementor-widget-jkit_heading"
                        data-id="45a2db2" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:80}"
                        data-widget_type="jkit_heading.default">
                        <div class="elementor-widget-container">
                            <div
                                class="jeg-elementor-kit jkit-heading  align-left align-tablet-left align-mobile-left jeg_module_17_1_635d0b10e0175">
                                <div class="heading-section-title ">
                                    <h5 class="heading-title">Since 2005</h5>
                                </div>
                                <div class="heading-section-separator">
                                    <div class="separator-wrapper style-solid"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-4460e30 animated-slow elementor-invisible elementor-widget elementor-widget-jkit_heading"
                        data-id="4460e30" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                        data-widget_type="jkit_heading.default">
                        <div class="elementor-widget-container">
                            <div
                                class="jeg-elementor-kit jkit-heading  align-left align-tablet-left align-mobile-left jeg_module_17_2_635d0b10e5104">
                                <div class="heading-section-title ">
                                    <h1 class="heading-title">Textilery Creating The Best <span
                                            class="style-color"><span>Textile </span></span> Solutions</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-40e4c9e animated-slow elementor-invisible elementor-widget elementor-widget-text-editor"
                        data-id="40e4c9e" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}"
                        data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-e74b04e animated-slow elementor-widget__width-auto elementor-invisible elementor-widget elementor-widget-jkit_video_button"
                        data-id="e74b04e" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:10}"
                        data-widget_type="jkit_video_button.default">
                        <div class="elementor-widget-container">
                            <div class="jeg-elementor-kit jkit-video-button jeg_module_17_3_635d0b10ed1d7"
                                data-autoplay="0" data-loop="0" data-controls="0" data-type="youtube" data-start="0"
                                data-end="0"><a href="https://www.youtube.com/watch?v=MLpWrANjFbI"
                                    class="jkit-video-popup-btn glow-enable"><span class="icon-position-before"><i
                                            aria-hidden="true" class="jki jki-play-button-light"></i></span></a></div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-20a83f2 elementor-align-right elementor-widget__width-auto animated-slow elementor-invisible elementor-widget elementor-widget-button"
                        data-id="20a83f2" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:10}"
                        data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a href="#" class="elementor-button-link elementor-button elementor-size-sm"
                                    role="button">
                                    <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-text">Watch Video</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c290160"
                data-id="c290160" data-element_type="column">
                <div class="elementor-widget-wrap">
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-d89450e elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="d89450e" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-15c3ef2"
                data-id="15c3ef2" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-9f41a6a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="9f41a6a" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3912c76"
                                data-id="3912c76" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-193fe77 elementor-widget-tablet__width-auto jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                        data-id="193fe77" data-element_type="widget"
                                        data-widget_type="jkit_icon_box.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_17_4_635d0b1103af2">
                                                <div class="jkit-icon-box-wrapper hover-from-left">
                                                    <div class="icon-box icon-box-header elementor-animation-">
                                                        <div class="icon style-color"><i aria-hidden="true"
                                                                class="jki jki-map-marker1-light"></i></div>
                                                    </div>
                                                    <div class="icon-box icon-box-body">
                                                        <h3 class="title">Location</h3>
                                                        <p class="icon-box-description"> Jl. Sunset Road No.815, Kuta
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7cb550b"
                                data-id="7cb550b" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-c507dd4 elementor-widget-tablet__width-auto jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                        data-id="c507dd4" data-element_type="widget"
                                        data-widget_type="jkit_icon_box.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_17_5_635d0b110a19e">
                                                <div class="jkit-icon-box-wrapper hover-from-left">
                                                    <div class="icon-box icon-box-header elementor-animation-">
                                                        <div class="icon style-color"><i aria-hidden="true"
                                                                class="jki jki-email-light"></i></div>
                                                    </div>
                                                    <div class="icon-box icon-box-body">
                                                        <h3 class="title">Email</h3>
                                                        <p class="icon-box-description"><a
                                                                href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                                data-cfemail="4a393f3a3a25383e0a2e25272b232464292527">[email&#160;protected]</a>
                                                        </p>
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
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9382965"
                data-id="9382965" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-e37db16 animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
                        data-id="e37db16" data-element_type="section"
                        data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ec43213"
                                data-id="ec43213" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-912ca13 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                        data-id="912ca13" data-element_type="widget"
                                        data-widget_type="jkit_icon_box.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-icon-box icon-position-top elementor-animation- jeg_module_17_6_635d0b1111e3f">
                                                <div class="jkit-icon-box-wrapper hover-from-left">
                                                    <div class="icon-box icon-box-body">
                                                        <h2 class="title">Quality Product</h2>
                                                        <p class="icon-box-description">Lorem ipsum dolor sitatu amet
                                                            consec teturarisa adipiscing elit samed.</p>
                                                        <div class="icon-box-button ">
                                                            <div class="btn-wrapper icon-position-after">
                                                                <a href="#" class="icon-box-link">Read More<i
                                                                        aria-hidden="true"
                                                                        class="fas fa-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="hover-watermark">
                                                        <i aria-hidden="true" class="jki jki-tshirt-light"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b960078"
                                data-id="b960078" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-6388929 elementor-widget elementor-widget-heading"
                                        data-id="6388929" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default">Project Overview
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-3183afd elementor-widget elementor-widget-jkit_fun_fact"
                                        data-id="3183afd" data-element_type="widget"
                                        data-widget_type="jkit_fun_fact.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-fun-fact align-center hover-from-left elementor-animation- jeg_module_17_7_635d0b111b307">
                                                <div class="fun-fact-inner">
                                                    <div class="content">
                                                        <div class="number-wrapper">
                                                            <span class="number" data-value="2476"
                                                                data-animation-duration="3500">0</span>
                                                        </div>
                                                        <h3 class="title">Export Projects</h3>
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
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-ae29a0e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="ae29a0e" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-019ff08"
                data-id="019ff08" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-05d7ff5 elementor-absolute elementor-widget-tablet__width-auto elementor-widget__width-initial elementor-widget elementor-widget-image"
                        data-id="05d7ff5" data-element_type="widget"
                        data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img src="{{asset('textilary/images/woman-working-in-textile-industry-2-e1627088546561-pakcslwevcocjm8zm25xr0yic5yzwqwwzmb72nu3nk.jpg')}}"
                                title="Woman working in textile industry" alt="Woman working in textile industry">
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-aa00d55 elementor-widget__width-initial elementor-widget elementor-widget-image"
                        data-id="aa00d55" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img src="{{asset('textilary/images/worker-working-in-fabric-industry-e1627088644946-pakcv60lh46g5ej6o5zdjdpojxcyv32m0a8s3s1ips.jpg')}}"
                                title="Worker working in fabric industry" alt="Worker working in fabric industry">
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-16c3757"
                data-id="16c3757" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-9b1a524 animated-slow elementor-invisible elementor-widget elementor-widget-jkit_heading"
                        data-id="9b1a524" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}"
                        data-widget_type="jkit_heading.default">
                        <div class="elementor-widget-container">
                            <div
                                class="jeg-elementor-kit jkit-heading  align-left align-tablet-left align-mobile-left jeg_module_17_8_635d0b1125c43">
                                <div class="heading-section-title ">
                                    <h5 class="heading-title">About Textilery</h5>
                                </div>
                                <div class="heading-section-separator">
                                    <div class="separator-wrapper style-solid"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-f070f2f elementor-widget elementor-widget-heading"
                        data-id="f070f2f" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">We Provide The Best Textile
                                Industry Since 2005</h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-428e4d2 elementor-widget elementor-widget-text-editor"
                        data-id="428e4d2" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud </div>
                    </div>
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-1da59c0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="1da59c0" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0df82bf"
                                data-id="0df82bf" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-7c3da0d elementor-widget elementor-widget-jkit_fun_fact"
                                        data-id="7c3da0d" data-element_type="widget"
                                        data-widget_type="jkit_fun_fact.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-fun-fact align-center hover-from-left elementor-animation- jeg_module_17_9_635d0b112ca5c">
                                                <div class="fun-fact-inner">
                                                    <div class="icon elementor-animation-"><i aria-hidden="true"
                                                            class="jki jki-medal"></i></div>
                                                    <div class="content">
                                                        <div class="number-wrapper">
                                                            <span class="number" data-value="16"
                                                                data-animation-duration="3500">0</span>
                                                            <sup class="super">+</sup>
                                                        </div>
                                                        <h2 class="title">Years Of Experiences</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b02c9b8"
                                data-id="b02c9b8" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-912c66b elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                        data-id="912c66b" data-element_type="widget"
                                        data-widget_type="icon-list.default">
                                        <div class="elementor-widget-container">
                                            <ul class="elementor-icon-list-items">
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <i aria-hidden="true" class="fas fa-check-circle"></i> </span>
                                                    <span class="elementor-icon-list-text">Best Quality Standards</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <i aria-hidden="true" class="fas fa-check-circle"></i> </span>
                                                    <span class="elementor-icon-list-text">100% Satisfaction
                                                        Guarantee</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <i aria-hidden="true" class="fas fa-check-circle"></i> </span>
                                                    <span class="elementor-icon-list-text">Quality Control System</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <i aria-hidden="true" class="fas fa-check-circle"></i> </span>
                                                    <span class="elementor-icon-list-text">Commitment to
                                                        Customers</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <i aria-hidden="true" class="fas fa-check-circle"></i> </span>
                                                    <span class="elementor-icon-list-text">Highly Professional
                                                        Team</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <i aria-hidden="true" class="fas fa-check-circle"></i> </span>
                                                    <span class="elementor-icon-list-text">Global fabrics
                                                        Distributor</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-92f3e2b elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="92f3e2b" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7fef983"
                                data-id="7fef983" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-83e3f8d elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image"
                                        data-id="83e3f8d" data-element_type="widget"
                                        data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img width="320" height="320"
                                                src="{{asset('textilary/images/team-MYBTWFF.jpg')}}"
                                                class="attachment-full size-full" alt loading="lazy"
                                                srcset="images/team-MYBTWFF.jpg 320w, images/team-MYBTWFF-300x300.jpg 300w, images/team-MYBTWFF-150x150.jpg 150w"
                                                sizes="(max-width: 320px) 100vw, 320px">
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-ff7e640 elementor-widget__width-auto elementor-widget elementor-widget-jkit_heading"
                                        data-id="ff7e640" data-element_type="widget"
                                        data-widget_type="jkit_heading.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-heading  align-left align-tablet-left align-mobile-left jeg_module_17_10_635d0b1134665">
                                                <div class="heading-section-title ">
                                                    <h4 class="heading-title">Miya Draper</h4>
                                                </div>
                                                <div class="heading-section-description">Founder Textilery</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-28684aa"
                                data-id="28684aa" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-a3b4e1b elementor-align-left elementor-widget elementor-widget-button"
                                        data-id="a3b4e1b" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a href="#"
                                                    class="elementor-button-link elementor-button elementor-size-sm"
                                                    role="button">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">More About Us</span>
                                                    </span>
                                                </a>
                                            </div>
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
    <section
    class="elementor-section elementor-top-section elementor-element elementor-element-1dfe8f9 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
    data-id="1dfe8f9" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b912c85"
            data-id="b912c85" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-3dbb597 animated-slow elementor-invisible elementor-widget elementor-widget-jkit_heading"
                    data-id="3dbb597" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="jkit_heading.default">
                    <div class="elementor-widget-container">
                        <div
                            class="jeg-elementor-kit jkit-heading  align-center align-tablet-left align-mobile-left jeg_module_17_19_635d0b116a62d">
                            <div class="heading-section-title ">
                                <h5 class="heading-title">Our Products</h5>
                            </div>
                            <div class="heading-section-separator">
                                <div class="separator-wrapper style-solid"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-9a327f8 elementor-widget elementor-widget-heading"
                    data-id="9a327f8" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Our Packages
                        </h2>
                    </div>
                </div>
                <section
                    class="elementor-section elementor-inner-section elementor-element elementor-element-d695775 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="d695775" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-05c5009"
                            data-id="05c5009" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-6304f76 elementor-widget elementor-widget-text-editor"
                                    data-id="6304f76" data-element_type="widget"
                                    data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        FOUNDED IN 2012 ARVIND ENTERPRISES. AARBIN INDIA PIONEERED MEN GARMENTS,
                                        EVOLVING AND INNOVATING NOT ONLY THE PRODUCT, BUT ALSO THE WAY IT HAS BEEN
                                        MARKETED OVER THE YEARS. THE COMPANY IS COMMITTED TO QUALITY, COMFORT,
                                        FASHION, INNOVATION AND VALUE HALLMARK. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                @php

                $planTitle = getContent('mlmPlan.content', true);
                $plans = \App\Models\Plan::where('status', 1)->get();

                @endphp
                <section
                    class="elementor-section elementor-inner-section elementor-element elementor-element-7a1b32d elementor-section-full_width animated-slow elementor-section-height-default elementor-section-height-default elementor-invisible"
                    data-id="7a1b32d" data-element_type="section"
                    data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                    <div class="elementor-container elementor-column-gap-no row justify-content-center">
                        @foreach($plans as $plan)
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
                                                        <h2 class="profile-title">{{__(@$plan->name)}}</h2>
                                                        <p class="profile-designation"></p>
                                                        <div class="price-range text-white mt-5">
                                                            {{getAmount($plan->price)}} {{$general->cur_text}}
                                                        </div>
                                                        <ul class="plan-card__features mt-4">
                                                            <li> @lang('Incentive Points') (@lang('BV')) : <span
                                                                    class="amount">{{$plan->bv}}</span>
                                                                <span class="icon float-right" data-toggle="modal"
                                                                    data-target="#exampleModal"><i
                                                                        class="fas fa-question-circle"></i></span>
                                                            </li>
                                                            <li>
                                                                @lang('Referral Commission') : <span
                                                                    class="amount">{{$general->cur_sym}}
                                                                    {{getAmount($plan->ref_com)}}</span>
                                                                <span class="icon float-right" data-toggle="modal"
                                                                    data-target="#exampleModal2"><i
                                                                        class="fas fa-question-circle"></i></span>
                                                            </li>

                                                            <li>
                                                                @lang('Commission To Tree') : <span
                                                                    class="amount">{{$general->cur_sym}}
                                                                    {{getAmount($plan->tree_com)}}</span>
                                                                <span class="icon float-right" data-toggle="modal"
                                                                    data-target="#exampleModal3"><i
                                                                        class="fas fa-question-circle"></i></span>
                                                            </li>
                                                        </ul>
                                                        
                                                    </div>
                                                    <a href="{{ route('buy.plan', $plan->id) }}" class="btn" style="background-color:#7FC6A4;color:white;width:100%;">BUY NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>

            </div>
        </div>
    </div>
</section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-787cf53 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="787cf53" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7bfc591"
                data-id="7bfc591" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-c010a18 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="c010a18" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6b1f17a"
                                data-id="6b1f17a" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-ed93e6d animated-slow elementor-invisible elementor-widget elementor-widget-jkit_heading"
                                        data-id="ed93e6d" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                                        data-widget_type="jkit_heading.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-heading  align-left align-tablet-left align-mobile-left jeg_module_17_11_635d0b1141042">
                                                <div class="heading-section-title ">
                                                    <h5 class="heading-title">Our Services</h5>
                                                </div>
                                                <div class="heading-section-separator">
                                                    <div class="separator-wrapper style-solid"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-0d56c0a elementor-widget elementor-widget-heading"
                                        data-id="0d56c0a" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Delivering The
                                                Highest Quality Fabrics</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1f8e964"
                                data-id="1f8e964" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-8d4b1f3 elementor-widget elementor-widget-text-editor"
                                        data-id="8d4b1f3" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris </div>
                                    </div>
                                    <div class="elementor-element elementor-element-50199ac elementor-align-left elementor-widget elementor-widget-button"
                                        data-id="50199ac" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a href="#"
                                                    class="elementor-button-link elementor-button elementor-size-sm"
                                                    role="button">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">All Services</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-ff7981b elementor-section-content-bottom elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="ff7981b" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-f1001df animated-slow elementor-invisible"
                                data-id="f1001df" data-element_type="column"
                                data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;,&quot;animation_delay&quot;:40}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-4d2b1c8 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                        data-id="4d2b1c8" data-element_type="widget"
                                        data-widget_type="jkit_icon_box.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-icon-box icon-position-top elementor-animation- jeg_module_17_12_635d0b114bb11">
                                                <div class="jkit-icon-box-wrapper hover-from-bottom">
                                                    <div class="icon-box icon-box-header elementor-animation-">
                                                        <div class="icon style-color"><img
                                                                src="{{asset('textilary/images/sew-T5LCRK.png')}}"
                                                                alt="Fabric Dyeing"></div>
                                                    </div>
                                                    <div class="icon-box icon-box-body">
                                                        <h3 class="title">Fabric Dyeing</h3>
                                                        <p class="icon-box-description">Lorem ipsum dolor sit amet,
                                                            consectet adipiscing elit, sed do eiusmod tempor incididunt
                                                            ut labore et dolore </p>
                                                        <div class="icon-box-button ">
                                                            <div class="btn-wrapper icon-position-after">
                                                                <a href class="icon-box-link">Read More<i
                                                                        aria-hidden="true"
                                                                        class="fas fa-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3aa5e30 animated-slow elementor-invisible"
                                data-id="3aa5e30" data-element_type="column"
                                data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;,&quot;animation_delay&quot;:80}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-42a664a jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                        data-id="42a664a" data-element_type="widget"
                                        data-widget_type="jkit_icon_box.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-icon-box icon-position-top elementor-animation- jeg_module_17_13_635d0b1151a7a">
                                                <div class="jkit-icon-box-wrapper hover-from-bottom">
                                                    <div class="icon-box icon-box-header elementor-animation-">
                                                        <div class="icon style-color"><img
                                                                src="{{asset('textilary/images/satin.png')}}"
                                                                alt="Satin Weaving"></div>
                                                    </div>
                                                    <div class="icon-box icon-box-body">
                                                        <h3 class="title">Satin Weaving</h3>
                                                        <p class="icon-box-description">Lorem ipsum dolor sit amet,
                                                            consectet adipiscing elit, sed do eiusmod tempor incididunt
                                                            ut labore et dolore </p>
                                                        <div class="icon-box-button ">
                                                            <div class="btn-wrapper icon-position-after">
                                                                <a href class="icon-box-link">Read More<i
                                                                        aria-hidden="true"
                                                                        class="fas fa-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-13faf5b animated-slow elementor-invisible"
                                data-id="13faf5b" data-element_type="column"
                                data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;,&quot;animation_delay&quot;:120}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-5c92588 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                        data-id="5c92588" data-element_type="widget"
                                        data-widget_type="jkit_icon_box.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-icon-box icon-position-top elementor-animation- jeg_module_17_14_635d0b1157d2f">
                                                <div class="jkit-icon-box-wrapper hover-from-bottom">
                                                    <div class="icon-box icon-box-header elementor-animation-">
                                                        <div class="icon style-color"><img
                                                                src="{{asset('textilary/images/digital.png')}}"
                                                                alt="Digital Fabric Printing"></div>
                                                    </div>
                                                    <div class="icon-box icon-box-body">
                                                        <h3 class="title">Digital Fabric Printing</h3>
                                                        <p class="icon-box-description">Lorem ipsum dolor sit amet,
                                                            consectet adipiscing elit, sed do eiusmod tempor incididunt
                                                            ut labore et dolore </p>
                                                        <div class="icon-box-button ">
                                                            <div class="btn-wrapper icon-position-after">
                                                                <a href class="icon-box-link">Read More<i
                                                                        aria-hidden="true"
                                                                        class="fas fa-arrow-right"></i></a>
                                                            </div>
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
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-4ddc9b7 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default"
        data-id="4ddc9b7" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f04208d"
                data-id="f04208d" data-element_type="column"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-element elementor-element-9ec3e92 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                        data-id="9ec3e92" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">25 Years of Experience in Textile
                                Industry</h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-a780f96 elementor-widget elementor-widget-text-editor"
                        data-id="a780f96" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. </div>
                    </div>
                    <div class="elementor-element elementor-element-18d8306 elementor-widget elementor-widget-jkit_progress_bar"
                        data-id="18d8306" data-element_type="widget" data-widget_type="jkit_progress_bar.default">
                        <div class="elementor-widget-container">
                            <div class="jeg-elementor-kit jkit-progress-bar jeg_module_17_15_635d0b115f4db">
                                <div class="progress-group ">
                                    <div class="progress-skill-bar">
                                        <div class="skill-bar-content"><span class="skill-title">Textile Services</span>
                                        </div>
                                        <div class="skill-bar">
                                            <div class="skill-track">

                                                <div class="number-percentage-wrapper">
                                                    <span class="number-percentage" data-value="89"
                                                        data-animation-duration="3500">89%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-d7bd3cd elementor-widget elementor-widget-jkit_progress_bar"
                        data-id="d7bd3cd" data-element_type="widget" data-widget_type="jkit_progress_bar.default">
                        <div class="elementor-widget-container">
                            <div class="jeg-elementor-kit jkit-progress-bar jeg_module_17_16_635d0b1160b60">
                                <div class="progress-group ">
                                    <div class="progress-skill-bar">
                                        <div class="skill-bar-content"><span class="skill-title">Textile
                                                Materials</span></div>
                                        <div class="skill-bar">
                                            <div class="skill-track">

                                                <div class="number-percentage-wrapper">
                                                    <span class="number-percentage" data-value="86"
                                                        data-animation-duration="3500">86%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-35ff85f elementor-widget elementor-widget-jkit_progress_bar"
                        data-id="35ff85f" data-element_type="widget" data-widget_type="jkit_progress_bar.default">
                        <div class="elementor-widget-container">
                            <div class="jeg-elementor-kit jkit-progress-bar jeg_module_17_17_635d0b116227b">
                                <div class="progress-group ">
                                    <div class="progress-skill-bar">
                                        <div class="skill-bar-content"><span class="skill-title">Specialist
                                                Fabrics</span></div>
                                        <div class="skill-bar">
                                            <div class="skill-track">

                                                <div class="number-percentage-wrapper">
                                                    <span class="number-percentage" data-value="82"
                                                        data-animation-duration="3500">82%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-fbf43e3 elementor-widget elementor-widget-jkit_progress_bar"
                        data-id="fbf43e3" data-element_type="widget" data-widget_type="jkit_progress_bar.default">
                        <div class="elementor-widget-container">
                            <div class="jeg-elementor-kit jkit-progress-bar jeg_module_17_18_635d0b1163986">
                                <div class="progress-group ">
                                    <div class="progress-skill-bar">
                                        <div class="skill-bar-content"><span class="skill-title">Experience</span></div>
                                        <div class="skill-bar">
                                            <div class="skill-track">

                                                <div class="number-percentage-wrapper">
                                                    <span class="number-percentage" data-value="86"
                                                        data-animation-duration="3500">86%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-97bf745 elementor-hidden-phone"
                data-id="97bf745" data-element_type="column"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-element elementor-element-4632253 elementor-widget elementor-widget-spacer"
                        data-id="4632253" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-bf93e4d elementor-section-content-bottom elementor-hidden-phone animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
                        data-id="bf93e4d" data-element_type="section"
                        data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a74ae02"
                                data-id="a74ae02" data-element_type="column">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7c8bfd0"
                                data-id="7c8bfd0" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-22c78bc elementor-widget elementor-widget-heading"
                                        data-id="22c78bc" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default">We Production
                                                Best Textiles</h3>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-349e62d elementor-widget elementor-widget-text-editor"
                                        data-id="349e62d" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim </div>
                                    </div>
                                    <div class="elementor-element elementor-element-834a6b2 elementor-widget elementor-widget-button"
                                        data-id="834a6b2" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a href="#"
                                                    class="elementor-button-link elementor-button elementor-size-sm"
                                                    role="button">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-icon elementor-align-icon-right">
                                                            <i aria-hidden="true" class="fas fa-arrow-right"></i>
                                                        </span>
                                                        <span class="elementor-button-text">View Projects</span>
                                                    </span>
                                                </a>
                                            </div>
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
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-1dfe8f9 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
        data-id="1dfe8f9" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b912c85"
                data-id="b912c85" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-3dbb597 animated-slow elementor-invisible elementor-widget elementor-widget-jkit_heading"
                        data-id="3dbb597" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                        data-widget_type="jkit_heading.default">
                        <div class="elementor-widget-container">
                            <div
                                class="jeg-elementor-kit jkit-heading  align-center align-tablet-left align-mobile-left jeg_module_17_19_635d0b116a62d">
                                <div class="heading-section-title ">
                                    <h5 class="heading-title">Our Products</h5>
                                </div>
                                <div class="heading-section-separator">
                                    <div class="separator-wrapper style-solid"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-9a327f8 elementor-widget elementor-widget-heading"
                        data-id="9a327f8" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Our Packages
                            </h2>
                        </div>
                    </div>
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-d695775 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="d695775" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-05c5009"
                                data-id="05c5009" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-6304f76 elementor-widget elementor-widget-text-editor"
                                        data-id="6304f76" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            FOUNDED IN 2012 ARVIND ENTERPRISES. AARBIN INDIA PIONEERED MEN GARMENTS,
                                            EVOLVING AND INNOVATING NOT ONLY THE PRODUCT, BUT ALSO THE WAY IT HAS BEEN
                                            MARKETED OVER THE YEARS. THE COMPANY IS COMMITTED TO QUALITY, COMFORT,
                                            FASHION, INNOVATION AND VALUE HALLMARK. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    @php

                    $planTitle = getContent('mlmPlan.content', true);
                    $plans = \App\Models\Plan::where('status', 1)->get();

                    @endphp
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-7a1b32d elementor-section-full_width animated-slow elementor-section-height-default elementor-section-height-default elementor-invisible"
                        data-id="7a1b32d" data-element_type="section"
                        data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                        <div class="elementor-container elementor-column-gap-no row justify-content-center">
                            @foreach($plans as $plan)
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
                                                            <h2 class="profile-title">{{__(@$plan->name)}}</h2>
                                                            <p class="profile-designation"></p>
                                                            <div class="price-range text-white mt-5">
                                                                {{getAmount($plan->price)}} {{$general->cur_text}}
                                                            </div>
                                                            <ul class="plan-card__features mt-4">
                                                                <li> @lang('Incentive Points') (@lang('BV')) : <span
                                                                        class="amount">{{$plan->bv}}</span>
                                                                    <span class="icon float-right" data-toggle="modal"
                                                                        data-target="#exampleModal"><i
                                                                            class="fas fa-question-circle"></i></span>
                                                                </li>
                                                                <li>
                                                                    @lang('Referral Commission') : <span
                                                                        class="amount">{{$general->cur_sym}}
                                                                        {{getAmount($plan->ref_com)}}</span>
                                                                    <span class="icon float-right" data-toggle="modal"
                                                                        data-target="#exampleModal2"><i
                                                                            class="fas fa-question-circle"></i></span>
                                                                </li>

                                                                <li>
                                                                    @lang('Commission To Tree') : <span
                                                                        class="amount">{{$general->cur_sym}}
                                                                        {{getAmount($plan->tree_com)}}</span>
                                                                    <span class="icon float-right" data-toggle="modal"
                                                                        data-target="#exampleModal3"><i
                                                                            class="fas fa-question-circle"></i></span>
                                                                </li>
                                                            </ul>
                                                            
                                                        </div>
                                                        <a href="{{route('buy.plan' , ['id'=>$plan->id])}}" class="btn" style="background-color:#7FC6A4;color:white;width:100%;">BUY NOW</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-04755c0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="04755c0" data-element_type="section">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-15a7a6b"
                data-id="15a7a6b" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-ade02d7 elementor-view-framed animated-slow elementor-shape-circle elementor-invisible elementor-widget elementor-widget-icon"
                        data-id="ade02d7" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="icon.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-icon-wrapper">
                                <div class="elementor-icon">
                                    <i aria-hidden="true" class="jki jki-quote1-light"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-cd177ae elementor-invisible elementor-widget elementor-widget-heading"
                        data-id="cd177ae" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h5 class="elementor-heading-title elementor-size-default">1,450 Satisfied Clients Over The
                                Globe</h5>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-60318c0 animated-slow elementor-invisible elementor-widget elementor-widget-jkit_testimonials"
                        data-id="60318c0" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:40}"
                        data-widget_type="jkit_testimonials.default">
                        <div class="elementor-widget-container">
                            <div class="jeg-elementor-kit jkit-testimonials arrow-middle-edge style-4  jeg_module_17_27_635d0b11b2f08"
                                data-id="jeg_module_17_27_635d0b11b2f08"
                                data-settings="{&quot;autoplay&quot;:true,&quot;autoplay_speed&quot;:3500,&quot;autoplay_hover_pause&quot;:false,&quot;show_navigation&quot;:false,&quot;navigation_left&quot;:&quot;&lt;i aria-hidden=\&quot;true\&quot; class=\&quot;fas fa-angle-left\&quot;&gt;&lt;\/i&gt;&quot;,&quot;navigation_right&quot;:&quot;&lt;i aria-hidden=\&quot;true\&quot; class=\&quot;fas fa-angle-right\&quot;&gt;&lt;\/i&gt;&quot;,&quot;show_dots&quot;:false,&quot;arrow_position&quot;:&quot;bottom&quot;,&quot;responsive&quot;:{&quot;desktop&quot;:{&quot;items&quot;:1,&quot;margin&quot;:10,&quot;breakpoint&quot;:1025},&quot;tablet&quot;:{&quot;items&quot;:1,&quot;margin&quot;:10,&quot;breakpoint&quot;:768},&quot;mobile&quot;:{&quot;items&quot;:1,&quot;margin&quot;:10,&quot;breakpoint&quot;:0}}}">
                                <div class="testimonials-list">
                                    <div class="testimonials-track">
                                        <div class="testimonial-item  elementor-repeater-item-6e9b2e1">
                                            <div class="testimonial-box hover-from-left">
                                                <div class="icon-content"></div>
                                                <div class="comment-content">
                                                    <p>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua minim veniam quis nostrud exercitation ullamco laboris
                                                        nisi ut aliquip&quot;</p>
                                                </div>
                                                <div class="comment-bio">
                                                    <div class="bio-details">
                                                        <div class="profile-image"><img
                                                                src="{{asset('textilary/images/testimonial-83S5W35.jpg')}}"
                                                                alt="Poppie Person"></div>
                                                        <ul class="rating-stars"></ul>
                                                        <span class="profile-info">
                                                            <strong class="profile-name">Poppie Person</strong>
                                                            <p class="profile-des">Entrepreneur</p>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-item  elementor-repeater-item-d069a43">
                                            <div class="testimonial-box hover-from-left">
                                                <div class="icon-content"></div>
                                                <div class="comment-content">
                                                    <p>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua minim veniam quis nostrud exercitation ullamco laboris
                                                        nisi ut aliquip&quot;</p>
                                                </div>
                                                <div class="comment-bio">
                                                    <div class="bio-details">
                                                        <div class="profile-image"><img
                                                                src="{{asset('textilary/images/testimonial-M6NJPEF.png')}}"
                                                                alt="Simon Rhodes">
                                                        </div>
                                                        <ul class="rating-stars"></ul>
                                                        <span class="profile-info">
                                                            <strong class="profile-name">Simon Rhodes</strong>
                                                            <p class="profile-des">Entrepreneur</p>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-item  elementor-repeater-item-1c4a96f">
                                            <div class="testimonial-box hover-from-left">
                                                <div class="icon-content"></div>
                                                <div class="comment-content">
                                                    <p>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua minim veniam quis nostrud exercitation ullamco laboris
                                                        nisi ut aliquip&quot;</p>
                                                </div>
                                                <div class="comment-bio">
                                                    <div class="bio-details">
                                                        <div class="profile-image"><img
                                                                src="{{asset('textilary/images/testimonial-A8E2W8S.jpg')}}"
                                                                alt="Miya Draper">
                                                        </div>
                                                        <ul class="rating-stars"></ul>
                                                        <span class="profile-info">
                                                            <strong class="profile-name">Miya Draper</strong>
                                                            <p class="profile-des">Entrepreneur</p>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
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
        class="elementor-section elementor-top-section elementor-element elementor-element-e449af9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="e449af9" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-85051e9 animated-slow elementor-invisible"
                data-id="85051e9" data-element_type="column"
                data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-781e2c3 elementor-widget elementor-widget-heading"
                        data-id="781e2c3" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Do You Want Join With
                                AARBIN? Contact Us Now
                            </h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-d1a4f85 elementor-widget elementor-widget-text-editor"
                        data-id="d1a4f85" data-element_type="widget" data-widget_type="text-editor.default">

                    </div>
                    <div class="elementor-element elementor-element-ca8eade elementor-align-left elementor-mobile-align-center elementor-widget elementor-widget-button"
                        data-id="ca8eade" data-element_type="widget" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a href="/contact" class="elementor-button-link elementor-button elementor-size-sm"
                                    role="button">
                                    <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-text">Contact Us</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-54216cb elementor-hidden-phone"
                data-id="54216cb" data-element_type="column">
                <div class="elementor-widget-wrap">
                </div>
            </div>
        </div>
    </section>

</div>

@endsection