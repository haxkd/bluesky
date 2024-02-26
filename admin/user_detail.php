<?php include 'conn.php';
// for send to trshh//
 if (isset($_GET['trash_id'])) {
    $move_sql = "INSERT INTO user_trash(id,fname,lname,user_name,email,gender,mobile,dob,country,address,AboutMe,pincode,password,image) SELECT id,fname,lname,user_name,email,gender,mobile,dob,country,address,AboutMe,pincode,password,image FROM user_tb WHERE id='$_GET[trash_id]'"; 
    $run= mysqli_query($conn,$move_sql);
    echo '';
        if(isset($run)){
            $del_sql="DELETE FROM user_tb WHERE id='$_GET[trash_id]'";
            $run2= mysqli_query($conn,$del_sql);
        }
        echo '<center><span style="color: red;">Row sucsessfully moved to Trash</span></center>';
    }
 ?>
<!DOCTYPE html>
<html >
<head>
    <title>Bluesky Admin</title>
    <?php include 'css.php'; ?>
</head>
<body>
   <div>
    <?php include 'side.php'; ?>
    <form id="form1">
        <div>
        </div>
    </form>
    <?php include 'js.php'; ?>
    </div>
    <div class="container">
        <div class="jumbotron">
            <center>
                <h1>User Full Details</h1>
            </center>
            <center>
                <p>Just get detail whoose user id = <span style="color: red;"><?php echo $_GET['detail_id'] ?></span>
                </p>
            </center>
        </div>
        <?php 
            if (isset($_GET['detail_id'])) {
                $sql= "SELECT * FROM user_tb WHERE id = '$_GET[detail_id]'";
            $run=mysqli_query($conn,$sql);
            while($rows = mysqli_fetch_assoc($run)){
                echo '
                <div class="row">
            <label class="text-right control-label col-sm-6" >USER ID &nbsp; :</label>
            <label class="text-left control-label col-sm-6" >'.$rows['id'].'</label>
        </div>
        <div class="row">
            <label class="text-right control-label col-sm-6" >Full Name &nbsp; :</label>
            <label class="text-left control-label col-sm-6" >'.strtoupper($rows['fname']).' '.strtoupper($rows['lname']).'</label>
        </div>
        <div class="row">
            <label class="text-right control-label col-sm-6" >User Name &nbsp; :</label>
            <label class="text-left control-label col-sm-6" ><mark>'.$rows['user_name'].'</mark></label>
        </div>
        <div class="row">
            <label class="text-right control-label col-sm-6" >Email Address &nbsp; :</label>
            <label class="text-left control-label col-sm-6" >'.$rows['email'].'</label>
        </div>
        <div class="row">
            <label class="text-right control-label col-sm-6" >Gender &nbsp; :</label>
            <label class="text-left control-label col-sm-6" >'.$rows['gender'].'</label>
        </div>
        <div class="row">
            <label class="text-right control-label col-sm-6" >Mobile No &nbsp; :</label>
            <label class="text-left control-label col-sm-6" >'.$rows['mobile'].'</label>
        </div>
        <div class="row">
            <label class="text-right control-label col-sm-6" >Date of birth No &nbsp; :</label>
            <label class="text-left control-label col-sm-6" >'.$rows['dob'].'</label>
        </div>
        <div class="row">
            <label class="text-right control-label col-sm-6" >Address &nbsp; :</label>
            <label class="text-left control-label col-sm-6" >'.$rows['address'].' , '.$rows['country'].' , '.$rows['pincode'].'</label>
        </div>
        <div class="row">
            <label class="text-right control-label col-sm-6" for="name">About &nbsp; :</label>
            <label class="text-left control-label col-sm-6" for="name"><u>'.$rows['AboutMe'].'</u></label>
        </div>
            <center><button id="myBtn"><a href="all_user.php?p=all_user" style="color: black">Return</a></button></center>
            <center><button id="myBtn"><a href="user_detail.php?trash_id='.$_GET['detail_id'].'&p=all_user" style="color: red">Send to Trash</a></button></center>
            ';
               } 
            }  
        ?>
       <!--<input type="button" value="Return to previous page" onClick="javascript:history.go(-1)" />-->
    </div>
     </body>
</html>
