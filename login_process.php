<?php 
        session_start();
        error_reporting(0);
        require_once('blueinclude/conn.php');
        if(isset($_POST['log_in'])){
                if(empty($_POST['email']) || empty($_POST['password']) ){
                        header("location:log_in.php?Empty= Please Fill in All Blanks Fields");
                }
         $user = $_POST['email'];
         $password = $_POST['password'];
        // $sql_query="SELECT * FROM `users` WHERE `user_type`='".$_POST['user_type']."' ";
        
         $sql_query="SELECT * FROM `user_tb` WHERE `email`='".$user."'";
         $result=mysqli_query($conn,$sql_query);
         $numrow = mysqli_num_rows($result);
	
	if($numrow!=0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			$db_username = $row['email'];
			$db_password = $row['password'];
		}
		$enc_password = md5($password);
		if($user==$db_username&&$enc_password==$db_password)
		{
			session_start();
			$_SESSION['email']=$db_username;
			header("location: profile.php");
		}
		else
		{
			header("location: login.php?Invalid=Invalid Password..... For : " .$user. " ");
		}
	}
	else
	{
		header("location: login.php?Invalid=User Doesnt Exist");
	}
                 }else{
                 header("location: login.php?Invalid=Invalid Input ....Please Fill in Correct User details");
                 } 
        
        
        

?>