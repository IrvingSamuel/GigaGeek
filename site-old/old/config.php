<?php
$DBSERVER = "localhost"; // Database server
$DBUSERNAME = 'u148872409_rootgeek'; // Database username
$DBPASSWORD = "Root@g33k"; // Database password 
$DBNAME = "u148872409_gigageek"; // Database name

/* connect to MySQL database */ 
$db = mysqli_connect($DBSERVER, $DBUSERNAME, $DBPASSWORD, $DBNAME);

// Check db connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_close($db);
?>