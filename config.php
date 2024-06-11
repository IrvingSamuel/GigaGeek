<?php

session_start();

$servername = "localhost";
$username = "u148872409_rootgeek";
$password = "Root@g33k";
$dbname = "u148872409_gigageek";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
};

?>