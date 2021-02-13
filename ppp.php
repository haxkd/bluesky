<div class="container">    
                  <div class="row">
                      <div class="panel panel-default">
                      <div class="panel-heading">  <h3 style="text-align:center;" class="bg-light text-danger">User Profile</h3> </div>
                       <br>
                       <div class="panel-body">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                       <img alt="<?php echo $row['fname']." ".$row['lname']; ?>" src="/images/user/<?php echo $row['id']; ?>/<?php echo $row['image']; ?>" id="profile-image1"  class=" img-circle img-responsive"> 
                     
                 
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
                          <div class="container" >
                            <h2><?php echo strtoupper($row['fname']." ".$row['lname']); ?></h2>
                            <p>   <b> </b></p>
                          
                           
                          </div>
                           <hr>
                          <ul class="container details" >
                            <li><p><span class="glyphicon glyphicon-user one" style="width:50px;"></span><mark><?php echo $row['user_name']; ?></mark></p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span><?php echo $row['email']; ?></p></li>
                            <li><p><span class="glyphicon glyphicon-earphone" style="width:50px;"></span><?php echo $row['mobile']; ?></p></li>
                            <li><p><i class="fa fa-id-badge" aria-hidden="true" style="width:50px;"></i>  <?php echo $row['gender']; ?></p></li>
                          </ul>
                          <hr>
                          <div class="col-sm-5 col-xs-6 tital " ><span class="glyphicon glyphicon-calendar" style="width:50px;"></span><?php echo $row['dob']; ?></div>
                          <div class="col-sm-5 col-xs-6 tital " ><i class="fa fa-flag" aria-hidden="true" style="width:50px;"></i><?php echo $row['country']; ?></div>
                          
                          <div class="col-sm-5 col-xs-6 tital " ><i class="fa fa-address-card-o" aria-hidden="true" style="width:50px;"></i><?php echo $row['address']; ?> <?php echo $row['pincode']; ?></div>
                          
                      </div>
                </div>
            </div>
            
            </div>
            
            </div>