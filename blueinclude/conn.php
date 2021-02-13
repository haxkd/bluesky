<?php
$servername = "localhost";
$user ="root";
$pass ="";
$db_name ="bluesky";
$conn = new mysqli($servername,$user,$pass,$db_name);
if($conn->connect_error){
    die("connection failed: " . $conn->connect_error);
    echo "server connected";
    
}
?>