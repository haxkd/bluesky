<?php
session_start();
include 'blueinclude/conn.php';
        if(isset($_SESSION['email'])){
        $session_email=$_SESSION['email'];}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Bluesky</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Bluesky template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<?php include_once('blueinclude/style.php') ?>
</head>
<body>
<div class="super_container ">
	<!-- Header -->
   <?php include'blueinclude/Header.php';?>
	<!-- Home -->
	<div class="home">
		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				<!-- Slide -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="slide_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="slide_content">
										<div class="home_subtitle">super offer</div>
										<div class="home_title">alll with sea view</div>
										<div class="home_details">
											<ul class="home_details_list d-flex flex-row align-items-center justify-content-start">
												<li>
													<div class="home_details_image"><img src="images/icon_1.png" alt=""></div>
													<span> 650 Ftsq</span>
												</li>
												<li>
													<div class="home_details_image"><img src="images/icon_2.png" alt=""></div>
													<span> 3 Bedrooms</span>
												</li>
												<li>
													<div class="home_details_image"><img src="images/icon_3.png" alt=""></div>
													<span> 2 Bathrooms</span>
												</li>
											</ul>
										</div>
										<div class="home_price">$ 1. 245 999</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Slide -->
				<!-- Slide -->
			</div>
		</div>
	</div>
     <?php include'blueinclude/searchbar.php';?>
        <!-- Recent -->
	<div class="recent">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">Recent Properties</div>
					<div class="section_subtitle">Search your dream home</div>
				</div>
			</div>
                        <div class="row recent_row">
				<div class="col">
					<div class="recent_slider_container">
						<div class="owl-carousel owl-theme recent_slider">
                        <?php
                         $sql = "SELECT * FROM `properties` ORDER BY `id` DESC LIMIT 5";
                        $result = $conn->query($sql);

                   if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                         ?>				
							<!-- Slide -->
							<div class="owl-item">
								<div class="recent_item">
									<div class="recent_item_inner">
										<div class="recent_item_image">
											<img src="images/properties/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['mimage']);?>" alt="<?php echo htmlentities($row['id']);?>" class="card-img-top w-100" height="300">
											<div class="tag_featured property_tag"><a href="property.php?Post_id=<?php echo $row['id'];?>"><?php echo htmlentities($row['type']);?></a></div>
										</div>
										<div class="recent_item_body text-center">
											<div class="recent_item_location"><?php echo $row['location'];?></div>
											<div class="recent_item_title"><a href="property.php?Post_id=<?php echo $row['id'];?>"><?php echo $row['category'];?> Property </a></div>
											<div class="recent_item_price">$ 1. 234 981</div>
										</div>
										<div class="recent_item_footer d-flex flex-row align-items-center justify-content-start">
											<div><div class="recent_icon"><img src="images/icon_1.png" alt=""></div><span><?php echo htmlentities($row['length']);?> Ftsq</span></div>
											<div><div class="recent_icon"><img src="images/icon_2.png" alt=""></div><span><?php echo htmlentities($row['bedroom']);?> Bedrooms</span></div>
											<div><div class="recent_icon"><img src="images/icon_3.png" alt=""></div><span><?php echo htmlentities($row['bathroom']);?> Bathrooms</span></div>
										</div>
									</div>
								</div>
							</div>
                                                          <?php } } ?>
						</div>
						<div class="recent_slider_nav_container d-flex flex-row align-items-start justify-content-start">
							<div class="recent_slider_nav recent_slider_prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
							<div class="recent_slider_nav recent_slider_next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
						</div>
					</div>
					<div class="button recent_button"><a href="properties.php">see more</a></div>
				</div>
			</div>
		</div>
	</div>
	<!-- Cities -->
	<div class="cities">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">Find properties in these cities</div>
					<div class="section_subtitle">Search your dream home</div>
				</div>
			</div>
		</div>		
		<div class="cities_container d-flex flex-row flex-wrap align-items-start justify-content-between">
			<!-- City -->
			<div class="city">
				<img src="images/city_1.jpg" alt="https://unsplash.com/@dnevozhai">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Ibiza Town</div>
						<div class="city_subtitle">Rentals from $450/month</div>
					</a>	
				</div>
			</div>
			<!-- City -->
			<div class="city">
				<img src="images/city_2.jpg" alt="https://unsplash.com/@lachlanjdempsey">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Ibiza Town</div>
						<div class="city_subtitle">Rentals from $450/month</div>
					</a>	
				</div>
			</div>
			<!-- City -->
			<div class="city">
				<img src="images/city_3.jpg" alt="https://unsplash.com/@hellolightbulb">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Ibiza Town</div>
						<div class="city_subtitle">Rentals from $450/month</div>
					</a>	
				</div>
			</div>
			<!-- City -->
			<div class="city">
				<img src="images/city_4.jpg" alt="https://unsplash.com/@justinbissonbeck">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Ibiza Town</div>
						<div class="city_subtitle">Rentals from $450/month</div>
					</a>	
				</div>
			</div>
			<!-- City -->
			<div class="city">
				<img src="images/city_5.jpg" alt="https://unsplash.com/@claudiotrigueros">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Ibiza Town</div>
						<div class="city_subtitle">Rentals from $450/month</div>
					</a>	
				</div>
			</div>
			<!-- City -->
			<div class="city">
				<img src="images/city_6.jpg" alt="https://unsplash.com/@andersjilden">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Ibiza Town</div>
						<div class="city_subtitle">Rentals from $450/month</div>
					</a>	
				</div>
			</div>
			<!-- City -->
			<div class="city">
				<img src="images/city_7.jpg" alt="https://unsplash.com/@sawyerbengtson">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Ibiza Town</div>
						<div class="city_subtitle">Rentals from $450/month</div>
					</a>	
				</div>
			</div>
			<!-- City -->
			<div class="city">
				<img src="images/city_8.jpg" alt="https://unsplash.com/@mathewwaters">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Ibiza Town</div>
						<div class="city_subtitle">Rentals from $450/month</div>
					</a>	
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonials -->
	<div class="testimonials">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">What our clients say</div>
					<div class="section_subtitle">Search your dream home</div>
				</div>
			</div>
			<div class="row testimonials_row">				
				<!-- Testimonial Item -->
				<div class="col-lg-4 testimonial_col">
					<div class="testimonial">
						<div class="testimonial_title">Amazing home for me</div>
						<div class="testimonial_text">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.</div>
						<div class="testimonial_author_image"><img src="images/testimonial_1.jpg" alt=""></div>
						<div class="testimonial_author"><a href="#">Diane Smith</a><span>, Client</span></div>
						<div class="rating_r rating_r_5 testimonial_rating"><i></i><i></i><i></i><i></i><i></i></div>
					</div>
				</div>
				<!-- Testimonial Item -->
				<div class="col-lg-4 testimonial_col">
					<div class="testimonial">
						<div class="testimonial_title">Friendly Realtors</div>
						<div class="testimonial_text">Nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Pellentesque sit amet tellus blandit.</div>
						<div class="testimonial_author_image"><img src="images/testimonial_2.jpg" alt=""></div>
						<div class="testimonial_author"><a href="#">Michael Duncan</a><span>, Client</span></div>
						<div class="rating_r rating_r_5 testimonial_rating"><i></i><i></i><i></i><i></i><i></i></div>
					</div>
				</div>
				<!-- Testimonial Item -->
				<div class="col-lg-4 testimonial_col">
					<div class="testimonial">
						<div class="testimonial_title">Very good communication</div>
						<div class="testimonial_text">Retiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.</div>
						<div class="testimonial_author_image"><img src="images/testimonial_3.jpg" alt=""></div>
						<div class="testimonial_author"><a href="#">Shawn Gaines</a><span>, Client</span></div>
						<div class="rating_r rating_r_5 testimonial_rating"><i></i><i></i><i></i><i></i><i></i></div>
					</div>
				</div>
			</div>
		</div>
	</div>
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
   <?php require_once('blueinclude/Footer.php') ?>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
