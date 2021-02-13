<?php
session_start();
include("blueinclude/conn.php");
    $useremail=$_SESSION['email'];
    $get_user="SELECT * FROM user_tb WHERE email='$useremail'"; 
    $run_user=mysqli_query($conn, $get_user);
    $row_user=mysqli_fetch_array($run_user);
    $c_id=$row_user['id'];
    if(isset($_POST['UpdateProfile'])){

    $c_image= $_FILES['profile_image']['name'];
    $c_image_temp=$_FILES['profile_image']['tmp_name'];

    move_uploaded_file($c_image_temp , "images/user/$c_id/$c_image");

        $c_update="UPDATE user_tb SET image= '$c_image' WHERE id='$c_id'";

    $run_update=mysqli_query($conn, $c_update);

    if($run_update){

        echo"<script>alert('Your Account has been Updated successfully, Thanks')</script>";
                echo"<script>window.open('profile.php','_self')</script>";   
    }
  }
?>

