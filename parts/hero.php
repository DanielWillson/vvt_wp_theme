<div id="event-video-teaser" class="fw-container hero clear">
	<div class="videoWrapper">
	        <iframe id="ytplayer" type="text/html"
	src="https://www.youtube.com/embed/YQbGg1hRnUg?autoplay=1&controls=0&enablejsapi=1&modestbranding=1&rel=0&showinfo=0&loop=1&playlist=YQbGg1hRnUg"
	frameborder="0" allowfullscreen></iframe>
	</div>
		<script>

			/* Default */
	        $(function() {
	            console.log((16 / 9) * $("#fw-container").width());
	            $('.videoWrapper').css('height', (9 / 16) * 1356);
	        });

	        $(function() {
	            $(window).resize(function() {
	                if ($(window).width() < 1356) {
	                	$('.videoWrapper').css('height', (9 / 16) * $(window).width());
	                }
	                else {
	                	$('.videoWrapper').css('height', (9 / 16) * 1356);
	                }
	            });
	        });
	    </script>
		<div class="hero-text">
			<h3>
				We’re on a mission to find, celebrate, and support Virginia’s top startups. 
			</h3>
			<br>
			<p>This September, the Virginia Velocity Tour will travel the Commonwealth to recruit, support, and celebrate the entrepreneurs building Virginia’s 21st century economy. It’s a jam-packed week of tours, talks, and pitch competitions with over $100,000 in prizes.</p>
		</div>
	</div>