<?php
if (isset($_GET['p'])) {
    if ($_GET['p']=="all_user") {
        $selected="active";
    } elseif ($_GET['p']=="all_seller") {
        $selected1="active";
    }
}else{
$selected="";
$selected1="";
}


?>

<nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top" id="mainNav">
    
    <a class="navbar-brand" href="#">Admin Of BLUESKY</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
    
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="AdminHome">
                <a class="nav-link" href="index.php">
                    <i class="fa fa-fw fa-user"></i>
                    <span class="nav-link-text"> Home Admin</span>
                </a>
            </li>

             <li class="nav-item " data-toggle="tooltip" data-placement="right"  title="AllUser" >
                <a class="nav-link <?php echo $selected ?>" href="all_user.php?p=all_user">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">All User</span>
                </a>
            </li>
            
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="AllSeller">
                <a class="nav-link <?php echo $selected1 ?>" href="all_seller.php?p=all_seller">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">All seller</span>
                </a>
            </li>
             
             <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Property">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-file"></i>
                    <span class="nav-link-text">All Property</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                    <li>
                        <a href="property.php">All Property</a>
                    </li>
                    
                    <li>
                        <a href="#Avilable">Available</a>
                    </li>
                    
                    <li>
                        <a href="property.php">Unavailable</a>
                    </li>
                  
                </ul>
                
            </li>
            
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Feedback">
                <a class="nav-link" href="feedback.php">
                    <i class="fa fa-fw fa-user"></i>
                    <span class="nav-link-text"> Feedbacks</span>
                </a>
            </li>

        </ul>
        <ul class="navbar-nav sidenav-toggler ">
            <li class="nav-item">
                <a class="nav-link text-center " aria-expanded="false" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
       
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
        </ul>
           
    </div>
</nav>