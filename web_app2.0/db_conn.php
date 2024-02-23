<?php

$servername = "localhost";
$username = "id21913294_lowigi";
$password = "@Lowigi09";
$dbname = "id21913294_wegi";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
