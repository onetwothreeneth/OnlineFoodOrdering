<!DOCTYPE html>
<html>
<head>	
	<title>Entrega</title>
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <style>
.center {
  text-align: center;
  font-size: 14px;
}
.img {
  text-align: center;
  max-width: 200px; 
  
}
</style>

</head>

<body>
	
<?php
include 'dbconn.php';
$id = $_GET['id'];							
$sql ="SELECT DISTINCT cart.order_id,users.name,users.email,users.contact,users.address from cart INNER JOIN users on users.email=cart.cust_email INNER JOIN cart_orders on cart_orders.order_id=cart.order_id where cart_orders.id='" . $id . "' and cart.status='1'"; 
$result = mysqli_query($conn,$sql); 									

										while($rs = mysqli_fetch_array($result)) { 										                                           
                                            $order_id = $rs["order_id"]; 											
										    $name = $rs["name"]; 
										    $cust_email = $rs["email"]; 
										    $contact = $rs["contact"]; 
										    $address = $rs["address"]; 
                                            
											
										    	echo " <div class='item animated fadeInDowns'>
												
												<h3 class='grey lighter pull-left position-relative'>
													<i class='fa fa-motorcycle'></i>
													Dados da entrega												
												</h3>
                                                	

													<br/><br/><br/>
													
			
		
													<label>Nome:</label>
			<span class='blue'>$name</span>
				<br />
			                                        <label>Email:</label>
			<span class='blue'>$cust_email</span>
				<br />
			<label>Telefone:</label>
			<span class='blue'>$contact</span>
				<br />
			
			                                        <span class='label label-danger'>Endereço:</span>
			<span class='blue'>$address</span>
			
												</div>

												<div class='widget-toolbar hidden-480'>
													
												</div>
											</div>

											

																	


																	
																	

																	
																</ul>
															</div>
														</div><!-- /span -->
													</div><!-- row -->

													
												</div>
											</div>
										</div>
									</div>
									</div>
									";
										} 
										
									
?>

</body>
</html>
