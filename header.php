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

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
     
    <script src="<?php bloginfo('template_directory'); ?>/js/modernizr-1.6.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" />




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
            <div class="header">
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