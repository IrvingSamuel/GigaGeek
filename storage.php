<?php

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

$json = file_get_contents('roupas.json'); 
  
// Decode the JSON file 
$json_data = json_decode($json,true); 
  
// Display data 
foreach($json_data as $camisa){
    echo $camisa."<br>";
    $nome = $camisa['nome'];
    $preco = $camisa['preco'];
    $imagens = (!empty($camisa['imagem1'])) ? $camisa['imagem1'] : '';
    $imagens .= (!empty($camisa['imagem2'])) ? ';'.$camisa['imagem2'] : '';
    $imagens .= (!empty($camisa['imagem3'])) ? ';'.$camisa['imagem3'] : '';
    //echo "INSERT INTO `camisas`(`nome`, `preco`, `imagens`) VALUES ('$nome',$preco, '$imagens')";
    mysqli_query($conn, "INSERT INTO `camisas`(`nome`, `preco`, `imagens`) VALUES ('$nome',$preco, '$imagens')");

}
?>