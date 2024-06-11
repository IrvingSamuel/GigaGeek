<?php

require '../config.php';

if(isset($_COOKIE['auth_user'])){
    setcookie("auth_user", $row['id'], time() + 1, "/");
}
if(isset($_SESSION['auth_user'])){
    session_destroy();
}
header('location: https://gigageek.takesagencia.com.br/auth/login');

?>