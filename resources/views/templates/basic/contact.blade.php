@extends($activeTemplate.'layouts.master')
@push('css')
<link rel="stylesheet" id="jkit-elements-main-css" href="{{asset('textilary/css/contactf.css')}}" type="text/css" media="all">
<link rel="stylesheet" id="jkit-elements-main-css" href="{{asset('textilary/css/contacts.css')}}" type="text/css" media="all">

@endpush
@section('content')


<div data-elementor-type="wp-page" data-elementor-id="478" class="elementor elementor-478">
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-a462ed5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="a462ed5" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8b69ecc"
                data-id="8b69ecc" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-20546e1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="20546e1" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-6c7acf8"
                                data-id="6c7acf8" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-8024d99 elementor-widget elementor-widget-heading"
                                        data-id="8024d99" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Contact Us</h2>
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
        class="elementor-section elementor-top-section elementor-element elementor-element-7504887 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="7504887" data-element_type="section">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f0489eb"
                data-id="f0489eb" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-cf30c69 elementor-widget elementor-widget-google_maps"
                        data-id="cf30c69" data-element_type="widget" data-widget_type="google_maps.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-custom-embed">
                                <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                                    src="https://maps.google.com/maps?q=Jalan%20sunset%20Road%20Kuta&amp;t=m&amp;z=16&amp;output=embed&amp;iwloc=near"
                                    title="Jalan sunset Road Kuta" aria-label="Jalan sunset Road Kuta"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-aa59ffc elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="aa59ffc" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3e58a76"
                data-id="3e58a76" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-226b76d elementor-widget elementor-widget-metform"
                        data-id="226b76d" data-element_type="widget" data-widget_type="metform.default">
                        <section class="contact-section padding-top padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-header left-style">
                        <h2 class="title">{{@$contact->data_values->title}}</h2>
                        <p>{{@$contact->data_values->short_details}}</p>
                    </div>
                    <form method="post" action="" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 form-group">
                                <input type="text" name="name" value="{{old('name')}}"  placeholder="@lang('Your Name')" id="name" required>
                            </div>
                            <div class="col-lg-12 form-group">
                                <input type="text" name="subject" placeholder="@lang('Write your subject')" value="{{old('subject')}}"  id="subject" required>
                            </div>
                            <div class="col-lg-12 form-group">
                                <input type="email" name="email"  value="{{old('email')}}" id="email" placeholder="@lang('Enter E-Mail Address')" required>
                            </div>
                            <div class="col-lg-12 form-group">
                                <textarea placeholder="@lang('Write your message')" name="message" id="message" required>{{old('message')}}</textarea>
                            </div>

                           

                            <div class="col-lg-12 form-group">
                                <input type="submit" class="cmn-btn" style="background-color:#7FC6A4;" value="@lang('Submit Now')">
                            </div>
                        </div>
                    </form>
                </div>
               
            </div>
        </div>
    </section>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ee625bb"
                data-id="ee625bb" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-45efcce elementor-widget elementor-widget-jkit_heading"
                        data-id="45efcce" data-element_type="widget" data-widget_type="jkit_heading.default">
                        <div class="elementor-widget-container">
                            <div
                                class="jeg-elementor-kit jkit-heading  align-left align-tablet-left align-mobile-left jeg_module_478_1_635d749e4c4be">
                                <div class="heading-section-title ">
                                    <h5 class="heading-title">Contact Us</h5>
                                </div>
                                <div class="heading-section-separator">
                                    <div class="separator-wrapper style-solid"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-d8f8377 elementor-widget elementor-widget-heading"
                        data-id="d8f8377" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Get In Touch</h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-04157e7 elementor-widget elementor-widget-text-editor"
                        data-id="04157e7" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                                ullamcorper mattis, pulvinar dapibus leo. Fusce vulputate sodales hendrerit. Nam
                                ultrices euismod porta. Suspendisse sit amet dignissim.</p>
                        </div>
                    </div>
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-eed9a21 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="eed9a21" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f3f4ea3"
                                data-id="f3f4ea3" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-9e880ae elementor-widget-mobile__width-inherit jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                        data-id="9e880ae" data-element_type="widget"
                                        data-widget_type="jkit_icon_box.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_478_2_635d749e5530b">
                                                <div class="jkit-icon-box-wrapper hover-from-left">
                                                    <div class="icon-box icon-box-header elementor-animation-">
                                                        <div class="icon style-color"><i aria-hidden="true"
                                                                class="jki jki-cityscape-light"></i></div>
                                                    </div>
                                                    <div class="icon-box icon-box-body">
                                                        <h4 class="title">Kuta</h4>
                                                        <p class="icon-box-description">Jl. Sunset Road No. 815,
                                                            Kuta<br>
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
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-b7e69d0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="b7e69d0" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c3da1b3"
                                data-id="c3da1b3" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-a1e99ba elementor-widget-mobile__width-inherit jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                        data-id="a1e99ba" data-element_type="widget"
                                        data-widget_type="jkit_icon_box.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_478_4_635d749e60893">
                                                <div class="jkit-icon-box-wrapper hover-from-left">
                                                    <div class="icon-box icon-box-header elementor-animation-">
                                                        <div class="icon style-color"><i aria-hidden="true"
                                                                class="jki jki-phone-call-line"></i></div>
                                                    </div>
                                                    <div class="icon-box icon-box-body">
                                                        <h4 class="title">Call Us</h4>
                                                        <p class="icon-box-description">0522-315-8065<br>
                                                            <br>
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3fee02b"
                                data-id="3fee02b" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-6a2905e elementor-widget-mobile__width-inherit jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                        data-id="6a2905e" data-element_type="widget"
                                        data-widget_type="jkit_icon_box.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_478_5_635d749e64ea3">
                                                <div class="jkit-icon-box-wrapper hover-from-left">
                                                    <div class="icon-box icon-box-header elementor-animation-">
                                                        <div class="icon style-color"><i aria-hidden="true"
                                                                class="jki jki-envelope2-light"></i></div>
                                                    </div>
                                                    <div class="icon-box icon-box-body">
                                                        <h4 class="title">Email Information</h4>
                                                        <p class="icon-box-description"><a
                                                                href="#" class="__cf_email__">care@aarbinindia.com</a>
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
                    <div class="elementor-element elementor-element-3e3f3f4 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                        data-id="3e3f3f4" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-divider">
                                <span class="elementor-divider-separator">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-3c8c663 elementor-widget elementor-widget-heading"
                        data-id="3c8c663" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h3 class="elementor-heading-title elementor-size-default">Our Social Media</h3>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-9499382 elementor-shape-circle e-grid-align-left elementor-grid-mobile-0 e-grid-align-mobile-left elementor-grid-0 elementor-widget elementor-widget-social-icons"
                        data-id="9499382" data-element_type="widget" data-widget_type="social-icons.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-social-icons-wrapper elementor-grid">
                                <span class="elementor-grid-item">
                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-animation-shrink elementor-repeater-item-c0163ab"
                                        target="_blank">
                                        <span class="elementor-screen-only">Facebook-f</span>
                                        <i class="fab fa-facebook-f"></i> </a>
                                </span>
                                <span class="elementor-grid-item">
                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-animation-shrink elementor-repeater-item-310ab07"
                                        target="_blank">
                                        <span class="elementor-screen-only">Twitter</span>
                                        <i class="fab fa-twitter"></i> </a>
                                </span>
                                <span class="elementor-grid-item">
                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-animation-shrink elementor-repeater-item-63f86db"
                                        target="_blank">
                                        <span class="elementor-screen-only">Instagram</span>
                                        <i class="fab fa-instagram"></i> </a>
                                </span>
                                <span class="elementor-grid-item">
                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin-in elementor-animation-shrink elementor-repeater-item-3dbfd36"
                                        target="_blank">
                                        <span class="elementor-screen-only">Linkedin-in</span>
                                        <i class="fab fa-linkedin-in"></i> </a>
                                </span>
                                <span class="elementor-grid-item">
                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-animation-shrink elementor-repeater-item-40041f1"
                                        target="_blank">
                                        <span class="elementor-screen-only">Youtube</span>
                                        <i class="fab fa-youtube"></i> </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- <div class="contact-info  padding-top">
        <div class="container">
            <div class="row justify-content-center mb-30-none">
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="contact--item">
                        <div class="contact-item">
                            <div class="contact-thumb">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="contact-content">
                                <h6 class="title">@lang('Email Address')</h6>
                                <ul>
                                    <li>
                                        <a href="Mailto:{{@$contact->data_values->email_address}}">{{@$contact->data_values->email_address}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="contact--item ">
                        <div class="contact-item">
                            <div class="contact-thumb">
                                <i class="fa fa-building" aria-hidden="true"></i>

                            </div>
                            <div class="contact-content">
                                <h6 class="title">@lang('Office Address')</h6>
                                <ul>
                                    <li>
                                        {{@$contact->data_values->contact_details}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="contact--item">
                        <div class="contact-item">
                            <div class="contact-thumb">
                                <i class="fa fa-phone-square" aria-hidden="true"></i>
                            </div>
                            <div class="contact-content">
                                <h6 class="title">@lang('Phone Number')</h6>
                                <ul>
                                    <li>
                                        <a href="Tel:{{@$contact->data_values->contact_number}}">{{@$contact->data_values->contact_number}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-section padding-top padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-header left-style margin-olpo">
                        <h2 class="title">{{@$contact->data_values->title}}</h2>
                        <p>{{@$contact->data_values->short_details}}</p>
                    </div>
                    <form method="post" action="" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 form-group">
                                <input type="text" name="name" value="{{old('name')}}"  placeholder="@lang('Your Name')" id="name" required>
                            </div>
                            <div class="col-lg-12 form-group">
                                <input type="text" name="subject" placeholder="@lang('Write your subject')" value="{{old('subject')}}"  id="subject" required>
                            </div>
                            <div class="col-lg-12 form-group">
                                <input type="email" name="email"  value="{{old('email')}}" id="email" placeholder="@lang('Enter E-Mail Address')" required>
                            </div>
                            <div class="col-lg-12 form-group">
                                <textarea placeholder="@lang('Write your message')" name="message" id="message" required>{{old('message')}}</textarea>
                            </div>

                            @if(reCaptcha())
                                <div class=" col-lg-12 form-group my-3">
                                    @php echo reCaptcha(); @endphp
                                </div>
                            @endif
                            <div class=" col-lg-12 form-group my-3">
                                @include($activeTemplate.'partials.custom-captcha')
                            </div>

                            <div class="col-lg-12 form-group">
                                <input type="submit" class="cmn-btn" value="@lang('Submit Now')">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <img class="wow slideInRight" src="{{getImage('assets/images/frontend/contact_us/' . @$contact->data_values->background_image, '650x780')}}" alt="contact">
                </div>
            </div>
        </div>
    </section> -->



@endsection