<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>

	<footer>
	    <div class="footer-top" style="background: url('<?php echo get_template_directory_uri (); ?>/images/crossword.png');">
	    	<div class="fw-container">
				<h2>Virginia Velocity Tour Presenting Sponsors</h2>
				<ul class="sponsors">
					<?php 
					$args = array (
						'post_type' => 'sponsor',
						'posts_per_page' => 60
					);
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();

					?>
						<?php 
							$level = types_render_field( 'sponsorship-level', array() );
							if (strcmp($level, "Presenting") == 0) {
								?>
								<li class="sponsor">
									<a href="<?php echo types_render_field( 'sponsor-website', array('output' => 'raw')); ?>" target="_blank">
										<img src="<?php echo types_render_field( 'logo', array('url' => 'true')); ?>" />
									</a>
								</li>
								<?php
							}
							else {}
							
						?>

					<?php endwhile; 
					wp_reset_query();
					?>	
				</ul>
	    	</div>
		</div>
		<div class="footer-bottom">
			<div class="fw-container">
				<p>© Virginia Velocity 2016. <a href="<?php echo get_site_url(); ?>/privacy/">Privacy Policy</a> 
	    	</div>
		</div>
	</footer>

	<?php
		/* Always have wp_footer() just before the closing </body>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to reference JavaScript files.
		 */

		wp_footer();
	?>
</body>
</html>