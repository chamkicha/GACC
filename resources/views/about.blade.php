@extends('layout/master')

@section('content')



    <!-- Breadcrumbs -->
    <div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
        <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg3">
            <div class="content_wrap">
                <h1 class="page_title">About Our Church</h1>
                <div class="breadcrumbs">
                    <a class="breadcrumbs_item home" href="{{ url("/") }}">Home</a>
                    <span class="breadcrumbs_delimiter"></span>
                    <span class="breadcrumbs_item current">About Our Church</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumbs -->
    <!-- Page Content Wrap -->
    <div class="page_content_wrap page_paddings_no">
        <!-- Content -->
        <div class="content">
            <article class="post_item post_item_single page">
                <section class="post_content">

                    <div class="hp3_info_section">
                        <div class="content_wrap">
                            <div class="sc_services_wrap">
                                <div class="sc_services sc_services_style_services-2 sc_services_type_icons sc_slider_nopagination sc_slider_nocontrols aligncenter width_100_per" data-interval="7580" data-slides-per-view="3" data-slides-min-width="250">
                                    <h6 class="sc_services_subtitle sc_item_subtitle">Welcome</h6>
                                    <h3 class="sc_services_title sc_item_title">History of our church</h3>
                                    <div class="sc_services_descr sc_item_descr">
                                        <p>Grace African Christian Connections was launched by The Rt. Rev. Deon K. Johnson on October 22, 2022, as an African Church Plant in the Diocese of Missouri. Our current members are from Ghana, Nigeria, Liberia, Sierra Leone, Kenya, Tanzania, Uganda, Malawi, Zimbabwe, U.S.A, DRC Congo, Senegal, Jamaica, Belize and Rwanda.</p>

                                        <p>Majority of GACC members reside in the Diocese of Missouri, some reside in other States and countries, (Kenya, Tanzania, South Africa and Dubai) they together form GACC online Community.</p>
                                    </div>
                                    <div class="sc_columns columns_wrap">
                                        <div class="column-1_3 column_padding_bottom">
                                            <div class="sc_services_item sc_services_item_1 odd first">
                                                <div class="sc_services_item_header">
                                                    <span class="sc_icon icon-christian8"></span>
                                                    <h4 class="sc_services_item_title">Our Mission</h4>
                                                </div>
                                                <div class="sc_services_item_content" style="height: 200px;">
                                                    <div class="sc_services_item_description">
                                                        <h5 class="sc_title sc_title_regular margin_top_null">God Sees you To provide a worship space for spiritual upliftment and resources to meet people where they are, at the point of their need.</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><div class="column-1_3 column_padding_bottom">
                                            <div class="sc_services_item sc_services_item_2 even">
                                                <div class="sc_services_item_header">
                                                    <span class="sc_icon icon-open-book6"></span>
                                                    <h4 class="sc_services_item_title">Our Vision</h4>
                                                </div>
                                                <div class="sc_services_item_content"  style="height: 200px;">
                                                    <div class="sc_services_item_description">
                                                        <h5 class="sc_title sc_title_regular margin_top_null">I See You" To inspire and embrace worshippers. Giving them a place of belonging and acceptance irrespective of background.</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><div class="column-1_3 column_padding_bottom">
                                            <div class="sc_services_item sc_services_item_3 odd">
                                                <div class="sc_services_item_header">
                                                    <span class="sc_icon icon-profile"></span>
                                                    <h4 class="sc_services_item_title">Our Values</h4>
                                                </div>
                                                <div class="sc_services_item_content"  style="height: 200px;">
                                                    <div class="sc_services_item_description">
                                                        <h5 class="sc_title sc_title_regular margin_top_null">We See You" To instill hope, compassion, togetherness, and love. True worship of God and bearing one another's burdens.</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    
                    
                    <!-- Team section -->
                    <div class="sc_team_wrap scheme_original padding_top_2_5em padding_bottom_7_1429em">
                        <div class="content_wrap">
                            <div class="sc_team sc_team_style_team-1 sc_slider_nopagination sc_slider_nocontrols aligncenter width_100_per" data-interval="7176" data-slides-per-view="3" data-slides-min-width="250">
                                <h6 class="sc_team_subtitle sc_item_subtitle">Church Staff</h6>
                                <h2 class="sc_team_title sc_item_title">Our Senior Pastors, Leadership and Board</h2>
                                <div class="sc_columns columns_wrap">
                                    <!-- Team item 370x226  -->
                                    
                                    <div class="column-1_3 column_padding_bottom">
                                        <div class="sc_team_item sc_team_item_1 odd first">
                                            <div class="sc_team_item_avatar">
                                                <a class="sc_team_item_avatar_link" href="{{ url("#") }}">
                                                    <img alt="" style="height:370px;" src="{{ asset('images/team/1.jpg') }}">
                                                </a>
                                            </div>
                                            <div class="sc_team_item_info">
                                                <h5 class="sc_team_item_title">
                                                    <a href="{{ url("#") }}">The Rt. Rev. Deon K. Johnson</a>
                                                </h5>
                                                <div class="sc_team_item_position">11th Bishop of the Episcopal Diocese of Missouri</div>
                                                <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_twitter">
                                                            <span class="icon-twitter"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_facebook">
                                                            <span class="icon-facebook"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_gplus">
                                                            <span class="icon-gplus"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Team item -->
                                    <!-- Team item -->
                                    <div class="column-1_3 column_padding_bottom">
                                        <div class="sc_team_item sc_team_item_2 even">
                                            <div class="sc_team_item_avatar">
                                                <a class="sc_team_item_avatar_link" href="{{ url("#") }}">
                                                    <img alt="" style="height:370px;" src="{{ asset('images/team/2.jpg') }}">
                                                </a>
                                            </div>
                                            <div class="sc_team_item_info">
                                                <h5 class="sc_team_item_title">
                                                    <a href="{{ url("team-single.html") }}">The Rev. Mtipe Koggani</a>
                                                </h5>
                                                <div class="sc_team_item_position">Priest-in-charge</div>

                                                <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_twitter">
                                                            <span class="icon-twitter"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_facebook">
                                                            <span class="icon-facebook"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_instagramm">
                                                            <span class="icon-instagramm"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Team item -->
                                    <!-- Team item -->
                                    <div class="column-1_3 column_padding_bottom">
                                        <div class="sc_team_item sc_team_item_3 odd">
                                            <div class="sc_team_item_avatar">
                                                <a class="sc_team_item_avatar_link" href="{{ url("#") }}">
                                                    <img alt="" style="height:370px;" src="{{ asset('images/team/3.jpg') }}">
                                                </a>
                                            </div>
                                            <div class="sc_team_item_info">
                                                <h5 class="sc_team_item_title">
                                                    <a href="{{ url("#") }}">Josephine Ezenwa</a>
                                                </h5>
                                                <div class="sc_team_item_position">Lay Assistant to the Priest-in-Charge</div>
                                                <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_twitter">
                                                            <span class="icon-twitter"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_facebook">
                                                            <span class="icon-facebook"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_instagramm">
                                                            <span class="icon-instagramm"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_gplus">
                                                            <span class="icon-gplus"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Team item -->
                                    <div class="column-1_3 column_padding_bottom">
                                        <div class="sc_team_item sc_team_item_3 odd">
                                            <div class="sc_team_item_avatar">
                                                <a class="sc_team_item_avatar_link" href="{{ url("#") }}">
                                                    <img alt="" style="height:370px;" src="{{ asset('assets/images/user.png') }}">
                                                </a>
                                            </div>
                                            <div class="sc_team_item_info">
                                                <h5 class="sc_team_item_title">
                                                    <a href="{{ url("#") }}">Lucinda Dennis-Itoka</a>
                                                </h5>
                                                <div class="sc_team_item_position">Secretary</div>
                                                <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_twitter">
                                                            <span class="icon-twitter"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_facebook">
                                                            <span class="icon-facebook"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_instagramm">
                                                            <span class="icon-instagramm"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_gplus">
                                                            <span class="icon-gplus"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Team item -->
                                    <div class="column-1_3 column_padding_bottom">
                                        <div class="sc_team_item sc_team_item_3 odd">
                                            <div class="sc_team_item_avatar">
                                                <a class="sc_team_item_avatar_link" href="{{ url("#") }}">
                                                    <img alt="" style="height:370px;" src="{{ asset('images/team/4.jpg') }}">
                                                </a>
                                            </div>
                                            <div class="sc_team_item_info">
                                                <h5 class="sc_team_item_title">
                                                    <a href="{{ url("#") }}">Emmanuel Nsengimana</a>
                                                </h5>
                                                <div class="sc_team_item_position">Music Production Manager</div>
                                                <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_twitter">
                                                            <span class="icon-twitter"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_facebook">
                                                            <span class="icon-facebook"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_instagramm">
                                                            <span class="icon-instagramm"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_gplus">
                                                            <span class="icon-gplus"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Team item -->
                                    <div class="column-1_3 column_padding_bottom">
                                        <div class="sc_team_item sc_team_item_3 odd">
                                            <div class="sc_team_item_avatar">
                                                <a class="sc_team_item_avatar_link" href="{{ url("#") }}">
                                                    <img alt="" style="height:370px;" src="{{ asset('images/team/5.jpg') }}">
                                                </a>
                                            </div>
                                            <div class="sc_team_item_info">
                                                <h5 class="sc_team_item_title">
                                                    <a href="{{ url("#") }}">Major Selemani</a>
                                                </h5>
                                                <div class="sc_team_item_position">Chair; Wellness and Welfare Committee</div>
                                                <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_twitter">
                                                            <span class="icon-twitter"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_facebook">
                                                            <span class="icon-facebook"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_instagramm">
                                                            <span class="icon-instagramm"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_gplus">
                                                            <span class="icon-gplus"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Team item -->
                                    <div class="column-1_3 column_padding_bottom">
                                        <div class="sc_team_item sc_team_item_3 odd">
                                            <div class="sc_team_item_avatar">
                                                <a class="sc_team_item_avatar_link" href="{{ url("#") }}">
                                                    <img alt="" style="height:370px;" src="{{ asset('images/team/6.jpg') }}">
                                                </a>
                                            </div>
                                            <div class="sc_team_item_info">
                                                <h5 class="sc_team_item_title">
                                                    <a href="{{ url("#") }}">William Moses Kasansa</a>
                                                </h5>
                                                <div class="sc_team_item_position">Chair; Digital Department</div>
                                                <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_twitter">
                                                            <span class="icon-twitter"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_facebook">
                                                            <span class="icon-facebook"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_instagramm">
                                                            <span class="icon-instagramm"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_gplus">
                                                            <span class="icon-gplus"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Team item -->
                                    <div class="column-1_3 column_padding_bottom">
                                        <div class="sc_team_item sc_team_item_3 odd">
                                            <div class="sc_team_item_avatar">
                                                <a class="sc_team_item_avatar_link" href="{{ url("#") }}">
                                                    <img alt="" style="height:370px;" src="{{ asset('images/team/7.png') }}">
                                                </a>
                                            </div>
                                            <div class="sc_team_item_info">
                                                <h5 class="sc_team_item_title">
                                                    <a href="{{ url("#") }}">Douglas Mbongeni</a>
                                                </h5>
                                                <div class="sc_team_item_position">Band and Worship Leader</div>
                                                <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_twitter">
                                                            <span class="icon-twitter"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_facebook">
                                                            <span class="icon-facebook"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_instagramm">
                                                            <span class="icon-instagramm"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_gplus">
                                                            <span class="icon-gplus"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Team item -->
                                    <div class="column-1_3 column_padding_bottom">
                                        <div class="sc_team_item sc_team_item_3 odd">
                                            <div class="sc_team_item_avatar">
                                                <a class="sc_team_item_avatar_link" href="{{ url("#") }}">
                                                    <img alt="" style="height:370px;" src="{{ asset('images/team/8.jpg') }}">
                                                </a>
                                            </div>
                                            <div class="sc_team_item_info">
                                                <h5 class="sc_team_item_title">
                                                    <a href="{{ url("#") }}">AhSa-Ti NU</a>
                                                </h5>
                                                <div class="sc_team_item_position">Band and Vocal Trainer</div>
                                                <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_twitter">
                                                            <span class="icon-twitter"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_facebook">
                                                            <span class="icon-facebook"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_instagramm">
                                                            <span class="icon-instagramm"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_gplus">
                                                            <span class="icon-gplus"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Team item -->
                                    <div class="column-1_3 column_padding_bottom">
                                        <div class="sc_team_item sc_team_item_3 odd">
                                            <div class="sc_team_item_avatar">
                                                <a class="sc_team_item_avatar_link" href="{{ url("#") }}">
                                                    <img alt="" style="height:370px;" src="{{ asset('images/team/10.jpg') }}">
                                                </a>
                                            </div>
                                            <div class="sc_team_item_info">
                                                <h5 class="sc_team_item_title">
                                                    <a href="{{ url("#") }}">Kenneth Okonkwo</a>
                                                </h5>
                                                <div class="sc_team_item_position">Chair; International Student Ministry</div>
                                                <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_twitter">
                                                            <span class="icon-twitter"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_facebook">
                                                            <span class="icon-facebook"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_instagramm">
                                                            <span class="icon-instagramm"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_gplus">
                                                            <span class="icon-gplus"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Team item -->
                                    <div class="column-1_3 column_padding_bottom">
                                        <div class="sc_team_item sc_team_item_3 odd">
                                            <div class="sc_team_item_avatar">
                                                <a class="sc_team_item_avatar_link" href="{{ url("#") }}">
                                                    <img alt="" style="height:370px;" src="{{ asset('images/team/9.jpg') }}">
                                                </a>
                                            </div>
                                            <div class="sc_team_item_info">
                                                <h5 class="sc_team_item_title">
                                                    <a href="{{ url("#") }}">Admire Munanairi</a>
                                                </h5>
                                                <div class="sc_team_item_position">Chair; Worship Committee</div>
                                                <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_twitter">
                                                            <span class="icon-twitter"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_facebook">
                                                            <span class="icon-facebook"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_instagramm">
                                                            <span class="icon-instagramm"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_gplus">
                                                            <span class="icon-gplus"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Team section -->
                    
                </section>
            </article>
        </div>
        <!-- /Content -->
    </div>
    <!-- /Page Content Wrap -->



@stop
