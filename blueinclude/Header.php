<?php include 'blueinclude/conn.php'; 
session_start();
        if(isset($_SESSION['email'])){
        $session_email=$_SESSION['email'];
        //$wellcome='<li class="nav-item p-1"><a href="#" class="nav-link"><i class="icon fa fa-user"></i>Welcome -'.htmlentities($_SESSION['email']).'</a></li>';
        //$wellcome='<label class="text-dark alert-dark text-center col-sm-12 py-3"><i class="icon fa fa-user"></i>Welcome -<a href="profile.php">'.htmlentities($_SESSION['email']).'</a></label>';
        $user_header_btn='<li class="dropdown ">
                                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
                                    <i class="ion ion-android-person d-lg-none"></i>
                                    <div class="d-sm-none d-lg-inline-block">Myaccount</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right bg-primary">
                                    <a href="profile.php" class="dropdown-item has-icon">
                                        Profile <i class="fa fa-user" aria-hidden="true"></i> 
                                    </a>
                                    <a href="logout.php" class="dropdown-item has-icon">
                                        LogOut <i class="fa fa-sign-out" aria-hidden="true"></i> 
                                    </a>
                                </div>
                            </li>';
        $user_header_btn2='<li class="menu_item"><a href="profile.php"><i class="fa fa-user" aria-hidden="true"></i>  MyAccount</a></li>
                           <li class="menu_item"><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>';
        }
        else{
        //$wellcome="";
        $user_header_btn='<li class="dropdown ">
                                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
                                    <i class="ion ion-android-person d-lg-none"></i>
                                    <div class="d-sm-none d-lg-inline-block">SignUp/LogIn</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right bg-primary">
                                    <a href="registration.php" class="dropdown-item has-icon">
                                        SignUp <i class="fa fa-user-plus" aria-hidden="true"></i>
                                    </a>
                                    <a href="login.php" class="dropdown-item has-icon">
                                        LogIn <i class="fa fa-sign-in" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </li>';
         $user_header_btn2='<li class="menu_item"><a href="registration.php">SignUp <i class="fa fa-user-plus" aria-hidden="true"></i></a></li>
                           <li class="menu_item"><a href="login.php">LogIn <i class="fa fa-sign-in" aria-hidden="true"></i> </a></li>';
        }

?>﻿
<header class="header px-3">
    <div class="container-flude ">
    
        <div class="row">
            <div class="col">
                <div class="header_content d-flex flex-row align-items-center justify-content-center">
                    <div class="logo">
                        <a href="index.php">
                            <img src="images/logo.png" alt=""></a>
                    </div>
                    <nav class="main_nav ">
                        <ul>
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="about.php">About us</a></li>
                            <li><a href="properties.php">Properties</a></li>
                            <li><a href="news.php">News</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <?php echo $user_header_btn; ?>
                        </ul>
                    </nav>
                    <div class="phone_num ml-auto">
                        <div class="phone_num_inner">
                            <img src="images/phone.png" alt=""><span>7310-332-477</span>
                        </div>
                    </div>
                    <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Menu -->

    <div class="menu trans_500">
        <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
            <div class="menu_close_container"><div class="menu_close"></div></div>
            <div class="logo menu_logo">
                <a href="#">
                    <div class="logo_container d-flex flex-row align-items-start justify-content-start">
                        <div class="logo_image"><div><img src="images/logo.png" alt=""></div></div>
                    </div>
                </a>
            </div>
            <ul>
                            <li class="active menu_item"><a href="index.php">Home</a></li>
                            <li class="menu_item"><a href="about.php">About us</a></li>
                            <li class="menu_item"><a href="properties.php">Properties</a></li>
                            <li class="menu_item"><a href="news.php">News</a></li>
                            <li class="menu_item"><a href="contact.php">Contact</a></li>
                            <?php echo $user_header_btn2; ?>
                            
            </ul>
        </div>
        <div class="menu_phone"><span>call us: </span>+91 7007420572</div>
    </div>