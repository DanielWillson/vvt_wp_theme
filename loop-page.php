<?php
/**
 * The loop that displays a page.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="article-title">
	<div class="fw-container">
		<article>
			<?php if ( is_front_page() ) { ?>
				<h2><?php the_title(); ?></h2>
			<?php } else { ?>	
				<h1><?php the_title(); ?></h1>
			<?php } ?>
		</article>
	</div>
</div>	
<div class="article-content">
	<div class="fw-container">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						

				<?php the_content(); ?>
						
				<?php wp_link_pages( array( 'before' => '<nav>' . __( 'Pages:', 'starkers' ), 'after' => '</nav>' ) ); ?>
						
				<?php edit_post_link( __( 'Edit', 'starkers' ), '', '' ); ?>
		</article>
	</div>
</div>
<?php endwhile; ?>