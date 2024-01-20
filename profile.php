<?php
session_start();
 include 'blueinclude/conn.php';
        if(isset($_SESSION['email'])){
        $session_email=$_SESSION['email'];
         $sql = "SELECT * FROM `user_tb` WHERE `email`='".$session_email."'";
                        $result = $conn->query($sql);                      
                        if ($result->num_rows > 0) {
                          // output data of each row
                        $row = mysqli_fetch_assoc($result);}
                        }else{
                header("location:login.php?Invalid=Please Login First....");
        }
    if(isset($_POST['type_submit'])){
        $user_id1=$_POST['user_id'];
        $type1=$_POST['user_type'];
        $aboutexp=$_POST['about_exp'];
        $type_sql="INSERT INTO `request_seller` (`user_id`, `type`, `about_exp`) VALUES ('$user_id1', '$type1', '$aboutexp')";
        if ($conn->query($type_sql) === TRUE) {
            $request="Request successfully submitted";
        }else{
           $request="You allredy Requested";  
        }
    }
?>
<?php include_once('UpdateProfile.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Bluesky</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Bluesky template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!------ Include the above in your HEAD tag ---------->
<?php include_once('blueinclude/style.php') ?>
<link rel="stylesheet" type="text/css" href="styles/profile.css">
<style>
mark {
  background-color: #DAEF3E;
  color: black;
}       
        /* Text alignment for body */ 
        body { 
            text-align: center; 
        }          
        /* Styling h1 tag */ 
        h1 { 
            color: green; 
            text-align: center; 
        } 
        /* Styling modal */ 
        .modal:before { 
            content: ''; 
            display: inline-block; 
            height: 100%; 
            vertical-align: middle; 
        } 
        .modal-dialog { 
            display: inline-block; 
            vertical-align: middle; 
        } 
        .modal .modal-content { 
            padding: 20px 20px 20px 20px; 
            -webkit-animation-name: modal-animation; 
            -webkit-animation-duration: 0.5s; 
            animation-name: modal-animation; 
            animation-duration: 0.5s; 
        } 
        @-webkit-keyframes modal-animation { 
            from { 
                top: -100px; 
                opacity: 0; 
            } 
            to { 
                top: 0px; 
                opacity: 1; 
            } 
        } 
        @keyframes modal-animation { 
            from { 
                top: -100px; 
                opacity: 0; 
            } 
            to { 
                top: 0px; 
                opacity: 1; 
            } 
        } 
        .jumbotronnew1 {
    padding: 2rem 1rem;
    margin-bottom: 2rem;
    background-color: #e67d40;
    border-radius: .2rem;
    background-image: -webkit-linear-gradient(270deg, #00b5ec 0%, #153e63 100%);
}
    </style>
</head>
<body>
<div class="super_container ">
	<!-- Header -->
   <?php include'blueinclude/Header.php';?>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <hr class="p-2 ">
   <div class="wrapper">
    <div class="container">
        <div class="wraper">
            <div class="row">
                <div class="col-md-4"><br/>
                <div class="bg-picture text-center">
                        <div class="bg-picture-overlay"></div>
                        <div class="profile-info-name">
                        <h3 class="text-dark">Welcome <?php echo strtoupper($row['fname']." ".$row['lname']); ?></h3>                            
                            <img src="images/user/<?php echo $row['id']; ?>/<?php echo $row['image']; ?>" class="thumb-sm img-circle img-responsive img-thumbnail w-100" alt="profile-image">
                        </div>
                    </div><br/><br/>
                    <!--/ meta -->
                </div>
                <div class="col-md-8 img-thumbnail w-100">
                <div class="row user-tabs">
                     <label class="col-sm-12 bg-white text-danger"><?php echo $request; ?></label>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="nav nav-tabs tabs" style="width: 100%;">
                        <li class="active tab" style="width: 30%;">
                            <a href="#home" data-toggle="tab" aria-expanded="false" class="active">
                                <span class="visible-xs"><i class="fa fa-user"></i></span>
                                <span class="hidden-xs">About</span>
                            </a>
                        </li>
                        <li class="tab" style="width: 40%;">
                            <a href="#properties" data-toggle="tab" aria-expanded="true">
                                <span class="visible-xs"><i class="fa fa-envelope-o"></i></span>
                                <span class="hidden-xs">Properties</span>
                            </a>
                        </li>
                        <li class="tab" style="width: 30%;">
                            <a href="#settings" data-toggle="tab" aria-expanded="false">
                                <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                <span class="hidden-xs">Settings</span>
                            </a>
                        </li>
                        <div class="indicator" style="right: 0px; left: 0px;"></div>
                    </ul>
                </div>
                <div class="row">
                <div class="col-lg-12 ml-3 mr-3">
                    <div class="tab-content profile-tab-content">
                        <div class="tab-pane active" id="home">
                            <div class="row">
                                <div class="col-sm-7">
                                    <!-- Personal-Information -->
                                    <div class="panel panel-default panel-fill">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Personal Information</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="about-info-p">
                                                <strong>Full Name</strong>
                                                <br>
                                                <p class="text-dark"><?php echo strtoupper($row['fname']." ".$row['lname']); ?></p>
                                            </div>
                                            <div class="about-info-p">
                                                <strong>User Name</strong>
                                                <br>
                                                <p class="text-muted"><mark><?php echo $row['user_name']; ?></mark></p>
                                            </div>
                                            <div class="about-info-p">
                                                <strong>Mobile</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $row['mobile']; ?></p>
                                            </div>
                                            <div class="about-info-p">
                                                <strong>Email</strong>
                                                <br>
                                                <p1 class="text-muted"><?php echo $row['email']; ?></p1>
                                            </div>
                                            <div class="about-info-p m-b-0">
                                                <strong>Location</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $row['country']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Personal-Information -->
                                </div>
                                <div class="col-sm-5">
                                <div class="panel panel-default panel-fill">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">About Me</h3>
                                        </div>
                                        <div class="panel-body">
                                        <?php echo $row['AboutMe']; ?>
                                        </div>
                                    </div>                                
                                    <!-- Personal-Information -->
                                    <!-- Personal-Information -->
                                </div>
                            </div>
                        </div>
                        <!-- Properties-Information -->
                        <?php if($row['type']=='seller'){
                            $propertytab='<div class="tab-pane" id="properties">
                            <div class="panel panel-default panel-fill">
                                <div class="panel-heading">
                                    <h3 class="panel-title">My Properties</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                              <tr>
                                                    <th>#</th>
                                                    <th>Property Title</th>
                                                    <th>Date</th>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Moltran Admin</td>
                                                    <td>07/05/2015</td>
                                                </tr>  
                                        </table>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                        <a href="AddNewProperty.php"><button class="btn btn-success waves-effect waves-light w-md" type="submit">Add a new PROPERTY</button></a>
                                </div>
                            </div>
                        </div>';
                        }else{
                            $propertytab='<div class="tab-pane" id="properties">
                            <div class="panel panel-default panel-fill">
                                <div class="panel-heading">
                                    <h3 class="panel-title">You not have seller account</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="container">
                                       <form method="POST" action="">
                                            <input type="hidden"  name="user_id" value="'.$row['id'].'">
                                            <input type="radio" name="user_type" value="seller"  required> <span> Become to seller</span><br>
                                            <textarea style="height: 125px"  name="about_exp" class="form-control" required placeholder="About Your Seller Experience" class="form-control"></textarea><br>
                                            <input type="submit" name="type_submit" value="Send Request" class="btn btn-primary">
                                       </form>
                                    </div>
                                </div>
                            </div>
                        </div>';
                        }                         
                        echo $propertytab;                       
                        ?>
                        <!-- Properties-Information -->
                        <div class="tab-pane" id="settings">
                            <!-- Personal-Information -->
                            <div class="row">
                            <div class="col-sm-6">
                            <!-- Personal-Information -->
                            <div class="panel panel-default panel-fill">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Edit Profile</h3>
                                </div>
                                <div class="panel-body">
                                    <form role="form" action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="FirstName">First Name</label>
                                            <input type="text" value="<?php echo $row['fname']; ?>" id="FirstName" name="FirstName" class="form-control" required>
                                             <label for="LastName">Last Name</label>
                                            <input type="text" value="<?php echo $row['lname']; ?>" id="LastName" name="LastName" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="Mobile">Mobile Number</label>
                                            <input type="tel" value="<?php echo $row['mobile']; ?>" id="Mobile" name="Mobile" class="form-control" required>
                                        </div>
                                                                          
                                        <div class="form-group">
                                            <label for="AboutMe">About Me</label>
                                            <textarea style="height: 125px" id="AboutMe" name="AboutMe" class="form-control" required><?php echo $row['AboutMe']; ?></textarea>
                                        </div>
                                        <button class="btn btn-primary waves-effect waves-light w-md" type="submit" name="EditProfile" >Save</button>
                                    </form>
                                </div>
                            </div>
                            <!-- Personal-Information -->
                            </div>
                            <div class="col-sm-6">
                            <!-- Update Profile Picture -->
                                    <div class="panel panel-default panel-fill">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Update Profile Picture</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div>
                                                <button type="button" class="btn" data-toggle="modal" data-target="#upload_image">Upload Profile</button>
                                            </div>
                                            <!-- upload image model-->
                                                <div class="modal fade" id="upload_image" tabindex="-1" role="dialog">
                                                            <div class="modal-dialog " role="document">
                                                              <div class="modal-content">
                                                                        <!-- Modal Header -->
                                                                        <div class="jumbotronnew1">
                                                                        <button type="button" class="close" data-dismiss="modal">X</button>
                                                                         <center><h3 class="modal-title text-white">Upload Profile Image </h3></center> 
                                                                        </div>
                                                                        <!-- Modal body -->
                                                                      <div class="modal-body col-sm-12">
                                                                              <form class="" action="" id="form" method="POST" enctype="multipart/form-data">
                                                                                    <div>
                                                                                    <input type="file" id="file" name="profile_image" class="form-control"><br>
                                                                                    
                                                                                    <input type="submit" class="btn btn-primary waves-effect waves-light w-md" value="update Image" name="UpdateProfile">
                                                                                    </div> 
                                                                               </form>
                                                                      </div>
                                                                       <!-- Modal footer -->
                                                                      <div class="modal-footer">
                                                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                      </div>
                                                               </div>
                                                              </div>
                                                        </div>
                                          </div>
                                    </div>
                                    <!-- Update Profile Picture -->
                            <!-- Personal-Information -->
                            <div class="panel panel-default panel-fill">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Change Password</h3>
                                </div>
                                <div class="panel-body">
                                    <form role="form" action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="OldPassword">Old Password</label>
                                            <input type="password" placeholder="Enter Your Old Password" id="OldPassword" name="OldPassword" class="form-control">
                                             <label for="NewPassword">New Password</label>
                                            <input type="password" placeholder="Enter Your New Password" id="NewPassword" name="NewPassword" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="AgainPassword">Confirm New Password</label>
                                            <input type="password" placeholder="Confirm Your New Password" id="AgainPassword" name="AgainPassword" class="form-control">
                                        </div>
                                        <div class="text-center">
                                        <button class="btn btn-primary waves-effect waves-light w-md" type="submit" name="ChangePassword">Change Password</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Personal-Information -->
                            </div>
                            </div>
                            <!-- Personal-Information -->
                        </div>
                    </div>
                </div>
            </div>
            </div>  
                </div>
            </div>
            <!-- End Footer -->
        </div>
        <!-- end container -->
    </div>
    <!-- end wrapper -->
</div> 
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
