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
					<span class=""><a href="about"><i class="fa fa-star"></i> <p class="rwd">About</p></a></span>
					<span class=""><a href="user"><i class="fa fa-image"></i> <p class="rwd">Gallery</p></a></span>
					<span class=" active"><a href="contact"><i class="fa fa-phone active"></i> <p class="rwd active">Contact</p></a></span>
				</div>
				<div class="b"> 
					<span><i class="fa fa-bell"></i></span>
				</div>
				<div class="c">
					<span class="search"><i class="fa fa-search"></i> <p class="rwd"><input placeholder="Search" id='searchr'></p></span> 
					<span class="join" id="loginmodal">Login</span> 
				</div>
			</div>

			<!-- <div class="cover animated fadeIn"> 
			</div> -->

	
			

		</div>


		<div style="margin-top: 5%;width: 30%;margin-left: 20%;float:left;">

					<h4 style="font-size: 2vw;font-style: italic;margin-bottom: 0%;">Get In Touch</h4>

					<h5 style="font-size: 1.5vw;font-weight: 200;font-style: italic;margin-bottom: 3%;">BY PHONE</h5>

					<b style="font-size: 1vw;font-weight: 500;font-family: sans-serif;">PHONE: 423.266.1121</b> <br> <br>

					<b style="font-size: 1vw;font-weight: 500;font-family: sans-serif;">FAX: 423.266.2313</b> <br> <br>

					<b style="font-size: 1vw;font-weight: 500;font-family: sans-serif;">KITCHEN: 423.266.6748</b>


					<h4 style="font-size: 1.5vw;font-style: oblique; font-weight: 200;margin-bottom: 3%;">BY EMAIL</h4>
					 
					<form action="php/contact.php" method="post">		
					    <input type="text" required name="name" placeholder="Name" style="outline:none; border:none; font-size: 1vw;border-bottom-color: gray;padding-top: 1%;padding-bottom: 1%;padding-left: 1%;font-family: arial;width: 65%;"> <br>
					    <input type="email" required name="email" placeholder="Email" style="outline:none; border:none; font-size: 1vw;border-bottom-color: gray;padding-top: 1%;padding-bottom: 1%;padding-left: 1%;font-family: arial;margin-top:4%;width: 65%;"> <br>
						<input type="number" required name="contact" placeholder="Contact" style="outline:none; border:none; font-size: 1vw;border-bottom-color: gray;padding-top: 1%;padding-bottom: 1%;padding-left: 1%;font-family: arial;margin-top:4%;width: 65%;"> <br>
						<textarea required placeholder="Message" name="message" style="outline:none; border:none; font-size: 1vw;border-bottom-color: gray;padding-top: 1%;padding-bottom: 17%;padding-left: 1%;font-family: arial;margin-top:4%;width: 65%;"></textarea> <br>
 						<button style="border: none; width: 66.5%;margin-top: 3%;padding-top: 1.5%;padding-bottom: 1.5%;color: white;font-size: 1vw; background-color:#2ecc71;">SUBMIT</button>
					</form>

		</div>

		<div style="margin-top: 5%;width: 30%;float:left;">

					<h3  style="font-size: 2vw;font-style: italic;margin-bottom: 0%;">Hours</h3>

					<h4 style="font-size: 1.5vw;font-weight: 200;font-style: italic;margin-bottom: 3%;">DINNER</h4>

                    <h4 style="font-size: 1vw;font-weight: 500;font-family: sans-serif;">MONDAY - SATURDAY : 5pm until 10pm</h4> 

					<h4 style="font-size: 1vw;font-weight: 500;font-family: sans-serif;">SUNDAY : 5pm until 9pm</h4>


					<div style="font-size: 1vw;font-family: sans-serif;">
					Lacated at <br>
					2F, Ral Building, Lilac St, Conception Dos, Marikina, 1811 Metro Manila
				</div>

					<div>
			<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:350px;width:700px;'><div id='gmap_canvas' style='height:350px;width:700px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='http://maps-website.com/'>https://www.maps-website.com</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=95b42ff2b6fb8e2e11ff06319fc873599fc0485b'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(14.6206253,120.98142380000002),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(14.6206253,120.98142380000002)});infowindow = new google.maps.InfoWindow({content:'<strong>conchos</strong><br>2F, Ral Building, Lilac St, Conception Dos, Marikina, 1811 Metro Manila<br> marikina city<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
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