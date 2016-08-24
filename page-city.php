<?php /* Template Name: City Page */ ?>

<?php get_header(); ?>
<div class="city-page">
	<?php get_template_part( 'parts/city-hero', 'page-city' ); ?>
	<?php get_template_part( 'parts/city-text', 'page-city' ); ?>
	<?php get_template_part( 'parts/day-sponsors', 'page-city' ); ?>
	<?php get_template_part( 'parts/subscribe-box', 'page-city' ); ?>
	<?php get_template_part( 'parts/supporting-sponsors', 'page-city' ); ?>
</div>
<?php get_footer(); ?>
