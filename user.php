<?php
session_start();
$email = $_SESSION['email'];
if(isset($email)){ } else { header('location:index'); } 
?>
<!Doctype html>
<html>
	<head> 
		<title>Conchos Home Of Sisig Goodness</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">  
		<link rel="icon" href="img/logo.png"> 
        	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="fonts/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/animate.css">
	</head>
	<body> 
		<div class="container" ng-app="myApp2" >
			<!-- Header -->
			<div class="header animated fadeInDown">
				<div class="a"> 
					<span class=""><a href="orders"><i class="fa fa-folder-open"></i> <p class="rwd">Orders</p></a></span>
					<span class="active"><a href="user"><i class="fa fa-image active"></i> <p class="rwd active">Gallery</p></a></span>
					<span class="" ng-controller="messages" ng-click="read($event)"><a href="http://mail.google.com" target="_blank"><i class="fa fa-envelope"></i> <p class="rwd">Message</p> <kbd class="kbd" ng-show=" msg != 0">{{ msg }}</kbd></a></span>
				</div>
				<div class="b"> 
					<span><i class="fa fa-bell"></i></span>
				</div>
				<div class="c">
					<span class="search"><i class="fa fa-search"></i> <p class="rwd"><input placeholder="Search" id='searchv'></p></span>
					<a href="cart"><span><p class="login" ng-controller="count"><i class="fa fa-shopping-cart"></i> <kbd ng-repeat="x in names" ng-show="{{ x.count }} > 0">{{ x.count }}</kbd></p></span></a>
					<a href="php/logout.php"><span class="join" id="logout"><p>Logout</p><i class="fa fa-cog"></i></span></a>
				</div>
			</div>

			<div class="cover animated fadeIn"> 
			</div>
 
			<div class="category animated fadeIn">
				<button id="All" class="active">All</button>
				<button id="Sisig" class="">Sisig</button>
				<button id="Main-Meals" class="">Main Meals</button>
				<button id="For-Kids" class="">For Kids</button>
				<button id="Desserts" class="">Desserts</button>
				<button id="Drinks" class="">Drinks</button>
				<button id="Extras" class="">Extras</button>
			</div>

			<div class="prod-content animated slideInLeft" id="prod" ng-app="myApp" ng-controller="customersCtrl">

				<div class="item" ng-repeat="x in names">
					<span class="a">.
						<span class="b">P{{ x.price }}</span>
					</span>
					<img src="admin/img/uploads/{{ x.image }}">
					<span class="overlay animated bounce">
						{{ x.description }}
						<center> 
							<form action="addtocart.php" method="post" id="">
								<input type="hidden" name="prodid" value="{{ x.id }}">  
								<input type="number" name="qty" placeholder="Quantity" value="1" focus> 
								<button>Order</button>
							</form>
						</center>
					</span>
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
			$('#prod').load('php/products-user.php');
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
		<div class="login">  
			<i class="fa fa-remove" id="close"></i>
			<input type="text" name="" placeholder="Email">
			<input type="text" name="" placeholder="Password">  
			<button>Login</button>
			<button class="sign" id="signupbtn2">SignUp</button> 
		</div>
		<div class="signup"> 
			<i class="fa fa-remove" id="close"></i>
			<input type="text" name="" placeholder="Name">
			<input type="email" name="" placeholder="Email">
			<input type="password" name="" placeholder="Password">
			<input type="password" name="" placeholder="Confirm Password"> 
			<!--<input type="text" name="" placeholder="Street">
			<input type="text" name="" placeholder="Barangay">
			<select name="" placeholder="City">
				<option value="">1</option>
				<option value="">1</option>
				<option value="">1</option>
				<option value="">1</option>
				<option value="">1</option>
			</select> -->
			<textarea placeholder="Address" rows="5"></textarea>
			<input type="number" name="" placeholder="Contact">
			<button>Signup</button>
			<button class="log" id="loginbtn2">Login</button>
		
		</div>
	
	</div>
	
	<div class="notif animated shake" id="notif">
		Product has been added to cart !
	</div>

