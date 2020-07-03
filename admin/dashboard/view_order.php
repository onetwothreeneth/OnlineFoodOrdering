<!DOCTYPE html>
<html>
<head>	
	<title>Vizualizar</title>
	
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
$sql ="SELECT cart.*, products.name,products.price,products.description,products.image from cart INNER JOIN products on products.id=cart.prod_id INNER JOIN cart_orders on cart_orders.order_id=cart.order_id where cart_orders.id='" . $id . "' and cart.status='1'"; 
$result = mysqli_query($conn,$sql); 									

										while($rs = mysqli_fetch_array($result)) { 
										    $id = $rs["id"]; 
										    $prod_id = $rs["prod_id"]; 
										    $name = $rs["name"]; 
										    $qty = $rs["qty"]; 
										    $description = $rs["description"]; 
										    $price = $rs["price"]; 
                                            $caminho = "http://localhost/OnlineFoodOrdering-master/admin/img/uploads/";											
										    $image = $caminho . $rs["image"]; 
											
										    	echo " <div class='item animated fadeInDowns'>
												
												<h3 class='grey lighter pull-left position-relative'>
													<i class='fas fa-shopping-cart'></i>
													Itens Pedidos
													<div class='img' ><img src='$image' alt='' width='100' height='100'/></div>
												</h3>
                                                	

													<br/><br/><br/>
													
			
		
													<label>Nome:</label>
			<span class='blue'>$name</span>
				<br />
			                                        <label>Ingredientes:</label>
			<span class='blue'>$description</span>
				<br />
			<label>Valor:</label>
			<span class='blue'>$price</span>
				<br />
			
			                                        <span class='label label-danger'>Quant:</span>
			<span class='blue'>$qty</span>
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
