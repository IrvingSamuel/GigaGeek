<?php

require "../config.php";



$conn = mysqli_connect($servername, $username, $password, $dbname);

if(empty($_POST['nome'])){
    echo json_encode(['status' => 'error', 'message' => 'Nome é obrigatório']);
}

if(empty($_POST['email'])){
    echo json_encode(['status' => 'error', 'message' => 'Email é obrigatório']);
}

if(empty($_POST['senha'])){
    echo json_encode(['status' => 'error', 'message' => 'Senha é obrigatório']);
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$senha = password_hash($senha, PASSWORD_BCRYPT);

$row = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'"));

if($row){
    echo json_encode(['status' => 'error', 'message' => 'Email Já registrado']);
}else{
    mysqli_query($conn, "INSERT INTO `users`(`nome`, `email`, `senha`) VALUES ('$nome', '$email', '$senha')");
    echo json_encode(['status' => 'success', 'message' => 'Usuário registrado!']);
}


?>