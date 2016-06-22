<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
 
get_header(); ?>

	<?php get_template_part( 'parts/hero', 'index' ); ?>
	<?php get_template_part( 'parts/video-text', 'index' ); ?>
	<?php get_template_part( 'parts/3-column', 'index' ); ?>
	<?php get_template_part( 'parts/quote-left', 'index' ); ?>
	<?php get_template_part( 'parts/quote-right', 'index' ); ?>
	
	<?php get_template_part( 'parts/image-text', 'index' ); ?>

<?php get_footer(); ?>