<?php
$db_name = ""
$server = "localhost";
$user = "username";
$password = "password";

// Create connection
$conn = mysqli_connect($db_name,$servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
