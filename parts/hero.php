<div id="event-video-teaser" class="fw-container hero clear">
	<div class="videoWrapper">
		<video autoplay loop poster="<?php echo get_template_directory_uri (); ?>/images/poster.jpg">
		  <source src="<?php echo get_template_directory_uri (); ?>/images/video.webm" type="video/webm">
		  <source src="<?php echo get_template_directory_uri (); ?>/images/video.mp4" type="video/mp4">
		  <source src="<?php echo get_template_directory_uri (); ?>/images/video.ogv" type="video/ogg">
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
	    <div class="fw-container">
			<div class="hero-text">
				<h3 class="opening">
					We’re on a mission to recruit, celebrate, and support Virginia’s top startups. 
				</h3>
				<p class="description">This September, the Virginia Velocity Tour will travel the Commonwealth to shine a spotlight on the entrepreneurs building Virginia’s 21st century economy. It’s a jam-packed week of tours, talks, and pitch competitions with over $100,000 in prizes.</p>
				<a href="<?php echo get_home_url(); ?>/schedule"><span class="button apply" style="background: #0f86ad;">View the schedule</span></a>
				<a href="http://virginiavelocity.us11.list-manage.com/subscribe?u=9b6739a967b12786ac03a8aef&id=1f058fef1b" target="_blank"><span class="button rsvp">Sign up for updates</span></a>
			</div>
		</div>
	</div>