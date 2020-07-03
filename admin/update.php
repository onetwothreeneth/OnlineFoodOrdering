<?php
// include database connection file
include_once("conexao.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$orderid=$_POST['order_id'];
	$custemail=$_POST['cust_email'];
	$date=$_POST['date'];
	$total=$_POST['total'];
	$status=$_POST['status'];
		
	// update user data
	$result = mysqli_query($conn, "UPDATE cart_orders SET order_id='$orderid',cust_email='$custemail',date='$date',total='$total',status='$staus' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: http://localhost/OnlineFoodOrdering-master/admin/dashboard/");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM cart_orders WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$orderid = $user_data['order_id'];
	$custemail = $user_data['cust_email'];
	$date = $user_data['date'];
	$total = $user_data['total'];
	$status = $user_data['status'];
}
?>
<!DOCTYPE html>
<html>
<head>	
	<title>Editar</title>
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<a href="http://localhost/OnlineFoodOrdering-master/admin/dashboard/">Página Inicial</a>
	<br/><br/>
	 <div class="container">
	<form name="update_user" method="post" action="admin/php/admin/category/update.php">
		<table border="0">	
			<tr> 
				<td>Order id</td>
				<td><input type="text" name="order_id" value=<?php echo $orderid;?>></td>
			</tr>
			<tr> 
				<td>Cust email</td>
				<td><input type="text" name="cust_email" value=<?php echo $custemail;?>></td>
			</tr>
			<tr> 
				<td>date</td>
				<td><input type="date" name="date" value=<?php echo $date;?>></td>
			</tr>
			<tr> 
				<td>Total</td>
				<td><input type="text" name="total" value=<?php echo $total;?>></td>
			</tr>
			<tr> 
				<td>Status</td>
				<td><input type="text" name="status" value=<?php echo $status;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
	</div>
</body>
</html>

