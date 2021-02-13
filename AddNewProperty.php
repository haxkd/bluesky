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


?>

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
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="nav nav-tabs tabs" style="width: 100%;">
                        <li class="active tab" style="width: 30%;">
                            <a href="#home" data-toggle="tab" aria-expanded="false" class="active">
                                <span class="visible-xs"><i class="fa fa-envelope"></i></span>
                                <span class="hidden-xs">Add a New Property</span>
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
                               

                                <div class="col-sm-11">
                                    <!-- Personal-Information -->
                                    <div class="panel panel-default panel-fill">
                                        
                                        <div class="panel-body">
                                             <form role="form" action="AddProperty.php" method="POST">
                                        <div class="form-group">
                                            <label for="SelectCategory"><b>Select Category</b></label>
                                            <select class="form-control" name="SelectCategory" id="SelectCategory" required>
                                        <option value="Commercial" selected>Commercial Property</option>
                                        <option value="Residential" selected>Residential Property</option>
                                        <option value="Interprises" selected>Interprises Property</option>
                                        </select>
                                            </div>
                                        <div class="form-group">
                                            <label for="SelectType"><b>Select Type</b></label>
                                            <select class="form-control" name="SelectType" id="SelectType" required>
                                        <option value="rent" selected>Rent</option>
                                        <option value="sell" selected>Sell</option>
                                        <option value="rent+sell" selected>Rent + Sell</option>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="Title">Title of Property</label>
                                            <input type="text" name="Title" placeholder="Enter the Title" id="Title" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="ShortDetail">Short Detail of the Property</label>
                                            <textarea style="height: 50px" id="ShortDetail" name="ShortDetail" placeholder="Enter Short Detail" class="form-control" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="FullDetail">Full Detail of the Property</label>
                                            <textarea style="height: 125px" id="FullDetail" name="FullDetail" placeholder="Enter Full Details" class="form-control" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="Bedroom">No. of Bedrooms</label>
                                            <input type="number" name="Bedroom" placeholder="Enter no. of Bedrooms" id="Bedroom" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="Bathroom">No. of Bathrooms</label>
                                            <input type="number" name="Bathroom" placeholder="Enter no. of Batshroom" id="Bathroom" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="Patio">No. of Patio</label>
                                            <input type="number" name="Patio" placeholder="Enter no. of Patio" id="Patio" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="Garage">No. of Garages</label>
                                            <input type="number" name="Garage" placeholder="Enter no. of Garage" id="Garage" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="SelectState"><b>Select State</b></label>
                                            <select class="form-control" name="SelectState" id="SelectState" required>
                                        <option value="rent+sell" selected>Rent + Sell</option>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="SelectCity"><b>Select City</b></label>
                                            <select class="form-control" name="SelectCity" id="SelectCity" required>
                                        <option value="rent" selected>Rent</option>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="Landmark">Landmark/Colony</label>
                                            <input type="text" name="Landmark" placeholder="Enter Landmark OR Colony" id="Patio" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="FullAddress">Full Adress of the Property</label>
                                            <textarea style="height: 125px" id="FullAddress" name="FullAddress" placeholder="Enter Full Address" class="form-control" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="Pincode">Enter Pincode</label>
                                            <input type="number" name="Pincode" placeholder="Enter Pincode No." id="Pincode" class="form-control" required>
                                        </div>
                                        
                                        
                                        
                                        <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Save Property</button>
                                    </form>

                                             <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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