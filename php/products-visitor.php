
<script type="text/javascript" src="js/default.js"></script> 

<script type="text/javascript" src="js/a-model1.js"></script> 
<script type="text/javascript" src="js/client.js"></script> 
<script type="text/javascript" src="js/formajax.js"></script>  
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
	    
	          echo "<div class='item' id='$category'>
						<span class='a'>.
							<span class='b'>R$$price</span>
						</span>
						<img src='admin/img/uploads/$image'>
						
						<p>$name</p>
					
					</div>";
	} 
?> 