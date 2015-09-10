<?php

	// set $location to anything to include map js/css files
	$location = true;
	include 'include/header.php';

?>


	<div class="content">
		<h1>Location</h1>
		<h2 class="Address">701 State Rt 440, Jersey City, NJ 07304</h2>
	
		<div id="content-data-div_blank" class="center-content">

			<!-- Height set to inherit, just need to change iframe src (make sure id="googleMap") -->

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.857172155671!2d-74.0953538!3d40.721160600000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c251308c10f1b9%3A0x8916940060356f32!2sPizza+Plus!5e0!3m2!1sen!2sus!4v1441819004612" width="1" height="600" frameborder="0" style="border:0" class="googleMap" allowfullscreen></iframe>

		</div>

			<div class="address_txt">

				<span>Visit us at: 701 State Rt 440, Jersey City, NJ 07304 (Inside Hudson Mall)</span>
			
				<a href="#" class="get_directions_btn" title="Get Directions" target="_blank">Get Directions</a>

			</div>

	</div>

<?php include 'include/footer.php'; ?>