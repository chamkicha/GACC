@extends('layout/master')

@section('content')


    <!-- Revolution Slider Section -->
    <section class="slider_wrap slider_fullscreen slider_engine_revo slider_alias_newlife-church-home-1">
        <div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
            <!-- START REVOLUTION SLIDER 5.2.6 fullwidth mode -->
            <div id="rev_slider_2_1" class="rev_slider fullwidthabanner tp-overflow-hidden display_none" data-version="5.2.6">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-4"
                        data-transition="random"
                        data-slotamount="7"
                        data-hideafterloop="0"
                        data-hideslideonmobile="off"
                        data-easein="default"
                        data-easeout="default"
                        data-masterspeed="500"
                        data-rotate="0"
                        data-saveperformance="off"
                        data-title="Slide"
                        data-param1=""
                        data-param2=""
                        data-param3=""
                        data-param4=""
                        data-param5=""
                        data-param6=""
                        data-param7=""
                        data-param8=""
                        data-param9=""
                        data-param10=""
                        data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('images/slider/slider7-01.png') }}" alt="" title="slider1-3" width="1920" height="768" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme slide_large_text" id="slide-4-layer-1" data-x="['center','center','center','center']" data-hoffset="['3','0','4','0']" data-y="['top','top','top','top']" data-voffset="['228','228','261','68']" data-fontsize="['75','75','60','50']" data-lineheight="['80','80','70','55']" data-width="['none','none','693','443']" data-height="['none','none','161','none']" data-whitespace="['nowrap','nowrap','normal','normal']" data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:800;e:Power3.easeInOut;" data-transform_out="opacity:0;s:300;" data-start="1350" data-splitin="none" data-splitout="none" data-responsive_offset="on">Welcome
                            <br/> Grace African Christian Connections</div>
                        <!-- LAYER NR. 3 -->
                        <!-- <div class="tp-caption tp-resizeme slide_button_1" id="slide-4-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','1','0']" data-y="['top','top','top','top']" data-voffset="['528','528','448','290']" data-color="['rgba(0, 10, 0, 1.00)','rgba(0, 10, 0, 1.00)','rgba(255, 255, 255, 1.00)','rgba(0, 10, 0, 1.00)']" data-width="['848','932','639','438']" data-height="['56','56','57','none']" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="opacity:0;s:900;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;" data-start="1800" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <a href="{{ url('/about') }}" class="sc_button sc_button_square sc_button_style_filled sc_button_color_style_2 sc_button_size_large">ABOUT US</a>
                        </div> -->
                    </li>
                    <!-- SLIDE  -->
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </section>
    <!-- /Revolution Slider Section -->

    <!-- Page Content Wrap -->
    <div class="page_content_wrap page_paddings_no">
        <div class="content">
            <article class="post_item post_item_single page">
                <section class="post_content">
                    
                    <!-- Welcome section -->
                    <div class="hp1_welcome_section">
                        <div class="content_wrap">
                            <div class="columns_wrap">
                                <div class="column-1_2 sc_column_item sc_column_item_1 odd first">
                                <figure class="sc_image sc_image_shape_square">
                                    <a href="{{ url('service-single.html') }}">
                                        <img src="{{ asset('images/img/img1.jpeg') }}" alt="" />
                                    </a>
                                </figure>
                                </div><div class="column-1_2 sc_column_item sc_column_item_2 even">
                                <!-- Services section -->
                            <div class="sc_services_wrap">
                                <div class="sc_services sc_services_style_services-5 sc_services_type_icons sc_slider_nopagination sc_slider_nocontrols width_100_per" data-interval="5040" data-slides-min-width="250">
                                    <h6 class="sc_services_subtitle sc_item_subtitle">Welcome</h6>
                                    <h2 class="sc_services_title sc_item_title">Sawubona</h2>
                                    <div class="" style="margin-bottom: 10px;">We’d love to meet you! Come check us out this SUNDAY where you can meet us and see if GACC might be a good fit for you. Our heart and soul is to introduce and connect people with the living and powerful God.</div>
                                    <!-- Services item --><div class="sc_services_item sc_services_item_1 odd first" style=" margin-bottom: 10px; ">
                                        <span class="sc_icon icon-house306"></span>
                                        <div class="sc_services_item_content">
                                            <h4 class="sc_services_item_title">
                                                <a href="{{ url('#') }}">Follow with us</a>
                                            </h4>
                                            <div class="sc_services_item_description">
                                                <p>Sunday Worship Services (days & times) </p>
                                                <p>Sunday Worship Service followed by Fellowship and African Food - Every Sunday, 3PM – 5PM</p>
                                            </div>
                                        </div>
                                    </div><!-- /Services item --><!-- Services item --><div class="sc_services_item sc_services_item_2 even" style=" margin-bottom: 10px; ">
                                        <span class="sc_icon icon-open-book6"></span>
                                        <div class="sc_services_item_content">
                                            <h4 class="sc_services_item_title">
                                                <a href="{{ url("#") }}">Weekday services:</a></h4>
                                            <div class="sc_services_item_description">
                                                

                                                <ul id="recentcomments">
                                                    <li class="recentcomments">
                                                        <span class="comment-author-link">Fridays @10AM:</span>
                                                        <a href="{{ url("#") }}"> Bible study (on zoom)</a>
                                                    </li>
                                                    <li class="recentcomments">
                                                        <span class="comment-author-link">5PM – 5:30PM:</span>
                                                        <a href="{{ url("#") }}"> Evening Glory (Facebook Live)</a>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Services item -->
                                </div>
                            </div>
                                </div>
                            <!-- /Services section -->

                            </div>
                        </div>
                    </div>
                    <!-- /Welcome section -->
                    <!-- Mission section -->
                    <div class="hp1_mission_section">
                        <div class="content_wrap">
                            <div class="columns_wrap sc_columns columns_fluid no_margins sc_columns_count_2">
                                <div class="column-1_2 sc_column_item sc_column_item_1 odd first">
                                    <h2 class="sc_title sc_title_regular sc_align_right">Our church mission</h2>
                                </div><div class="column-1_2 sc_column_item sc_column_item_2 even">
                                    <div class="sc_section">
                                        <div class="sc_section_inner">
                                            <p class="tpl_light">
                                            God Sees you To provide a worship space for spiritual upliftment and resources to meet people where they are, at the point of their need.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Mission section -->
                    <!-- Info section -->
                    <div class="hp1_info_section">
                        <div class="sc_section">
                            <div class="sc_section_inner">
                                <h1 class="sc_title sc_title_regular sc_align_center">Get Connected. What&#8217;s Your Next Step?<br />
                                    Follow. Connect. Go.</h1>
                                <div class="custom_heading_1">Following Jesus as disciples and connecting with others as part of a spiritual family</div>
                                <div class="sc_section aligncenter">
                                    <div class="sc_section_inner">
                                        <a href="https://form.jotform.com/232757120127147" class="sc_button sc_button_square sc_button_style_filled sc_button_color_style_3 sc_button_size_large width_120">small groups &amp;<br />
                                        BIBLE STUDIES</a>
                                        <a href="https://form.jotform.com/232757120127147" class="sc_button sc_button_square sc_button_style_filled sc_button_color_style_3 sc_button_size_large width_120">MISSIONS<br />
                                        &amp; donation</a>
                                        <a href="https://form.jotform.com/232757120127147" class="sc_button sc_button_square sc_button_style_filled sc_button_color_style_3 sc_button_size_large width_120">Musical<br />
                                        Worship Team</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Info section -->
                    <!-- Upcoming events section -->
                    <div class="" style="padding-top: 50px;padding-bottom: 50px;">
                        <div class="content_wrap">
                            <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
                                <div class="column-1_2 sc_column_item sc_column_item_1 odd first">
                                    <div class="sc_section">
                                        <div class="sc_section_inner">
                                            <h6 class="sc_section_subtitle sc_item_subtitle">Our APP</h6>
                                            <h2 class="sc_section_title sc_item_title">GACC DioMO</h2>
                                            <div class="sc_section">
                                                <div class="sc_section_inner">
                                                    <a href="https://apps.apple.com/tz/app/gacc-diomo/id6448749123">
                                                      <img style="width:265px" src="{{ asset('images/img/appstore.png') }}" alt="" />
                                                    </a>
                                                    <!-- <a href="https://form.jotform.com/232757120127147">
                                                      <img style="width:265px" src="{{ asset('images/img/playstore.png') }}" alt="" />
                                                    </a> -->
                                                </div>
                                            </div>

                                            <div class="sc_section">
                                                <div class="sc_section_inner" style=" padding-top: 10px; ">
                                                      <img style="width: 130px;" src="{{ asset('images/img/app1.webp') }}" alt="" />
                                                      <img style="width: 130px;" src="{{ asset('images/img/app2.webp') }}" alt="" />
                                                      <img style="width: 130px;" src="{{ asset('images/img/app3.webp') }}" alt="" />
                                                      <img style="width: 130px;" src="{{ asset('images/img/app4.webp') }}" alt="" />
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div><div class="column-1_2 sc_column_item sc_column_item_2 even">
                                    <div class="sc_section">
                                        <div class="sc_section_inner">
                                            <h6 class="sc_section_subtitle sc_item_subtitle">Upcoming Events</h6>
                                            <h2 class="sc_section_title sc_item_title margin_bottom_1_2em_imp">Conferences & Events</h2>
                                            <div class="sc_events_wrap">
                                                <div class="sc_events sc_events_style_events-2 sc_slider_nopagination sc_slider_nocontrols width_100_per" data-interval="7691">
                                                    <!-- Event item -->
                                                    <div class="sc_events_item sc_events_item_1 odd first">
                                                        <span class="sc_events_item_date">
                                                            <span class="sc_events_item_month">Apr</span>
                                                            <span class="sc_events_item_day">24</span>
                                                        </span>
                                                        <h6 class="sc_events_item_title">
                                                            <a href="{{ url("event-single.html") }}">Church Leaders meeting</a>
                                                        </h6>
                                                        <span class="sc_events_item_time">1:00 pm - 7:00 pm</span>
                                                        <span class="sc_events_item_details">
                                                            <a href="{{ url("event-single.html") }}">Details</a>
                                                        </span>
                                                    </div>
                                                    <!-- /Event item -->
                                                    <!-- Event item -->
                                                    <div class="sc_events_item sc_events_item_2 even">
                                                        <span class="sc_events_item_date">
                                                            <span class="sc_events_item_month">Apr</span>
                                                            <span class="sc_events_item_day">09</span>
                                                        </span>
                                                        <h6 class="sc_events_item_title">
                                                            <a href="{{ url("event-single.html") }}">Prayer Day</a>
                                                        </h6>
                                                        <span class="sc_events_item_time">6:00 pm - 8:00 pm</span>
                                                        <span class="sc_events_item_details">
                                                            <a href="{{ url("event-single.html") }}">Details</a>
                                                        </span>
                                                    </div>
                                                    <!-- /Event item -->
                                                    <!-- Event item -->
                                                    <div class="sc_events_item sc_events_item_3 odd">
                                                        <span class="sc_events_item_date">
                                                            <span class="sc_events_item_month">Mar</span>
                                                            <span class="sc_events_item_day">02</span>
                                                        </span>
                                                        <h6 class="sc_events_item_title">
                                                            <a href="{{ url("event-single.html") }}">Monthly Band Tryouts</a>
                                                        </h6>
                                                        <span class="sc_events_item_time">3:00 pm - 7:00 pm</span>
                                                        <span class="sc_events_item_details">
                                                            <a href="{{ url("event-single.html") }}">Details</a>
                                                        </span>
                                                    </div>
                                                    <!-- /Event item -->
                                                    <!-- Event item -->
                                                    <div class="sc_events_item sc_events_item_4 even">
                                                        <span class="sc_events_item_date">
                                                            <span class="sc_events_item_month">Jan</span>
                                                            <span class="sc_events_item_day">31</span>
                                                        </span>
                                                        <h6 class="sc_events_item_title">
                                                            <a href="{{ url("event-single.html") }}">WOW Conference</a>
                                                        </h6>
                                                        <span class="sc_events_item_time">10:00 am - 2:00 pm</span>
                                                        <span class="sc_events_item_details">
                                                            <a href="{{ url("event-single.html") }}">Details</a>
                                                        </span>
                                                    </div>
                                                    <!-- /Event item -->
                                                    <!-- Event item -->
                                                    <div class="sc_events_item sc_events_item_5 odd">
                                                        <span class="sc_events_item_date">
                                                            <span class="sc_events_item_month">Jun</span>
                                                            <span class="sc_events_item_day">24</span>
                                                        </span>
                                                        <h6 class="sc_events_item_title">
                                                            <a href="{{ url("event-single.html") }}">Seniors Bible Study</a>
                                                        </h6>
                                                        <span class="sc_events_item_time">4:00 pm - 6:00 pm</span>
                                                        <span class="sc_events_item_details">
                                                            <a href="{{ url("event-single.html") }}">Details</a>
                                                        </span>
                                                    </div>
                                                    <!-- /Event item -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Upcoming events section -->
                    <!-- The Essential Grid -->
                    
                    <div class="clear"></div>
                    <!-- /The Essential Grid -->
                    <!-- Donation section -->
                    <div class="hp1_donation_section">
                        <div class="content_wrap">
                            <div class="sc_section column-7_10">
                                <div class="sc_section_inner">
                                    <div class="sc_section aligncenter">
                                        <div class="sc_section_inner">
                                            <h1 class="donation_title_custom">Giving is an action of worship,<br />
                                                affection &amp; love for Jesus.</h1>
                                            <h2 class="sc_title sc_title_cursive sc_align_center">Making a difference</h2>
                                            <a href="{{ url("/donate") }}" class="sc_button sc_button_square sc_button_style_filled sc_button_color_style_4 sc_button_size_large give_now_btn">GIVE NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Donation section -->
                    
                    <div class="hp2_banner2_section">
                        <div class="content_wrap">
                            <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_6 column_resizer-2">
                                <div class="column-5_6 sc_column_item sc_column_item_1 odd first span_5">
                                        <h1 class="sc_title sc_title_regular margin_bottom_null tpl_light">
                                        NEWSLETTER
                                        </h1>
                                        <p class="sc_title sc_title_regular margin_bottom_null tpl_light">
                                          Stay connected to the Grace African Christian Connections by subscribing to our email newsletter!
                                        </p>
                                        
                                </div><div class="column-1_6 sc_column_item sc_column_item_6 even">
                                     <a href="#" class="sc_button sc_button_square sc_button_style_border sc_button_color_style_4 sc_button_size_large" data-toggle="modal" data-target="#subscribeModal">SUBSCRIBE</a>
                                     <!-- <a href="#" class="sc_button sc_button_square sc_button_style_border sc_button_color_style_4 sc_button_size_large">SUBSCRIBE</a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    


                    <!-- Modal -->
                    <!-- <div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="subscribeModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="subscribeModalLabel">Subscribe</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="subscriptionForm">
                                       @csrf
                                        <div class="form-group">
                                            <label for="first_name">First Name</label>
                                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="last_name">Last Name</label>
                                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" onclick="submitsubcriptionForm()" class="btn btn-primary">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>  -->
                    
                    
                </section>
            </article>
        </div>
    </div>
    <!-- /Page Content Wrap -->

@stop
