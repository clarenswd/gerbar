<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gerardsbar
 */

get_header(); ?>
	<style>
		html{
			background: url(<?php echo get_template_directory_uri ();?>/img/bg-about.jpg) no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
	</style>
	<div class="medium-6">
		<h1>About</h1>
		<p>Introducing one of Brisbane’s best bars: Gerard’s Bar, Gerard’s Bistro’s little sister.</p>
		<p>We invite you to make your way through the laneways of New Farm, and you’ll find us tucked away behind the hustle and bustle of James Street. We are a fairly new bar in Brisbane, offering a Spanish inspired scene with tapas, charcuterie, and beverages that will entice you all night long.</p>
		<p>Gerard’s Bar steps back in time to offer you great food, delicious drinks, and excellent service, while you sip away the afternoon and evening with friends or family. Escape into a European - inspired setting that offers you a truly unique experience that takes you away to another time, another place.</p>
		<p>Renowned for our Charcuterie, on display in our impressive cabinet, our award-winning head Chef, Ben Williamson, has crafted a menu that will leave your mouth watering and dying to taste our delectable meats. What’s more, our delicious selections of beverages make us one of the best cocktail serving bars in Brisbane, along with out extensive range of wines.</p>
		<p>The best of Brisbane’s bars is stowed away, just behind James St, with the best appestisers and aperitifs on offer, just for you.</p>
		<p>We welcome you to join us – at one of the best bars in Brisbane – from a short drink to a long, satisfying dinner with friends and family. Gerard’s Bar is open seven days from 3pm til 12am, Monday to Thursday, and from 12pm til 1am, Friday to Sunday.</p>
	</div>

<?php
get_footer();
