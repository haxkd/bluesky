<?php include 'conn.php';?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php include 'css.php'; ?>
</head>
<body>
   <div>
    <?php include 'side.php'; ?>
    <form id="form1">
        <div></div>
    </form>
    <?php include 'js.php'; ?>
    </div>
    <div class = "container">
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>NAME</th>
                <th>Email Address</th>
                <th>Subject</th>
                <th>Gender</th>
                <th>Skills</th>
                <th>Country</th>
                <th>Comments</th>
            </thead>
            <tbody>           
            <?php
                if(isset($_GET['edit_id'])){
                    $edit=$_GET['edit_id'];
                $sql= "SELECT * FROM user_tb where id = '$edit'";
                $run=mysqli_query($conn,$sql);
                while($rows= mysqli_fetch_array($run)){
                    echo '
                    <tr>
                        <td>'.$rows['id'].'</td>
                        <td>'.$rows['name'].'</td>
                        <td>'.$rows['email'].'</td>
                        <td>'.$rows['subject'].'</td>
                        <td>'.$rows['gender'].'</td>
                        <td>'.$rows['skill1'].','.$rows['skill2'].','.$rows['skill3'].'</td>
                        <td>'.$rows['country'].'</td>
                        <td>'.$rows['comment'].'</td>
                    </tr>
                    <tr>
                        <td><center><button id="myBtn"><a href="edit.php?del_id='.$rows['id'].'" style="color: red">delete</a></button></center> </td>
                        <td></td>
                        <td><center><button id="myBtn"><a href="new_form.php?update_id='.$rows['id'].'" style="color: black">Update</a></button></center></td>
                        <td></td>
                        <td><center><button id="myBtn"><a href="edit.php?trash_id='.$rows['id'].'" style="color: brown">Send to trash</a></button></center> </td>
                        <td></td>
                        <td><center><button id="myBtn"><a href="edit.php?copy_id='.$rows['id'].'" style="color: black">Copy to selected </a></button></center> </td>
                    </tr>                    
                    ';
                }                
            }
            ?>

            </tbody>
        </table>
        <?php
                
            echo '<center><button id="myBtn"><a href="data_display.php" style="color: black">Return</a></button></center>';
           
            ?>
                
        </div>

      
        
     </body>

</html>

