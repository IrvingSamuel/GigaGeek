<?php

session_start();

if(isset($_SESSION['userid'])){
    header('location: home.php');
    exit;
}

require "config.php";

$error = "";
$email = "";
if(isset($_POST['submitButton'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if(empty($email) || empty($senha)){
        $error = "Campo email e senha devem ser preenchidos";
    }
    else{
        $db = mysqli_connect($DBSERVER, $DBUSERNAME, $DBPASSWORD, $DBNAME);
    
        $row = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM `users` WHERE email = '$email'"));
    
        if($row){
            $csenha = $row['senha'];
            $id = $row['id'];
            if($senha == $csenha){
                mysqli_close($db);
                $_SESSION['userid'] = $id;
                header("location: home.php");
            }
            else{
                $error = "Senha incorreta";
            }
        }
        else{
            $error = "Não existe usuário com esse email";
        }

        mysqli_close($db);
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
                <label for="email">Email:</label>
                <input id="email" name="email" type="email" placeholder="Email" value="<?php echo $email; ?>">
            </div>
            <div>
                <label for="senha">Senha:</label>
                <input id="senha" name="senha" type="password" placeholder="Senha">
            </div>
            <div id="erros" style="color: red"><?php echo $error; ?></div>
            <button type="submit" name="submitButton">Entrar</button>
        </form>
    </div>
    <div>
        <h1>Não possui cadastro? <a href="cadastrar.php">Cadastre-se!</a></h1>
    </div>
</body>
</html>