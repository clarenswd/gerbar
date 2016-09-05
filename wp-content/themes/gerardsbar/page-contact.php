<?php
/**
 * Template Name: Contact Template
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package the-apo
 */


get_header(); ?>

	<style>
		html {
			background: url(<?php echo get_template_directory_uri ();?>/img/bg-contact.jpg) no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
	</style>


	<div class="content">
		<h1>Contact</h1>
	<div class="row">
		<div class="medium-4 columns">
			<form class="form" data-abide="ajax">

				<div class="row">
					<div class="large-12 columns">
						<label>First Name<small>required</small>
							<input class="contact-fname" type="text" placeholder="First Name" required/>
						</label>
						<small class="error">Name is required.</small>
					</div>
				</div>

				<div class="row">
					<div class="large-12 columns">
						<label>Last Name
							<input class="contact-lname" type="text" placeholder="Last Name"/>
						</label>
					</div>
				</div>


				<div class="row">
					<div class="large-12 columns">
						<label>Email<small>required</small>
							<input class="contact-email" type="email" placeholder="email" required/>
						</label>
						<small class="error">Email is required.</small>
					</div>
				</div>



				<div class="row">
					<div class="large-12 columns">
						<!-- <label>Subscribe to our mailing list</label> -->
						<input id="subscribe" type="checkbox"><label class="inline" for="subscribe">Subscribe to our mailing list</label>
					</div>
				</div>
				<!-- <a class="button tiny make-reservation" href="#reservation">My Enquiry is regarding a reservation</a> -->
				<div class="row">
					<div class="large-12 columns reservation-container">
						<input id="reservation" type="checkbox"><label class="inline" for="reservation">My enquiry is regarding a reservation</label>
					</div>
				</div>

				<div class="row">

					<div class="large-12 columns">
						<label>Your Enquiry
							<textarea class="contact-enquiry" placeholder="Your Enquiry"></textarea>
						</label>
					</div>
				</div>

				<div class="row reservations">
					<div class="large-12 columns">
						<h4>Reservation Details</h4>

						<div class="row">
							<div class="large-12 columns">
								<label>Phone<small>required</small>
									<input class="reservations-phone" type="tel" placeholder="Phone" />
								</label>
								<small class="error">Phone is required.</small>
							</div>
						</div>

						<div class="row">
							<div class="large-12 columns">
								<label>Number of Guests<small>required</small>
									<input class="reservations-guests" type="number" placeholder="Number of Guests" />
								</label>
								<small class="error">Number of Guests is required.</small>
							</div>
						</div>


						<div class="row collapse">
							<div class="large-12 columns">
								<label>Date &amp; Arrival Time
									<input type="text" data-date-time />
								</label>
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
								<label>Other Requests
									<textarea class="reservations-requests" placeholder="Other Requests"></textarea>
								</label>
							</div>
						</div>

					</div>
				</div>


				<div class="row">
					<div class="large-6 columns">
						<input class='button small submit' type='submit' value='Submit'>
					</div>
				</div>



			</form>
		</div>
		<div class="medium-3 columns">
			<h3>Hours</h3>
			<p>
				Mon - Thurs: 3pm - 12am<br />
				Fri - Sun: 12pm - 1am
			</p>

			<h3>Address</h3>
			<p>13A, 23 James Street, <br />
				Fortitude Valley 4006 <br />
				Ph: 07 3252 2606</p>

			<h3>Email</h3>
			<p>
				<a href="mailto:info@gerardsbar.com.au?subject=Enquiry from Gerard's Bar Website">info@gerardsbar.com.au</a>
			</p>

		</div>

		<div class="medium-5 columns">

			<div class="medium-12" id="map"></div>

		</div>

	</div>
	</div>


<?php

get_footer();
