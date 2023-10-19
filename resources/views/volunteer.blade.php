@extends('layout/master')

@section('content')


    <!-- Breadcrumbs -->
    <div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
        <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg3">
            <div class="content_wrap">
                <h1 class="page_title">Volunteer</h1>
                <div class="breadcrumbs">
                    <a class="breadcrumbs_item home" href="{{ url("/") }}">Home</a>
                    <span class="breadcrumbs_delimiter"></span>
                    <span class="breadcrumbs_item current">Volunteer</span>
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
               
                <div class="content_wrap padding_top_5_2857em padding_bottom_6_1429em">
                    <div id="sc_form_1_wrap" class="sc_form_wrap ">
                        <div id="sc_form_1" class="sc_form sc_form_style_form_2 aligncenter">
                            <h6 class="sc_form_subtitle sc_item_subtitle">Volunteer Form</h6>
                            <h2 class="sc_form_title sc_item_title">Please fill a form to volunteerat GACC</h2>
                            <div class="sc_columns columns_wrap">
                                
                                <div class="sc_form_fields column-2_3">
                                    <form id="sc_form_1_form" data-formtype="form_2" method="post" action="include/sendmail.php">
                                        <div class="sc_form_info">
                                            <div class="sc_form_item sc_form_field label_over">
                                                <label class="required" for="sc_form_username">Name</label>
                                                <input id="sc_form_username" type="text" name="username" placeholder="Name">
                                            </div>
                                            <div class="sc_form_item sc_form_field label_over">
                                                <label class="required" for="sc_form_email">E-mail</label>
                                                <input id="sc_form_email" type="text" name="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="sc_form_item sc_form_message label_over">
                                            <label class="required" for="sc_form_message">Message</label>
                                            <textarea id="sc_form_message" name="message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="sc_form_item sc_form_button">
                                            <button class="sc_button sc_button_square sc_button_style_filled sc_button_color_style_2 sc_button_size_large">Submit</button>
                                        </div>
                                        <div class="result sc_infobox"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </div>
    <!-- /Content -->
</div>
<!-- /Page Content Wrap -->


@stop
