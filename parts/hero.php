<div id="event-video-teaser" class="fw-container hero clear">
	<div class="videoWrapper">
		<video autoplay loop>
		  <source src="<?php echo get_template_directory_uri (); ?>/images/video.mp4" type="video/mp4">
		  <!-- <source src="movie.ogg" type="video/ogg"> -->
		  Your browser does not support the video tag.
		</video>
	</div>
		<script>
	        $(function() {
	            console.log((16 / 9) * $("#fw-container").width());
	            $('.videoWrapper').css('height', (9 / 16) * $(window).width());
	        });
	        $(function() {
	            $(window).resize(function() {
                	$('.videoWrapper').css('height', (9 / 16) * $(window).width());
	            });
	        });
	    </script>
		<div class="hero-text">
			<h3 class="opening">
				We’re on a mission to find, celebrate, and support Virginia’s top startups. 
			</h3>
			<p class="description">This September, the Virginia Velocity Tour will travel the Commonwealth to recruit, support, and celebrate the entrepreneurs building Virginia’s 21st century economy. It’s a jam-packed week of tours, talks, and pitch competitions with over $100,000 in prizes.</p>
			<a href="#"><span class="button apply">Apply</span></a>
			<a href="#"><span class="button rsvp">Sign up for updates</span></a>
		</div>
	</div>