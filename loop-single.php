<?php
/**
 * The loop that displays a single post.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="blog-post">
	<div class="fw-container">
		<div class="blog-title">
			
			<?php if ( is_front_page() ) { ?>
			<h2><?php the_title(); ?></h2>
			<?php } else { ?>	
			<h1><?php the_title(); ?></h1>
			<?php } ?>
			<h4>by <?php the_author(); ?> of <a href="http://thepioneer.co" target="_blank">The Pioneer</a></h4>
			<h5>published <?php the_date(); ?></h5>
			
		</div>
		<?php $page_id = get_the_ID(); ?>
	</div>	
	<div class="fw-container">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<img src="<?php echo types_render_field( 'article-background', array( 'url' => 'true' ) ) ?>" class="lead-image" />
		
			
			<?php the_content(); ?>	
				
		</article>
		<div class="sidebar">
			<div class="headline">The Tour Schedule</div>
			<div class="schedule-item">
				<a href="http://virginiavelocitytour.org/roanoke-and-blacksburg"><img src="<?php echo get_template_directory_uri ();?>/images/roanoke.jpg" class="city" /></a>
				<p><span class="name">Roanoke & Blacksburg</span><br>
				<span class="date">Mon Sep 19</span><br>
				<span class="view"><a href="http://virginiavelocitytour.org/roanoke-and-blacksburg">View the schedule &rarr;</a></p>
			</div>
			<div class="schedule-item">
				<a href="http://virginiavelocitytour.org/richmond"><img src="<?php echo get_template_directory_uri ();?>/images/richmond.jpg" class="city" /></a>
				<p><span class="name">Richmond</span><br>
				<span class="date">Tues Sep 20</span><br>
				<span class="view"><a href="http://virginiavelocitytour.org/richmond">View the schedule &rarr;</a></p>
			</div>
			<div class="schedule-item">
				<a href="http://virginiavelocitytour.org/hampton-roads"><img src="<?php echo get_template_directory_uri ();?>/images/virginia-beach.jpg" class="city" /></a>
				<p><span class="name">Hampton Roads</span><br>
				<span class="date">Wed Sep 21</span><br>
				<span class="view"><a href="http://virginiavelocitytour.org/hampton-roads">View the schedule &rarr;</a></p>
			</div>
			<div class="schedule-item">
				<a href="http://virginiavelocitytour.org/northern-virginia"><img src="<?php echo get_template_directory_uri ();?>/images/nova.jpg" class="city" /></a>
				<p><span class="name">Northern Virginia</span><br>
				<span class="date">Thurs Sep 22</span><br>
				<span class="view"><a href="http://virginiavelocitytour.org/roanoke-and-blacksburg">View the schedule &rarr;</a></p>
			</div>
			<div class="schedule-item">
				<a href="http://virginiavelocitytour.org/charlottesville"><img src="<?php echo get_template_directory_uri ();?>/images/cville.jpg" class="city" /></a>
				<p><span class="name">Charlottesville</span><br>
				<span class="date">Fri Sep 23</span><br>
				<span class="view"><a href="http://virginiavelocitytour.org/charlottesville">View the schedule &rarr;</a></p>
			</div>

		</div>
	</div>
</div>

<?php endwhile; // end of the loop. ?>