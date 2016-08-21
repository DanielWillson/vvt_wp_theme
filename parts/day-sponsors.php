

<div class="day-sponsor"style="background: url('<?php echo get_template_directory_uri (); ?>/images/crossword.png');">
	<div class="fw-container">
		<h2>Day Sponsors and Partners</h2>
		<ul class="sponsors">
		<?php 
		$args = array (
					'post_type' => 'sponsor',
					'days' => 'Richmond',
					'sponsorship-level' => '4'

		 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();

		?>
			<?php 
				$logo = get_field('logo');
				$description = get_field('sponsor-description');
				$website = get_field('sponsor-website');
			?>
		
			<li class="sponsor">
				<a href="<?php echo $website ?>" target="_blank">
					<img src="<?php echo $logo?>" />
				</a>
			</li>

		<?php endwhile; ?>	
	</div>
</div>