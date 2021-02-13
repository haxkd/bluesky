<?php
session_start();
if(isset($_SESSION['email'])){
           header('Location: profile.php');
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bluesky Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Bluesky template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>
    <?php require_once('blueinclude/Header.php'); ?>
    
        
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <div class="container">
            <div class="col-sm-12">
                <center><h2>Login</h2></center>

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                    <?php 
                       if(@$_GET['Empty']==true){     
                    ?>
                    <label class="text-danger alert-dark text-center col-sm-12 py-3"><?php echo $_GET['Empty'] ?></label>
                     <?php 
                      }    
                    ?>
                    <?php 
                       if(@$_GET['Invalid']==true){     
                    ?>
                    <label class="text-danger alert-dark text-center col-sm-12 py-3"><?php echo $_GET['Invalid'] ?></label>
                     <?php 
                      }    
                    ?>
                    <?php 
                       if(@$_GET['Regi']==true){     
                    ?>
                    <label class="text-danger alert-dark text-center col-sm-12 py-3"><?php echo $_GET['Regi'] ?></label>
                     <?php 
                      }    
                    ?>
                <form class="form-horizontal" role="form" method="post" action="login_process.php">
                        
                            <div class="form-group">
                                <label for="email" class=" control-label">Email </label>
                                <div class="">
                                    <input ID="email"  type="email" name="email" placeholder="Email" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class=" control-label">Password</label>
                                <div class="">
                                    <input ID="password" name="password"  type="password" placeholder="Password" class="form-control">
                                </div>
                            </div>

                            <!-- /.form-group -->
                            <div class="form-group">
                                
                            <button ID="login" runat="server" class="btn btn-primary col-sm-4 " name="log_in" >login</button>
                            </div>
                        </form>

                        <!-- /form -->
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </div>
        </div>
        <!-- ./container -->
        <br />
        <br />
        <div>
    
    <?php require_once('blueinclude/Footer.php') ?>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>