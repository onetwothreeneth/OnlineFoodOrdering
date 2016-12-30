<?php
session_start();
$email = @$_SESSION['email'];
if(isset($email)){ header('location:user'); } else {  } 
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
		<div class="container">
			<!-- Header -->
			<div class="header animated fadeInDown">
				<div class="a"> 
					<span class="active"><a href="about"><i class="fa fa-star active"></i> <p class="rwd active">About</p></a></span>
					<span class=""><a href="user"><i class="fa fa-image"></i> <p class="rwd">Gallery</p></a></span>
					<span class=""><a href="contact"><i class="fa fa-phone"></i> <p class="rwd ">Contact</p></a></span>
				</div>
				<div class="b"> 
					<span><i class="fa fa-bell"></i></span>
				</div>
				<div class="c">
					<span class="search"><i class="fa fa-search"></i> <p class="rwd"><input placeholder="Search" id='searchr'></p></span> 
					<span class="join" id="loginmodal">Login</span> 
				</div>
			</div>

		<!-- 	<div class="cover animated fadeIn"> 
			</div> -->

				<img src="img/banner.png" style="
    margin-top: 4%;
    margin-left: 8%;
    width: 84%;
">
		

		</div>


 				<div style="
    text-align: center;
    width: 70%;
    margin-left: 15%;
    font-size: 1.1vw;
    font-family: sans-serif;
    padding-bottom: 10%;
    color: rgba(0, 0, 0, 0.84);
">						
					<h2 style="font-size: 2vw;font-style: italic;font-family: -webkit-pictograph;">About Us</h2>
 					At Conchos, we specialize in three things: good food, good drinks, and good times. We are a bar and fire grill, but not necessarily in that order. We are grill masters who respect the power of the open flame. We like simple, yet flavorful recipes and believe marinating is not to be taken lightly. We know medium-rare isnt the only way to cook a steak, but believe it should be. We believe pork should be slow smoked and pulled often. Slow, as in 11 hours over hickory logs every night, and often, as in every day at every restaurant. We know its our bartenders who make our drinks great, not the liquor. Although the liquor doesnt hurt. We think beer should be ice cold and consumed regularly. We know our servers bring much more than food to the table. We are big fans of sports, loud music, and surprises. And we believe in laughing often, especially at ourselves.
 				</div>


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
				<button id="loginsubmit">Login</button>
			</form>
			<button class="sign" id="signupbtn2">SignUp</button> 
		</div>
		<div class="signup"> 
			<i class="fa fa-remove" id="close"></i>
			<form action="php/signup.php" method="post" id="signupsubmit">
				<input type="text" name="name" placeholder="Name" required>
				<input type="email" name="email" placeholder="Email" required>
				<input type="password" name="pass" placeholder="Password" required>
				<input type="password" name="pass2" placeholder="Confirm Password" required>  
				<textarea name="address" placeholder="Address" rows="5" required></textarea>
				<input type="number" name="contact" placeholder="Contact" required>
				<button>Signup</button>
			</form>
			<button class="log" id="loginbtn2">Login</button>
		
		</div>
	
	</div>
	

	<div class="loader">
		<img src="img/loader.gif">
	</div>