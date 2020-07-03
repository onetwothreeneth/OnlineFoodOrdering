<!Doctype html>
<html>
	<head> 
		<title>Pedido Online</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">  
		<link rel="icon" href="img/logo.png"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="fonts/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		
		
	</head>
	<body> 

<div class="signup"> 
			<i class="fa fa-remove" id="close"></i>
			<form action="insertcadastro.php" method="post" id="signupsubmit">
				<input type="text" name="name" placeholder="Nome" required>
				<input type="email" name="email" placeholder="Email" required>
				<input type="password" name="pass" placeholder="Senha" required>
				<input type="password" name="pass2" placeholder="Confirmar Senha" required>  
				<imput type="text" name="address" placeholder="Endereço"  required>
				<input type="number" name="contact" placeholder="Celular com DDD" required>
				<button>Cadastrar</button>
			</form>
			<button class="log" id="loginbtn2">Entrar</button>
		
		</div>
</body> 
</html>