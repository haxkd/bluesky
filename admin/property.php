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
                <h2>Property main Table</h2>
                <p>l=length,b=bedroom,b=bathroom,p=patio,g=garage</p>
            </center>
      </div>
        
        

        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Category</th>
                <th>SellerId</th>
                <th>SellerUserName</th>
                <th>type</th>
                <th>title</th>
                <th>l,b,b,p,g</th>
                <th>location</th>
                <th>shortDetail</th>
                <th>fullDetail</th>
                
                <th><span style="color: blue;">status</span></th>
                <th>
</th>
                
              
            </thead>
            <tbody>
            <?php
                $sql= "SELECT * FROM properties";
                $run=mysqli_query($conn,$sql);
                while($rows= mysqli_fetch_array($run)){
                        $sql1= "SELECT * FROM user_tb WHERE id='$rows[seller_id]'";
                        $run1=mysqli_query($conn,$sql1);
                        while($rows1= mysqli_fetch_array($run1)){
                        
                    echo '
                    <tr>
                        <td>'.$rows['id'].'</td>
                        <td>'.$rows['category'].'</td>
                        <td>'.$rows1['id'].'</td>
                        <td>'.$rows1['user_name'].'</td>
                        <td>'.$rows['type'].'</td> 
                        <td>'.$rows['title'].'</td>
                        <td>'.$rows['length'].' , '.$rows['bedroom'].' , '.$rows['bathroom'].' , '.$rows['patio'].' , '.$rows['garage'].'</td>
                        
                        <td>'.$rows['location'].'</td>
                        <td>'.$rows['shortDetail'].'</td>
                        <td>'.$rows['full'].'</td>
                        
                        

                        <td><a class="" href="#">'.$rows['status'].'</a></td>
                        
                    </tr>
                    ';
                }
                }
            ?>
            </tbody>
        </table>
        </div>
        <div class="container">

      <div class="jumbotron">
            <center>
                <h2>Property Available Table</h2>
                <p>l=length,b=bedroom,b=bathroom,p=patio,g=garage</p>
            </center>
      </div>
        
        

        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Category</th>
                <th>SellerId</th>
                <th>SellerUserName</th>
                <th>type</th>
                <th>title</th>
                <th>l,b,b,p,g</th>
                <th>location</th>
                <th>shortDetail</th>
                <th>fullDetail</th>
                
                <th><span style="color: blue;">status</span></th>
                <th>
</th>
                
              
            </thead>
            <tbody>
            <?php
                $sql= "SELECT * FROM properties WHERE status='available'";
                $run=mysqli_query($conn,$sql);
                while($rows= mysqli_fetch_array($run)){
                        $sql1= "SELECT * FROM user_tb WHERE id='$rows[seller_id]' ";
                        $run1=mysqli_query($conn,$sql1);
                        while($rows1= mysqli_fetch_array($run1)){
                        
                    echo '
                    <tr>
                        <td>'.$rows['id'].'</td>
                        <td>'.$rows['category'].'</td>
                        <td>'.$rows1['id'].'</td>
                        <td>'.$rows1['user_name'].'</td>
                        <td>'.$rows['type'].'</td> 
                        <td>'.$rows['title'].'</td>
                        <td>'.$rows['length'].' , '.$rows['bedroom'].' , '.$rows['bathroom'].' , '.$rows['patio'].' , '.$rows['garage'].'</td>
                        
                        <td>'.$rows['location'].'</td>
                        <td>'.$rows['shortDetail'].'</td>
                        <td>'.$rows['full'].'</td>
                        
                        

                        <td><a class="" href="#">'.$rows['status'].'</a></td>
                        
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

