<div class="day-sponsor"style="background: url('<?php echo get_template_directory_uri (); ?>/images/crossword.png');">
	<div class="fw-container">
		<h2>Supporting Sponsors and Partners</h2>
		<ul class="sponsors">
		<?php 

		$city = get_the_title();
		$city_number = 0;
		if (strcmp($city, "Roanoke and Blacksburg") == 0) { $city_number = 1; }
		else if (strcmp($city, "Richmond") == 0) { $city_number = 2; }
		else if (strcmp($city, "Hampton Roads") == 0) { $city_number = 3; }
		else if (strcmp($city, "Northern Virginia") == 0) { $city_number = 4; }
		else if (strcmp($city, "Charlottesville") == 0) { $city_number = 5; }
		else {}

		$args = array (
			'post_type' => 'sponsor',
		);
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();

		?>
			<?php 
				$sponsor_city_number = types_render_field( 'days', array() );
				$level = types_render_field( 'sponsorship-level', array() );

				if ($sponsor_city_number == $city_number) {

					if (!strcmp($level, "Day") == 0) {
						if (!strcmp($level, "Presenting") == 0) {
							?>
							<li class="sponsor">
								<a href="<?php echo types_render_field( 'sponsor-website', array('output' => 'raw')); ?>" target="_blank">
									<img src="<?php echo types_render_field( 'logo', array('url' => 'true')); ?>" />
								</a>
							</li>
					<?php
					} }
				}
				else {}
			?>

		<?php endwhile; 
		wp_reset_query();

		?>	
		</ul>
	</div>
</div>