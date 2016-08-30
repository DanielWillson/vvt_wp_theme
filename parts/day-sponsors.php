<div class="day-sponsor">
	<div class="fw-container">
		<h2>Day Sponsors and Partners</h2>
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
			'posts_per_page' => 60
		);
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();

			$sponsor_city_number = types_render_field( 'days', array() );
			$stringCheck = (string)$city_number;
			$level = types_render_field( 'sponsorship-level', array() );

			// echo types_render_field( 'sponsor-website', array('output' => 'raw')); 
			// echo " " . $stringCheck . $sponsor_city_number . " Test: ";
			// $result = strpos($sponsor_city_number, $stringCheck);
			// echo $result;
			// echo "<br>";

			// if ($sponsor_city_number == $city_number) {
			if (strpos($sponsor_city_number, $stringCheck) !== false) {
				if (strcmp($level, "Day") == 0) {
					?>
					<li class="sponsor">
						<a href="<?php echo types_render_field( 'sponsor-website', array('output' => 'raw')); ?>" target="_blank">
							<img src="<?php echo types_render_field( 'logo', array('url' => 'true')); ?>" />
						</a>
					</li>
					<?php
				}
				else {}
			}
			else {}
		?>

		<?php endwhile; 
		
		wp_reset_query();
		?>	
		</ul>
	</div>
</div>