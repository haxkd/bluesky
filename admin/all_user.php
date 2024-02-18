<?php include 'conn.php';?>
<!DOCTYPE html>
<html >
<head>
    <title></title>
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
                <h2>Users main Table</h2>
            </center>
        <div class="row">
            <div class="col-sm-6"><center><button id="myBtn"><a href="trash_table.php" style="color: black">Go to Trash</a></button></div>
            <div class="col-sm-6"><center><button id="myBtn"><a href="selected.php" style="color: black">Go to Selected</a></button></div>
        </div>
        </div>
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>NAME</th>
                <th>User name</th>
                <th>Gender</th>
                <th>Pincode</th>
                <th>Country</th>
                <th><span style="color: blue;">Show detail</span></th>
                <th></th>
            </thead>
            <tbody>
            <?php
                $sql= "SELECT * FROM user_tb";
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
                        <td><a class="btn btn-primary" href="user_detail.php?detail_id='.$rows['id'].'&p=all_user">Access</a></td>
                        
                    </tr>
                    ';
                }
            ?>
            </tbody>
        </table>
        </div>
     </body>
</html>
