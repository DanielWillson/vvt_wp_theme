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
	    <div class="footer-top">
	    	<div class="fw-container">
				<h2>Virginia Velocity Tour Sponsors</h2>
				<ul class="sponsors">
					<li class="sponsor">
						<a href="#" target="_blank">
							<img src="<?php echo get_template_directory_uri (); ?>/images/vilcap.png" />
						</a>
					</li>
					<li class="sponsor">
						<a href="#" target="_blank">
							<img src="<?php echo get_template_directory_uri (); ?>/images/vilcap.png" />
						</a>
					</li>
					<li class="sponsor">
						<a href="#" target="_blank">
							<img src="<?php echo get_template_directory_uri (); ?>/images/vilcap.png" />
						</a>
					</li>
					<li class="sponsor">
						<a href="#" target="_blank">
							<img src="<?php echo get_template_directory_uri (); ?>/images/vilcap.png" />
						</a>
					</li>
					<li class="sponsor">
						<a href="#" target="_blank">
							<img src="<?php echo get_template_directory_uri (); ?>/images/vilcap.png" />
						</a>
					</li>
	    	</div>
		</div>
		<div class="footer-bottom">
			<div class="fw-container">
				<p>© Virginia Velocity 2016. <a href="#">Privacy Policy</a> 
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