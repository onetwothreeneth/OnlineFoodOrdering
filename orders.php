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
		<div class="container" ng-app="myApp2">
			<!-- Header -->
			<div class="header animated fadeInDown">
				<div class="a"> 
					<span class="active"><a href="orders"><i class="fa fa-folder-open active"></i> <p class="rwd active">Orders</p></a></span>
					<span class=""><a href="user"><i class="fa fa-image"></i> <p class="rwd">Gallery</p></a></span>
					<span class="" ng-controller="messages" ng-click="read($event)"><a href="http://mail.google.com" target="_blank"><i class="fa fa-envelope"></i> <p class="rwd">Message</p> <kbd ng-show="{{ msg }} >= 1" class="kbd">{{ msg }}</kbd></a></span>
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

			<div class="cover2 animated fadeIn"> 
			</div>

		        <div class="category animated fadeIn"> 
				<button class="active">My Orders</button> 
                        </div>

			<div class="prod-content animated slideInLeft" ng-controller="mycart">
				 
				<div class="ordersummary"  ng-controller="orders"  ng-show="ords.length <= 0"> 
					<center>No Orders Yet !</center>
				</div>
				<div  ng-controller="orders" ng-hide="ords.length <= 0">
					<div class="ordersummary" ng-repeat=" x in ords" > 
						<div class="ordertrucking">
							<table>
								<tr> 
									<th>Order Id</th>
									<th>Date</th> 
									<th>Total</th>
									<th>Action</th>
								</tr>
								<tr> 
									<td>{{ x.order_id }}</td>
									<td>{{ x.date }}</td> 
									<td>{{ x.total }}</td>
									<td><button alt="{{ x.order_id }}" ng-click="cancel($event)">Cancel</button><a href="summary.php?id={{ x.order_id }}&total={{ x.total }}&date={{ x.date }}" target="_blank"><button>View Orders</button></a></td>
								</tr>
							</table>
							<br>
							<div class="box active" ng-bind="x in ords" ng-show="{{ x.status }} <= 1 ">
								<i class="fa fa-spinner fa-pulse active"></i><br> 
								<p class="active">Proccessing</p>
							</div>
							<div class="box active" ng-bind="x in ords" ng-show="{{ x.status }} >= 2 ">
								<i class="fa fa-spinner active"></i><br> 
								<p class="active">Proccessing</p>
							</div>
							<div class="box" ng-bind="x in ords" ng-show="{{ x.status }} == 1 ">
								<i class="fa fa-automobile"></i><br>
								<p>Delivering</p>
							</div>
							<div class="box" ng-bind="x in ords" ng-show="{{ x.status }} >= 2 ">
								<i class="fa fa-automobile active2"></i><br>
								<p class="active2">Delivering</p>
							</div>
							<div class="box" ng-bind="x in ords" ng-show="{{ x.status }} <=2 ">
								<i class="fa fa-rocket"></i><br>
								<p>Success</p>
							</div> 
							<div class="box" ng-bind="x in ords" ng-show="{{ x.status }} == 3 ">
								<i class="fa fa-rocket active3"></i><br>
								<p class="active3">Success</p>
							</div> 
						</div>
					</div> 
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



	<div class="summary" id="summary"> 
		<center>An error occured !</center>
	</div>
 