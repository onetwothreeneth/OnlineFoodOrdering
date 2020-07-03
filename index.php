<?php
session_start();
$email = @$_SESSION['email'];
if(isset($email)){ header('location:user'); } else {  } 
?>
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
		<div class="container">
			<!-- Header -->
			<div class="header animated fadeInDown">
				<div class="a"> 
					<span class=""><a href="about"><i class="fa fa-star"></i> <p class="rwd">Sobre</p></a></span>
					<span class="active"><a href="user"><i class="fa fa-image active"></i> <p class="rwd active">Galeria</p></a></span>
					<span class=""><a href="contact"><i class="fa fa-phone"></i> <p class="rwd">Contato</p></a></span>
				</div>
				<div class="b"> 
					<span><i class="fa fa-bell"></i></span>
				</div>
				<div class="c">
					<span class="search"><i class="fa fa-search"></i> <p class="rwd"><input placeholder="Search" id='searchr'></p></span> 
					<span class="join" id="loginmodal">Entrar</span> 
				</div>
			</div>

			<div class="cover animated fadeIn"> 
			</div>

	
			<div class="category animated fadeIn">
				<button id="All" class="active">Todos</button>
				<button id="Sisig" class="">Pratos</button>
				<button id="Main-Meals" class="">Refeições</button>
				<button id="For-Kids" class="">Infantil</button>
				<button id="Desserts" class="">Sobremesa</button>
				<button id="Drinks" class="">Bebida</button>
				<button id="Extras" class="">Extras</button>
			</div>
 
			<div class="prod-content animated slideInLeft" id="prod" ng-app="myApp" ng-controller="customersCtrl">

				<div class="item" ng-repeat="x in names">
					<span class="a">.
						<span class="b">P{{ x.price }}</span>
					</span>
					<img src="admin/img/uploads/{{ x.image }}">
					
					<p>{{ x.name }}</p>
					<!--<span>
						<i class="fa fa-star"></i> 
						<i class="fa fa-star"></i> 
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i> 
						<i class="fa fa-star-o"></i>
					</span>-->
				</div>   

			</div>


		</div>
        <script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript">
		$(function(){
			$('#prod').load('php/products-visitor.php');
		});	
		</script>  
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/default.js"></script> 
		<script type="text/javascript" src="js/angular.js"></script> 
		<script type="text/javascript" src="js/a-model1.js"></script> 
		<script type="text/javascript" src="js/client.js"></script> 
		<script type="text/javascript" src="js/formajax.js"></script> 

	</body>
</html>

	<div class="login-modal animated bounceIn">   
		<div id="loader" class="loaderdiv"><img src="img/loader.gif" style="width:20%; margin-left:40%; margin-top:5%; margin-bottom:5%;"><center>Please Wait !<br></center></div>
		<div class="login">  
			<i class="fa fa-remove" id="close"></i>
			<form action="php/login.php" method="post" id="userlogin">
				<input type="email" name="email" placeholder="Email" required>
				<input type="password" name="pass" placeholder="Password" required>  
				<button id="loginsubmit">Entrar</button>
			</form>
			<button class="sign" id="signupbtn2">Cadastrar</button> 
		</div>
		<div class="signup"> 
			<i class="fa fa-remove" id="close"></i>
			<form action="insertcadastro.php" method="post" id="signupsubmit">
				<input type="text" name="name" placeholder="Name" required>
				<input type="email" name="email" placeholder="Email" required>
				<input type="password" name="pass" placeholder="Password" required>
				<input type="password" name="pass2" placeholder="Confirm Password" required>  
				<textarea name="address" placeholder="Address" rows="5" required></textarea>
				<input type="number" name="contact" placeholder="Contact" required>
				<button>Cadastrar</button>
			</form>
			<button class="log" id="loginbtn2">Entrar</button>
		
		</div>
	
	</div>
	

	<div class="loader">
		<img src="img/loader.gif">
	</div>