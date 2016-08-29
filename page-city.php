<?php /* Template Name: City Page */ ?>

<?php get_header(); 

$city = get_the_title();
$city_number = 0;
if (strcmp($city, "Roanoke and Blacksburg") == 0) { $city_number = 1; }
else if (strcmp($city, "Richmond") == 0) { $city_number = 2; }
else if (strcmp($city, "Hampton Roads") == 0) { $city_number = 3; }
else if (strcmp($city, "Northern Virginia") == 0) { $city_number = 4; }
else if (strcmp($city, "Charlottesville") == 0) { $city_number = 5; }
else {}

$current = "current";

?>
<div class="city-page" >
	<?php get_template_part( 'parts/city-hero', 'page-city' ); ?>
	<div class="city-nav" style="background: url('<?php echo get_template_directory_uri (); ?>/images/crossword.png');">
		<div class="city-nav-content">
			<ul>
				<li class="<?php if($city_number == 1) { echo $current; } ?>" >
					<a href="http://virginiavelocitytour.org/roanoke-and-blacksburg/">
					<div class="date">Mon 9/19:</div>
					Roanoke/<br>Blacksburg
					</a>
				</li>
				<li class="<?php if($city_number == 2) { echo $current; } ?>" >
					<a href="http://virginiavelocitytour.org/richmond/">
					<div class="date">Tues 9/20:</div>
					Richmond</a><br>&nbsp;
				</li>
				<li class="<?php if($city_number == 3) { echo $current; } ?>" >
					<a href="http://virginiavelocitytour.org/hampton-roads/">
					<div class="date">Wed 9/21:</div>Hampton<br>Roads
					</a>
				</li>
				<li class="<?php if($city_number == 4) { echo $current; } ?>" >
					<a href="http://virginiavelocitytour.org/northern-virginia/">
					<div class="date">Thurs 9/22:</div>
					Northern<br>Virginia
					</a>
				</li>
				<li class="<?php if($city_number == 5) { echo $current; } ?>" >
					<a href="http://virginiavelocitytour.org/charlottesville/">
					<div class="date">Fri 9/23:</div>Charlottesville</a><br>&nbsp;
				</li>
			</ul>
		</div>
	</div>
	<?php get_template_part( 'parts/city-text', 'page-city' ); ?>
	<?php get_template_part( 'parts/day-sponsors', 'page-city' ); ?>
	<?php get_template_part( 'parts/subscribe-box', 'page-city' ); ?>
	<?php get_template_part( 'parts/supporting-sponsors', 'page-city' ); ?>
</div>
<?php get_footer(); ?>
