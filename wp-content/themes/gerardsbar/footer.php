<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gerardsbar
 */

?>


	<!-- TO avoid printing "home-contact" div in contact  template and gallery-->

	<?php
        $template_name = get_page_template_slug( $post->ID );
		if ( $template_name  != 'page-contact.php' && $template_name != 'page-gallery.php'   ):
	?>

			</div>

	<?php
		endif;
	?>

<div class="push"></div>
</div>




<div class="contain-to-grid bottom-bar">
    <?php
    $menuParameters = array( 'theme_location' => 'footer', 'menu_id' => '' ,  'depth' => 0, 'menu_class'=>'' , 'echo'=>false, 'container' => false, 'link_after'=>' |', 'items_wrap' => '%3$s');

    //displays only "a" tags
//    echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );


    $menu = wp_nav_menu(array('theme_location' => 'footer','echo' => false));
    if (preg_match_all('#(<a [^<]+</a>)#',$menu,$matches)) {
        $i = 0;
        $lastForLoop = count($matches[0])-1;
        foreach ($matches[0] as $link) {
            if( $i < $lastForLoop ){
                echo $link . ' | ';
            } else {
                echo $link;
            }
            $i++;
        }
    }
    ?>

    <span class="right">email: <a href="mailto:info@gerardsbar.com.au?subject=Email from Gerard's Bar website">info@gerardsbar.com.au</a> Ph: <a href="tel:0732522606">(07) 3252 2606</a> &copy;2014 Gerard's Bar</span></div>




<?php wp_footer(); ?>


<script src="<?php echo get_template_directory_uri ();?>/js/vendor/jquery.js"></script>
<script src="<?php echo get_template_directory_uri ();?>/js/foundation.min.js"></script>

<!--contact  template-->
<?php
	if (get_page_template_slug( $post->ID )  == 'page-contact.php' ):
?>

	<script src="<?php echo get_template_directory_uri ();?>/js/date.js"></script>
	<script src="<?php echo get_template_directory_uri ();?>/js/scroll.js"></script>
	<script src="<?php echo get_template_directory_uri ();?>/js/date-helpers.js"></script>
	<script src="<?php echo get_template_directory_uri ();?>/js/string-helpers.js"></script>
	<script src="<?php echo get_template_directory_uri ();?>/js/foundation_calendar.js"></script>


    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8Oc66yze1Kp4hpqYo4syZxVBC5cT96cw&sensor=false"></script>
<?php
	endif;
?>



<script> $(document).foundation(); </script>



<!--Gallery template-->
<?php
	if (get_page_template_slug( $post->ID )  == 'page-gallery.php' ):
	?>
		<script src="<?php echo get_template_directory_uri ();?>/js/jquery.colorbox-min.js"></script>
		<script src="<?php echo get_template_directory_uri ();?>/js/foundation.min.js"></script>
		<script>
			$(".gallery-item a").colorbox({rel:'gallery-item'});
		</script>
<?php
	endif;
?>

<!--contact  template-->
<?php
	if (get_page_template_slug( $post->ID )  == 'page-contact.php' ):
?>
		<script>
			$("#reservation").change(function(){
				if ($(this).is(":checked")){
					$(".reservations").slideDown();
					// $('body').scrollTo('form');

					// add required fields
					$(".reservations-guests, .reservations-phone").prop('required',true);

				} else {
					$(".reservations").slideUp();
					$(".reservations-guests, .reservations-phone").prop('false',true);
					//remove required fields
				}
			});

			// When the window has finished loading create our google map below
			google.maps.event.addDomListener(window, 'load', init);

			function init() {
				// Basic options for a simple Google Map
				// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
				var mapOptions = {
					// How zoomed in you want the map to start at (always required)
					zoom: 17,

					// The latitude and longitude to center the map (always required)
					center: new google.maps.LatLng(-27.4567494,153.0389435), // New York

					// How you would like to style the map.
					// This is where you would paste any style found on Snazzy Maps.
					styles: [{"stylers":[{"saturation":-45},
						{"lightness":13}]},
						{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#8f8f8f"}]},
						{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#667780"}]},
						{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#333333"}]},
						{"featureType":"road.highway","elementType":"labels.text.stroke","stylers":[{"color":"#8f8f8f"},
							{"gamma":2}]},
						{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#6f6f6f"}]},
						{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#7f7f7f"}]},
						{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#555555"}]},
						{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"#7f7f7f"}]},
						{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#7f7f7f"}]},
						{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#555555"}]},
						{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#bbd9e9"}]},
						{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#525f66"}]},
						{"featureType":"transit","elementType":"labels.text.stroke","stylers":[{"color":"#bbd9e9"},
							{"gamma":2}]},
						{"featureType":"transit.line","elementType":"geometry.fill","stylers":[{"color":"#a3aeb5"}]}]
				};

				// Get the HTML DOM element that will contain your map
				// We are using a div with id="map" seen below in the <body>
				var mapElement = document.getElementById('map');




				// Create the Google Map using out element and options defined above
				var map = new google.maps.Map(mapElement, mapOptions);

				var myLatlng = new google.maps.LatLng(-27.4567494,153.0389435);

				var marker = new google.maps.Marker({
					position: myLatlng,
					map: map,
					title: 'Gerard\'s Bar'
				});
				google.maps.event.addDomListener(window, 'load');
				// console.log("ping");

			}



//			Sending the form


			$(document).ready(function() {

				var contact = function () {
					// make data string

					var formData = "function=formOne";

					formData = formData + "&First Name=" + $(".contact-fname").val();
					formData = formData + "&Last Name=" + $(".contact-lname").val();
					formData = formData + "&Email=" + $(".contact-email").val();
					formData = formData + "&Enquiry=" + $(".contact-enquiry").val();


					if($('#subscribe').is(":checked")){
						formData = formData + "&Subscribed=true";
					}

					if($('#reservation').is(":checked")){
						//Reservation Details
						formData = formData + "&reservation=true";
						formData = formData + "&Contact Number=" + $(".reservations-phone").val();
						formData = formData + "&Number of Guests=" + $(".reservations-guests").val();
						formData = formData + "&Reservation Date=" + $(".date-selector span").text();
						formData = formData + "&Reservation Time=" + $(".time-selector span").text();
						formData = formData + "&Reservation Requests=" + $(".reservations-requests").val();
					}



					$.ajax({ url: 'ajax.php',
						data: formData,
						type: 'get',
						complete: function(output) {
							// console.log("done");
							// console.log(output.responseText);
							// $('#formOneResults').html(output.responseText);
							// $("#input01, #input02, #input03, #input04").val("");
							// $("#formOne").slideDown();
							$(".form").parent().text("Your message has been successfully sent. We will contact you very soon!");
							$(".form").hide();
						}
					});
				};


				$(".date-selector .value").text("Date");
				$(".time-selector .value").text("Time");
				$('.calendar').bind('dateChange', function(evt, opts) {
					// console.info('monthChange triggered');
					// console.info(opts);

					$(".time-selector .value").text("Time");

				});

				var loop = 0;

				$('.form').on('valid.fndtn.abide', function() {
					if (loop == 0){
						contact();
					}
					loop = loop + 1;
				});




			});




		</script>

<?php
	endif;
?>





<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-51185736-1', 'gerardsbar.com.au');
	ga('send', 'pageview');

</script>
</body>
</html>