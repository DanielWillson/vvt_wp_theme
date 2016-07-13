<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php
     
        global $page, $paged;
     
        wp_title( '|', true, 'right' );
     
        bloginfo( 'name' );
     
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";
     
        if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s', 'starkers' ), max( $paged, $page ) );
     
        ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
     
    <script src="<?php bloginfo('template_directory'); ?>/js/modernizr-1.6.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" />

    <!-- GA -->
<!--<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80132589-1', 'auto');
  ga('send', 'pageview');

</script>-->
    <!-- END GA -->

    <?php
        /* We add some JavaScript to pages with the comment form
         * to support sites with threaded comments (when in use).
         */
        if ( is_singular() && get_option( 'thread_comments' ) )
            wp_enqueue_script( 'comment-reply' );
     
        /* Always have wp_head() just before the closing </head>
         * tag of your theme, or you will break many plugins, which
         * generally use this hook to add elements to <head> such
         * as styles, scripts, and meta tags.
         */
        wp_head();
    ?>
</head>
<body <?php body_class(); ?>>
    <!-- FB SDK -->
    <script>
        window.fbAsyncInit = function() {
        FB.init({
          appId      : '1073102732783457',
          xfbml      : true,
          version    : 'v2.6'
        });
        };

        (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- END FB SDK -->
    <script>
    $(document).ready(function(){
        /* Used to toggle the appearance of the drop-down mobile nav menu */
        $("#show-button").click(function(){
            $("#menu-dropdown").fadeToggle("fast");
            
        });
    });
    </script>
    <header>
        <div class="fw-container">
            <div class="header clear">
                <div class="new-nav-container left" id="desktop">
                    <?php wp_nav_menu( array( 'container' => 'nav', 'fallback_cb' => 'starkers_menu', 'theme_location' => 'left_primary' ) ); ?>
                </div>
                <div class="new-logo-container">
                    <div class="logo-holder">
                        <a href="<?php echo get_home_url() ; ?>"><img src="<?php echo get_template_directory_uri (); ?>/images/logo.png" /></a>
                    </div>
                </div>
                <div class="new-nav-container right" id="desktop">
                    <?php wp_nav_menu( array( 'container' => 'nav', 'fallback_cb' => 'starkers_menu', 'theme_location' => 'right_primary' ) ); ?>
                </div>
                <div id="show-button">
                    <div class="nav-container show-button">
                        <img src="<?php echo get_template_directory_uri (); ?>/images/navicon-white.png" alt="Menu" class="navicon">
                        <div id="menu-dropdown">
                            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header old">
                <div class="logo-container">
                    <!-- <img src="<?php echo get_template_directory_uri (); ?>/images/logo-sample.png" /> -->
                </div>
                <!-- Nav for Desktop -->
                <div class="nav-container" id="desktop">
                    <?php wp_nav_menu( array( 'container' => 'nav', 'fallback_cb' => 'starkers_menu', 'theme_location' => 'primary' ) ); ?>
                </div>
                <!-- Nav for Mobile -->
                <div id="show-button">
                    <div class="nav-container show-button">
                        <img src="<?php echo get_template_directory_uri (); ?>/images/navicon.gif" alt="Menu" class="navicon">
                        <div id="menu-dropdown">
                            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>