<?php

require "config.php";

$error = "";
$nome = "";
$email = "";
$senha = "";
$csenha = "";

if(isset($_POST['submitButton'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $csenha = $_POST['csenha'];

    if(empty($nome) || empty($email) || empty($senha) || empty($csenha)){
        $error = "Todos os campos devem ser preenchidos";
    }
    else{
        if($senha == $csenha){
            $db = mysqli_connect($DBSERVER, $DBUSERNAME, $DBPASSWORD, $DBNAME);
        
            mysqli_query($db, "INSERT INTO `users`(`nome`, `email`, `senha`) VALUES ('$nome', '$email', '$senha')");
    
            mysqli_close($db);

            header("location: index.php");
        }
        else{
            $error = "Senhas não combinam";
        }
    }

}

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="" method="POST">
            <div>
                <label for="nome">Nome</label>
                <input id="nome" name="nome" type="name" placeholder="Nome" value="<?php echo $nome; ?>">
            </div>
            <div>
                <label for="email">Email:</label>
                <input id="email" name="email" type="email" placeholder="Email" value="<?php echo $email; ?>">
            </div>
            <div>
                <label for="senha">Senha:</label>
                <input id="senha" name="senha" type="password" placeholder="Senha" value="<?php echo $senha; ?>">
            </div>
            <div>
                <label for="csenha">Confirme a senha:</label>
                <input id="csenha" name="csenha" type="password" placeholder="Confirme a Senha" value="<?php echo $csenha; ?>">
            </div>
            <div id="erros" style="color: red"><?php echo $error; ?></div>
            <button type="submit" name="submitButton">Cadastrar</button>
        </form>
    </div>
    <div>
        <h1>Já possui cadastro? <a href="index.php">Faça login!</a></h1>
    </div>
</body>
</html>