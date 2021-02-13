<?php
//db details
$dbHost = '127.0.0.2';
$dbUsername = 'samridhi_user';
$dbPassword = 'Samridhi@123';
$dbName = 'samridhi_user';

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>