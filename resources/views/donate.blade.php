@extends('layout/master')

@section('content')



    <!-- Breadcrumbs -->
    <div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
        <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg3">
            <div class="content_wrap">
                <h1 class="page_title">All donations</h1>
                <div class="breadcrumbs">
                    <a class="breadcrumbs_item home" href="{{ url("index.html") }}">Home</a>
                    <span class="breadcrumbs_delimiter"></span>
                    <a class="breadcrumbs_item all" href="{{ url("#") }}">Give</a>
                    <span class="breadcrumbs_delimiter"></span>
                    <span class="breadcrumbs_item current">All donations</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumbs -->
    <!-- Page Content Wrap -->
    <div class="page_content_wrap page_paddings_no">
        <div class="content_wrap">
            <!-- Content -->
            <div class="content">
                <article class="post_item post_item_excerpt odd last donation">
                    <div class="post_content clearfix">
                        <h3 class="post_title">
                            <a href="#">How can I donate/give to the church?</a>
                        </h3>
                        
                        <div class="post_descr">
                            <p>Text DIOMO GraceAfrican to 73256 to give to the Grace African Christians fund using your text messaging. Standard text messaging rates may apply. </p>
                            <p>Write a check to the Episcopal Diocese of Missouri, with a note, “Grace African” </p>
                            <p>NB: Please include a note, “GACC international students” if you are donating to our international student ministry OR “Grace African” if it is a general donation. </p>
                            <a href="https://secure.accessacs.com/access/oglogin.aspx?sn=96035" class="sc_button sc_button_square sc_button_style_filled sc_button_color_style_2 sc_button_size_large">Donate</a>
                        </div>
                    </div>
                </article>
            </div>
            <!-- /Content -->
        </div>
    </div>
    <!-- /Page Content Wrap -->


@stop

