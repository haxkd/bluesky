<?php include 'blueinclude/conn.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Property</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Bluesky template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/rangeslider.js-2.3.0/rangeslider.css">
<link rel="stylesheet" type="text/css" href="styles/property.css">
<link rel="stylesheet" type="text/css" href="styles/property_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->
	<?php include_once('blueinclude/Header.php') ?>
	
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/properties.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content d-flex flex-row align-items-end justify-content-start">
							<div class="home_title">Search results</div>
							<div class="breadcrumbs ml-auto">
								<ul>
									<li><a href="index.htmo">Home</a></li>
									<li>Search Results</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Home Search -->
        
	<?php include'blueinclude/searchbar.php';?>



                    <?php
                    if (isset($_GET['Post_id'])) {
                     $id = $_GET['Post_id'];
                     $id=mysqli_real_escape_string($conn,$id);
                     $id=htmlentities($id);
                    }
                    else {
                        $sql2 = "SELECT * FROM `properties` ORDER BY `id` DESC LIMIT 1";
                        $result2 = $conn->query($sql2);

                   if ($result2->num_rows > 0) {
                  // output data of each row
                  while($row2 = $result2->fetch_assoc()) {
                  $id = $row2['id'];
                                                         }
                                                }
                        }
                        $sql = "SELECT * FROM `properties` WHERE `id`='$id'";
                        $result = $conn->query($sql);

                   if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                         ?>





	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="intro_content d-flex flex-lg-row flex-column align-items-start justify-content-start">
						<div class="intro_title_container">
							<div class="intro_title"><?php echo $row['title'];?></div>
							<div class="intro_tags">
								<ul>
									<li><a href="#">Hottub</a></li>
									<li><a href="#">Swimming Pool</a></li>
									<li><a href="#">Garden</a></li>
									<li><a href="#">Patio</a></li>
									<li><a href="#">Hard Wood Floor</a></li>
								</ul>
							</div>
						</div>
						<div class="intro_price_container ml-lg-auto d-flex flex-column align-items-start justify-content-center">
							<div>For</div>
							<div class="intro_price"><?php echo $row['type'];?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="intro_slider_container">

			<!-- Intro Slider -->
			<div class="owl-carousel owl-theme intro_slider">
				<!-- Slide -->
				<div class="owl-item"><img src="images/properties/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['image1']);?>" alt="<?php echo $row['title'];?>"></div>
				<!-- Slide -->
				<div class="owl-item"><img src="images/properties/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['image2']);?>" alt="<?php echo $row['title'];?>"></div>
				<!-- Slide -->
				<div class="owl-item"><img src="images/properties/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['image3']);?>" alt="<?php echo $row['title'];?>"></div>
			</div>

			<!-- Intro Slider Nav -->
			<div class="intro_slider_nav_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="intro_slider_nav_content d-flex flex-row align-items-start justify-content-end">
								<div class="intro_slider_nav intro_slider_prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
								<div class="intro_slider_nav intro_slider_next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Property -->

	<div class="property">
		<div class="container">
			<div class="row">
				
				<!-- Sidebar -->

				<div class="col-lg-4">
					<div class="sidebar">
						<div class="sidebar_search">
							<div class="sidebar_search_title">Search your home</div>
							<div class="sidebar_search_form_container">
								<form action="#" class="sidebar_search_form" id="sidebar_search_form">
									<select class="sidebar_search_select">
										<option disabled selected>Keywords</option>
										<option>Option</option>
										<option>Option</option>
										<option>Option</option>
										<option>Option</option>
									</select>
									<select class="sidebar_search_select">
										<option disabled selected>Property ID</option>
										<option>Option</option>
										<option>Option</option>
										<option>Option</option>
										<option>Option</option>
									</select>
									<select class="sidebar_search_select">
										<option disabled selected>Property Status</option>
										<option>Option</option>
										<option>Option</option>
										<option>Option</option>
										<option>Option</option>
									</select>
									<select class="sidebar_search_select">
										<option disabled selected>City</option>
										<option>Option</option>
										<option>Option</option>
										<option>Option</option>
										<option>Option</option>
									</select>
									<select class="sidebar_search_select">
										<option disabled selected>Property Type</option>
										<option>Option</option>
										<option>Option</option>
										<option>Option</option>
										<option>Option</option>
									</select>
									<div class="row sidebar_search_row">
										<div class="col-lg-6">
											<input type="text" class="sidebar_search_input" placeholder="Bedrooms No">
										</div>
										<div class="col-lg-6">
											<input type="text" class="sidebar_search_input" placeholder="Bathrooms No">
										</div>
									</div>

									<!-- Filter Price -->
									<div class="price_filter">
										<div class="price_filter_values d-flex flex-row align-items-center justfy-content-start">
											<div>Min Price</div>
											<div class="ml-auto">Max Price</div>
										</div>
										<input type="range" min="0" max="1000" step="10" value="250" data-rangeslider="" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">
									</div>

									<!-- Filter Area -->
									<div class="area_filter">
										<div class="price_filter_values d-flex flex-row align-items-center justfy-content-start">
											<div>Min Price</div>
											<div class="ml-auto">Max Price</div>
										</div>
										<input type="range" min="0" max="1000" step="10" value="300" data-rangeslider="" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">
									</div>
									<button class="sidebar_search_button search_form_button">search</button>
								</form>
							</div>
						</div>

						<!-- Realtor -->
						<div class="sidebar_realtor">
							<div class="sidebar_realtor_image"><img src="images/sidebar_realtor.jpg" alt=""></div>
							<div class="sidebar_realtor_body text-center">
								<div class="sidebar_realtor_title"><a href="#">Maria Williams</a></div>
								<div class="sidebar_realtor_subtitle">Senior Realtor</div>
								<div class="sidebar_realtor_phone"><span>call us: </span>652 345 3222 11</div>
								<div class="realtor_link"><a href="#">+</a></div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Property Content -->
				<div class="col-lg-7 offset-lg-1">
					<div class="property_content">
						<div class="property_icons">
							<div class="property_title">Extra Facilities</div>
							<div class="property_text property_text_1">
								<p><?php echo $row['shortDetail'];?></p>
							</div>
							<div class="property_rooms d-flex flex-sm-row flex-column align-items-start justify-content-start">

								<!-- Property Room Item -->
								<div class="property_room">
									<div class="property_room_title">Bedrooms</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="images/room_1.png" alt=""></div>
										<div class="room_num"><?php echo $row['bedroom'];?></div>
									</div>
								</div>

								<!-- Property Room Item -->
								<div class="property_room">
									<div class="property_room_title">Bathrooms</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="images/room_2.png" alt=""></div>
										<div class="room_num"><?php echo $row['bathroom'];?></div>
									</div>
								</div>

								<!-- Property Room Item -->
								<div class="property_room">
									<div class="property_room_title">Area</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="images/room_3.png" alt=""></div>
										<div class="room_num"><?php echo $row['length'];?> Sq Ft</div>
									</div>
								</div>

								<!-- Property Room Item -->
								<div class="property_room">
									<div class="property_room_title">Patio</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="images/room_4.png" alt=""></div>
										<div class="room_num"><?php echo $row['patio'];?></div>
									</div>
								</div>

								<!-- Property Room Item -->
								<div class="property_room">
									<div class="property_room_title">Garage</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="images/room_5.png" alt=""></div>
										<div class="room_num"><?php echo $row['garage'];?></div>
									</div>
								</div>

							</div>
						</div>

						<!-- Description -->

						<div class="property_description">
							<div class="property_title">Description</div>
							<div class="property_text property_text_2">
								<p> <?php echo $row['full'];?> </p>
							</div>
						</div>

						<!-- Additional Details -->

						<div class="additional_details">
							<div class="property_title">Additional Details</div>
							<div class="details_container">
								<ul>
									<li><span>bedroom features: </span>Main Floor Master Bedroom, Walk-In Closet</li>
									<li><span>dining area: </span>Breakfast Counter/Bar, Living/Dining Combo</li>
									<li><span>doors & windows: </span>Bay Window</li>
									<li><span>entry location: </span>Mid Level</li>
									<li><span>floors: </span>Raised Foundation, Vinyl Tile, Wall-to-Wall Carpet, Wood</li>
								</ul>
							</div>
						</div>

						<!-- Property On Map -->

						<div class="property_map">
							<div class="property_title">Property on map</div>
							<div class="property_map_container">

								<!-- Google Map -->
								<div id="google_map" class="google_map">
									<div class="map_container">
										<div id="map"></div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




  <?php
          }
          }
 
        
?>


	<!-- Newsletter -->

	<div class="newsletter">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_content d-flex flex-lg-row flex-column align-items-start justify-content-start">
						<div class="newsletter_title_container">
							<div class="newsletter_title">Are you buying or selling?</div>
							<div class="newsletter_subtitle">Search your dream home</div>
						</div>
						<div class="newsletter_form_container">
							<form action="#" class="newsletter_form">
								<input type="email" class="newsletter_input" placeholder="Your e-mail address" required="required">
								<button class="newsletter_button">subscribe now</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<?php include_once('blueinclude/Footer.php') ?>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/rangeslider.js-2.3.0/rangeslider.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/property.js"></script>
</body>
</html>