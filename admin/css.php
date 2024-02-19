<?php
session_start();
if(!isset($_SESSION['admin'])){
           header('Location: login.php');
      }
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
<link href="css/sb-admin.css" rel="stylesheet">
<style>
.active{
  background-color: red;
  color: red;
}
.btn:hover {
  background-color: green;
  color: black;
}
</style>
