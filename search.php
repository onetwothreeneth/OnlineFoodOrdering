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
					<span class="active"><a href="user"><i class="fa fa-image active"></i> <p class="rwd active">Gallery</p></a></span>
					<span class=""><a href="contact"><i class="fa fa-phone"></i> <p class="rwd">Contact</p></a></span>
				</div>
				<div class="b"> 
					<span><i class="fa fa-bell"></i></span>
				</div>
				<div class="c">
					<span class="search"><i class="fa fa-search"></i> <p class="rwd"><input placeholder="Search" id='searchr'></p></span> 
					<span class="join" id="loginmodal">Login</span> 
				</div>
			</div>

			<div class="cover animated fadeIn"> 
			</div>

	
			<div class="category animated fadeIn">
				<button id="All" class="active">Search Results</button> 
			</div>
 
			<div class="prod-content animated slideInLeft" ng-app="myApp" ng-controller="customersCtrl"> 

				<script type="text/javascript" src="js/jquery.js"></script>
				<script type="text/javascript" src="js/default.js"></script> 
				<script type="text/javascript" src="js/angular.js"></script> 
				<script type="text/javascript" src="js/a-model1.js"></script> 
				<script type="text/javascript" src="js/client.js"></script> 
				<script type="text/javascript" src="js/formajax.js"></script>  
				<?php 

				include "php/dbconn.php";
				$q = $_GET['q'];
				$sql ="SELECT * FROM products where name like '%$q%' or category like '%$q%' or price like '%$q%'"; 
				$result = mysqli_query($conn,$sql);  
				$rows = mysqli_num_rows($result);
				if($rows<=0){
					echo "<div class='item' id='' style='width:100% !important; padding:1%;'>
								<center>NO Results Found !</center>
						  </div>";
				}
					while($row = mysqli_fetch_array($result)){
						$id = $row['id'];
						$name = $row['name'];
						$category = $row['category'];
						$description = $row['description'];
						$price = $row['price'];
						$image = $row['image'];
						$status = $row['status']; 
					    
					          echo "<div class='item' id='$category'>
										<span class='a'>.
											<span class='b'>P $price</span>
										</span>
										<img src='admin/img/uploads/$image'>
										<!--<span class='overlay animated bounce'>
											$description
											<center>  
												<input type='number' name='qty' placeholder='Quantity' value='1' id='qty' focus><button id='addtocart' alt='$id'>Order</button> 
											</center>
										</span>-->
										<p>$name</p>
										<!--<span>
											<i class='fa fa-star'></i> 
											<i class='fa fa-star'></i> 
											<i class='fa fa-star-o'></i>
											<i class='fa fa-star-o'></i> 
											<i class='fa fa-star-o'></i>
										</span>-->
									</div>";
					} 

				?> 
 
  
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