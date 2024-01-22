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
        $msg = "<h4 style='color:green;'>feedback sent successfully</h4>";
    }
    else 
    {
            echo "Error: " . $ins_sql . "<br>" . $conn->error;
    }
}
?>
<!-- Footer1 Start Here-->
  <!--Feedback Start Here-->
	<div class="col-sm-4 text-center">
      <div class="panel panel-primary">
        <div class="panel-heading">Feedback</div>
          <div class="panel-body">
            <?php echo @$msg; ?>
      <div class="feedback">
      <form method="post"><br>
        <div class="form-group">
          <input type="text" name="name" class="form-control" id="#" placeholder="Enter Your Name"required>
        </div>
        <div class="form-group">
          <input type="Email" name="email" class="form-control" id="#" placeholder="Email"required>
        </div>
        <div class="form-group">
          <input type="Number" name="mobile" class="form-control" id="#" placeholder="Mobile Number" required>
        </div>
        <div class="form-group">
          <textarea type="Text" name="message" class="form-control" id="#" placeholder="Type Your Massage"required></textarea>
        </div>
          <input type="submit" value="send" name="send" class="btn btn-primary btn-group-justified"required>
      </form>     
        </div>
       </div>
      </div>
    </div>
