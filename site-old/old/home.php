<?php
require_once 'verifyLogged.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7p8xx9mhbRCUL9QzAI8vsJtr1O_9DA2olSyFniTq09A&s" alt="">
    <h1>Bem vindo ao paraiso tropical de sonegação fiscal! seu id no banco é o <?php echo $id; ?></h1>
    <button onclick="window.location.href='logout.php'">Sair</button>
</body>
</html>