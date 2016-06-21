
<div id="event-video-teaser" class="fw-container hero clear">
	<div class="videoWrapper">
	        <iframe id="ytplayer" type="text/html"
	src="<?php echo get_template_directory_uri (); ?>/images/website_vid_color.mp4"
	frameborder="0" allowfullscreen></iframe>
	</div>
		<script>

			/* Default */
	        $(function() {
	            console.log((16 / 9) * $("#fw-container").width());
	            $('.videoWrapper').css('height', (9 / 16) * 1320);
	        });

	        $(function() {
	            $(window).resize(function() {
	                if ($(window).width() < 1356) {
	                	$('.videoWrapper').css('height', (9 / 16) * $(window).width());
	                }
	                else {
	                	$('.videoWrapper').css('height', (9 / 16) * 1320);
	                }
	            });
	        });
	    </script>
	    <div class="video-overlay">
	    	This is an overlay
	    </div>
		<div class="hero-text">
			<h3>
				We’re on a mission to find, celebrate, and support Virginia’s top startups. 
			</h3>
			<br>
			<p>This September, the Virginia Velocity Tour will travel the Commonwealth to recruit, support, and celebrate the entrepreneurs building Virginia’s 21st century economy. It’s a jam-packed week of tours, talks, and pitch competitions with over $100,000 in prizes.</p>
		</div>
	</div>