<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gerardsbar
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">



<meta name="keywords" content="Food, drinks, wine, bars, Brisbane, Gerard’s Bar">
<meta name="description" content="Enjoy good food &amp; drinks in one of the best wine bars in Brisbane. Gerard’s Bar offers a great dining experience and serves the finest wines &amp; spirits.">

	<link rel="shortcut icon" href="http://gerardsbar.com.au/favicon.ico" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri ();?>/css/normalize.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri ();?>/css/foundation.css">

	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="<?php echo get_template_directory_uri ();?>/js/vendor/modernizr.js"></script>

	<link rel="shortcut icon" href="http://gerardsbar.com.au/favicon.ico" />
<script type="text/javascript" src="//use.typekit.net/ias4oyp.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>



<?php wp_head(); ?>



	<!--Gallery template-->
	<?php
		if (get_page_template_slug( $post->ID )  == 'page-gallery.php' ):
	?>
			<link rel="stylesheet" href="<?php echo get_template_directory_uri ();?>/css/colorbox.css">
	<?php
		endif;
	?>





</head>

<body <?php body_class(); ?>>

<!--
 Google Tag Manager -->
<noscript><iframe
		src="//www.googletagmanager.com/ns.html?id=GTM-M36BCJ"
		height="0"
		width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new
			Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-M36BCJ');</script>
<!--
 End Google Tag Manager -->


<div class="wrapper">
	<!-- nav -->
	<div class="social-icons-mobile">
		<a target="_blank" href="https://www.facebook.com/gerardsbarbrisbane"><i class="fa fa-facebook"></i></a>
		<a target="_blank" href="https://twitter.com/GerardsBar"><i class="fa fa-twitter"></i></a>
		<a target="_blank" href="http://instagram.com/gerardsbar"><i class="fa fa-instagram"></i></a>
	</div>

	<div class="contain-to-grid sticky">



		<nav class="top-bar" data-topbar data-options="sticky_on: large">
			<div class="social-icons">
				<a target="_blank" href="https://www.facebook.com/gerardsbarbrisbane"><i class="fa fa-facebook"></i></a>
				<a target="_blank" href="https://twitter.com/GerardsBar"><i class="fa fa-twitter"></i></a>
				<a target="_blank" href="http://instagram.com/gerardsbar"><i class="fa fa-instagram"></i></a>
			</div>


			<section class="top-bar-section">
				<a href="/"><img class="logo left" src="<?php echo get_template_directory_uri ();?>/img/gerards-bar.png" alt="Gerards Bar"/></a>

			</section>


			<section class="top-bar-section">
				<!-- Right Nav Section -->
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => '' , 'menu_class'=>'nav-menu right' , 'container' => '') ); ?>

			</section>
		</nav>
	</div>
	<!-- end nav-->



	<!--contact  template-->
	<?php
	$template_name = get_page_template_slug( $post->ID );
	if ( $template_name != 'page-contact.php' && $template_name != 'page-gallery.php'    ):
		?>
			<div class="home-content">
		<?php
	endif;
	?>



