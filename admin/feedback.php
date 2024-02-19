<?php include 'conn.php';?>
<?php
if(isset($_GET['delete'])  && isset($_GET['c']) ){
    $id = $_GET['delete'];   
}
?>
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
            <div class="col-sm-6"><center><button id="myBtn"><a href="index.php" style="color: black">Go to Home</a></button></div>
            <div class="col-sm-6"><center><button id="myBtn"><a href="index.php" style="color: black">Go to Home</a></button></div>
        </div>
        </div>
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>MOBILE</th>
                <th>MESSAGE</th>
                <th><span style="color: blue;">Delete Feedback</span></th>
                <th></th>
            </thead>
            <tbody>
            <?php
                $sql= "SELECT * FROM feedback";
                $run=mysqli_query($conn,$sql);
                while($rows= mysqli_fetch_array($run)){
                    echo '
                    <tr>
                        <td>'.$rows['id'].'</td>
                        <td>'.$rows['name'].' '.$rows['lname'].'</td>
                        <td>'.$rows['email'].'</td> 
                        <td>'.$rows['mobile'].'</td>
                        <td>'.$rows['message'].'</td>
                        <td><a class="btn btn-primary" href="?delete='.$rows['id'].'&c=yes">DELETE</a></td>
                    </tr>
                    ';
                }
            ?>
            </tbody>
        </table>
        </div>
     </body>
</html>
