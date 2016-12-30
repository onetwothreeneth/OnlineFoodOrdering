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
					<span class=""><a href="user"><i class="fa fa-image"></i> <p class="rwd">Gallery</p></a></span>
					<span class="" ng-controller="messages" ng-click="read($event)"><a href="http://mail.google.com" target="_blank"><i class="fa fa-envelope"></i> <p class="rwd">Message</p> <kbd class="kbd" ng-show="{{ msg }} >= 1">{{ msg }}</kbd></a></span>
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
				<button id="All" class="active">Search Results</button> 
			</div>

			<div class="prod-content animated slideInLeft" id="prod" ng-app="myApp" ng-controller="customersCtrlsf">

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

