<?php
session_start();

if(isset($_SESSION['userid'])){
    $id = $_SESSION['userid'];
}
else{
    header('location: index.php');
    exit;
}
?>