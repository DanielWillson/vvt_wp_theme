<?php /* Template Name: Posts Page */ ?>

<?php get_header(); 

?>
<div class="posts-page">
	<div class="fw-container">
	<div class="title">
		Recent Stories
	</div>
		<ul>
			<?php 
			$args = array (
				'post_type' => 'post'
			);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			?>
			<li>
				<div class="image">
					<a href="<?php the_permalink(); ?>">
					<img src="<?php echo types_render_field( 'article-background', array( 'url' => 'true' ) ) ?>" class="lead-image" />
				</a>
				</div>
				<div class="description">
					<div class="heading">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
					<div class="summary">
						<p>
						<?php $excerpt = get_the_excerpt(); 
							$excerpt = substr($excerpt, 0, ($excerpt.strlen() - 200));
							$excerpt .= "...";
							echo $excerpt;
						?>
						</p>
						<a href="<?php the_permalink(); ?>" class="more">Read More &rarr;</a>
					</div>
				</div>
			</li>
			<?php endwhile; // end of the loop. ?>
		</ul>
	</div>
</div>
<?php get_footer(); ?>
