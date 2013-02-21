<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

    <head profile="http://gmpg.org/xfn/11">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

        <! Dynamic Title Tag Optimized for Search Engine Visibility -->
        <title><?php
if (is_front_page()) {
    bloginfo('description');
} elseif (is_search()) {
    bloginfo('name');
   ?> &raquo; Search Results for: <?php
            echo wp_specialchars($s, 1);
        } else {
            wp_title('', true);
   ?> &#8212; <?php
            bloginfo('name');
        }
?></title>


        <!-- These two lines call the css files essential for the 960 grid system - DO NOT REMOVE!! -->
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/css/960.css" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <!-- Conditional comments for IE. Use ie7.css and ie6.css for custom css for Internet Explorer version 7 and 6 if necessary. -->
        <!--[if IE 7]>
        <style type="text/css" media="screen">
                @import url( <?php bloginfo('stylesheet_directory'); ?>/ie7.css );
        </style>
        <![endif]-->	
        <!--[if IE 6]>
        <style type="text/css" media="screen">
                @import url( <?php bloginfo('stylesheet_directory'); ?>/ie6.css );
        </style>
        <![endif]-->	

        <!-- uncomment the following style to view the grid as a background image -->
        <!--
        <style type="text/css" media="all">
        .container_12
        {
                background: #fff url(<?php bloginfo('stylesheet_directory'); ?>/images/12_col.gif) repeat-y;
        }
        .container_16
        {
                background: #fff url(<?php bloginfo('stylesheet_directory'); ?>/images/16_col.gif) repeat-y;
        }
        </style>
        -->

        <?php if (is_singular()) wp_enqueue_script('comment-reply'); ?>	
<?php wp_enqueue_script("jquery"); ?>
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-18787628-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();

        </script>


<?php wp_head(); ?>

    </head>
    <body>
        <div id="page" <?php echo (is_front_page()) ? 'class="home"' : 'class="not-home"' ?>>
            <div id="strap-header">
                <div class="container_12">
                    <div class="grid_10 prefix_2 contact-header">
                        <p><a href="mailto:info@napier.co.uk">info@napier.co.uk</a> | 0207 078 0849</p>
                    </div>
                </div>
            </div>
            <!-- possible full width header -->
            <div id="header">


                <div id="masthead" class="container_12">

                    <div id="branding" class="grid_3 suffix_2">
                        <div id="logo"><a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="Napier - B2b Technology PR and Marketing" /></a></div>				
                    </div><!-- end branding -->
                    <div class="grid_7">
                        <div id="tag-line">
                            <div id="site-description"><?php bloginfo('description'); ?></div>
                            <!-- <div id="telephone">0207 078 0849</div>-->
                        </div>
                    </div>

                    <!-- skip to content and menu links - these are hidden with screen reader friendly css for accessibility -->
                    <div id="skip">
                        <p></p><a href="#wrapper" title="skip to main content">skip to main content</a></p>
                        <p></p><a href="#main-menu" title="skip to main menu">skip to main menu</a></p>
                    </div><!-- end skip -->
                    <div class="clear"></div>

                </div><!-- end headerContainer -->

            </div><!-- end header -->
            <div id="nav-wrapper">
                <div class="container_12">
                    <div class="grid_12">
                        <?php wp_nav_menu(array('theme_location' => 'nav', 'container_id' => 'nav')); ?>
<?php if (!is_front_page()) { ?><!--<div id="nav-shadow"></div>--><?php } ?>
                    </div>

                    <div class="clear"></div>

                </div>
            </div>
            <div id="wrapper-container">
                <div id="wrapper" class="container_12">
                    <?php
                    //add breadcrumbs to all but front page
                    if (!is_front_page()) {
                        echo '<div class="grid_12">';
                        if (function_exists('wordpress_breadcrumbs'))
                            wordpress_breadcrumbs();
                        echo '</div>';
                    }
                    ?>