<?php 
    include 'blueinclude/conn.php'; 
    if(isset($_POST['register'])){
        $fname= strip_tags($_POST['fname']);
        $lname= strip_tags($_POST['lname']);
        $name=$fname.$lname;
        $user= str_replace(" ","",$name);        
        $userid = mb_substr($user, 0, 10);
        $result=strtolower($userid);
         $fe_email="SELECT * FROM `user_tb` WHERE `email`='".$_POST['email']."'";
                                        $result2 = $conn->query($fe_email);
                                        if ($result2->num_rows > 0) {
                                                                 header("location:registration.php?Error= Email allredy registerd --- <a href ='login.php'>login Here</a>");                            
                                                                 }
                                            else{
                                         $email= strip_tags($_POST['email']);
                                        }
        $dob1=date('d-m-Y', strtotime($_POST['birthday']));
        //$dateOfBirth = $_POST['birthday'];
        //$today = date("Y-m-d");
        //$diff = date_diff(date_create($dateOfBirth), date_create($today));
        //echo 'Age is '.$diff->format('%y');
        $country=$_POST['country'];
        $mo_num=$_POST['mo_num'];
        $gender=$_POST['gender'];
        $pass=$_POST['confirm_password'];
        $address=$_POST['location'];
        $pin=$_POST['pinnumber'];
        $image="about.jpg";
        $enc_pass = md5($pass);
        $ins_sql="INSERT INTO `user_tb` (`fname`, `lname`, `user_name`, `email`, `gender`,`mobile`, `dob`, `country`, `address`, `pincode`, `password`, `image`) 
        VALUES ('".$fname."', '".$lname."', '".$result."', '".$email."', '".$gender."','".$mo_num."', '".$dob1."', '".$country."', '".$address."', '".$pin."', '".$enc_pass."', '".$image."')";
       if ($conn->query($ins_sql) === TRUE) {
                $sql = "SELECT * FROM `user_tb` WHERE `email`='".$email."'";
                         $result1 = $conn->query($sql);
                         if ($result1->num_rows > 0) {
                          // output data of each row
                        $row1 = mysqli_fetch_assoc($result1);
                        $start=1000;
                        $userid1= $row1['user_name'].($start + $row1['id']);
                        //$start + number_format($row['id']);
                        $sql1 = "UPDATE `user_tb` SET `user_name` = '".$userid1."' WHERE `id` =".$row1['id']." ";
                        mysqli_query($conn, $sql1);                        
                         $uid=$row1['id'];
                         $dir="images/user/$uid";
                          if(!is_dir($dir)){
                              mkdir("images/user/".$uid);
                             }
                        $imagePath = "images/about.jpg";
                        $newPath = "images/user/".$uid."/about.jpg";
                        copy($imagePath , $newPath);
                        header("location:login.php?Regi= Account Created  sucsses fully ");
                        }
          } else {
            echo "Error: " . $ins_sql . "<br>" . $conn->error;
            //$timezone = date_default_timezone_get();
//echo "The current server timezone is: " . $timezone;
//$ip = $_SERVER['HTTP_CLIENT_IP'] ? $_SERVER['HTTP_CLIENT_IP'] : ($_SERVER['HTTP_X_FORWARDED_FOR'] ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']);
//echo $ip;
//$ip1 =$_SERVER['HTTP_CLIENT_IP'] ? : ($_SERVER['HTTP_X_FORWARDED_FOR'] ? : $_SERVER['REMOTE_ADDR']);
//echo $ip1;
//$ip3 = isset($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
//echo $ip3;
} 
}
?>
