<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "activity";

// Create connection
$_conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$_conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";