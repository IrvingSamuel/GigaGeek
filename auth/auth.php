<?php

require "../config.php";

session_start();

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(empty($_POST['email'])){
    echo json_encode(['status' => 'error', 'message' => 'Email é obrigatório']);
}

if(empty($_POST['senha'])){
    echo json_encode(['status' => 'error', 'message' => 'Senha é obrigatório']);
}

$email = $_POST['email'];
$senha = $_POST['senha'];

$row = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'"));

if($row){
    $csenha = $row['senha'];
    if(password_verify($senha, $csenha)){
        $_SESSION['user_id'] = $row['id'];
        //setcookie("auth_user", $row['id'], time() + (86400 * 30), "/");
        echo json_encode(['status' => 'success', 'message' => 'Usuário logado']);
    }
    else{
        echo json_encode(['status' => 'error', 'message' => 'Usuário ou senha incorreto']);
    }
}else{
    echo json_encode(['status' => 'error', 'message' => 'Usuário ou senha incorreto']);
}


?>