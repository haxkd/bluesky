<!DOCTYPE html>
<html lang="en">
<head>
    <title>Elements</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Bluesky template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/elements.css">
    <link rel="stylesheet" type="text/css" href="styles/elements_responsive.css">
</head>
<body>
    <div class="super_container">
        <!-- Header -->
        <?php include_once('blueinclude/Header.php') ?>
        <!-- Home -->
        <div class="home">
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/elements.jpg" data-speed="0.8"></div>
            <div class="home_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content d-flex flex-row align-items-end justify-content-start">
                                <div class="home_title">Elements</div>
                                <div class="breadcrumbs ml-auto">
                                    <ul>
                                        <li><a href="index.htmo">Home</a></li>
                                        <li>Elements</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <?php include'blueinclude/searchbar.php';?>
        <!-- Elements -->
        <div class="elements">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <!-- Buttons -->
                        <div class="buttons">
                            <div class="elements_title">Buttons</div>
                            <div class="buttons_container">
                                <div class="button button_1"><a href="#">send</a></div>
                                <div class="button button_2"><a href="#">send</a></div>
                                <div class="button button_3">
                                    <div><a href="#">send</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordions & Tabs -->
                        <div class="elements_accordions_tabs">
                            <div class="elements_title">Accordions & Tabs</div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="elements_accordions">
                                        <div class="accordions">
                                            <div class="accordion_container">
                                                <div class="accordion d-flex flex-row align-items-center">
                                                    <div>Sed at massa maximus, tempus elit nec, feugiat enim. </div>
                                                </div>
                                                <div class="accordion_panel">
                                                    <div>
                                                        <p>Sed at massa maximus, tempus elit nec, feugiat enim. Sed at massa maximus, tempus elit nec, feugiat enim. Etiam ultricies purus ac neque interdum, molestie blandit velit condimentum. Integer consectetur nunc ac imperdiet.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion_container">
                                                <div class="accordion d-flex flex-row align-items-center">
                                                    <div>Massa maximus, tempus elit nec, feugiat enim. </div>
                                                </div>
                                                <div class="accordion_panel">
                                                    <div>
                                                        <p>Sed at massa maximus, tempus elit nec, feugiat enim. Sed at massa maximus, tempus elit nec, feugiat enim. Etiam ultricies purus ac neque interdum, molestie blandit velit condimentum. Integer consectetur nunc ac imperdiet.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion_container">
                                                <div class="accordion d-flex flex-row align-items-center active">
                                                    <div>Etiam ultricies purus ac neque interdum</div>
                                                </div>
                                                <div class="accordion_panel">
                                                    <div>
                                                        <p>Sed at massa maximus, tempus elit nec, feugiat enim. Sed at massa maximus, tempus elit nec, feugiat enim. Etiam ultricies purus ac neque interdum, molestie blandit velit condimentum. Integer consectetur nunc ac imperdiet.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="tabs">
                                        <div class="tabs_container">
                                            <div class="tabs d-flex flex-row align-items-center justify-content-start flex-wrap">
                                                <div class="tab">Sed at massa maxim</div>
                                                <div class="tab">Tempus elit necrdm</div>
                                                <div class="tab active">Elit necrdm</div>
                                            </div>
                                            <div class="tab_panels">
                                                <div class="tab_panel">
                                                    <div class="tab_panel_content">
                                                        <div class="tab_text">
                                                            <p>Sed at massa maximus, tempus elit nec, feugiat enim. Etiam ultricies purus ac neque interdum, molestie blandit velit condimentum. Integer consectetur nunc ac imperdiet dignissim. Vivamus dignissim nisl tellus, vitae euismod lorem volutpat vitae. Suspendisse quis pharetra est. Duis et massa massa. Duis vel ul</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab_panel">
                                                    <div class="tab_panel_content">
                                                        <div class="tab_text">
                                                            <p>Sed at massa maximus, tempus elit nec, feugiat enim. Etiam ultricies purus ac neque interdum, molestie blandit velit condimentum. Integer consectetur nunc ac imperdiet dignissim. Vivamus dignissim nisl tellus, vitae euismod lorem volutpat vitae. Suspendisse quis pharetra est. Duis et massa massa. Duis vel ul</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab_panel active">
                                                    <div class="tab_panel_content">
                                                        <div class="tab_text">
                                                            <p>Sed at massa maximus, tempus elit nec, feugiat enim. Etiam ultricies purus ac neque interdum, molestie blandit velit condimentum. Integer consectetur nunc ac imperdiet dignissim. Vivamus dignissim nisl tellus, vitae euismod lorem volutpat vitae. Suspendisse quis pharetra est. Duis et massa massa. Duis vel ul</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Milestones -->
                        <div class="milestones">
                            <div class="elements_title">Milestones</div>
                            <div class="row milestones_row">
                                <!-- Milestone -->
                                <div class="col-lg-3 milestone_col">
                                    <div class="milestone d-flex flex-row align-items-center justify-content-start">
                                        <div class="milestone_icon d-flex flex-column align-items-center justify-content-center">
                                            <img src="images/milestones_1.png" alt=""></div>
                                        <div class="milestone_content">
                                            <div class="milestone_counter" data-end-value="651">0</div>
                                            <div class="milestone_text">Properties Sold</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Milestone -->
                                <div class="col-lg-3 milestone_col">
                                    <div class="milestone d-flex flex-row align-items-center justify-content-start">
                                        <div class="milestone_icon d-flex flex-column align-items-center justify-content-center">
                                            <img src="images/milestones_2.png" alt=""></div>
                                        <div class="milestone_content">
                                            <div class="milestone_counter" data-end-value="1256">0</div>
                                            <div class="milestone_text">Happy Clients</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Milestone -->
                                <div class="col-lg-3 milestone_col">
                                    <div class="milestone d-flex flex-row align-items-center justify-content-start">
                                        <div class="milestone_icon d-flex flex-column align-items-center justify-content-center">
                                            <img src="images/milestones_3.png" alt=""></div>
                                        <div class="milestone_content">
                                            <div class="milestone_counter" data-end-value="124">0</div>
                                            <div class="milestone_text">Buildings Sold</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Milestone -->
                                <div class="col-lg-3 milestone_col">
                                    <div class="milestone d-flex flex-row align-items-center justify-content-start">
                                        <div class="milestone_icon d-flex flex-column align-items-center justify-content-center">
                                            <img src="images/milestones_4.png" alt=""></div>
                                        <div class="milestone_content">
                                            <div class="milestone_counter" data-end-value="25">0</div>
                                            <div class="milestone_text">Awards Won</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Loaders -->
                        <div class="loaders">
                            <div class="elements_title">Loaders</div>
                            <div class="loaders_container">
                                <div class="row elements_loaders_container">
                                    <div class="col-lg-3 loader_col">
                                        <!-- Loader -->
                                        <div class="circle loader" data-value="1.0">
                                            <strong><i></i></strong>
                                            <span>Commitment</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 loader_col">
                                        <!-- Loader -->
                                        <div class="circle loader" data-value="0.80">
                                            <strong><i></i></strong>
                                            <span>Sold properties</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 loader_col">
                                        <div class="circle loader" data-value="0.70">
                                            <strong><i></i></strong>
                                            <span>Vacation Homes</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 loader_col">
                                        <div class="circle loader" data-value="0.65">
                                            <strong><i></i></strong>
                                            <span>Rentals</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Icon Boxes -->
                        <div class="icon_boxes">
                            <div class="elements_title">Icon Boxes</div>
                            <div class="row icon_boxes_row">
                                <!-- Icon Box -->
                                <div class="col-lg-4 icon_box_col">
                                    <div class="icon_box">
                                        <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="icon_box_icon d-flex flex-column align-items-center justify-content-center">
                                                <img src="images/icon_4.png" alt=""></div>
                                            <div class="icon_box_title">Amazing Homes</div>
                                        </div>
                                        <div class="icon_box_text">
                                            <p>Sed at massa maximus, tempus elit nec, feugiat enim. Sed at massa maximus, tempus elit nec, feugiat enim. Etiam ultricies purus ac neque.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Icon Box -->
                                <div class="col-lg-4 icon_box_col">
                                    <div class="icon_box">
                                        <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="icon_box_icon">
                                                <img src="images/icon_5.png" alt=""></div>
                                            <div class="icon_box_title">Friendly Realtors</div>
                                        </div>
                                        <div class="icon_box_text">
                                            <p>Sed at massa maximus, tempus elit nec, feugiat enim. Sed at massa maximus, tempus elit nec, feugiat enim. Etiam ultricies purus ac neque.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Icon Box -->
                                <div class="col-lg-4 icon_box_col">
                                    <div class="icon_box">
                                        <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="icon_box_icon">
                                                <img src="images/icon_6.png" alt=""></div>
                                            <div class="icon_box_title">The Best Deals</div>
                                        </div>
                                        <div class="icon_box_text">
                                            <p>Sed at massa maximus, tempus elit nec, feugiat enim. Sed at massa maximus, tempus elit nec, feugiat enim. Etiam ultricies purus ac neque.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <script src="plugins/jquery-circle-progress-1.2.2/circle-progress.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="js/elements.js"></script>
</body>
</html>
