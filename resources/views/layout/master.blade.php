<!DOCTYPE html>
<html lang="en-US" class="scheme_original">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">

        <title>GACC</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caveat:400,700|Lato:300,300i,400,400i,700,700i|Raleway:300,300i,400,400i,700,700i&amp;subset=latin-ext">
        <link rel="stylesheet" href="{{ asset("/css/fontello/css/fontello.css") }}" type="text/css" media="all" />

        <link rel="stylesheet" href="{{ asset("/js/vendor/essential-grid/css/settings.css") }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset("/js/vendor/essential-grid/css/lightbox.css") }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset("/css/tpl-essential-grids.min.css") }}" type="text/css" media="all" />

        <link rel="stylesheet" href="{{ asset("/js/vendor/revslider/css/settings.css") }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset("/css/plugin.revslider.min.css") }}" type="text/css" media="all" />

        <link rel="stylesheet" href="{{ asset("/css/style.min.css") }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset("/css/core.animation.min.css") }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset("/css/shortcodes.min.css") }}" type="text/css" media="all" />

        <link rel="stylesheet" href="{{ asset("/css/plugin.instagram-widget.min.css") }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset("/js/vendor/html5-jquery-audio-player/css/style.css") }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset("/css/plugin.html5-jquery-audio-player.min.css") }}" type="text/css" media="all" />

        <link rel='stylesheet' href='js/vendor/swiper/swiper.min.css' type='text/css' media='all' />

        <link rel="stylesheet" href="{{ asset("/css/skin.min.css") }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset("/css/responsive.min.css") }}" type="text/css" media="all" />

        <link rel="stylesheet" href="{{ asset("/css/core.messages.min.css") }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset("/js/vendor/magnific/magnific-popup.min.css") }}" type="text/css" media="all" />

        <link rel="icon" href="{{ asset('images/logo.png') }}" />
        <link rel="icon" href="{{ asset('images/logo.png') }}" />
        <link rel="apple-touch-icon-precomposed" href="{ asset('images/logo.png') }}" />

        

        <link rel="stylesheet" href="{{ asset("/js/vendor/content_timeline/css/timeline.css") }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset("/js/vendor/content_timeline/css/jquery.mCustomScrollbar.css") }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset("/js/vendor/content_timeline/css/prettyPhoto.css") }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset("/js/vendor/content_timeline/css/awesome/font-awesome.css") }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset("/js/vendor/content_timeline/css/themify-icons.css") }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset("/js/mediaelement/mediaelementplayer.min.css") }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset("/css/plugin.timeline.min.css") }}" type="text/css" media="all" />

        

        <link rel="stylesheet" href="{{ asset("/css/core.messages.min.css") }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset("/js/vendor/magnific/magnific-popup.min.css") }}" type="text/css" media="all" />


        <style>

           


        </style>
    </head>


    <body class="home page body_style_wide body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_hide">
        <a id="toc_home" class="sc_anchor" title="Home" data-description="<i>Return to Home</i> - <br>navigate to home page of the site" data-icon="icon-home" data-url="index.html" data-separator="yes"></a>
        <a id="toc_top" class="sc_anchor" title="To Top" data-description="<i>Back to top</i> - <br>scroll to top of the page" data-icon="icon-double-up" data-url="" data-separator="yes"></a>

        <!-- Body wrap -->
        <div class="body_wrap">
            <!-- Page wrap -->
            <div class="page_wrap">
              <div class="top_panel_fixed_wrap"></div>


               @include('layout.header')

               @yield('content') 

               @include('layout.footer')
               @include('layout.copyright')
            </div>
            <!-- /Page wrap -->
        </div>
        <!-- /Body wrap -->






        <a href="{{ url("#") }}" class="scroll_to_top icon-up" title="Scroll to top"></a>

        

        

        <script type="text/javascript" src="{{ asset("/js/jquery/jquery.js") }}"></script>
        <script type="text/javascript" src="{{ asset("/js/jquery/jquery-migrate.min.js") }}"></script>

        <script type="text/javascript" src="{{ asset("/js/vendor/photostack/modernizr.min.js") }}"></script>
        <script type="text/javascript" src="{{ asset("/js/_main.min.js") }}"></script>
        <script type="text/javascript" src="{{ asset("/js/_packed.js") }}"></script>

        <script type="text/javascript" src="{{ asset("/js/vendor/essential-grid/js/lightbox.js") }}"></script>
        <script type="text/javascript" src="{{ asset("/js/vendor/essential-grid/js/jquery.themepunch.tools.min.js") }}"></script>
        <script type="text/javascript" src="{{ asset("/js/vendor/essential-grid/js/jquery.themepunch.essential.min.js") }}"></script>
        <script type="text/javascript" src="{{ asset("/js/essential-grid-homepage-1.min.js") }}"></script>

        <script type="text/javascript" src="{{ asset("/js/vendor/revslider/jquery.themepunch.revolution.min.js") }}"></script>

        <script type="text/javascript" src="{{ asset("/js/vendor/revslider/revolution.extension.slideanims.min.js") }}"></script>
        <script type="text/javascript" src="{{ asset("/js/vendor/revslider/revolution.extension.layeranimation.min.js") }}"></script>
        <script type="text/javascript" src="{{ asset("/js/vendor/revslider/revolution.extension.navigation.min.js") }}"></script>
        <script type="text/javascript" src="{{ asset("/js/revslider-homepage-1.min.js") }}"></script>

        <script type="text/javascript" src="{{ asset("/js/vendor/html5-jquery-audio-player/jquery-jplayer/jquery.jplayer.js") }}"></script>
        <script type="text/javascript" src="{{ asset("/js/ttw-musicplayer-homepage-1.min.js") }}"></script>

        <script type="text/javascript" src="{{ asset("/js/superfish.min.js") }}"></script>
        <script type="text/javascript" src="{{ asset("/js/core.utils.min.js") }}"></script>
        <script type="text/javascript" src="{{ asset("/js/core.init.min.js") }}"></script>
        <script type="text/javascript" src="{{ asset("/js/template.init.min.js") }}"></script>

        <script type="text/javascript" src="{{ asset("/js/shortcodes.min.js") }}"></script>
        <script type="text/javascript" src="{{ asset("/js/core.messages.min.js") }}"></script>
        <script type="text/javascript" src="{{ asset("/js/vendor/magnific/jquery.magnific-popup.min.js") }}"></script>

        <script type="text/javascript" src="{{ asset("/js/countdown/jquery.plugin.min.js") }}"></script>
        <script type="text/javascript" src="{{ asset("/js/countdown/jquery.countdown.min.js") }}"></script>
        <script type="text/javascript" src="{{ asset("/js/vendor/swiper/swiper.min.js") }}"></script>
        <script type="text/javascript" src="{{ asset("/js/vendor/isotope/dist/isotope.pkgd.min.js") }}"></script>


        



        <script type="text/javascript" src="{{ asset("/js/vendor/content_timeline/js/jquery.easing.1.3.js") }}"></script>
        <script type="text/javascript" src="{{ asset("/js/vendor/content_timeline/js/jquery.timeline.js") }}"></script>
        <script type="text/javascript" src="{{ asset("/js/vendor/content_timeline/js/jquery.mousewheel.min.js") }}"></script>
        <script type="text/javascript" src="{{ asset("/js/vendor/content_timeline/js/jquery.mCustomScrollbar.min.js") }}"></script>
        <script type="text/javascript" src="{{ asset("/js/vendor/content_timeline/js/rollover.js") }}"></script>
        <script type="text/javascript" src="{{ asset("/js/vendor/content_timeline/js/jquery.prettyPhoto.js") }}"></script>
        <script type="text/javascript" src="{{ asset("/js/vendor/content_timeline/js/jquery.my_add_function.js") }}"></script>


        <script type="text/javascript" src="{{ asset("/js/vendor/revslider/jquery.themepunch.revolution.min.js") }}"></script>

        <script type="text/javascript" src="{{ asset("/js/vendor/revslider/revolution.extension.slideanims.min.js") }}"></script>
        <script type="text/javascript" src="{{ asset("/js/vendor/revslider/revolution.extension.layeranimation.min.js") }}"></script>
        <script type="text/javascript" src="{{ asset("/js/vendor/revslider/revolution.extension.navigation.min.js") }}"></script>
        <script type="text/javascript" src="{{ asset("/js/revslider-homepage-3.min.js") }}"></script>


        <script type='text/javascript' src="{{ asset("/js/mediaelement/mediaelement-and-player.min.js") }}"></script>
        <script type="text/javascript" src="{{ asset("/js/homepage-3-timeline.min.js") }}"></script>


        

        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAA8O_i6YWSOXQn1vd9SSiIriIqewvBFWk"></script>
        <script type="text/javascript" src="{{ asset("/js/core.googlemap.min.js") }}"></script>


        <script type="text/javascript" src="{{ asset("/js/gallery-grid.min.js") }}"></script>
        


        
        <script>
            function submitsubcriptionForm(){

                
                var formData = $('#subscriptionForm').serialize();
                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                
                $.ajax({
                    url: '{{ route('subscription.store') }}',
                    type: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function (response) {
                        console.log(response);
                        
                        $('#subscribeModal').modal('hide');
                    },
                    error: function (error) {
                        
                    }
                });

            }
        </script>

    </body>

</html>