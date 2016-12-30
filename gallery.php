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
					<span class=""><a href="home"><i class="fa fa-home"></i> <p class="rwd">Home</p></a></span>
					<span class=""><a href="about"><i class="fa fa-star"></i> <p class="rwd">About</p></a></span>
					<span class=" active"><a href="user"><i class="fa fa-image active"></i> <p class="rwd active">Gallery</p></a></span>
					<span class=""><a href="contact"><i class="fa fa-phone"></i> <p class="rwd">Contact</p></a></span>
				</div>
				<div class="b"> 
					<span><i class="fa fa-bell"></i></span>
				</div>
				<div class="c">
					<span class="search"><i class="fa fa-search"></i> <p class="rwd"><input placeholder="Search"></p></span> 
					<span class="join" id="loginmodal">Login</span> 
				</div>
			</div>


		</div>

			<div style="width:60%;margin-top:5%;margin-left:20%;">
			<img src="img/gallery/banner1.jpg" style="width: 100%;">
				</div>


			<div style="width: 15%; margin-left: 20%;float:left;">
				<h2 style="font-size: 2vw; font-style: italic;">Gallery</h2>
			</div>


			<div style="width: 50%;float:left;">


				
					  <div style="margin-top:5%;">
					    <b style="font-size: 1vw;color: gray;font-family: fantasy;padding-right: 2%;border-right-color: black;border-right: 4px solid;">FOODS</b>
					    <b style="font-size: 1vw;color: gray;font-family: fantasy;padding-right: 2%;border-right-color: black;border-right: 4px solid;padding-left:2%;">GUEST</b>		
					    <b style="font-size: 1vw;color: gray;font-family: fantasy;padding-right: 2%;padding-left:2%;">AROUND THE RESTARANT</b>
					</div>

					<div style="margin-top:3%;">
						<div style="width:45%;float: left;">
						<img src="img/gallery/1.jpg" style="width:100%">
						</div>

						<div style="width: 47.2%;float: left;margin-left: 3%;">
						<img src="img/gallery/2.jpg" style="width:100%">
						</div>

					</div>

					<div style="margin-top:3%;">
						<div style="width:45%;float: left;">
						<img src="img/gallery/3.jpg" style="width:100%">
						</div>

						<div style="width: 47.2%;float: left;margin-left: 3%;">
						<img src="img/gallery/4.jpg" style="width:100%">
						</div>

					</div>

					<div style="margin-top:3%;">
						<div style="width:45%;float: left;">
						<img src="img/gallery/5.jpg" style="width:100%">
						</div>

						<div style="width: 47.2%;float: left;margin-left: 3%;">
						<img src="img/gallery/6.jpg" style="width:100%">
						</div>

					</div>

					<div style="margin-top:3%;">
						<div style="width:45%;float: left;">
						<img src="img/gallery/7.jpg" style="width:100%">
						</div>

						<div style="width: 47.2%;float: left;margin-left: 3%;">
						<img src="img/gallery/8.jpg" style="width:100%">
						</div>

					</div>

					<div style="margin-top:3%;">
						<div style="width:45%;float: left;">
						<img src="img/gallery/9.jpg" style="width:100%">
						</div>

						<div style="width: 47.2%;float: left;margin-left: 3%;">
						<img src="img/gallery/10.jpg" style="width:100%">
						</div>

					</div>

					<div style="margin-top:3%;">
						<div style="width:45%;float: left;">
						<img src="img/gallery/11.jpg" style="width:100%">
						</div>

						<div style="width: 47.2%;float: left;margin-left: 3%;">
						<img src="img/gallery/12.jpg" style="width:100%">
						</div>

					</div>


					




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