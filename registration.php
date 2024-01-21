<?php include 'blueinclude/conn.php'; ?>
<?php
session_start();
if(isset($_SESSION['email'])){
           header('Location: profile.php');
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bluesky Reg</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Bluesky template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/contact.css">
    <script>
        var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
function showPass() {
  var x = document.getElementById("confirm_password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
    </script>
</head>
<body>
    <div class="super_container">
    <!-- Header -->
    <?php include_once('blueinclude/Header.php') ?>
    <!-- Menu -->
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <div class="container">
            <div class="col-sm-12">
                <center><h2>Registration</h2></center>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <form class="form-horizontal" role="form" method="post" action="user_reg.php">
                            <div class="form-group">
                                <label for="firstName" class=" control-label  ">First Name * --:- <span>&#8628;</span></label>
                                <div class="contact_name_col">
                                    <input id="firstName"  type="text" name="fname" placeholder="frist name" class="form-control " required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lastName" class=" control-label ">Last Name  --:- <span>&#8628;</span> </label>
                                <div class="">
                                    <input id="lastName"  type="text" name="lname" placeholder="last name" class="form-control ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class=" control-label">Email* --:- <span>&#8628;</span> </label>
                                <div class="">
                                    <input type="email" id="email" placeholder="Email" class="form-control" name="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="birthDate" class=" control-label ">Date of Birth* --:- <span>&#8628;</span></label>
                                <div class="">

                                   <input type="date" id="birthDate" name="birthday" class="form-control" required>
                                </div>
                            </div>
                             <div class="form-group ">
                                <label class="control-label" for="country">Select Country * --:- <span>&#8628;</span></label>
                                <div class="">
                                    <select class="form-control" required name="country" id="country">
                                        <option value="" selected>Select Country</option>
                                        <?php  
                                        $fe_cuntry="SELECT * FROM `country` ORDER BY `country`.`name` ASC";
                                        $result = $conn->query($fe_cuntry);
                                        if ($result->num_rows > 0) {
                                          // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                                if($row['code2l']=='IN'){
                                                $selected="selected";
                                                }else{
                                                $selected="";
                                                }
                                        echo '<option value="'.$row["name"].'" '.$selected.'>'.$row["name"].'</option>';
                                        }
                                        }
                                ?>
                                    </select>
                                </div>
                             </div>   
                            <div class="form-group">
                                <label for="phoneNumber" class=" control-label">Phone number* --:- <span>&#8628;</span> </label>
                                <div class="">
                                <input class="form-control" id="mobile" type="tel" placeholder="+910123456789" pattern="[+]{1}[0-9]{11,14}" name="mo_num" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "13" required />
                                    <span class="help-block">Your phone number won't be disclosed anywhere </span>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label" for="location">Address* --:- <span>&#8628;</span> </label>
                                <div class="row">
                                    <input type="text" class="form-control col-sm-8" id="location" placeholder="Address" name="location" required>
                                    <input class="form-control col-sm-4" id="location" placeholder="Pin code" name="pinnumber"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "6" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Gender* --:- <span>&#8628;</span> </label>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="radio-inline">
                                                <input type="radio" id="femaleRadio" name="gender" value="Female">&nbsp; Female
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="radio-inline">
                                                <input type="radio" id="maleRadio" name="gender" value="Male">&nbsp; Male
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="password" class=" control-label">Password* --:- <span>&#8628;</span> </label>
                                <div class="">
                                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required onkeyup='check();'/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="confirm_password">Confirm Password *--:-<span>&#8628;</span></label>
                                <div class="">
                                    <input type="password" class="form-control" id="confirm_password" placeholder="Re Enter password" name="confirm_password" onkeyup='check();' required/>
                                    <input type="checkbox" onclick="showPass()"><span class="p-3">Show Password</span><span id='message'></span>
                                </div>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <div class=" col-sm-offset-3">
                                    <span class="help-block">*Required fields</span>
                                </div>
                            </div>
                            <button  ID="submit"  class="contact_button button" name="register">Register</button>
                        </form>
                        <!-- /form -->
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </div>
        </div>
        <!-- ./container -->
        <br />
        <br />
        <div>
            <?php require_once('blueinclude/Footer.php') ?>
        </div>  
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
