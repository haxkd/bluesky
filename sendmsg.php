<?php 
include 'blueinclude/conn.php'; 
if(isset($_POST['send']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $message=$_POST['message'];
    $ins_sql="INSERT INTO `feedback` (`name`, `email`, `mobile`, `message`) 
        VALUES ('".$name."', '".$email."', '".$mobile."', '".$message."')";
    if ($conn->query($ins_sql) === TRUE) {
        header('Location: index.php?msg=Feedback send succesfuly.............');
    }
    else 
    {
        header('Location: index.php?msg=Feedback send Failed...!!!!!');
    }
}
?>
