<!-- Header -->
<header class="top_panel_wrap top_panel_style_3 scheme_original">
    <div class="top_panel_wrap_inner top_panel_inner_style_3 top_panel_position_above">


        <!-- Top panel : Bar -->
        <div class="top_panel_top" style=" background-color: black; ">
            <div class="content_wrap clearfix">
                <!-- Contacts area -->
                <div class="top_panel_top_contact_area">
                    Phone: 314-255-1373, ext. 1373 |  <a href="mailto:graceafrican2022@gmail.com">graceafrican2022@gmail.com</a>
                </div>
                <!-- /Contacts area -->
                <!-- User area -->
                <div class="top_panel_top_user_area">
                    <!-- User login -->
                    <ul id="menu_user" class="menu_user_nav">
                        <li class="menu_user_login">
                            <a href="#popup_login" class="popup_link popup_login_link icon-user"></a>
                        </li>
                    </ul>
                    <!-- /User login -->
                    <!-- Socials -->
                    <div class="top_panel_top_socials">
                        <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_tiny">
                            <div class="sc_socials_item">
                                <a href="https://www.facebook.com/profile.php?id=100083778636509" target="_blank" class="social_icons social_facebook">
                                    <span class="icon-facebook"></span>
                                </a>
                            </div>

                            <div class="sc_socials_item">
                                <a href="https://instagram.com/gacc_2022?igshid=MzRlODBiNWFlZA==" target="_blank" class="social_icons social_instagramm">
                                    <span class="icon-instagramm"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /Socials -->
                    <!-- Search -->
                    <div class="top_panel_top_search">
                        <div class="search_wrap search_style_regular search_state_closed">
                            <div class="search_form_wrap">
                                <form role="search" method="get" class="search_form" action="#">
                                    <button type="submit" class="search_submit icon-search" title="Open search"></button>
                                    <input type="text" class="search_field" placeholder="Search" value="" name="s" />
                                </form>
                            </div>
                            <div class="search_results widget_area scheme_original">
                                <a class="search_results_close icon-cancel"></a>
                                <div class="search_results_content"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /Search -->
                </div>
                <!-- /User area -->
            </div>
        </div>
        <!-- /Top panel : Bar -->



        <!-- Menu area -->
        <div class="top_panel_middle">
            <div class="content_wrap">
                <!-- Contact logo -->
                <div class="contact_logo">
                    <div class="logo">
                        <a href="{{ url("/") }}">
                            <img src="{{ asset('images/logo.png') }}" class="logo_main" alt="GACC">
                            <img src="{{ asset('images/logo.png') }}" class="logo_fixed" alt="GACC">
                        </a>
                    </div>
                </div>
                <!-- /Contact logo -->
                <!-- Main Menu -->
                <div class="menu_main_wrap">
                    <nav class="menu_main_nav_area">
                        <ul id="menu_main" class="menu_main_nav">
                            <!-- Home -->
                            <li class="menu-item @if(Route::currentRouteName() === 'welcome') current-menu-ancestor current-menu-parent @endif">
                                <a href="{{ url("/") }}">Welcome</a>
                                
                            </li>
                            <!-- /Home -->
                            <!-- Pages -->
                            <li class="menu-item @if(Route::currentRouteName() === 'about') current-menu-ancestor current-menu-parent @endif">
                                <a href="{{ route('about') }}">About Us</a>
                                
                            </li>
                            <!-- /Pages -->
                            <!-- Events -->
                            <li class="menu-item @if(Route::currentRouteName() === 'events') current-menu-ancestor current-menu-parent @endif">
                                <a href="{{ url("/events") }}">Events</a>
                            </li>
                            <!-- /Events -->
                            
                            <!-- Gallery -->
                            <li class="menu-item @if(Route::currentRouteName() === 'gallery') current-menu-ancestor current-menu-parent @endif">
                                <a href="{{ url("/gallery") }}">Gallery</a>
                                
                            </li>
                            <!-- /Gallery -->
                            <!-- Blog -->
                            <li class="menu-item @if(Route::currentRouteName() === 'contacts') current-menu-ancestor current-menu-parent @endif">
                                <a href="{{ url("/contacts") }}">Contacts</a>
                            </li>
                            <!-- /Blog -->
                            <!-- Donate -->
                            <li class="donate-btn menu-item">
                                <a href="https://form.jotform.com/232757120127147" target="_blank">Become GACC member</a>
                            </li>
                            <!-- /Donate -->
                            <!-- Donate -->
                            <li class="donate-btn menu-item">
                                <a href="{{ url("/donate") }}">Give</a>
                            </li>
                            <!-- /Donate -->

                            
                        </ul>
                    </nav>
                </div>
                <!-- /Main Menu -->
            </div>
        </div>
        <!-- /Menu area -->
    </div>
</header>
<!-- /Header -->
<!-- Header Mobile -->
<div class="header_mobile">
    <div class="content_wrap">
        <div class="menu_button icon-menu"></div>
        <div class="logo">
            <a href="{{ url("/") }}">
                <img src="{{ asset('images/logo.png') }}" class="logo_main" alt="GACC">
            </a>
        </div>
    </div>
    <div class="side_wrap">
        <div class="close">Close</div>
        <div class="panel_top">
            <nav class="menu_main_nav_area">
                <ul id="menu_main_mobile" class="menu_main_nav">
                    <!-- Home -->
                    <li class="menu-item current-menu-ancestor current-menu-parent menu-item-has-children">
                        <a href="{{ url("/") }}">Welcome</a>
                    </li>
                    <!-- /Home -->
                    <!-- Pages -->
                    <li class="menu-item menu-item-has-children">
                        <a href="{{ url("/about") }}">About</a>
                    </li>
                    <!-- /Pages -->
                    <!-- Events -->
                    <li class="menu-item">
                        <a href="{{ url("/events") }}">Events</a>
                    </li>
                    <!-- /Events -->
                    <!-- Sermons -->
                    <li class="menu-item menu-item-has-children">
                        <a href="{{ url("/sermons") }}">Sermons</a>
                    </li>
                    <!-- /Sermons -->
                    <!-- Gallery -->
                    <li class="menu-item menu-item-has-children">
                        <a href="{{ url("/gallery") }}">Gallery</a>
                    </li>
                    <!-- /Gallery -->
                    <!-- Blog -->
                    <li class="menu-item">
                        <a href="{{ url("/contacts") }}">Contacts</a>
                    </li>
                    <!-- /Blog -->
                    <!-- Donate -->
                    <li class="donate-btn menu-item">
                        <a href="{{ url("/donate") }}">Give</a>
                    </li>
                    <!-- /Donate -->
                </ul>
            </nav>
            <!-- Search -->
            <div class="search_wrap search_style_regular search_state_fixed">
                <div class="search_form_wrap">
                    <form role="search" method="get" class="search_form" action="#">
                        <button type="submit" class="search_submit icon-search" title="Start search"></button>
                        <input type="text" class="search_field" placeholder="Search" value="" name="s" />
                    </form>
                </div>
                <div class="search_results widget_area scheme_original">
                    <a class="search_results_close icon-cancel"></a>
                    <div class="search_results_content"></div>
                </div>
            </div>
            <!-- /Search -->
        </div>
        <!-- Socials panel -->
        <div class="panel_bottom">
            <div class="contact_socials">
                <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_small">
                    <div class="sc_socials_item">
                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_facebook">
                            <span class="icon-facebook"></span>
                        </a>
                    </div>
                    <div class="sc_socials_item">
                        <a href="{{ url("#") }}" target="_blank" class="social_icons social_twitter">
                            <span class="icon-twitter"></span>
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
        <!-- /Socials panel -->
    </div>
    <div class="mask"></div>
</div>