<div class="city-schedule">
	<div class="fw-container">
		
		<?php 

		$city = get_the_title();
		$city_number = 0;
		if (strcmp($city, "Roanoke and Blacksburg") == 0) { $city_number = 1; }
		else if (strcmp($city, "Richmond") == 0) { $city_number = 2; }
		else if (strcmp($city, "Hampton Roads") == 0) { $city_number = 3; }
		else if (strcmp($city, "Northern Virginia") == 0) { $city_number = 4; }
		else if (strcmp($city, "Charlottesville") == 0) { $city_number = 5; }
		else {}
			?>

		<h2>Tour Schedule: <?php echo $city;
			if ($city_number == 1) { echo " 9/19"; }
			else if ($city_number == 2) { echo " 9/20"; }
			else if ($city_number == 3) { echo " 9/21"; }
			else if ($city_number == 4) { echo " 9/22"; }
			else if ($city_number == 5) { echo " 9/23"; } ?>
		</h2>
		<div class="subheading">Only events with an RSVP link are open to the public. All other events are invite-only.<br>More events will be announced soon.</div>
		<ul class="schedule">
		<?php

		$args = array (
			'post_type' => 'event',
			'posts_per_page' => 70
		);
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();

		?>


			<?php 
				$event_city_number = types_render_field( 'day', array('output' => 'raw') );

				$time = types_render_field( 'event-time', array());
				$hosted = types_render_field ('hosted-by', array('output'=>'raw'));
				$hosted_url = types_render_field ('host-website', array('output'=>'raw'));
				$description = types_render_field ('event-description', array());
				$rsvp = types_render_field ('rsvp-link', array('output'=>'raw'));
				$image = types_render_field ('stop-logo', array('output'=>'raw'));

				if ($event_city_number == $city_number) {
					?>
					<li class="event">
						<div class="image">
							<img src="<?php echo $image; ?>" />
						</div>
						<div class="details">
							<h3 class="title"><?php echo get_the_title(); ?></h2>
							<h4 class="time"><?php echo $time; ?></h4>
							<?php if (strcmp($hosted, "") != 0) { ?>
							<h4 class="hosted">hosted by <a href="<?php echo $hosted_url; ?>" target="_blank"><?php echo $hosted; ?></a></h4>
							<?php } ?>
							<p class="description"><?php echo $description; ?></p>
							<?php 
							if (strcmp($rsvp, "") != 0) { ?>
							<p class="rsvp"><a href="<?php echo $rsvp; ?>" target="_blank">RSVP Here &rarr;</a></h4>
							<?php } ?>
						</div>
						?>
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