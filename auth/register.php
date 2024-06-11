<?php
require '../config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form id="myForm" onsubmit="handleSubmit(event)" action="" method="POST" class="login100-form validate-form">
					<div class="d-flex justify-content-center align-items-top text-center">
    				    <a href="https://gigageek.takesagencia.com.br/" style="max-width:20%; margin: 0; padding: 0;">
                            <img
                                src="https://gigageek.takesagencia.com.br/cdn/shop/files/Debug_Style_1_380x2e79.png"
                                style="width: 100%;"
                        /></a>
    					<span class="login100-form-title p-b-49">
    						Registro
    					</span>
				    </div>
					
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Nome é obrigatório">
						<span class="label-input100">Usuário</span>
						<input id="nome" class="input100" type="name" name="nome" placeholder="Digite seu nome">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Email é obrigatório">
						<span class="label-input100">Email</span>
						<input id="email" class="input100" type="email" name="email" placeholder="Digite seu email">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Senha é obrigatória">
						<span class="label-input100">Senha</span>
						<input id="pass" class="input100" type="password" name="pass" placeholder="Digite sua senha">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate="Senhas não combinam">
						<span class="label-input100">Confirme a senha</span>
						<input id="cpass" class="input100" type="password" name="cpass" placeholder="Digite sua senha">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button onclick="store()" class="login100-form-btn">
								Registrar
							</button>
						</div>
					</div>

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Já possui conta?
						</span>

						<a href="login" class="txt2">
							Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
	
	    function handleSubmit(event) {
            event.preventDefault();
        }
        
	    function store(){
	        let nome = $("#nome").val();
	        let email = $("#email").val();
	        let senha = $("#pass").val();
	        let csenha = $("#cpass").val();
	        if(csenha == senha && senha != ""){
	            $.ajax({
                  type: "POST",
                  url: "store.php",
                  dataType: 'json',
                  data: {
                      nome: nome,
                      email: email,
                      senha: senha,
                  },
                  success: function (data){
                      if(data.status == "success"){
                        Swal.fire({
                          title: "Sucesso!",
                          text: data.message,
                          icon: "success"
                        });
                      }
                      else{
                        Swal.fire({
                          title: "Erro!",
                          text: data.message,
                          icon: "error"
                        });
                      }
                  }
                });
	        }
	    }
	</script>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>