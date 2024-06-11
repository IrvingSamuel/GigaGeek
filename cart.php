<div style="padding-top: 20px; padding-bottom: 20px;">
<?php
require "config.php";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
    $carrinho = mysqli_query($conn, "SELECT * FROM carrinho WHERE user = $user_id");
    $cont = 0;
    while($item = mysqli_fetch_array($carrinho)){
        $id = $item['produto'];
        $i = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM camisas WHERE id = $id"));
        $imgs = explode(";", $i['imagens']);
        $cont += 1;
?>

<div style="width: 100%; padding: 20px; border-radius: 10px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; display: flex; flex-direction: row;">
    <div style="width: 25%;">
        <img src="<?php echo $imgs[0] ;?>" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border-radius: 15px;">
    </div>
    <div style="width: 65%; display:flex; flex-direction: column; justify-content: center; align-items: center;">
        <b><span><?php echo $i['nome'] ;?></span></b>
        <style>
          input::-webkit-outer-spin-button,
          input::-webkit-inner-spin-button {
             -webkit-appearance: none;
             margin: 0;
          }
       </style>
        <div>
        <button onclick="rem(<?php echo $item['id'] ;?>)" class="btn btn-primary" style="margin: 0; border-top-left-radius: 50%; border-bottom-left-radius: 50%; height: 30px; width:30px; background-color: #0099E2; color: white;">-</button>
        <input type="number" value="<?php echo $item['quantidade'] ;?>" style="width: 30%; height: 30px;">
        <button onclick="add(<?php echo $item['id'] ;?>)" class="btn btn-primary" style="margin: 0; border-top-right-radius: 50%; border-bottom-right-radius: 50%; height: 30px; width:30px; background-color: #0099E2; color: white;">+</button>
        
        </div>
        <div style="width: 60%; display: flex; flex-direction: row; justify-content: space-between; margin-top: 10px;">
            <div>Total:</div>
            <div><b>R$ <?php echo number_format($i['preco'] * $item['quantidade'], 2, ',', ' ') ; ?></b></div>
        </div>
    </div>
    <div style="width: 10%; display:flex; flex-direction: column; align-items: center;">
        <button onclick="del(<?php echo $item['id'] ;?>)" class="btn btn-primary" style="margin: 0; border-radius: 10px; padding: 10px; background-color: #0099E2; color: white;">Excluir</button>
    </div>
    
</div>

<?php
    }
    
}
else{
    
?>
<p>Seu carrinho está vazio</p>

<div class="button-wrapper">
  <a href="collection" class="button button--primary">Comece a comprar</a>
</div>
<?php
    
}if($cont == 0){

?>
<p>Seu carrinho está vazio</p>

<div class="button-wrapper">
  <a href="collection" class="button button--primary">Comece a comprar</a>
</div>
<?php
}
?>
</div>