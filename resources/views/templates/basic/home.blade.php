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
                <!-- slider text removed-->
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c290160"
                data-id="c290160" data-element_type="column">
                <div class="elementor-widget-wrap">
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-inner-section elementor-element elementor-element-d695775 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="d695775" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-05c5009"
                data-id="05c5009" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-6304f76 elementor-widget elementor-widget-text-editor intro-text"
                        data-id="6304f76" data-element_type="widget"
                        data-widget_type="text-editor.default">
                        <p class="introduction-context">
                            FOUNDED IN 2012 ARVIND ENTERPRISES. AARBIN INDIA PIONEERED MEN GARMENTS,
                            EVOLVING AND INNOVATING NOT ONLY THE PRODUCT, BUT ALSO THE WAY IT HAS BEEN
                            MARKETED OVER THE YEARS. THE COMPANY IS COMMITTED TO QUALITY, COMFORT,
                            FASHION, INNOVATION AND VALUE HALLMARK. 
                        </p>
                    </div>
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
                            
                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-b02c9b8"
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
                            <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-1f8e964"
                                data-id="1f8e964" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-8d4b1f3 elementor-widget elementor-widget-text-editor"
                                        data-id="8d4b1f3" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                       
                                    </div>
                                    <div class="elementor-element elementor-element-50199ac elementor-align-left elementor-widget elementor-widget-button"
                                        data-id="50199ac" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-60 elementor-inner-column elementor-element elementor-element-6b1f17a"
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
                                                    <h5 class="heading-title">Our Products</h5>
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
                                                Highest Quality Products</h2>
                                        </div>
                                    </div>
                                    


                                </div>
                            </div>
                            <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-1f8e964"
                                data-id="1f8e964" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-8d4b1f3 elementor-widget elementor-widget-text-editor"
                                        data-id="8d4b1f3" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            </div>
                                    </div>
                                    <div class="elementor-element elementor-element-50199ac elementor-align-left elementor-widget elementor-widget-button"
                                        data-id="50199ac" data-element_type="widget" data-widget_type="button.default">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-ff7981b elementor-section-content-bottom elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="ff7981b" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-3aa5e30 animated-slow elementor-invisible"
                                data-id="3aa5e30" data-element_type="column"
                                data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;,&quot;animation_delay&quot;:80}">
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
                                                    
                                                        <div class="profile-body">
                                                            <h2 class="profile-title" style="font-size:20px;">BERMUDA</h2>
                                                            <p class="profile-designation"></p>
                                                            <p class="profile-content  text-justify" style="font-size:11px;color:#cacfd9;">

                                                                Trendy casuals having a new, current look made shockingly better 
                                                                with breathable plan produced using merceried brushed cotton texture , 
                                                                the product is fundamentally known as BERMUDA with ultrasoft and solid 
                                                                internal belt alongside contrast channeling on the two sets.
                                                                It is exceptionally agreeable and simple to wear.

                                                            </p>
                                                            <ul class="social-list"></ul>
                                                        </div>
                                                        
                                                    </div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-3aa5e30 animated-slow elementor-invisible"
                                data-id="3aa5e30" data-element_type="column"
                                data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;,&quot;animation_delay&quot;:80}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-9f88dc0 elementor-widget elementor-widget-jkit_team"
                                        data-id="9f88dc0" data-element_type="widget"
                                        data-widget_type="jkit_team.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-team style-overlay overlay-bottom jeg_module_17_23_635d0b1188908">
                                                <div class="profile-card proile-card-image"><img
                                                        src="{{url('assets/images/logoIcon/longe.jpg')}}"
                                                        alt="LONGE & ATHLEISURE">
                                                 
                                                    <div class="hover-area alignment-bottom">
                                                    
                                                        <div class="profile-body">
                                                            <h2 class="profile-title product-card-description" style="font-size:20px;">LONGE & ATHLEISURE</h2>
                                                            <p class="profile-designation"></p>
                                                            <p class="profile-content  text-justify" style="font-size:11px;color:#cacfd9;">

                                                                Lounge & Athleisure are in huge demand and proper sportswear helps the player to 
                                                                perform all the tasks in the most efficient way, without having to strain themselves.
                                                                Sportswear for Men come with so many accessories like training shoes, headbands, 
                                                                wristbands, helmets which make it possible for them to play effectively without
                                                                having the tension about harming any of the body parts.



                                                            </p>
                                                            <ul class="social-list"></ul>
                                                        </div>
                                                        
                                                    </div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-3aa5e30 animated-slow elementor-invisible"
                                data-id="3aa5e30" data-element_type="column"
                                data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;,&quot;animation_delay&quot;:80}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-9f88dc0 elementor-widget elementor-widget-jkit_team"
                                        data-id="9f88dc0" data-element_type="widget"
                                        data-widget_type="jkit_team.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-team style-overlay overlay-bottom jeg_module_17_23_635d0b1188908">
                                                <div class="profile-card proile-card-image"><img
                                                        src="{{url('assets/images/logoIcon/shorts.jpg')}}"
                                                        alt="SHORTS">
                                                 
                                                    <div class="hover-area alignment-bottom">
                                                    
                                                        <div class="profile-body">
                                                            <h2 class="profile-title" style="font-size:20px;">SHORTS</h2>
                                                            <p class="profile-designation"></p>
                                                            <p class="profile-content  text-justify" style="font-size:11px;color:#cacfd9;">

                                                                Men's shorts have a clear history of being a fighter's clothing to a school children's
                                                                uniform. Today, they are depicted as a man's quintessential design decision by numerous
                                                                shorts internet shopping locales.


                                                            </p>
                                                            <ul class="social-list"></ul>
                                                        </div>
                                                        
                                                    </div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-3aa5e30 animated-slow elementor-invisible"
                                data-id="3aa5e30" data-element_type="column"
                                data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;,&quot;animation_delay&quot;:80}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-9f88dc0 elementor-widget elementor-widget-jkit_team"
                                        data-id="9f88dc0" data-element_type="widget"
                                        data-widget_type="jkit_team.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-team style-overlay overlay-bottom jeg_module_17_23_635d0b1188908">
                                                <div class="profile-card proile-card-image"><img
                                                        src="{{url('assets/images/logoIcon/joggers.jpg')}}"
                                                        alt="JOGGERS">
                                                 
                                                    <div class="hover-area alignment-bottom">
                                                    
                                                        <div class="profile-body">
                                                            <h2 class="profile-title" style="font-size:20px;"">JOGGERS</h2>
                                                            <p class="profile-designation"></p>
                                                            <p class="profile-content  text-justify" style="font-size:11px;color:#cacfd9;">

                                                                Aarbin India joggers are designed to provide best comfort. The Knitted fabric is soft,
                                                                stretchable, and comfortable. You can laze at home in these joggers or break a sweat 
                                                                at the gym; these versatile pants are ideal for modern men who prefer clothes that blend
                                                                style and comfort.



                                                            </p>
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
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-4ddc9b7 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default"
        data-id="4ddc9b7" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-default lower-banner">
            
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element  elementor-hidden-phone"
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
                    BNN
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
                                                            <li> @lang('Incentive Points') (@lang('IP')) : <span
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
@php
$banners = getContent('new_arrival_banner');
@endphp
    <section>
        <h2 class="slider-heading">New Arrivals</h2><br/>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            @foreach($banners as $key=>$banner)
            <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                <img class="d-block w-100" src="{{asset('assets/images/product/'.$banner->data_values)}}" alt="Fabric Dyeing">
              </div>
            @endforeach
             
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </section>



    
    <section
				class="elementor-section elementor-top-section elementor-element elementor-element-4724db5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
				data-id="4724db5" data-element_type="section"
				data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5106cb6"
						data-id="5106cb6" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-fd489cb animated-slow elementor-invisible elementor-widget elementor-widget-jkit_heading"
								data-id="fd489cb" data-element_type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
								data-widget_type="jkit_heading.default">
								<div class="elementor-widget-container">
									<div
										class="jeg-elementor-kit jkit-heading  align-center align-tablet-left align-mobile-left jeg_module_347_15_635d742352050">
										<div class="heading-section-title ">
											<h5 class="heading-title">Our Team</h5>
										</div>
										<div class="heading-section-separator">
											<div class="separator-wrapper style-solid"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-d4fa05d elementor-widget"
								data-id="d4fa05d" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">Meet With Professional
										Team</h2>
								</div>
							</div>
							<div class="elementor-element elementor-element-a8d82cf elementor-widget elementor-widget-text-editor"
								data-id="a8d82cf" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
									incididunt ut labore et dolore magna aliqua </div>
							</div>
							@php

                                $teamTitle = getContent('team.content', true);
                                $teams = getContent('team.element');
                            @endphp
							<section
								class="elementor-section elementor-inner-section elementor-element elementor-element-eae9f78 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
								data-id="eae9f78" data-element_type="section">
								<div class="elementor-container elementor-column-gap-no">
								@foreach($teams as $team)
									<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-fa09cbc"
										data-id="fa09cbc" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-2494d60 elementor-widget elementor-widget-jkit_team"
												data-id="2494d60" data-element_type="widget"
												data-widget_type="jkit_team.default">
												<div class="elementor-widget-container">
													<div
														class="jeg-elementor-kit jkit-team style-title-horizontal  jeg_module_347_18_635d74236a72c">
														<div class="profile-card"><img src="{{ getImage('assets/images/frontend/team/'. @$team->data_values->image, '524x614') }}"
																alt="Vernon Simpson">
															<div class="image-hover-bg"></div>
															<div class="profile-body">
																<div class="title-wrapper">
																	<p class="profile-designation ">{{@$team->data_values->designation}}</p>

																</div>
																<div class="name-wrapper">
																	<h3 class="profile-title">@lang(@$team->data_values->name)</h3>
																	<ul class="social-list">
																		<li
																			class="social-icon elementor-repeater-item-c625a9a">
																			<a href="#"><i aria-hidden="true"
																					class="fab fa-facebook-f"></i></a>
																		</li>
																		<li
																			class="social-icon elementor-repeater-item-3a36d8c">
																			<a href="#"><i aria-hidden="true"
																					class="fab fa-twitter"></i></a></li>
																		<li
																			class="social-icon elementor-repeater-item-e9c8942">
																			<a href="#"><i aria-hidden="true"
																					class="jki jki-instagram-1-light"></i></a>
																		</li>
																	</ul>
																</div>
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


@endsection

