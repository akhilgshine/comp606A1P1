<?php
$db_name = "loginsystem";
$server = "localhost";
$user = "admin";
$password = "password123";

// Create connection
$conn = mysqli_connect($server,$user,$password,$db_name);
//$conn = mysqli_connect(dbserver, dbuser, dbpass, dbname);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
