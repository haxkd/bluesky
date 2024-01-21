<!DOCTYPE html>
<html lang="en">
<head>
<title>Properties</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Bluesky template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/properties.css">
<link rel="stylesheet" type="text/css" href="styles/properties_responsive.css">
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
	<?php include'blueinclude/searchbar.php';?>
	<!-- Properties -->
<?php
if(isset($_GET['page']))
{
$page=$_GET['page'];
$page=mysqli_real_escape_string($conn,$page);
$page=htmlentities($page);
}
else
{
$page=1;
}
$sql="select * from `properties`";
$res=mysqli_query($conn,$sql);
$count=mysqli_num_rows($res);
$per_page=6;
$no_of_page=ceil($count/$per_page);
$start=($page-1)*$per_page;
?>
	<div class="properties">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title"><?php echo $count ?> Properties found</div>
					<div class="section_subtitle">Search your dream home</div>
				</div>
			</div>
			<div class="row properties_row">
				<?php
                                 $sql = "SELECT * FROM `properties` ORDER BY `properties`.`id` DESC LIMIT $start,$per_page";
                                $result = $conn->query($sql);
                
                                   if ($result->num_rows > 0) {
                                  // output data of each row
                                  while($row = $result->fetch_assoc()) {
                                         ?>
				<!-- Property -->
				<div class="col-xl-4 col-lg-6 property_col">
					<div class="property">
						<div class="property_image">
							<img src="images/properties/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['mimage']);?>" alt="<?php echo htmlentities($row['id']);?>" class="card-img-top w-100" height="300">
							<div class="tag_featured property_tag"><a href="property.php?Post_id=<?php echo $row['id'];?>"><?php echo htmlentities($row['type']);?></a></div>
						</div>
						<div class="property_body text-center">
							<div class="property_location"><?php echo $row['location'];?></div>
							<div class="property_title"><a href="property.php?Post_id=<?php echo $row['id'];?>"><?php echo $row['category'];?> Property </a></div>
							<div class="property_price">$ <?php echo htmlentities($row['status']);?></div>
						</div>
						<div class="property_footer d-flex flex-row align-items-center justify-content-start">
							<div><div class="property_icon"><img src="images/icon_1.png" alt=""></div><span><?php echo htmlentities($row['length']);?> Ftsq</span></div>
							<div><div class="property_icon"><img src="images/icon_2.png" alt=""></div><span><?php echo htmlentities($row['bedroom']);?> Bedrooms</span></div>
							<div><div class="property_icon"><img src="images/icon_3.png" alt=""></div><span><?php echo htmlentities($row['bathroom']);?> Bathrooms</span></div>
						</div>
					</div>
				</div>
                                 <?php } } ?>
				<!-- Property -->
			</div>
			<div class="row">
				<div class="col">
					<div class="pagination">
					<ul><?php
   for($i=1;$i<=$no_of_page;$i++)
   {
       ?>
							<li <?php 
       if($page==$i)
       echo "class='active'";
       ?>><a href="?page=<?php echo $i;?>"><?php echo $i;?>.</a>..	</li>
	   <?php
   }
   ?>
						</ul>
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
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/properties.js"></script>
</body>
</html>
