<?php include 'conn.php';
    if(isset($_POST['approve'])){
        $user_id1=$_POST['user_id'];
        $sql3 = "UPDATE `user_tb` SET `type` = 'seller' WHERE `user_tb`.`id` =".$user_id1." ";
        if ($conn->query($sql3) === TRUE) {
            $del_sql="DELETE FROM request_seller WHERE user_id='$user_id1'";
            $run2= mysqli_query($conn,$del_sql);
        }        
    }else if(isset($_POST['delete'])){
        $user_id1=$_POST['user_id'];
            $del_sql="DELETE FROM request_seller WHERE user_id='$user_id1'";
            $run2= mysqli_query($conn,$del_sql);
        }   
?>
<!DOCTYPE html>
<html >
<head>
    <title></title>
    <?php include 'css.php'; ?>
    <style>
        .container{
    padding:5%;
}
.container .img{
    text-align:center;
}
.container .details{
    border-left:3px solid #ded4da;
}
.container .details p{
    font-size:15px;
    font-weight:bold;
}   
    </style>
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
  <div class="row">
    <div class="col-md-6 img">
      <img src="img/demo_img.jpg"  alt="profile_image" class="img-rounded">
    </div>
    <div class="col-md-6 details">
      <blockquote>
        <h5><?php echo $_SESSION['admin']; ?></h5>
        <small><cite title="Source Title">Chicago, United States of America  <i class="icon-map-marker"></i></cite></small>
      </blockquote>
      <p>
        admin@bluesky.com <br>
        www.bluesky.com <br>
        04 DEC 2000
      </p>
    </div>
  </div>
</div>
        <div class="container">
            <center>
                <h2>Requested for Seller account</h2>
            </center>
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>NAME</th>
                <th>User_name</th>
                <th>Gender</th>
                <th>Pincode</th>
                <th>Country</th>
                <th>About_Exp</th>
                <th><span style="color: blue;">Show_detail</span></th>
                <th><span style="color: green;">Approve</span></th>
                <th><span style="color: red;">Decline</span></th>              
            </thead>
            <tbody>
            <?php
                $sql1= "SELECT * FROM request_seller";
                $run1=mysqli_query($conn,$sql1);
                while($rows1= mysqli_fetch_array($run1)){
                        $sql= "SELECT * FROM user_tb WHERE id='".$rows1['user_id']."'";
                        $run=mysqli_query($conn,$sql);
                        while($rows= mysqli_fetch_array($run)){
                            echo '
                            <tr>
                                <td>'.$rows['id'].'</td>
                                <td>'.$rows['fname'].' '.$rows['lname'].'</td>
                                <td>'.$rows['user_name'].'</td> 
                                <td>'.$rows['gender'].'</td>
                                <td>'.$rows['pincode'].'</td>
                                <td>'.$rows['country'].'</td>
                                <td>'.$rows1['about_exp'].'</td>
                                <td><a class="btn btn-primary" href="user_detail.php?detail_id='.$rows['id'].'&p=home">Access</a></td>
                                <td>
                                    <form method="POST" action="">
                                        <input type="hidden"  name="user_id" value="'.$rows['id'].'">
                                        <input type="submit" name="approve" value="Accept" class="btn btn-success">
                                    </form>
                                </td>
                                <td>
                                    <form method="POST" action="">
                                        <input type="hidden"  name="user_id" value="'.$rows['id'].'">
                                        <input type="submit" name="delete" value="Dicline" class="btn btn-danger">
                                    </form>
                                </td>                                
                            </tr>
                            ';
                        }
                }
            ?>
            </tbody>
        </table>
        </div>
     </body>
</html>
