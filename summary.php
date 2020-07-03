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
					<span class=""><a href="home"><i class="fa fa-home"></i> <p class="rwd">Home</p></a></span>
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
				<button class="active">Meus Pedidos</button> 
                        </div>

			<div class="prod-content animated slideInLeft" ng-controller="mycart"> 
				<div>
					<div class="ordersummary"> 
						<div class="ordertrucking">
							<table>
								<tr> 
									<th>Número Pedido</th>
									<th>Data</th> 
									<th>Total</th> 
									<th>Processamento</th> 
								</tr>
								<tr> 
									<td><?php echo $id = $_GET['id']; ?></td>
									<td><?php echo $date = $_GET['date'];?></td> 
									<td><?php echo $total = $_GET['total'];?></td>
									<td><a href="orders"><button>Vizualizar Processo</button></a></td>
								</tr>
							</table>
							<br>
							<?php
							include 'php/dbconn.php';
							$sql ="SELECT cart.id , cart.prod_id, cart.qty, products.name, products.price, products.description, products.image from cart INNER JOIN products on products.id=cart.prod_id where cart.cust_email='$email' and cart.status='1' and cart.order_id='$id'"; 
								$result = mysqli_query($conn,$sql);  

									echo "<table>";

										while($rs = mysqli_fetch_array($result)) { 
										    $id = $rs["id"]; 
										    $prod_id = $rs["prod_id"]; 
										    $name = $rs["name"]; 
										    $qty = $rs["qty"]; 
										    $description = $rs["description"]; 
										    $price = $rs["price"];  
										    $image = $rs["image"]; 

										    	echo "<tr>
															<td><img src='admin/img/uploads/$image'><br></td>
															<td>$name</td>
															<td class='desc'>$description</td>
															<td></td>
															<td>R$ $price</td>
															<td>$qty</td> 
													  </tr>";
										} 
									echo "</table>";
							?>
							 
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
 