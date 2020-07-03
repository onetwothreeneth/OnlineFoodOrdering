<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
::placeholder {
  color: orange;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: orange;
}

::-ms-input-placeholder { /* Microsoft Edge */
 color: orange;
}
</style>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/default.js"></script> 
<script type="text/javascript" src="js/angular.js"></script> 
<script type="text/javascript" src="js/a-model1.js"></script> 
<script type="text/javascript" src="js/client.js"></script> 
<script type="text/javascript" src="js/formajax.js"></script>  
</head>
<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=ISO-8859-1");

include "dbconn.php";

$sql ="SELECT * FROM products where status='available'"; 
$result = mysqli_query($conn,$sql);  
	while($row = mysqli_fetch_array($result)){
		$id = $row['id'];
		$name = $row['name'];
		$category = $row['category'];
		$description = $row['description'];
		$price = $row['price'];
		$image = $row['image'];
		$status = $row['status']; 
	    
	          echo "    <form action='addtocart.php' method='POST' >
			            <div class='item' id='$category'>
						<input type='text' name='prodid' value='$id' />
						<span class='a'>.
							<span class='b'>R$$price</span>
						</span>
						<img src='admin/img/uploads/$image'>
						<span class='overlay animated bounce'>
							$description
							<center>  
								<input type='number' name='qty' placeholder='Quant' value='' id='qty' focus><button id='addtocart' type= 'submit' name ='submit'  alt='$id'>Pedido</button> 
							</center>
						</span>
						<p>$name</p>
						</form>
						<!--<span>
							<i class='fa fa-star'></i> 
							<i class='fa fa-star'></i> 
							<i class='fa fa-star-o'></i>
							<i class='fa fa-star-o'></i> 
							<i class='fa fa-star-o'></i>
						</span>-->
						
					</div>
					</form>";
	} 
	

?> 
 